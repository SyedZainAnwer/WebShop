<!DOCTYPE html>
<html>

<!--Title-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About Us</title>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="../../../css/mystyles.css">
    <link rel="stylesheet" href="../../../css/about.css">

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>


<!--About Us-->

<body>

    <!--Nav Bar Container-->
    <section id="title">
        <div class="container-fluid">
            <!-- Nav Bar -->
            <nav class="navbar">
                <a class="navbar-brand" href="../index.php">CyberStation</a>
                <button class="navbar-toggler" aria-label="Toggle navigation" onclick="toggleNavbar()">
                    ☰
                </button>
                <div class="navbar-links">
                    <div class="nav-item">
                        <a href="#">About Us</a>
                    </div>
                    <div class="nav-item">
                        <a href="../auth/login.php">Log In</a>
                    </div>
                    <div class="nav-item">
                        <a href="../auth/register.php">Register</a>
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

    <div class=" about_us_main_container">
        <div class="left_about_bar">
            <h2>About Us</h2>
            <p>Welcome to CyberStation! We are three tech enthusiasts with a passion for building and optimizing PCs.
                As a small team just starting out, our mission is to provide high-quality PC parts at competitive prices
                with a personal touch.
                Whether you're a first-time builder or a seasoned pro, we’re here to help you find the perfect
                components for your next build.
                <span class="thanks_msg">Thanks for supporting our journey!</span>
            </p>

            <div class="contact_us_button">
                <a class="" href="mailto:abdullahzeeshan1193@hotmail.com">CONTACT US</a>
            </div>

            <!-- <a href="../index.html">
                    <button type="button" class="btn home-button"> Back To Home</button>
                </a> -->
        </div>

        <div class="right_about_bar">
            <img src="../../../assets/images/landingImage.webp" alt="">
        </div>

    </div>

    <script type="text/javascript" src="../../../js/darkmode.js"></script>
    <script type="text/javascript" src="../../../js/toggleNavbar.js"></script>

</body>

</html>