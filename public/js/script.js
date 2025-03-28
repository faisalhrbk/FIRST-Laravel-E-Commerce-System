function toggleMenu() {
    document.querySelector(".nav-menu").classList.toggle("show");
}
document.addEventListener("DOMContentLoaded", function () {
    const navToggle = document.querySelector(".nav-toggle");
    const navMenu = document.querySelector(".nav-menu");

    navToggle.addEventListener("click", function () {
        navMenu.classList.toggle("active");
    });
});


