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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CanioniDev</title>

</head>

<body>
    <div id="top"></div>
    <!-- NAVBAR -->
    <nav id="navBar" class="flexCenter">
        <div id="brandContainer" class="flexCenter">
            <a href="#top">
                <h1 id="brandName">CanioniDev</h1>
            </a>
        </div>
        <div id="linksContainer" class="flexCenter">
            <a href="#presentationSection" class="navLink flexCenter">
                <p class="textLink">presentation</p>
                <img src="/Assest/NavbarImg/presentationLinkImg.webp" alt="" class="navLinkImg">
                <div class="navHoverEffect"></div>
            </a>
            <a href="#workSection" class="navLink flexCenter" id="workLink">
                <p class="textLink">my work</p>
                <img src="/Assest/NavbarImg/workLinkImg.webp" alt="" class="navLinkImg">
                <div class="navHoverEffect"></div>
            </a>
            <a href="#contactSection" class="navLink flexCenter" id="contactLink">
                <p class="textLink">contact</p>
                <img src="/Assest/NavbarImg/contactLinkImg.webp" alt="" class="navLinkImg">
                <div class="navHoverEffect"></div>
            </a>
            <a href="/Assest/New CV.pdf" class="navLink flexCenter" id="cvLink" download="Canioni-Stéphan-CV" onclick="return confirm('Confirm download Canioni-Stéphan-CV?');">
                <p class="textLink">donwload cv</p>
                <img src="/Assest/NavbarImg/cvLinkImg.webp" alt="" class="navLinkImg">
                <div class="navHoverEffect"></div>
            </a>
        </div>
    </nav>

    <!-- HOME SECTION -->
    <section id="homeSection" class="sectionContainer flexCenter">
        <!-- ANIMATED LOGO BACKGROUND -->
        <div class="homeBackground">
            <div id="logoHtml" class="logoContainer">
                <img class="homeBackgroundImg" src="/Assest/LogoImg/LogoHtmlPic.webp" alt="">
            </div>
            <div id="logoCss" class="logoContainer">
                <img class="homeBackgroundImg" src="/Assest/LogoImg/LogoCssPic.png" alt="">
            </div>
            <div id="logoJs" class="logoContainer">
                <img class="homeBackgroundImg" src="/Assest/LogoImg/LogoJsPic.webp" alt="">
            </div>
            <div id="logoPhp" class="logoContainer">
                <img class="homeBackgroundImg" src="/Assest/LogoImg/LogoPhpPic.png" alt="">
            </div>
            <div id="logoMySql" class="logoContainer">
                <img class="homeBackgroundImg" src="/Assest/LogoImg/LogoMySqlPic.webp" alt="">
            </div>
            <div id="logoBootstrap" class="logoContainer">
                <img class="homeBackgroundImg" src="/Assest/LogoImg/LogoBootstrapPic.png" alt="">
            </div>
            <div id="logoWordPress" class="logoContainer">
                <img class="homeBackgroundImg" src="/Assest/LogoImg/LogoWordPressPic.png" alt="">
            </div>
        </div>

        <!-- HOME FRONT -->
        <div id="homeFrontContainer" class="flexCenter">
            <div class="homeFrontText">
                <div id="lineOne">
                    <p>Hi, I am</p>
                </div>
                <div id="lineTwo">
                    <p>Stéphan Canioni,</p>
                </div>
                <div id="lineThree">
                    <p>web & web mobile developper.</p>
                </div>
            </div>
            <div id="homeImgContainer">
                <img id="homeFrontImg" src="/Assest/HomeSectionImg/homeFrontImg.webp" alt="">
            </div>
        </div>
        <div id="scrollIconContainer">
            <img id="scrollImg" src="/Assest/HomeSectionImg/scrollDownImg.png" alt="">
        </div>
    </section>

    <!-- PRESENTATION SECTION -->
    <section id="presentationSection" class="sectionContainer flexCenter">
        <div class="mirrorContainer">
            <h2 id="mirroredPresentation" class="mirroredTitle">presentation</h2>
        </div>

        <div class="slideshowContainer">

            <div class="mySlides fade">
                <h3 class="slideTitle">Lorem ipsum dolor sit amet.</h3>
                <div class="slideContainer">
                    <div class="frontSlideContainer">
                        <img class="frontSlide" src="/Assest/PresentationSectionImg/constructionSlide.png">
                    </div>
                    <div class="backSlideContainer">
                        <img class="backSlide" src="/Assest/PresentationSectionImg/citySlide.png">
                    </div>
                </div>
                <div class="slideText">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad totam animi ut in
                    ipsa
                    dolorem dolor recusandae labore excepturi. Id aut facere repellendus illo blanditiis vitae possimus
                    suscipit dolorum totam.</div>
            </div>

            <div class="mySlides fade">
                <h3 class="slideTitle">Lorem ipsum dolor sit amet.</h3>
                <div class="slideContainer">
                    <div class="frontSlideContainer">
                        <img class="frontSlide" src="/Assest/PresentationSectionImg/backpackSlide.png">
                    </div>
                    <div class="backSlideContainer">
                        <img class="backSlide" src="/Assest/PresentationSectionImg/aroundWorldSlide.png">
                    </div>
                </div>
                <div class="slideText">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad totam animi ut in
                    ipsa
                    dolorem dolor recusandae labore excepturi. Id aut facere repellendus illo blanditiis vitae possimus
                    suscipit dolorum totam.</div>
            </div>

            <div class="mySlides fade">
                <h3 class="slideTitle">Lorem ipsum dolor sit amet.</h3>
                <div class="slideContainer">
                    <div class="frontSlideContainer">
                        <img class="frontSlide" src="/Assest/PresentationSectionImg/diplomeSlide.png">
                    </div>
                    <div class="backSlideContainer">
                        <img class="backSlide" src="/Assest/PresentationSectionImg/officeSlide.png">
                    </div>
                </div>
                <div class="slideText">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad totam animi ut in
                    ipsa
                    dolorem dolor recusandae labore excepturi. Id aut facere repellendus illo blanditiis vitae possimus
                    suscipit dolorum totam.</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <div></div>
    </section>

    <!-- WORK SECTION -->
    <section id="workSection" class="sectionContainer flexCenter">
        <div class="mirrorContainer">
            <h2 id="mirroredWork" class="mirroredTitle">my work</h2>
        </div>
        <div class="flipCardsContainer flexCenter">
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="workLinkImg" src="/Assest/flipCardImg/c2cImg.png" alt="">
                    </div>
                    <div class="flipCardBack">
                        <p>Description de site</p>
                        <p>technologies utilisées</p>
                        <a href="https://c2c.c2capture.fr/" target="_blank" class="btnVisitSite">Click to visit the
                            site</a>
                    </div>
                </div>
            </div>
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="workLinkImg" src="/Assest/NavbarImg/presentationLinkImg.webp" alt="">
                    </div>
                    <div class="flipCardBack">
                        <p>Description de site</p>
                        <p>technologies utilisées</p>
                        <a href="" class="btnVisitSite">Click to visit the site</a>
                    </div>
                </div>
            </div>
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="workLinkImg" src="/Assest/NavbarImg/presentationLinkImg.webp" alt="">
                    </div>
                    <div class="flipCardBack">
                        <p>Description de site</p>
                        <p>technologies utilisées</p>
                        <a href="" class="btnVisitSite">Click to visit the site</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contactSection" class="sectionContainer flexCenter">
        <div class="mirrorContainer">
            <h2 id="mirroredContact" class="mirroredTitle">contact</h2>
        </div>

        <div id="formContainer" class="flexCenter">
            <form class="form flexCenter" method="POST">
                <h3 id="formTitle">Contactez moi par email</h3>

                <div class="formItem">
                    <label for="lastname">Nom</label>
                    <input type="text" name="name" class="formInput" placeholder="e.g. john doe" required>
                </div>

                <div class="formItem">
                    <label for="email">Adresse email</label>
                    <input type="email" name="email" class="formInput" placeholder="email@domain.com" required>
                </div>

                <div class="formItem">
                    <label for="description">Votre message</label>
                    <textarea rows="5" cols="50" name="description" class="formInput" placeholder="type here" required></textarea>
                </div>

                <button type="submit" class="formBtn">Envoyer le message</button>

            </form>
        </div>

    </section>

    <footer>
        <!-- <div class="contactsContainer">
            <div id="contactEmail" class="contactLink">
                <img src="/Assest/ContactIcons/002-email.png" alt="">
                <a href="mailto:stephan.canioni@outlook.fr" class="contactText">stephan.canioni@outlook.fr</a>
            </div>
            <div id="contactTel" class="contactLink">
                <img src="/Assest/ContactIcons/003-phone-call.png" alt="">
                <p class="contactText">06.00.00.00.00</p>
            </div>
            <div id="contactLinkedIn" class="contactLink">
                <img src="/Assest/ContactIcons/001-linkedin.png" alt="">
                <a class="contactText" href="www.linkedin.com/in/stephan-canioni-574932204">Mon LinkedIn</a>
            </div>
            <div id="contactGitHub" class="contactLink">
                <img src="/Assest/ContactIcons/004-github.png" alt="">
                <a class="contactText" href="https://github.com/Canioni-S">Mon GitHub</a>
            </div>
        </div> -->

    </footer>
    <script src="/script.js"></script>
</body>

</html>