'use strict';

var slides = document.querySelectorAll('.intro__slides .intro__slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide, 5000);

function nextSlide() {
  slides[currentSlide].className = 'intro__slide';
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].className = 'intro__slide-showing';
}