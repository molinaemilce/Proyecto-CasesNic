const carrito = document.getElementById("carrito");
const closeCarrito = document.getElementById("closeCarrito");
const modalContainerCarrito = document.querySelector(".modal-container-compraclose");


carrito.addEventListener("click",toggleCarrito);
closeCarrito.addEventListener("click",toggleCarrito);

function toggleCarrito (){
    modalContainerCarrito.classList.toggle("modal-container-compra");
}
 