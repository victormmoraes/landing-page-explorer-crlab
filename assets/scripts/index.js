const menuComponent= document.getElementById("sidenav");
const bodyElement = document.body;

function openSidenav() {
  bodyElement.classList.toggle('menuIsOpen');
  menuComponent.classList.toggle('menuIsOpen');
}

function closeSidenav() {
  menuComponent.classList.toggle('menuIsOpen');
  bodyElement.classList.toggle('menuIsOpen');
}