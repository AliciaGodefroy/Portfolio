document.addEventListener('DOMContentLoaded', function () {
  var mySwiper = new Swiper('.swiper-container', {
    autoplay: true,
    loop:true,
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    on: {
      init: function () {
        // Ajuster la taille de la deuxième slide lors de l'initialisation
        var secondSlide = this.slides[1];
        if (secondSlide) {
          secondSlide.style.transform = 'scale(1.1)';
        }
      },
      slideChange: function () {
        // Réinitialiser la taille des slides à chaque changement de slide
        this.slides.forEach(function (slide) {
          slide.style.transform = 'scale(1)';
        });

        // Ajuster la taille de la nouvelle deuxième slide
        var newSecondSlideIndex = this.activeIndex + 1;
        var newSecondSlide = this.slides[newSecondSlideIndex];
        if (newSecondSlide) {
          newSecondSlide.style.transform = 'scale(1.1)';
        }
      },
    },
  });
});
