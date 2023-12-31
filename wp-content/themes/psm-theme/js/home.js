window.addEventListener("load", ready);

function ready() {
    new Swiper(".portfolio-slider", {
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

    const review_swiper_button_next = document.querySelectorAll('.review-swiper-next[data-review]');
    const review_swiper_button_prev = document.querySelectorAll('.review-swiper-prev[data-review]');

    actions();
    window.addEventListener('resize', actions);

    function actions() {
        if (window.innerWidth >= 991) {
            review_swiper_button_next[0].classList.add('review-swiper-button-next');
            review_swiper_button_prev[0].classList.add('review-swiper-button-prev');
            review_swiper_button_next[1].classList.remove('review-swiper-button-next');
            review_swiper_button_prev[1].classList.remove('review-swiper-button-prev');
        } else {
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


document.addEventListener('click', (e) => {
    const toggle = e.target.closest('[data-naw-menu-mobile_toggle]');

    if (toggle) {
        const wrapperMenu = toggle.closest('[data-nav-menu-mobile]');
        const menu = wrapperMenu.querySelector('[data-nav-bar-mobile-wrapper]');

        menu.style['display'] = 'flex';
        toggle.classList.remove('naw-menu-mobile_toggle-close')
        toggle.classList.add('naw-menu-mobile_toggle-open')
    } else {
        const buttonToggle = document.querySelector('[data-naw-menu-mobile_toggle]');
        const menu = document.querySelector('[data-nav-bar-mobile-wrapper]');

        menu.style['display'] = 'none';
        buttonToggle.classList.remove('naw-menu-mobile_toggle-open')
        buttonToggle.classList.add('naw-menu-mobile_toggle-close')
    }
})
