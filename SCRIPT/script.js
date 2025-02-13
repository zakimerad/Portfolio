document.addEventListener("DOMContentLoaded", () => {
    let menuIcon = document.querySelector("#menu-icon");
    let navbar = document.querySelector(".navbar");
    let sections = document.querySelectorAll("section");
    let navLinks = document.querySelectorAll("header nav a");
    let carteEtd = document.querySelector(".carteEtd");
    let toggleIcon = document.getElementById("toggle-icon");


    if (menuIcon && navbar) {
        menuIcon.onclick = () => {
            menuIcon.classList.toggle("bx-x");
            navbar.classList.toggle("active");
        };
    }
    window.onscroll = () => {
        sections.forEach(sec => {
            let top = window.scrollY;
            let offset = sec.offsetTop - 150;
            let height = sec.offsetHeight;
            let id = sec.getAttribute("id");

            if (top >= offset && top < offset + height) {
                navLinks.forEach(link => {
                    link.classList.remove("active");
                });

                let activeLink = document.querySelector(`header nav a[href*="${id}"]`);
                if (activeLink) {
                    activeLink.classList.add("active");
                }
            }
        });

        let header = document.querySelector("header");
        if (header) {
            header.classList.toggle("sticky", window.scrollY > 100);
        }
        if (menuIcon && navbar) {
            menuIcon.classList.remove("bx-x");
            navbar.classList.remove("active");
        }
    };
    if (carteEtd && toggleIcon) {
        carteEtd.classList.remove("show");

        toggleIcon.addEventListener("click", () => {
            carteEtd.classList.toggle("show");
        });
    }
});

