<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Price Based on Quantity</title>
    <style>
        .product {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .product div {
            margin-left: 10px;
        }
        .price {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Shopping Cart</h1>

    <!-- Product List -->
    <div class="product">
        <div>Product 1</div>
        <div>Price per item: $<span class="unitPrice">10.00</span></div>
        <div>
            Quantity:
            <select onchange="updatePrice(this, 10.00)">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div>Total Price: $<span class="totalPrice">10.00</span></div>
    </div>

    <div class="product">
        <div>Product 2</div>
        <div>Price per item: $<span class="unitPrice">20.00</span></div>
        <div>
            Quantity:
            <select onchange="updatePrice(this, 20.00)">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div>Total Price: $<span class="totalPrice">20.00</span></div>
    </div>

    <script>
        // Function to update the total price based on selected quantity
        function updatePrice(dropdown, unitPrice) {
            const quantity = parseInt(dropdown.value); // Get the selected quantity
            const totalPrice = (quantity * unitPrice).toFixed(2); // Calculate total price
            const totalPriceElement = dropdown.closest('.product').querySelector('.totalPrice'); // Get the total price element for the current product
            totalPriceElement.textContent = totalPrice; // Update the total price
        }
    </script>
</body>
</html>
