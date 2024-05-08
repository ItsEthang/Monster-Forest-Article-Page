const logout = document.querySelector(".logout");
const user = document.querySelector("#user-icon");

function enter(e) {
    logout.style.right = "0.5rem";
  }
  
function leave(e) {
    logout.style.right = "-8rem";
}

function hover(element, enter, leave) {
    element.addEventListener("pointerenter", enter);
    element.addEventListener("pointerleave", leave);
}

hover(user, enter, leave);
hover(logout, enter, leave);
