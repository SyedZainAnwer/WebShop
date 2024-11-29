import { getTotalPrice } from "./priceCalculation.js";

const currencyRates = {
    USD: 1,
    EUR: 0.91,
    GBP: 0.77,
    PKR: 277.62
};

const updatePrices = (selectedCurrency) => {
    const conversionRate = currencyRates[selectedCurrency];

    document.querySelectorAll(".product-item").forEach((product) => {
        const actualPrice = product.querySelector(".product-price");
        const taxedPrice = product.querySelector(".taxed-price");
        const quantityDropdown = product.querySelector(".quantity-dropdown");

        const basePrice = parseFloat(actualPrice.dataset.basePrice);
        const selectedQuantity = parseInt(quantityDropdown.value);

        const convertedPrice = (basePrice * conversionRate).toFixed(2);
        const convertedTaxedPrice = (getTotalPrice(basePrice) * conversionRate).toFixed(2);

        const totalConvertedPrice = (convertedPrice * selectedQuantity).toFixed(2);
        const totalConvertedTaxedPrice = (convertedTaxedPrice * selectedQuantity).toFixed(2);

        actualPrice.textContent = `${selectedCurrency} ${totalConvertedPrice}`;
        taxedPrice.textContent = `With Tax: ${selectedCurrency} ${totalConvertedTaxedPrice}`;
    });
};

document.getElementById("currency").addEventListener("change", (e) => {
    const selectedCurrency = e.target.value;
    updatePrices(selectedCurrency);
});

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".product-price").forEach((priceElement) => {
        const basePrice = parseFloat(priceElement.textContent.replace(/[^0-9.]/g, ""));
        priceElement.dataset.basePrice = basePrice;
    });

    const currencyDropdown = document.getElementById("currency");
    updatePrices(currencyDropdown.value);

    document.querySelectorAll(".quantity-dropdown").forEach((dropdown) => {
        dropdown.addEventListener("change", () => {
            const selectedCurrency = document.getElementById("currency").value;
            updatePrices(selectedCurrency);
        });
    });
});