const hamburger = document.getElementById("toggle-btn");

hamburger.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("expand");
});
