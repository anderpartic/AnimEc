var elementTop = $('.nav').offset().top;
$(window).scroll(function() {
      
    if ($(window).scrollTop() > elementTop) {
      $('body').addClass('nav_fixed');
    } else {
      $('body').removeClass('nav_fixed'); 
    }
  });

  var slideIndex = 0;
showSlide(slideIndex);

function showSlide(index) {
  var slides = document.getElementsByClassName("carousel-slide");
  var buttons = document.getElementsByTagName("button");

  if (index >= slides.length) {
    slideIndex = 0;
  } else if (index < 0) {
    slideIndex = slides.length - 1;
  } else {
    slideIndex = index;
  }

  for (var i = 0; i < slides.length; i++) {
    slides[i].classList.remove("active");
  }

  slides[slideIndex].classList.add("active");
}

document.querySelector(".carousel-prev").addEventListener("click", function() {
  showSlide(slideIndex - 1);
});

document.querySelector(".carousel-next").addEventListener("click", function() {
  showSlide(slideIndex + 1);
});
