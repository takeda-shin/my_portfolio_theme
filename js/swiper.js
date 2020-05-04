$(document).ready(function () {
  // swiperをイニシャライズ
  var mySwiper = new Swiper ('.swiper-container', {
    effect: 'coverflow',
    slidesPerView: 2,
    centeredSlides: true,
    loop: true,
    coverflowEffect: {
        slideShadows: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })
});