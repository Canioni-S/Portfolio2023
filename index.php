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
            <a href="/Assest/New CV.pdf" class="navLink flexCenter" id="cvLink" download="Canioni-Stéphan-CV" onclick="return confirm('Confirm download Canioni-Stéphan-CV?');">
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
                <img class="homeBackgroundImg" src="../Assest/LogoImg/LogoHtmlPic.webp" alt="">
            </div>
            <div id="logoCss" class="logoContainer">
                <img class="homeBackgroundImg" src="../Assest/LogoImg/LogoCssPic.png" alt="">
            </div>
            <div id="logoJs" class="logoContainer">
                <img class="homeBackgroundImg" src="../Assest/LogoImg/LogoJsPic.webp" alt="">
            </div>
            <div id="logoPhp" class="logoContainer">
                <img class="homeBackgroundImg" src="../Assest/LogoImg/LogoPhpPic.png" alt="">
            </div>
            <div id="logoMySql" class="logoContainer">
                <img class="homeBackgroundImg" src="../Assest/LogoImg/LogoMySqlPic.webp" alt="">
            </div>
            <div id="logoBootstrap" class="logoContainer">
                <img class="homeBackgroundImg" src="../Assest/LogoImg/LogoBootstrapPic.png" alt="">
            </div>
            <div id="logoWordPress" class="logoContainer">
                <img class="homeBackgroundImg" src="../Assest/LogoImg/LogoWordPressPic.png" alt="">
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
                <img id="homeFrontImg" src="../Assest/HomeSectionImg/homeFrontImg.webp" alt="">
            </div>
        </div>
        <div id="scrollIconContainer">
            <img id="scrollImg" src="../Assest/HomeSectionImg/scrollDownImg.png" alt="">
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
                <img src="../Assest/ContactIcons/002-email.png" alt="">
                <a href="mailto:stephan.canioni@outlook.fr" class="footerText">stephan.canioni@outlook.fr</a>
            </div>
            <div id="contactTel" class="footerLink">
                <img src="../Assest/ContactIcons/003-phone-call.png" alt="">
                <p class="footerText">06.69.15.04.73</p>
            </div>
            <div id="contactLinkedIn" class="footerLink">
                <img src="../Assest/ContactIcons/001-linkedin.png" alt="">
                <a class="footerText" href="https://www.linkedin.com/in/stephan-canioni-574932204/" target="_blank">Mon LinkedIn</a>
            </div>
            <div id="contactGitHub" class="footerLink">
                <img src="../Assest/ContactIcons/004-github.png" alt="">
                <a class="footerText" href="https://github.com/Canioni-S" target="_blank">Mon GitHub</a>
            </div>
        </div>
    </footer>
    <script src="../script.js"></script>
</body>

</html>