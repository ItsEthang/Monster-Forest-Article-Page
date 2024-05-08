let arrow = document.querySelector("#arrow");
const hoverNav = document.querySelector(".hover-nav");
const hoverCon = document.querySelector(".hover-content");
let width = hoverCon.offsetWidth;

function enter(e) {
  hoverNav.style.left = "0";
}

function leave(e) {
  hoverNav.style.left = "-21rem";
}

function hover(element, enter, leave) {
  element.addEventListener("pointerenter", enter);
  element.addEventListener("pointerleave", leave);
}

hover(hoverNav, enter, leave);
