document.addEventListener("DOMContentLoaded", () => {
    let cartCount  = 0;
    console.log(document.querySelectorAll(".addToCart-btn"));
    document.querySelectorAll(".addToCart-btn").forEach(button => {
        button.addEventListener("click", () => {
            cartCount += 1;
            console.log(document.getElementById("item-count"));
            document.getElementById("item-count").textContent = cartCount;
        });
    });
});
