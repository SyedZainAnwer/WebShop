<?php

$json_data = file_get_contents("../../products.json");

$data = json_decode($json_data, true);

$gpus = $data['gpus'];
$keyboards = $data['keyboards'];
$laptops = $data['laptops'];

foreach($gpus as $gpu) {
    $product_id = $gpu['id'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ZAA Labs</title>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="../../css/mystyles.css">
    <link rel="stylesheet" href="../../css/index.css">

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome (For Icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

<body>
    <!--Nav Bar Container-->
    <section id="title">
        <div class="container-fluid">
            <!-- Nav Bar -->
            <nav class="navbar">
                <a class="navbar-brand" href="index.php">CyberStation</a>
                <button class="navbar-toggler" aria-label="Toggle navigation" onclick="toggleNavbar()">
                    ☰
                </button>
                <div class="navbar-links">
                    <div class="nav-item">
                        <a href="../pages/sellerInfo/about.php">About Us</a>
                    </div>
                    <div class="nav-item">
                        <a href="../pages/auth/login.php">Log In</a>
                    </div>
                    <div class="nav-item">
                        <a href="../pages/auth/register.php">Register</a>
                    </div>
                    <div class="nav-item">
                        <button id="theme-switch">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                                fill="undefined">
                                <path
                                    d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                                fill="undefined">
                                <path
                                    d="M480-280q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </section>    

    <!-- Info Section-->
    <div class="main_container info_main_container">
        <div class="left_info_bar">
            <h2>Ready to Build Your Dream PC?</h2>
            <p>Welcome to <span class="info_msg">CyberStation! </span> Whether you're a first-time builder or a pro,
                we provide premium PC components at competitive prices. Explore our selection of graphics cards,
                processors, motherboards, and more to bring your dream PC to life.</p>

            <div class="consult_us_button">
                <a class="" href="mailto:abdullahzeeshan1193@hotmail.com">CONSULT US</a>
            </div>

        </div>

        <div class="right_info_bar">
            <img src="../../assets/images/info-pic.jpg" alt="">
        </div>

    </div>


    <!-- Categories Section -->
    <section id="categories">
        <!-- Heading-->
        <div class="heading">
            <h3>Explore The Parts.</h3>
        </div>

        <div class="row text-center">
            <!-- Graphics Cards -->
            <div class="categories-item gpus">
                <a href="./categories/category.php?category=gpus" class="categories-link">
                    <i class="fa-solid fa-fax categories-icon fa-4x"></i>
                    <h3>Graphics Cards</h3>
                </a>
            </div>

            <!-- Laptops -->
            <div class="categories-item laptops">
                <a href="./categories/category.php?category=laptops" class="categories-link">
                    <i class="fa-solid fa-laptop categories-icon fa-4x"></i>
                    <h3>Laptops</h3>
                </a>
            </div>

            <!-- Keyboards -->
            <div class="categories-item keyboards">
                <a href="./categories/category.php?category=keyboards" class="categories-link">
                    <i class="fa-regular fa-keyboard categories-icon fa-4x"></i>
                    <h3>Keyboards</h3>
                </a>
            </div>
        </div>
    </section>


    <footer id="footer">
        <p class="footer-text">© Copyright 2024 CyberStation</p>
    </footer>

    <script type="text/javascript" src="../../js/darkmode.js"></script>
    <script type="text/javascript" src="../../js/toggleNavbar.js"></script>

</body>

</html>