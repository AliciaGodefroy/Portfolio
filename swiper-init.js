// document.addEventListener('DOMContentLoaded', function () {
//     var swiper = new Swiper('.swiper-container', {
//       // Configuration de Swiper ici
//       pagination: {
//         el: '.swiper-pagination',
//         clickable: true,
//       },
//       navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//       },
//     });
//   });

document.addEventListener('DOMContentLoaded', function () {
  var mySwiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
});