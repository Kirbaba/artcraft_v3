document.addEventListener("DOMContentLoaded", ready);
function ready() {
  var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    parallax: true,
    speed: 600,
    watchSlidesProgress: true,
    grabCursor: true,
  });
}
