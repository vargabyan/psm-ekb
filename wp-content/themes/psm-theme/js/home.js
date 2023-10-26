document.addEventListener("DOMContentLoaded", ready);

function ready(){
    let portfolioSlider = new Swiper(".portfolio-slider", {
        navigation: {
            nextEl: ".portfolio-slider_nav-btn.next",
            prevEl: ".portfolio-slider_nav-btn.prev",
        },
    });

    // new-code

    new Swiper('.category-swiper', {

        navigation: {
            nextEl: '.category-swiper-button-next',
            prevEl: '.category-swiper-button-prev',
        },

        slidesPerView: 'auto',
        spaceBetween: 16,

    });

    new Swiper('.our-truck-crane-swiper', {

        navigation: {
            nextEl: '.our-truck-crane-swiper-button-next',
            prevEl: '.our-truck-crane-swiper-button-prev',
        },

        slidesPerView: 3,
        spaceBetween: 30,

        breakpoints: {
            318: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            992: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            1060: {
                slidesPerView: 3,
                spaceBetween: 30
            },
        }

    });

    const review_swiper_button_next = document.getElementsByClassName('review-swiper-next');
    const review_swiper_button_prev = document.getElementsByClassName('review-swiper-prev');

    actions();
    window.addEventListener('resize', actions);

    function actions() {
        if (window.innerWidth >= 991) {
            review_swiper_button_next[0].classList.add('review-swiper-button-next');
            review_swiper_button_prev[0].classList.add('review-swiper-button-prev');
            review_swiper_button_next[1].classList.remove('review-swiper-button-next');
            review_swiper_button_prev[1].classList.remove('review-swiper-button-prev');
        }
        else {
            review_swiper_button_next[1].classList.add('review-swiper-button-next');
            review_swiper_button_prev[1].classList.add('review-swiper-button-prev');
            review_swiper_button_next[0].classList.remove('review-swiper-button-next');
            review_swiper_button_prev[0].classList.remove('review-swiper-button-prev');
        }
    }

    new Swiper('.review-swiper', {

        navigation: {
            nextEl: '.review-swiper-button-next',
            prevEl: '.review-swiper-button-prev',
        },

        slidesPerView: 2,
        spaceBetween: 30,

        breakpoints: {
            318: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            992: {
                slidesPerView: 2,
                spaceBetween: 20
            },
        }

    });
}
