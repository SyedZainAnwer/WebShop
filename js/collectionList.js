const collectionSection = document.getElementById("collection-section");
const collectionList = document.querySelector(".collection-list");

document.querySelectorAll(".collection").forEach((btn) => {
  btn.addEventListener("click", (e) => {
    const productItem = e.target.closest(".product-item");
    const productName = productItem.querySelector("h4").textContent;
    const productImage = productItem.querySelector("img").src;
    const quantity = productItem.querySelector(".quantity-dropdown").value;

    const emptyMessage = document.querySelector(".collection-empty");
    if (emptyMessage) emptyMessage.remove();

    const collectionItem = document.createElement("div");
    collectionItem.className = "collection-item";
    collectionItem.innerHTML = `
        <div class="collection-item-details">
                <img src="${productImage}" alt="${productName}">
                <div>
                    <h4>${productName}</h4>
                    <p class="product-quantity">Quantity: ${quantity}</p>
                </div>
            </div>
            <button class="remove-btn">Remove</button>
        `;

    collectionItem.querySelector(".remove-btn").addEventListener('click', () => {
        collectionItem.remove();

        if (collectionItem.children.length === 0) {
            collectionItem.innerHTML = `<div class="collection-empty"><p>Your collection is currently empty.</p></div>`;
        }
    });

    collectionList.appendChild(collectionItem);
  });
});
