document.addEventListener("DOMContentLoaded", function () {
  const cartButton = document.querySelectorAll(".card .details .group button");
  const cart = document.querySelector(".sidebar ul");
  const totalDisplay = document.querySelector(".sidebar h3 span");
  let total = 0;

  cartButton.forEach((button) => {
    button.addEventListener("click", function () {
      const price = parseFloat(this.dataset.price);
      total += price;
      totalDisplay.textContent = total.toFixed(2);

      const listItem = document.createElement("li");
      const removeButton = document.createElement("button");
      removeButton.textContent = "Eliminar";
      removeButton.addEventListener("click", function () {
        total -= price;
        totalDisplay.textContent = total.toFixed(2);
        this.parentElement.remove();
      });

      listItem.textContent = this.parentElement.parentElement.querySelector("h3").textContent + " - $" + price.toFixed(2) + " ";
      listItem.appendChild(removeButton);
      cart.appendChild(listItem);
    });
  });

  const emptyCartButton = document.querySelector(".empty-cart");
  emptyCartButton.addEventListener("click", function () {
    total = 0;
    totalDisplay.textContent = total.toFixed(2);
    cart.innerHTML = "";
  });

  const checkoutButton = document.querySelector(".checkout");
  checkoutButton.addEventListener("click", function () {
    // código para proceder al pago
    alert("Procesando pago por $" + total.toFixed(2));
  });
});