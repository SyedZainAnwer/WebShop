const getTotalPrice = (priceWOTax) => {
    const taxRate = 0.19;

    return priceWOTax * (1 + taxRate);
}

document.querySelectorAll(".product-item").forEach((productItem) => {
    const productPrice = productItem.querySelector(".product-price").textContent.trim();
    const numericProductPrice = parseFloat(productPrice.replace(/[^0-9.]/g, ""))
    const totalPrice = getTotalPrice(numericProductPrice).toFixed(2);

    const taxedPriceElement = productItem.querySelector(".taxed-price span");
    taxedPriceElement.textContent = `With Tax: $${totalPrice}`;
})
