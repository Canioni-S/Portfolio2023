// NAVBAR STYLE MODIFICATION ON SCROLL
window.onscroll = function () { navBarReduceOnScroll() };
function navBarReduceOnScroll() {
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
        document.getElementById("navBar").style.height = "6vh";
        document.getElementById("brandName").style.fontSize = "3.5vw";
    } else {
        document.getElementById("navBar").style.height = "15vh";
        document.getElementById("brandName").style.fontSize = "5vw";
    }
}

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

function navBarBurger() {
    var x = document.getElementById("navBar");
    if (x.className === "burger") {
      x.className += " responsive";
    } else {
      x.className = "burger";
    }
  }