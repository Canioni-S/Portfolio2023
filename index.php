<?php
if (!empty($_POST)) {
    $to = 'stephan.canioni@outlook.fr';
    $subject = 'Email via Portfolio';
    $message = "<html>
                    <h2>Email reçu de la part de</h2><br>
                    <h3>" . $_POST['name'] . "</h3><br>
                    <p>Contenu du message :<br>" . $_POST['description'] . "</p>";
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=utf-8';
    $headers[] = 'From: ' . $_POST['email'];

    $retour = mail($to, $subject, $message, implode("\r\n", $headers));

    if ($retour)
        $message = "your email has been sent";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CanioniDev</title>

</head>

<body>
    <div id="top"></div>
    <!-- NAVBAR -->
    <nav id="navBar">
        <div id="brandContainer" class="flexAround">
            <a href="#top">
                <h1 id="brandName">CanioniDev</h1>
            </a>
            <a href="javascript:void(0);" class="navBarIconBurger" onclick="Burgerfunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </a>
        </div>
        <div id="linksContainer" class="navBarBurger">
            <a href="#presentationSectionAnchor" class="navLink flexCenter">
                <p class="textLink">présentation</p>
                <img src="../Assest/NavbarImg/presentationLinkImg.webp" alt="Photo de présentation, deux hommes se serrent la main" class="navLinkImg">
                <!-- <div class="navHoverEffect"></div> -->
            </a>
            <a href="#workSectionAnchor" class="navLink flexCenter" id="workLink">
                <p class="textLink">réalisation</p>
                <img src="../Assest/NavbarImg/workLinkImg.webp" alt="Photo mettant en scène un homme de dos travaillant dans le codage informatique sur un ordinateur" class="navLinkImg">
                <!-- <div class="navHoverEffect"></div> -->
            </a>
            <a href="#contactSection" class="navLink flexCenter" id="contactLink">
                <p class="textLink">contact</p>
                <img src="../Assest/NavbarImg/contactLinkImg.webp" alt="Photo d'un homme tennant un téléphone affichant un contact" class="navLinkImg">
                <!-- <div class="navHoverEffect"></div> -->
            </a>
            <a href="/Assest/Canioni-Stéphan-CV.pdf" class="navLink flexCenter" id="cvLink" download="Canioni-Stéphan-CV" onclick="return confirm('Confirm download Canioni-Stéphan-CV?');">
                <p class="textLink">télécharger cv</p>
                <img src="../Assest/NavbarImg/cvLinkImg.webp" alt="Photo d'un curriculum vitae en papier sur une table" class="navLinkImg">
                <!-- <div class="navHoverEffect"></div> -->
            </a>
        </div>
    </nav>

    <!-- HOME SECTION -->
    <section id="homeSection">
        <!-- ANIMATED LOGO BACKGROUND -->
        <div class="homeBackground">
            <div id="logoHtml" class="logoContainer">
                <img class="homeBackgroundImg" src="../Assest/LogoImg/LogoHtmlPic.webp" alt="Logo HTML">
            </div>
            <div id="logoCss" class="logoContainer">
                <img class="homeBackgroundImg" src="../Assest/LogoImg/LogoCssPic.png" alt="Logo CSS">
            </div>
            <div id="logoJs" class="logoContainer">
                <img class="homeBackgroundImg" src="../Assest/LogoImg/LogoJsPic.webp" alt="Logo Javascript">
            </div>
            <div id="logoPhp" class="logoContainer">
                <img class="homeBackgroundImg" src="../Assest/LogoImg/LogoPhpPic.png" alt="Logo PHP">
            </div>
            <div id="logoMySql" class="logoContainer">
                <img class="homeBackgroundImg" src="../Assest/LogoImg/LogoMySqlPic.webp" alt="Logo My SQL">
            </div>
            <div id="logoBootstrap" class="logoContainer">
                <img class="homeBackgroundImg" src="../Assest/LogoImg/LogoBootstrapPic.png" alt="Logo Bootstrap">
            </div>
            <div id="logoWordPress" class="logoContainer">
                <img class="homeBackgroundImg" src="../Assest/LogoImg/LogoWordPressPic.png" alt="Logo Wordpress">
            </div>
        </div>

        <!-- HOME FRONT -->
        <div id="homeFrontContainer" class="flexCenter">
            <div class="homeFrontText">
                <div id="lineOne">
                    <p>Bonjour, je suis</p>
                </div>
                <div id="lineTwo">
                    <p>Stéphan Canioni,</p>
                </div>
                <div id="lineThree">
                    <p>Développeur web & web mobile.</p>
                </div>
            </div>
            <div id="homeImgContainer">
                <img id="homeFrontImg" src="../Assest/HomeSectionImg/homeFrontImg.webp" alt="Image d'un ordinateur avec des icônes représentant differents langages informatiques">
            </div>
        </div>
        <div id="scrollIconContainer" class="flexCenter">
            <svg id="fingerScroll" version="1.0" xmlns="http://www.w3.org/2000/svg" width="50%" height="auto" viewBox="0 0 30.000000 34.000000" preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,34.000000) scale(0.100000,-0.100000)" fill="whitesmoke" stroke="none">
                    <path d="M30 293 c0 -46 -2 -52 -17 -46 -15 5 -14 1 4 -17 18 -20 24 -21 37 -10 17 14 22 35 6 25 -6 -4 -10 9 -10 32 0 21 -5 45 -10 53 -7 11 -10 0 -10 -37z" />
                    <path d="M109 316 c-17 -8 -25 -22 -27 -44 -2 -17 1 -32 6 -32 6 0 8 9 5 20 -7 26 13 50 42 50 25 0 40 -15 48 -45 4 -16 5 -15 6 6 2 42 -40 65 -80 45z" />
                    <path d="M123 292 c-6 -4 -12 -35 -15 -69 -2 -35 -7 -65 -10 -68 -3 -4 -15 -1 -27 7 -18 11 -23 10 -38 -5 -17 -17 -15 -21 53 -87 68 -66 74 -70 118 -70 36 0 52 6 71 25 22 21 25 33 25 90 0 54 -3 67 -17 71 -10 3 -25 9 -34 14 -9 5 -33 12 -53 15 -33 7 -36 10 -36 40 0 33 -17 49 -37 37z m28 -79 c1 -60 2 -64 10 -35 12 40 29 42 29 2 0 -16 5 -30 10 -30 6 0 10 9 10 20 0 11 7 20 15 20 9 0 15 -9 15 -22 1 -21 2 -22 14 -5 22 28 26 20 26 -45 0 -73 -5 -83 -44 -98 -46 -17 -78 -4 -141 60 -60 61 -67 84 -18 59 16 -7 31 -15 36 -17 4 -2 7 33 7 77 0 65 3 81 15 81 12 0 15 -15 16 -67z" />
                </g>
            </svg>
            <svg id="mouseScroll" version="1.0" xmlns="http://www.w3.org/2000/svg" width="50%" height="auto" viewBox="0 0 100.000000 100.000000" preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="whitesmoke" stroke="none">
                    <path d="M430 899 c-14 -5 -36 -20 -48 -32 -47 -44 -52 -66 -52 -240 0 -154 1 -166 23 -197 40 -59 71 -75 147 -75 76 0 107 16 148 75 21 31 22 43 22 200 0 157 -1 169 -22 200 -37 54 -71 73 -135 77 -32 1 -69 -2 -83 -8z m151 -42 c18 -12 39 -34 46 -47 17 -34 17 -326 0 -360 -34 -67 -141 -92 -208 -47 -54 36 -59 55 -59 227 0 104 4 163 13 180 20 40 74 70 127 70 32 0 58 -7 81 -23z" />
                    <path d="M484 777 c-3 -8 -4 -36 -2 -63 2 -36 7 -49 18 -49 20 0 22 116 3 122 -7 3 -16 -2 -19 -10z" />
                    <path d="M486 264 c-3 -9 -6 -41 -6 -72 l0 -55 -25 23 c-17 16 -29 20 -35 14 -7 -7 6 -25 35 -54 l45 -44 45 44 c29 29 42 47 35 54 -6 6 -18 2 -35 -14 -14 -13 -25 -19 -26 -14 0 5 -2 34 -3 64 -2 30 -4 58 -5 63 -2 13 -19 7 -25 -9z" />
                </g>
            </svg>
        </div>
    </section>
    <!-- PRESENTATION SECTION -->
    <div id="presentationSectionAnchor"></div>
    <section id="presentationSection" class="flexCenter">
        <div class="mirrorContainer">
            <h2 id="mirroredPresentation" class="mirroredTitle">présentation</h2>
        </div>

        <div class="slideshowContainer">

            <div class="mySlides fade">
                <h3 class="slideTitle">Une première expérience pro</h3>
                <div class="slideContainer">
                    <div class="frontSlideContainer">
                        <img class="frontSlide" src="../Assest/PresentationSectionImg/constructionSlide.png">
                    </div>
                    <div class="backSlideContainer">
                        <img class="backSlide" src="../Assest/PresentationSectionImg/citySlide.png">
                    </div>
                </div>
                <div class="slideText">Après avoir obtenu mon C.A.P maçonnerie chez les Compagnons du devoir,
                    j'ai travaillé une dizaine d'année en tant que maçon. Ces années d'expérience dans le bâtiment
                    mon rendus rigoureux et ponctuel. J'y ai appris à suivre un cahier des charges, à travailler en
                    équipe et à développer une curiosité pour apprendre et m'adapter a de nouvelles techniques de travail.
                </div>
            </div>

            <div class="mySlides fade">
                <h3 class="slideTitle">Un voyage</h3>
                <div class="slideContainer">
                    <div class="frontSlideContainer">
                        <img class="frontSlide" src="../Assest/PresentationSectionImg/backpackSlide.png">
                    </div>
                    <div class="backSlideContainer">
                        <img class="backSlide" src="../Assest/PresentationSectionImg/aroundWorldSlide.png">
                    </div>
                </div>
                <div class="slideText">Je suis ensuite parti à l'étranger pendant quelques années, en Nouvelle-Zélande
                    puis au Chili. Ces voyages mon permis de devenir bilingue en anglais et m'ont ouvert à d'autres
                    cultures et pays.
                </div>
            </div>

            <div class="mySlides fade">
                <h3 class="slideTitle">Un nouvel objectif</h3>
                <div class="slideContainer">
                    <div class="frontSlideContainer">
                        <img class="frontSlide" src="../Assest/PresentationSectionImg/diplomeSlide.png">
                    </div>
                    <div class="backSlideContainer">
                        <img class="backSlide" src="../Assest/PresentationSectionImg/officeSlide.png">
                    </div>
                </div>
                <div class="slideText">En revenant en France j'ai décidé de changer de métier et de me lancer dans le
                    développement web, un secteur qui m'a toujours attiré et qui est en pleine croissance. Mon diplôme
                    de développeur web bac +2 en poche, je cherche maintenant à me spécialiser dans le back-end et
                    recherche une alternance pour acquérir de l'expérience professionnelle.
                </div>
            </div>

        </div>
        <!-- <br> -->

        <div id="slideShowCommands">
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div></div>
    </section>

    <!-- WORK SECTION -->
    <div id="workSectionAnchor"></div>
    <section id="workSection" class="flexCenter">
        <div class="mirrorContainer">
            <h2 id="mirroredWork" class="mirroredTitle">réalisation</h2>
        </div>
        <div class="flipCardsContainer flexCenter">
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="workLinkImg" src="../Assest/flipCardImg/c2cImg.png" alt="">
                    </div>
                    <div class="flipCardBack">
                        <p>Description du site :<br><br> Galerie d'exposition pour une photographe comportant plusieurs
                            collections composées de photos. Le site comprend également une partie admin accessible
                            pour la / les personnes autorisées permettant de créer, modifier ou supprimer les galeries,
                            collections et leurs contenus.</p>
                        <p>technologies utilisées :<br><br> HTML / CSS / JS / PHP / MySQL</p>
                        <a href="https://c2capture.fr/" target="_blank" class="btnVisitSite">Click to visit the site</a>
                    </div>
                </div>
            </div>
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="workLinkImg" src="../Assest/flipCardImg/c2cImg.png" alt="">
                    </div>
                    <div class="flipCardBack">
                        <p>Description du site :<br><br> Galerie d'exposition pour une photographe comportant plusieurs
                            collections composées de photos. Le site comprend également une partie admin accessible
                            pour la / les personnes autorisées permettant de créer, modifier ou supprimer les galeries,
                            collections et leurs contenus.</p>
                        <p>technologies utilisées :<br><br> HTML / CSS / JS / PHP / MySQL</p>
                        <a href="https://c2capture.fr/" target="_blank" class="btnVisitSite">Click to visit the site</a>
                    </div>
                </div>
            </div>
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="workLinkImg" src="../Assest/flipCardImg/c2cImg.png" alt="">
                    </div>
                    <div class="flipCardBack">
                        <p>Description du site :<br><br> Galerie d'exposition pour une photographe comportant plusieurs
                            collections composées de photos. Le site comprend également une partie admin accessible
                            pour la / les personnes autorisées permettant de créer, modifier ou supprimer les galeries,
                            collections et leurs contenus.</p>
                        <p>technologies utilisées :<br><br> HTML / CSS / JS / PHP / MySQL</p>
                        <a href="https://c2capture.fr/" target="_blank" class="btnVisitSite">Click to visit the site</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <div id="contactSectionAnchor"></div>
    <section id="contactSection" class="flexCenter">
        <div class="mirrorContainer">
            <h2 id="mirroredContact" class="mirroredTitle">contact</h2>
        </div>

        <div id="formContainer" class="flexCenter">
            <form class="form flexCenter" method="POST">
                <h3 id="formTitle">Contactez moi par email</h3>

                <div class="formItem">
                    <label class="formLabel" for="lastname">Nom</label>
                    <input type="text" name="name" class="formInput" placeholder="e.g. john doe" required>
                </div>

                <div class="formItem">
                    <label class="formLabel" for="email">Adresse email</label>
                    <input type="email" name="email" class="formInput" placeholder="email@domain.com" required>
                </div>

                <div class="formItem">
                    <label class="formLabel" for="description">Votre message</label>
                    <textarea rows="5" cols="50" name="description" class="formInput" placeholder="type here" required></textarea>
                </div>

                <button type="submit" class="formBtn">Envoyer le message</button>

            </form>
        </div>

    </section>

    <footer>
        <div class="footerContainer flexAround">
            <div id="contactEmail" class="footerLink">
                <a href="mailto:stephan.canioni@outlook.fr" class="footerText">
                    <i class="fa-solid fa-at"></i> stephan.canioni@outlook.fr
                </a>
            </div>
            <div id="contactTel" class="footerLink">
                <p class="footerText">
                    <i class="fa-solid fa-phone"></i> 06.69.15.04.73
                </p>
            </div>
            <div id="contactLinkedIn" class="footerLink">
                <a class="footerText" href="https://www.linkedin.com/in/stephan-canioni-574932204/" target="_blank">
                    <i class="fa-brands fa-linkedin"></i> Mon LinkedIn
                </a>
            </div>
            <div id="contactGitHub" class="footerLink">
                <a class="footerText" href="https://github.com/Canioni-S" target="_blank">
                    <i class="fa-brands fa-github"></i> Mon GitHub
                </a>
            </div>
        </div>
    </footer>
    <script src="../script.js"></script>
</body>

</html>