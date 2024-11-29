import { getTotalPrice } from "./priceCalculation.js";

const collectionSection = document.getElementById("collection-section");
const collectionList = document.querySelector(".collection-list");



document.querySelectorAll(".collection").forEach((btn) => {
    btn.addEventListener("click", (e) => {
        const productItem = e.target.closest(".product-item");
        const productName = productItem.querySelector("h4").textContent;
        const productImage = productItem.querySelector("img").src;
        const productPrice = productItem.querySelector(".product-price").textContent.trim();
        const numericProductPrice = parseFloat(productPrice.replace(/[^0-9.]/g, ""));
        const quantity = parseInt(productItem.querySelector(".quantity-dropdown").value)


        const totalPrice = (getTotalPrice(numericProductPrice) * quantity).toFixed(2);


        const emptyMessage = document.querySelector(".collection-empty");
        if (emptyMessage) emptyMessage.remove();

        const existingItem = Array.from(collectionList.children).find((child) => {
            return child.querySelector("h4")?.textContent === productName;
        });

        if (existingItem) {
            const quantityElement = existingItem.querySelector(".product-quantity");
            const priceElement = existingItem.querySelector(".product-price");

            const currentQuantity = parseInt(quantityElement.textContent.replace("Quantity: ", ""));
            quantityElement.textContent = `Quantity: ${currentQuantity + quantity}`;
            priceElement.textContent = `Price: ${totalPrice *(currentQuantity + quantity)}`;
        } else {
            // const productQuantity = parseInt(document.querySelector('.product-quantity').replace("Quantity: ", ""));
            const collectionItem = document.createElement("div");
            collectionItem.className = "collection-item";
            collectionItem.innerHTML = `
                <div class="collection-item-details">
                    <img src="${productImage}" alt="${productName}">
                    <div>
                        <h4>${productName}</h4>
                        <p class="product-quantity">Quantity: ${quantity}</p>
                        <p class="product-price"> Price: ${totalPrice}</p>
                    </div>
                </div>
                <button class="remove-btn">Remove</button>
            `;

            collectionItem.querySelector(".remove-btn").addEventListener("click", () => {
                collectionItem.remove();

                if (collectionList.children.length === 0) {
                    collectionSection.style.display = "none";
                    // const emptyMessage = document.createElement("div");
                    // emptyMessage.className = "collection-empty";
                    // emptyMessage.innerHTML = `<p>Your collection is currently empty.</p>`;
                    collectionList.appendChild(emptyMessage);
                } else {
                    collectionSection.style.display = "block";
                }
            });

            collectionList.appendChild(collectionItem);
        }

        toggleCollectionSection()
    });
});



function toggleCollectionSection() {
    if (collectionList.children.length === 0 || collectionList.querySelectorAll('.collection-item').length === 0) {
        collectionSection.style.display = "none";

        // Add the empty message back
        const emptyMessage = document.createElement("div");
        emptyMessage.className = "collection-empty";
        // emptyMessage.innerHTML = `<p>Your collection is currently empty.</p>`;
        // collectionList.appendChild(emptyMessage);
    } else {
        collectionSection.style.display = "block";
    }
}

toggleCollectionSection()