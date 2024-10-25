<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css">
</head>
<body>
    <!--header-->
    <header class="header">
        <a href="#" class="logo">Portfolio</a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <nav class="navbar">
            <ul>
                <li><a href="#home" class="active">Accueil</a></li>
                <li><a href="#about">A propos</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#Certaficats">Certaficats</a></li>
                <li><a href="#Projets">Projets</a></li>
                <li><a href="#Contact">Contact</a></li>
            </ul>
        </nav>
    </header> 
    
    <!--home section-->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Salut, C'est Moi!</h3>
            <h1>Zakaria Merad</h1>
            <h3>Et je suis un <span>Développeur web</span></h3>
            <p>Bienvenue sur mon portfolio ! Passionné par la création de solutions web innovantes, je me spécialise dans le développement d'applications interactives et responsives. Mon objectif est de transformer des idées en réalité en offrant des expériences utilisateur fluides et agréables. N'hésitez pas à explorer mes projets et à me contacter si vous souhaitez collaborer.</p>
            <div class="social-media">
                <a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/zaki_mer10/"><i class='bx bxl-instagram-alt'></i></a>
                <a href="https://www.linkedin.com/in/youcef-zakaria-merad-570683330/"><i class='bx bxl-linkedin'></i></a>
                <a href="https://github.com/zakimerad"><i class='bx bxl-github'></i></a>
            </div>
            <a href="#" class="btn">Telecharger le CV</a>
        </div>
        <div class="home-img">
            <img src="images/zaki3.jpg" alt="ma-photo">
        </div>
    </section>
    
    <!--About section-->
    <section class="about" id="about">
        <div class="container">
            <div class="about-img">
                <img src="images/zaki3.jpg" alt="ma-photo" id="photo3">
            </div>
            <div class="about-content">
                <h2 class="heading">A propos <span>de Moi</span></h2>
                <h3>Développeur web</h3>
                <p>Bienvenue sur mon portfolio ! Passionné par la création de solutions web innovantes, je me spécialise dans le développement d'applications interactives et responsives, en utilisant des technologies telles que HTML, CSS, JavaScript, PHP et MySQL.</p>
                
                <div class="afficher">
                    <i class='bx bxs-plus-circle' id="toggle-icon"></i>
                </div>
            </div>
        </div>
        <div class="carteEtd">
            <h3>Nom: <span>MERAD</span></h3>
            <h3>Prénom: <span>YOUCEF ZAKARIA</span></h3>
            <h3>Date de naissance: <span>2005-01-25</span></h3>
            <h3>Université: <span>Amar Télidji </span></h3>
            <h3>Spécialité: <span>Informatique</span></h3>
            <h3>Année en cours: <span>L3</span></h3>
        </div>
    </section>

    <!--Services section-->
    <section class="services" id="services">
        <div class="plus">
            <h2 class="heading">Mes <span>Services</span></h2>
        </div>
        <div class="services-container">
            <div class="services-box">
                <i class='bx bx-code'></i>
                <h3>Développeur web</h3>
                <p>Je me spécialise dans le développement d'applications interactives et responsives, en utilisant des technologies telles que HTML, CSS, JavaScript, PHP et MySQL.</p>
                <a href="#" class="btn">En savoir plus</a>
            </div>
            <div class="services-box">
                <i class='bx bxl-java'></i>
                <h3>Applications Desktop</h3>
                <p>Je développe des solutions robustes et intuitives avec Java, offrant une expérience utilisateur fluide et moderne.</p>
                <a href="#" class="btn">En savoir plus</a>
            </div>
        </div>
    </section>

    <!--Certaficat section-->
    <section class="Certaficats" id="Certaficats">
        <div class="services-container">
            <div class="services-box" id="Certaficats-container">
                <img src="images/UC-b2826585-42d2-4362-8e97-7c0c667a3f1e.jpg" alt="">
                <a href="#" class="btn">En savoir plus</a>
            </div>
            <div class="services-box" id="Certaficats-container">
                <img src="images/UC-ce7257dd-f4ac-4913-b71b-beac4508ea26.jpg" alt="">
                <a href="#" class="btn">En savoir plus</a>
            </div>
            <div class="services-box" id="Certaficats-container">
                <img src="images/zebda.jpg" alt="">
                <a href="#" class="btn">En savoir plus</a>
            </div>
        </div>
    </section>

    <!--Projets section-->
    <section class="Projets" id="Projets">
        <div class="plus">
            <h2 class="heading">Mes <span>Projets</span></h2>
        </div>
        <div class="projet-container">
            <div class="projet-box">
                <img src="images/pngtree-computerized-seo-background-exploring-web-development-programming-code-and-app-development-image_13515246.png" alt="">
                <div class="projet-layer">
                    <h4>App Web</h4>
                    <p>Ce projet d'application de médias sociaux est mon premier projet back-end, et je suis fier de lui.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
            <div class="projet-box">
                <img src="images/flat-lay-workstation-with-copy-space-laptop.jpg" alt="">
                <div class="projet-layer">
                    <h4>App Web</h4>
                    <p>Ce projet d'application de médias sociaux est mon premier projet back-end, et je suis fier de lui.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
        </div>
    </section>

    <!--Contact Section-->
    <section class="Contact" id="Contact">
        <div class="plus">
            <h2 class="heading">Contactez <span>Moi</span></h2>
        </div>
        <div class="contact-container">
            <?php require_once 'form.php';?>
        </div>
    </section>
    <script>
            let carteEtd = document.querySelector(".carteEtd");
            let toggleIcon = document.getElementById("toggle-icon");
            carteEtd.classList.remove('show');
            toggleIcon.addEventListener('click', () => {
                if (!carteEtd.classList.contains('show')) {
                    carteEtd.classList.add('show'); 
                } else {
                    carteEtd.classList.remove('show');
                }
            });
        </script>
        <!--2eme script-->
        <script src="script.js">

        </script>

</body>
</html> 