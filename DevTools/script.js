const btn = document.getElementById("btn");
const menu = document.getElementById("menubar");

btn.addEventListener("click", function() {
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
});
