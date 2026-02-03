window.addEventListener('DOMContentLoaded', function () {
    if (window.innerWidth < 768) {
        spaceBetween = 26;
        centeredSlides = false;
    } else {
        spaceBetween = 31;
        centeredSlides = false;
    }
    var swiper = new Swiper('.swiper', {
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: spaceBetween,
        loopAdditionalSlides: 10,
        centeredSlides: centeredSlides,
        // 前後の矢印
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }

    });
}, false);