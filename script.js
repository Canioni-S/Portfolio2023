// NAVBAR STYLE MODIFICATION ON SCROLL
// window.onscroll = function () { navBarReduceOnScroll() };
// function navBarReduceOnScroll() {
//     if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
//         document.getElementById("navBar").style.minHeight = "8vh";
//         document.getElementById("navBar").style.borderBottom = "2px solid black";
//         document.getElementById("homeSection").style.minHeight = "92vh";
//     } else {
//         document.getElementById("navBar").style.minHeight = "15vh";
//         document.getElementById("navBar").style.borderBottom = "none";
//         document.getElementById("homeSection").style.minHeight = "85vh";
//     }
// }

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

// NAVBAR MENU BURGER SCRIPT
function Burgerfunction(x) {
    x.classList.toggle("change");

    var y = document.getElementById("linksContainer");
    if (y.className == "navBarBurger") {
        y.className += " responsive";
    } else {
        y.className = "navBarBurger";
    }

}