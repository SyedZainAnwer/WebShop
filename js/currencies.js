import {getTotalPrice} from "./priceCalculation.js";

const currencyRates = {
    USD: 1,
    EUR: 0.91,
    GBP: 0.77,
    PKR: 277.62
};

function updatedPrice(selectedCurrency) {
    const conversionRate = currencyRates[selectedCurrency];

    document.querySelectorAll(".product-item").forEach((product) => {
        const actualPrice = product.querySelector(".product-price");
        const taxedPrice = product.querySelector(".taxed-price");

        const basePrice = parseFloat(actualPrice.dataset.basePrice);

        const convertedPrice = (basePrice * conversionRate).toFixed(2);
        const convertedTaxedPrice = (getTotalPrice(basePrice) * conversionRate).toFixed(2);

        actualPrice.textContent = `${selectedCurrency} ${convertedPrice}`;
        taxedPrice.textContent = `<span> With Tax: </span> ${selectedCurrency} ${convertedTaxedPrice}`;
    });
}

document.getElementById("currency").addEventListener("change", (e) => {
    const selectedCurrency = e.target.value;
    updatedPrice(selectedCurrency);
});

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".product-price").forEach((priceElement) => {
        const basePrice = parseFloat(priceElement.textContent.replace(/[^0-9.]/g, ""));
        priceElement.dataset.basePrice = basePrice;
    });

    const currencyDropdown = document.getElementById("currency");
    updatedPrice(currencyDropdown.value);
});