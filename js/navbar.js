 /* let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navbar.classList.toggle('open');
}

const header = document.querySelector("header");
window.addEventListener("scroll", function(){
	header.classList.toggle("sticky",window.scrollY > 250);
});*/ 


document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('navbar');
    const menuToggle = document.getElementById('menuToggle');

    menuToggle.addEventListener('click', function() {
        navbar.classList.toggle('menu-open');
    });

    window.addEventListener('scroll', function() {
        if (window.scrollY > 0) {
            navbar.classList.add('bg-white');
        } else {
            navbar.classList.remove('bg-white');
        }
    });
});




let slideIndex = 0;
    const slides = document.querySelectorAll('.slider-item');

    function showSlide(index) {
      if (index < 0) {
        slideIndex = slides.length - 1;
      } else if (index >= slides.length) {
        slideIndex = 0;
      }

      const offset = -slideIndex * 100;
      document.querySelector('.slider').style.transform = `translateX(${offset}%)`;
    }

    function nextSlide() {
      slideIndex++;
      showSlide(slideIndex);
    }

    function prevSlide() {
      slideIndex--;
      showSlide(slideIndex);
    }

    // Automático
    setInterval(() => {
      nextSlide();
    }, 6000);
