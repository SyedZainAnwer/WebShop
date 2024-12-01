<?php

$jsonData = file_get_contents('../../../products.json');

$data = json_decode($jsonData, true);

// Get category and product ID from the URL
// Get single array based on the array e.g gpus/laptops/keyboards
$category = isset($_GET['category']) ? $_GET['category'] : null; // category returns the single array
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

$product = null;

// check if these values exist and get the id of the product
if ($category && $id && isset($data[$category])) {
    foreach ($data[$category] as $item) {
        if ($item['id'] === $id) {
            $product = $item;
            break;
        }
    }
}


if (!$product) {
    echo "<h1>Product not found!</h1>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($product['name']); ?></title>
    <link rel="stylesheet" href="../../../css/mystyles.css">
    <link rel="stylesheet" href="../../../css/product.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
<body>
    <section id="title">
        <nav class="navbar">
            <a class="navbar-brand" href="../../index.php">CyberStation</a>
            <div class="navbar-links">
                <a href="../../sellerInfo/about.php">About Us</a>
                <a href="../../auth/login.php">Log In</a>
                <a href="../../auth/register.php">Register</a>
            </div>
        </nav>
    </section>    

    <div class="product-area">
        <div class="product-page-container">
            <div class="product-image-container">
                <img src="<?= htmlspecialchars($product['imagePath']); ?>" 
                     alt="<?= htmlspecialchars($product['name']); ?>" 
                     class="product-image">
            </div>
    
            <div class="product-details">
                <h3 class="product-title"><?= htmlspecialchars($product['name']); ?></h3>
                <p class="product-info"><strong>Price:</strong> $<?= htmlspecialchars($product['price']); ?></p>
                <?php foreach ($product['description'] as $key => $value): ?>
                    <p class="product-info"><strong><?= ucfirst($key); ?>:</strong> <?= htmlspecialchars($value); ?></p>
                <?php endforeach; ?>
                <p class="product-info"><strong>Product ID:</strong> <?= htmlspecialchars($product['id']); ?></p>
    
                <div class="product-actions">
                    <button class="product-button">Add to cart</button>
                    <a href="../../index.php"><button class="back-button">Back to home page</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="../../../js/darkmode.js"></script>
    <script src="../../../js/toggleNavbar.js"></script>
</body>
</html>
