<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $json_file = "../../../users.json";
    $json_data = file_get_contents($json_file);
    $users = json_decode($json_data, true);

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $user_found = false;
    $error = "Invalid username or password.";

    foreach ($users as $user) {
        if ($user['username'] === $username) { // Check username
            $user_found = true;
            if (password_verify($password, $user['password'])) { // Check password
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];
                session_write_close();
                header("Location: ../index.php");
                exit();
            } else {
                $error = "Invalid username or password.";
                break;
            }
        }
    }

    if (!$user_found) {
        $error = "Invalid username or password.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZAA Login</title>
    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="../../../css/mystyles.css">
    <link rel="stylesheet" href="../../../css/auth.css">

    <!-- Mont Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" cro
    ssorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="auth_main_container">
        <h3>Sign In</h3>
        <div class="auth_area">
            <form id="loginForm" method="POST" action="./login.php">
                <div class="input_area">
                    <label for="username">Username:</label>
                    <input type="text" id="username" placeholder="Enter your username" name="username"
                        class="input_field" required />
                    <small id="usernameError" class="error"></small>

                </div>
                <div class="input_area">
                    <label for="password">Password:</label>
                    <input type="password" id="password" placeholder="Enter your password" name="password"
                        class="input_field" required />
                    <small id="passwordError" class="error"></small>

                </div>

                <div class="btn_area">
                    <button type="submit" class="btn">Login</button>
                </div>
            </form>

            <div class="account_prompt">
                <p>Don't have an account? <a href="./register.php" class="signup-link">Sign Up</a></p>
            </div>

            <div class="shop_prompt">
                <p>Not ready to sign in? Feel free to <a href="../index.php" class="shop-link">explore our shop</a>
                    instead!</p>
            </div>
        </div>
    </div>

    <script src="../../../js/authvalidation.js"></script>
    <script type="text/javascript" src="../../../js/darkmode.js"></script>
</body>

</html>