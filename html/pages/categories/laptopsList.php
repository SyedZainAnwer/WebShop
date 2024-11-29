<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphics Card Category</title>
    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="../../../css/mystyles.css">
    <link rel="stylesheet" href="../../../css/categories.css">

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

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
                        <a href="../sellerInfo/about.php">About Us</a>
                    </div>
                    <div class="nav-item">
                        <a href="../auth/login.php">Log In</a>
                    </div>
                    <div class="nav-item">
                        <a href="../auth/register.php">Register</a>
                    </div>

                    <div class="nav-item currency-dropdown">
                        <select id="currency">
                            <option value="USD">USD ($)</option>
                            <option value="EUR">EUR (€)</option>
                            <option value="GBP">GBP (£)</option>
                            <option value="PKR">PKR (Rs)</option>
                        </select>
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


    <div class="product-section">
        <h2>Laptops</h2>

        <div class="product-list">
            <!-- 1st Product -->

            <div class="product-item">
                <a href="../products/laptop/acer_301.php">
                    <div class="product-content">
                        <img src="../../../assets/images/laptops/acer_nitro5.jpg" alt="acer_nitro5" width="200px">
                        <h4>Acer Nitro 5</h4>
                        <p class="product-price">$1500</p>
                        <p class="taxed-price"><span>With Tax: </span></p>
                    </div>
                </a>
                    <div class="add-btn-area">
                        <select class="quantity-dropdown" aria-label="Select quantity">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <button type="button" class="btn add-btn collection">Add To Collections</button>
                        <button type="button" class="btn add-btn">Add To Cart</button>
                    </div>
                </div>

            <!-- 2nd Product -->
            <div class="product-item">
                <a href="../products/laptop/m3pro_302.php">
                    <div class="product-content">
                        <img src="../../../assets/images/laptops/m3_pro_16i.jpeg" alt="m3_pro_16i" width="200px">
                        <h4>M3 Macbook Pro</h4>
                        <p class="product-price">$2000</p>
                        <p class="taxed-price"><span>With Tax: </span></p>
                    </div>
                    <div class="add-btn-area">
                </a>
                        <select class="quantity-dropdown" aria-label="Select quantity">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <button type="button" class="btn add-btn collection">Add To Collections</button>
                        <button type="button" class="btn add-btn">Add To Cart</button>
                    </div>
                </div>

            <!-- Add more products as needed -->
        </div>
    </div>

    <div id="collection-section">
        <h3>Your Collection</h3>
        <div class="collection-list">
            <!-- Collection items will dynamically appear here -->
            <div class="collection-empty">
                <p>Your collection is currently empty.</p>
            </div>
        </div>
    </div>


    <div class="bottom-container">
        <a href="../index.php">
            <button type="button" class="home-button"> Back To Home</button>
        </a>
    </div>

    <footer id="footer">
        <p class="footer-text">© Copyright 2024 CyberStation</p>
    </footer>

    <script type="module" src="../../../js/currencies.js"></script>
    <script type="text/javascript" src="../../../js/darkmode.js"></script>
    <script type="text/javascript" src="../../../js/collectionList.js"></script>
    <script type="text/javascript" src="../../../js/priceCalculation.js"></script>
    <script type="text/javascript" src="../../../js/toggleNavbar.js"></script>
</body>

</html>