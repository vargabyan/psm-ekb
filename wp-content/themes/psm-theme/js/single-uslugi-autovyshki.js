window.addEventListener('load', () => {

    action()
    window.addEventListener('resize', action )
    function action () {
        if (window.innerWidth <= 768) {
            const buttonAttributeAndTextContent = [['data-features', 'data-features-box-mobile' ], ['data-description', 'data-description-box-mobile'], ['data-payment-delivery', 'data-payment-delivery-box-mobile']]

            buttonAttributeAndTextContent.forEach((value, index) => {
                const button = document.querySelector(`[${value[0]}]`);
                const textContent = document.querySelector(`[${value[1]}]`);

                button.addEventListener('click', (e) => {

                    buttonAttributeAndTextContent.forEach((elementName) => {

                        if (e.target.attributes[elementName[0]]) {
                            button.classList.add('product-data-button');
                            textContent.classList.add('product-data-text-content-mobile');
                        } else {
                            document.querySelector(`[${elementName[0]}]`).classList.remove('product-data-button');
                            document.querySelector(`[${elementName[1]}]`).classList.remove('product-data-text-content-mobile');
                        }
                    })

                })
            })

        } else {
            const buttonAttributeAndTextContent = [['data-features', 'data-features-box-pc' ], ['data-description', 'data-description-box-pc'], ['data-payment-delivery', 'data-payment-delivery-box-pc']]

            buttonAttributeAndTextContent.forEach((value, index) => {
                const button = document.querySelector(`[${value[0]}]`);
                const textContent = document.querySelector(`[${value[1]}]`);

                button.addEventListener('click', (e) => {

                    buttonAttributeAndTextContent.forEach((elementName) => {

                        if (e.target.attributes[elementName[0]]) {
                            button.classList.add('product-data-button');
                            textContent.classList.add('product-data-text-content-pc');
                        } else {
                            document.querySelector(`[${elementName[0]}]`).classList.remove('product-data-button');
                            document.querySelector(`[${elementName[1]}]`).classList.remove('product-data-text-content-pc');
                        }
                    })

                })
            })

        }

    }

    const swiperVertical = new Swiper('.swiper-vertical', {
        direction: 'vertical',
        loop: true,
    });

    new Swiper('.swiper-horizontal', {
        loop: true,
        navigation: {
            nextEl: '.swiper-horizontal-button-next',
            prevEl: '.swiper-horizontal-button-prev',
        },
        thumbs: {
            swiper: swiperVertical,
        },
    });
})


document.addEventListener('click', (e) => {
    const btn = e.target.closest('[data-characteristic-hidden-btn]');

    if (btn) {
        const wrapperCoreBlock = btn.closest('[data-characteristic-block]');
        const hiddenPlace = wrapperCoreBlock.querySelector('[data-characteristic-hidden-place]');

        hiddenPlace.classList.toggle('open');
    }
})




