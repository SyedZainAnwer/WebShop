<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $json_file = "../../../users.json";
    $json_data = file_get_contents($json_file);
    $users = json_decode($json_data, true);

    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    
    $new_user = [
        'id' => count($users) + 1,
        'username' => $username,
        'password' => $hashed_password,
        'role' => 'DEFAULT'
    ];

    $users[] = $new_user;
    file_put_contents($json_file, json_encode($users, JSON_PRETTY_PRINT));

    header("Location: ./login.php");
    exit();
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
    <!-- <link rel="stylesheet" href="../../../users.json"> -->


    <!-- Mont Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="auth_main_container">
        <h3>Sign Up</h3>
        <div class="auth_area"> 
            <form id="registrationForm" action="./register.php" method="POST">
                <div class="input_area">
                    <label for="username">Username:</label>
                    <input type="text" id="username" placeholder="Enter your username" name="username" class="input_field" required />
                    <small class="error" id="usernameError"></small>
                </div>
                <div class="input_area">
                    <label for="password">Password:</label>
                    <input type="password" id="password" placeholder="Create your password" name="password" class="input_field" required />
                    <small class="error" id="passwordError"></small>
                </div>
                <div class="input_area">
                    <label for="confirmPassword">Confirm Password:</label>
                    <input type="password" id="confirmPassword" placeholder="Confirm your password" name="password" class="input_field" required />
                    <small class="error" id="confirmPasswordError"></small>
                </div>

                <div class="btn_area">
                    <button type="submit" class="btn">Register</button>
                </div>
            </form>

            <div class="account_prompt">
                <p>Already have an account? <a href="./login.php" class="signup-link">Sign In</a></p>
            </div>

            <div class="shop_prompt">
                <p>Not ready to sign up? Feel free to <a href="../index.php" class="shop-link">explore our shop</a> instead!</p>
            </div>
        </div>
    </div>

    <script src="../../../js/authvalidation.js"></script>
    <script type="text/javascript" src="../../../js/darkmode.js"></script>
</body>

</html>
