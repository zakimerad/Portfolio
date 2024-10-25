let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

// Ajouter l'événement de clic sur l'icône du menu
menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
};

let sections = document.querySelectorAll("section");
let navLinks = document.querySelectorAll("header nav a");

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navLinks.forEach(link => {
                link.classList.remove('active');
            });

            let activeLink = document.querySelector('header nav a[href*="' + id + '"]');
            if (activeLink) {
                activeLink.classList.add('active');
            }
        }
    });

    // Sticky navbar
    let header = document.querySelector('header');

    // Ajouter ou retirer la classe sticky en fonction du défilement
    header.classList.toggle('sticky', window.scrollY > 100);
};

// Retirer la classe 'bx-x' et 'active' lors du défilement
window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navLinks.forEach(link => {
                link.classList.remove('active');
            });

            let activeLink = document.querySelector('header nav a[href*="' + id + '"]');
            if (activeLink) {
                activeLink.classList.add('active');
            }
        }
    });

    // Sticky navbar
    let header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 100);
    
    // Corrigé : Utiliser 'remove' au lieu de 'removes'
    menuIcon.classList.remove('bx-x'); // Optionnel: Retire la classe si tu ne veux pas qu'elle reste
    navbar.classList.remove('active'); // Corrigé: 'remove' au lieu de 'removes'
};
