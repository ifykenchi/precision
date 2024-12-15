const hamburger = document.getElementById("toggle-btn");

hamburger.addEventListener("click", function () {
    document.querySelector("#sidebar").classList.toggle("expand");
});

document.addEventListener("DOMContentLoaded", function () {
    const selectElement = document.getElementById("discount");
    const form = document.getElementById("discountform");

    // Hide the form initially
    form.style.display = "none";

    selectElement.addEventListener("change", function () {
        // Show the form if the user selects "Yes"
        if (selectElement.value === "yes") {
            form.style.display = "flex";
        } else {
            form.style.display = "none";
        }
    });
});

document.getElementById("fileUpload").addEventListener("change", function () {
    const fileName = this.files[0]?.name || "No file selected";
    document.getElementById("fileName").textContent = fileName;
});
