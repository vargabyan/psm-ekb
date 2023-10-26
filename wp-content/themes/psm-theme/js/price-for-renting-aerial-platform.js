window.addEventListener('load', () => {
    new Swiper('.price-for-renting_swiper', {
        loop: true,

        navigation: {
            nextEl: '.price-for-renting_swiper-button-next',
            prevEl: '.price-for-renting_swiper-button-prev',
        },

        slidesPerVie: 2,

        breakpoints: {
            318: {
                slidesPerView: 1,
                spaceBetween: 0,
                slidesPerGroup: 1,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
                slidesPerGroup: 1,
            },
            1060: {
                slidesPerView: 2,
                spaceBetween: 30,
                slidesPerGroup: 2,
            },
        }
    });
})