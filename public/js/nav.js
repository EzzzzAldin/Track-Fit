document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");
    const logo = document.getElementById("navbar-logo");

    console.log(logo);

    function isOverWhiteSection() {
        const whiteSections = document.querySelectorAll(".section-white");
        const navbarHeight = navbar.offsetHeight;

        for (const section of whiteSections) {
            const rect = section.getBoundingClientRect();
            if (rect.top <= navbarHeight && rect.bottom >= navbarHeight) {
                return true;
            }
        }
        return false;
    }

    function updateNavbar() {
        const isWhite = isOverWhiteSection();

        navbar.classList.toggle("navbar-light", isWhite);
        navbar.classList.toggle("navbar-custom", !isWhite);

        logo.src = isWhite ? "../imgs/logo (1).png" : "../imgs/logo.png";
    }

    window.addEventListener("scroll", updateNavbar);
    window.addEventListener("resize", updateNavbar);
    updateNavbar();
});
