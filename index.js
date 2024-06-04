/* crear variables */
const button = document.getElementById("menu-toggle");
const menu = document.getElementById("nav-list");

/* agrega un escuchador de eventos ,para saber cuando se le da clic a nuestro boton */ 
 button.addEventListener("click",()=>{
    menu.classList.toggle("active");
 })