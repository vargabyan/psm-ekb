document.addEventListener("DOMContentLoaded", function (event) {
    setTimeout(function () {
        //отложенная вставка сторонних скриптов
        let yandexScript = document.createElement('script')
        yandexScript.textContent = `(function (m, e, t, r, i, k, a) {
                m[i] = m[i] || function () {
                    (m[i].a = m[i].a || []).push(arguments)
                };
                m[i].l = 1 * new Date();
                for (var j = 0; j < document.scripts.length; j++) {
                    if (document.scripts[j].src === r) {
                        return;
                    }
                }
                k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
            })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
            ym(91868462, "init", {
                clickmap: true,
                trackLinks: true,
                accurateTrackBounce: true
            });`
        document.head.appendChild(yandexScript)

        let googleScriptCdn = document.createElement('script')
        googleScriptCdn.src = 'https://www.googletagmanager.com/gtag/js?id=G-6XMPF08CWF'
        document.head.appendChild(googleScriptCdn)

        let googleScript = document.createElement('script')
        googleScript.textContent = `window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-6XMPF08CWF');`
        document.head.appendChild(googleScript)

        //добавление сео целей
        let phone1 = document.querySelector('#header-phone_1')
        let phone2 = document.querySelector('#header-phone_2')
        let phone3 = document.querySelector('#header-phone_3')
        let email = document.querySelector('#header-email')
        let telegram = document.querySelector('#header-telegram')
        let whatsapp = document.querySelector('#header-whatsapp')
        let managerTel = document.querySelector('.contact-manager .companyTel')
        let managerWhatsapp = document.querySelector('.contact-manager .btn-chat')
        let managerForm = document.querySelector('.contact-manager .btn-question')

        if (phone1) phone1.addEventListener('click', function () {
            ym(91868462, 'reachGoal', 'OPEN-CALLS-2')
        })
        if (phone2) phone2.addEventListener('click', function () {
            ym(91868462, 'reachGoal', 'OPEN-CALLS-3')
        })
        if (phone3) phone3.addEventListener('click', function () {
            ym(91868462, 'reachGoal', 'OPEN-CALLS-4')
        })
        if (email) email.addEventListener('click', function () {
            ym(91868462, 'reachGoal', 'OPEN-EMAIL')
        })
        if (telegram) telegram.addEventListener('click', function () {
            ym(91868462, 'reachGoal', 'OPEN-MESSENGER')
        })
        if (whatsapp) whatsapp.addEventListener('click', function () {
            ym(91868462, 'reachGoal', 'OPEN-MESSENGER-2')
        })
        if (managerTel) managerTel.addEventListener('click', function () {
            ym(91868462, 'reachGoal', 'OPEN-CALLS-4')
        })
        if (managerWhatsapp) managerWhatsapp.addEventListener('click', function () {
            ym(91868462, 'reachGoal', 'OPEN-CALLS-2')
        })
    }, 7000)
});


document.addEventListener('DOMContentLoaded', function () {
    jQuery('.preloader').fadeOut();
}, false)

// var el = document.getElementById('preloader');
// el.parentNode.removeChild(el);


document.addEventListener('DOMContentLoaded', function () {
    jQuery('.mob-button').click(function () {
        jQuery('.mobile-menu1').addClass('mobile-menu-active')
    })
    jQuery('.mobile-menu-close').click(function () {
        jQuery('.mobile-menu1').removeClass('mobile-menu-active')
    })
}, false)


document.addEventListener('DOMContentLoaded', function () {


    jQuery("a[data-call='callback']").click(function () {
        jQuery("div[data-modal='callback']").fadeIn();
    })

    jQuery("a[data-call='answer']").click(function () {
        jQuery("div[data-modal='answer']").fadeIn();
    })

    jQuery("a[data-call='singleauto']").click(function () {
        jQuery("div[data-modal='singleauto']").fadeIn();
    })

    jQuery("a[data-call='callautosend']").click(function () {
        jQuery("div[data-modal='callautosend']").fadeIn();
    })

    jQuery('.show-all').click(function () {
        jQuery('.all-hidden').removeClass('all-hidden');
        jQuery('.show-all').css('display', 'none');
        jQuery('.hide-all').css('display', 'inherit');
    })

    //all-cat
    jQuery('.hide-all').click(function () {
        jQuery('.all-cat').addClass('all-hidden');
        jQuery('.show-all').css('display', 'inherit');
        jQuery('.hide-all').css('display', 'none');
    });


    jQuery("a[data-call='auto']").click(function () {
        var auto = jQuery(this).attr('data-auto');
        jQuery("div[data-modal='auto']").attr('data-value', '' + auto + '')
        jQuery("div[data-modal='auto']").fadeIn();
    })


    jQuery('.modal-close').click(function () {
        jQuery(".modalwindow").fadeOut()
    })

    jQuery('.logo__wrapper').slick({
        arrows: true,
        adaptiveHeight: true,
        infinite: true,
        speed: 500,
        slidesToShow: 5,
        respondTo: 'slider',
        prevArrow: jQuery('.logo__button_left'),
        nextArrow: jQuery('.logo__button_right')
    });

    document.addEventListener('DOMContentLoaded', function () {
        jQuery('.offer-img').addClass('img-fadein');
        jQuery('.preloader').fadeOut();
    }, false)


}, false)


var onloadCallback = function () {
    mysitekey = '6LfnFMEUAAAAAGOEN8494EZ-HUlPQkzBKkpG2eCf';

    grecaptcha.render('recaptcha1', {
        'sitekey': mysitekey,
        'callback': sendform
    });

    grecaptcha.render('recaptcha2', {
        'sitekey': mysitekey,
        'callback': sendform
    });

    grecaptcha.render('recaptcha3', {
        'sitekey': mysitekey,
        'callback': sendform
    });

    grecaptcha.render('recaptcha4', {
        'sitekey': mysitekey,
        'callback': sendform
    });

    grecaptcha.render('recaptcha5', {
        'sitekey': mysitekey,
        'callback': sendform
    });

    if (jQuery("div").is("#recaptcha6")) {
        grecaptcha.render('recaptcha6', {
            'sitekey': mysitekey,
            'callback': sendform
        });
    }

};


function callbacksend() {
    // отменим стандартную отправку формы на сервер
    event.preventDefault();
    // если форма прошла валидацию, то вызовем invisible reCaptcha
    grecaptcha.execute();

    ym(91868462, 'reachGoal', 'OPEN-CALLS')

    window.dataform = {
        "form": 'callbackForm',
        "name": jQuery(".callbackform input[name='name']").val(),
        "tel": jQuery(".callbackform input[name='tel']").val(),
        "policy": jQuery(".callbackform input[name='policy']").prop("checked"),
    };
}


function answersend() {
    // отменим стандартную отправку формы на сервер
    event.preventDefault();
    // если форма прошла валидацию, то вызовем invisible reCaptcha
    grecaptcha.execute();

    var name = jQuery("div[data-modal='answer'] .callbackform input[name='name']").val();
    var tel = jQuery("div[data-modal='answer'] .callbackform input[name='tel']").val();
    var descr = jQuery("div[data-modal='answer'] .callbackform input[name='descr']").val();
    var policy = jQuery("div[data-modal='answer'] .callbackform input[name='policy']").prop("checked");

    window.dataform = {
        "form": 'answerForm',
        "name": name,
        "tel": tel,
        "descr": descr,
        "policy": policy,
    };

}

function singleautosend() {
    // отменим стандартную отправку формы на сервер
    event.preventDefault();
    // если форма прошла валидацию, то вызовем invisible reCaptcha
    grecaptcha.execute();

    var auto = jQuery("h1").html();
    var name = jQuery("div[data-modal='singleauto'] .callbackform-singleauto input[name='name']").val();
    var email = jQuery("div[data-modal='singleauto'] .callbackform-singleauto input[name='descr']").val();
    var tel = jQuery("div[data-modal='singleauto'] .callbackform-singleauto input[name='tel']").val();
    var descr = jQuery("div[data-modal='singleauto'] .callbackform-singleauto input[name='descr']").val();
    var policy = jQuery("div[data-modal='singleauto'] .callbackform-singleauto input[name='policy']").prop("checked");


    window.dataform = {
        "form": 'singleautoForm',
        "auto": auto,
        "name": name,
        "email": email,
        "tel": tel,
        "descr": descr,
        "policy": policy,
    };
}

function callautosend() {
    // отменим стандартную отправку формы на сервер
    event.preventDefault();
    // если форма прошла валидацию, то вызовем invisible reCaptcha
    grecaptcha.execute();

    var name = jQuery("div[data-modal='callautosend'] .callbackform input[name='name']").val();
    var tel = jQuery("div[data-modal='callautosend'] .callbackform input[name='tel']").val();
    var auto = jQuery("div[data-modal='callautosend']").attr('data-value');
    var policy = jQuery("div[data-modal='callautosend'] .callbackform input[name='policy']").prop("checked");


    window.dataform = {
        "form": 'callautosendForm',
        "auto": auto,
        "name": name,
        "tel": tel,
        "policy": policy,
    };
}

function ordersend() {
    yaCounter47702209.reachGoal('zakazat-zvonok');
    // отменим стандартную отправку формы на сервер
    event.preventDefault();
    // если форма прошла валидацию, то вызовем invisible reCaptcha
    grecaptcha.execute();

    var name = jQuery(".order-form input[name='name']").val();
    var tel = jQuery(".order-form input[name='tel']").val();
    var addr = jQuery(".order-form input[name='addr']").val();
    var descr = jQuery(".order-form input[name='descr']").val();
    var policy = jQuery(".order-form input[name='policy']").prop("checked");

    window.dataform = {
        "form": 'orderForm',
        "name": name,
        "tel": tel,
        "addr": addr,
        "descr": descr,
        "policy": policy,
    };
}

function autosend() {

    // отменим стандартную отправку формы на сервер
    event.preventDefault();
    // если форма прошла валидацию, то вызовем invisible reCaptcha
    grecaptcha.execute();

    var name = jQuery("div[data-modal='auto'] .callbackform input[name='name']").val();
    var tel = jQuery("div[data-modal='auto'] .callbackform input[name='tel']").val();
    var auto = jQuery("div[data-modal='auto']").attr('data-value');
    var policy = jQuery("div[data-modal='auto'] .callbackform input[name='policy']").prop("checked");

    window.dataform = {
        "form": 'autosendForm',
        "auto": auto,
        "name": name,
        "tel": tel,
        "policy": policy,
    };
}

function sendform(token, dataform) {
    if (window.dataform.form == 'callbackForm') {
        console.log(window.dataform.policy)
        jQuery.ajax({
            url: "/wp-content/themes/psm-theme/sendmail.php", // куда отправляем
            type: "post", // метод передачи
            dataType: "json", // тип передачи данных
            data: { // что отправляем
                "name": window.dataform.name,
                "g-recaptcha-response": token,
                "policy": window.dataform.policy,
                "tel": window.dataform.tel
            },
            // после получения ответа сервера
            success: function (data) {
                yaCounter47702209.reachGoal('telefon');
                //jQuery('.messages').html(data.result); // выводим ответ сервера
                if (data) {
                    jQuery('div[data-modal="callback"] .output-form').html(data);
                }

            }
        });
    }

    if (window.dataform.form == 'answerForm') {
        console.log(window.dataform.policy)
        jQuery.ajax({
            url: "/wp-content/themes/psm-theme/sendmail.php", // куда отправляем
            type: "post", // метод передачи
            dataType: "json", // тип передачи данных
            data: { // что отправляем
                "name": window.dataform.name,
                "tel": window.dataform.tel,
                "descr": window.dataform.descr,
                "g-recaptcha-response": token,
                "policy": window.dataform.policy,
            },
            // после получения ответа сервера
            success: function (data) {
                //jQuery('.messages').html(data.result); // выводим ответ сервера
                if (data) {
                    jQuery("div[data-modal='answer'] .output-form").html(data);
                }

            }
        });
    }

    if (window.dataform.form == 'singleautoForm') {
        console.log(window.dataform.policy)
        jQuery.ajax({
            url: "/wp-content/themes/psm-theme/sendmail.php", // куда отправляем
            type: "post", // метод передачи
            dataType: "json", // тип передачи данных
            data: { // что отправляем
                "auto": window.dataform.auto,
                "name": window.dataform.name,
                "tel": window.dataform.tel,
                "email": window.dataform.email,
                "descr": window.dataform.descr,
                "g-recaptcha-response": token,
                "policy": window.dataform.policy,
            },
            // после получения ответа сервера
            success: function (data) {
                //jQuery('.messages').html(data.result); // выводим ответ сервера
                if (data) {
                    jQuery(".callbackform-singleauto .output-form").html(data);
                }

            }
        });
    }

    if (window.dataform.form == 'callautosendForm') {
        console.log(window.dataform.policy)
        jQuery.ajax({
            url: "/wp-content/themes/psm-theme/sendmail.php", // куда отправляем
            type: "post", // метод передачи
            dataType: "json", // тип передачи данных
            data: { // что отправляем
                "auto": window.dataform.auto,
                "name": window.dataform.name,
                "policy": window.dataform.policy,
                "tel": window.dataform.tel,
                "g-recaptcha-response": token,
            },
            // после получения ответа сервера
            success: function (data) {
                //jQuery('.messages').html(data.result); // выводим ответ сервера
                if (data) {
                    jQuery("div[data-modal='callautosend'] .callbackform .output-form").html(data);
                }

            }
        });
    }

    if (window.dataform.form == 'autosendForm') {
        console.log(window.dataform.policy)
        jQuery.ajax({
            url: "/wp-content/themes/psm-theme/sendmail.php", // куда отправляем
            type: "post", // метод передачи
            dataType: "json", // тип передачи данных
            data: { // что отправляем
                "auto": window.dataform.auto,
                "name": window.dataform.name,
                "policy": window.dataform.policy,
                "tel": window.dataform.tel,
                "g-recaptcha-response": token,
            },
            // после получения ответа сервера
            success: function (data) {
                //jQuery('.messages').html(data.result); // выводим ответ сервера
                if (data) {
                    jQuery("div[data-modal='auto'] .output-form").html(data);
                }

            }
        });
    }

    if (window.dataform.form == 'orderForm') {
        jQuery.ajax({
            url: "/wp-content/themes/psm-theme/sendmail.php", // куда отправляем
            type: "post", // метод передачи
            dataType: "json", // тип передачи данных
            data: { // что отправляем
                "addr": window.dataform.addr,
                "name": window.dataform.name,
                "policy": window.dataform.policy,
                "tel": window.dataform.tel,
                "descr": window.dataform.descr,
                "g-recaptcha-response": token,
            },
            // после получения ответа сервера
            success: function (data) {
                //jQuery('.messages').html(data.result); // выводим ответ сервера
                if (data) {
                    jQuery(".order-form .output-form").html(data);
                }

            }
        });
    }


}


(function () {
    window['yandexChatWidgetCallback'] = function () {
        try {
            window.yandexChatWidget = new Ya.ChatWidget({
                guid: 'cbc3ae1a-cf8d-4c36-8e1a-da99a8d5aff8',
                buttonText: '',
                title: 'Чат',
                theme: 'light',
                collapsedDesktop: 'never',
                collapsedTouch: 'never'
            });
        } catch (e) {
        }
    };
    var n = document.getElementsByTagName('script')[0],
        s = document.createElement('script');
    s.async = true;
    s.charset = 'UTF-8';
    s.src = 'https://chat.s3.yandex.net/widget.js';
    n.parentNode.insertBefore(s, n);
})();

document.addEventListener('DOMContentLoaded', function () {

    jQuery(function () {
        jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() != 0) {
                jQuery('#top-but').fadeIn();
            } else {
                jQuery('#top-but').fadeOut();
            }
        });
        jQuery('#top-but').click(function () {
            jQuery('body,html').animate({scrollTop: 0}, 800);
        });
    });

    jQuery("input[name='policy']").attr('checked', 'checked')

}, false);




document.addEventListener("DOMContentLoaded", function () {
    const accordion_item = document.getElementsByClassName('accordion_item');
    const accordion_content = document.getElementsByClassName('accordion_content');
    const accordion_heading_svg = document.getElementsByClassName('accordion_heading_svg');

    for (let i = 0; i < accordion_item.length; i++) {
        accordion_item[i].addEventListener('click', () => toggleItem(i), false);
    }

    function toggleItem(index) {
        let currentElementClassName = accordion_content[index].className;

        if (currentElementClassName === 'accordion_content close') {
            accordion_content[index].className = 'accordion_content open';
            accordion_heading_svg[index].style['transform'] = 'rotate(180deg)';

        } else {
            accordion_content[index].className = 'accordion_content close';
            accordion_heading_svg[index].style['transform'] = 'rotate(360deg)';
        }


        for (let i = 0; i < accordion_content.length; i++) {
            if (index !== i) {

                accordion_content[i].className = 'accordion_content close';
                accordion_heading_svg[i].style['transform'] = 'rotate(360deg)';
            }
        }

    }
});

document.addEventListener('click', (e) => {
    const elem = e.target.closest('[data-call]')

    if (elem) {
        e.preventDefault()
    }
})



// flamp widget -----------start

!function (d, s) {
    var js, fjs = d.getElementsByTagName(s)[0];
    js = d.createElement(s);
    js.async = 1;
    js.src = "//widget.flamp.ru/loader.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, "script");

// flamp widget -----------end