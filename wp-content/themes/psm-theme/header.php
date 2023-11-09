<?php
//редиректы из файла
$protocol = (!empty($_SERVER['HTTPS']) && 'off' !== strtolower($_SERVER['HTTPS'])) ? 'https' : 'http';
$host = $protocol . '://' . $_SERVER['HTTP_HOST'];
$path = parse_url($_SERVER['REQUEST_URI'])['path'];
$path = iconv(mb_detect_encoding($path), 'ASCII//TRANSLIT', $path);
//if ($protocol != 'https') {
//    header('HTTP/1.1 301 Moved Permanently');
//    header('Location: ' . 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);
//    exit;
//}
$redirectsMapFilePath = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/psm-theme/redirects.csv';
$redirectsMapFileContent = file_get_contents($redirectsMapFilePath);
$redirectsMapRows = explode("\r\n", $redirectsMapFileContent);
$redirectsMap = [];
foreach ($redirectsMapRows as $row) {
    list($from, $to) = explode(';', $row);
    $_from = iconv(mb_detect_encoding($from), 'ASCII//TRANSLIT', $from);
    $_to = iconv(mb_detect_encoding($to), 'ASCII//TRANSLIT', $to);
    if ($_from) {
        $redirectsMap[$_from] = $_to;
    }
}
if (array_key_exists($path, $redirectsMap)) {
    $toPath = $redirectsMap[$path];
    if ($toPath !== $path) {
        $toUrl = $host . $redirectsMap[$path];
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $toUrl);
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <? wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="/wp-content/uploads/2019/10/arenda-avtovyshki.png"/>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <style>
        .preloader {
            width: 100vw;
            height: 100vh;
            position: fixed;
            background: #fff;
            top: 0;
            left: 0;
            z-index: 99999;
        }
    </style>

    <link rel="stylesheet" href="/wp-content/themes/psm-theme/css/swiper-bundle.min.css">
    <script src="/wp-content/themes/psm-theme/js/swiper-bundle.min.js"></script>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        /*(function (m, e, t, r, i, k, a) {
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
        });*/
    </script>
    <!-- /Yandex.Metrika counter -->

    <!-- Google tag (gtag.js) -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-6XMPF08CWF"></script>
    <script> window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-6XMPF08CWF'); </script>-->
    <!-- Google tag (gtag.js) -->
</head>
<body>
<? //echo get_the_ID() ?>
<!-- Yandex.Metrika counter -->
<noscript>
    <div><img src="https://mc.yandex.ru/watch/91868462" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<script>
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
</script>

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<div id="preloader" class="preloader"></div>


<div class="header-block">

    <div class="background-box">
        <div class="header">
            <div class="your-city">Ваш город:
                <? require 'citylist.php'; ?>
            </div>
            <div class="contact-address">
                <span>г. Екатеринбург, ул. Маневровая, д. 31</span>
                <a href="#" onclick="yaCounter47702209.reachGoal('zakazat-zvonok');" data-call="callback"
                   class="callback">Заказать звонок</a>
            </div>
        </div>
    </div>

    <div class="contacts-info">
        <div class="col-logo">
            <a href="/" title="" class="logo">
                <!--                        <img src="/wp-content/uploads/2019/12/logo.png" alt="логотип Предприятия строительных машин">-->
                <svg width="16" height="41" viewBox="0 0 16 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.2641 0.895198L0.104084 0.897993L6.76495 40.1025L15.9949 40.102L9.2641 0.895198Z"
                          fill="#E13C3C"/>
                </svg>
                <svg width="16" height="41" viewBox="0 0 16 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.16059 0.895198L0.00056788 0.897993L6.66143 40.1025L15.8914 40.102L9.16059 0.895198Z"
                          fill="#E13C3C"/>
                </svg>
            </a>
            <p>
                Предприятие Строительных Машин
            </p>
        </div>
        <div class="contacts part-1">
            <div class="top-box">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.23 9.62889C12.2733 9.62889 11.3478 9.47333 10.4844 9.19333C10.2122 9.1 9.90889 9.17 9.69889 9.38L8.47778 10.9122C6.27667 9.86222 4.21556 7.87889 3.11889 5.6L4.63556 4.30889C4.84556 4.09111 4.90778 3.78778 4.82222 3.51556C4.53444 2.65222 4.38667 1.72667 4.38667 0.77C4.38667 0.35 4.03667 0 3.61667 0H0.925556C0.505556 0 0 0.186667 0 0.77C0 7.99556 6.01222 14 13.23 14C13.7822 14 14 13.51 14 13.0822V10.3989C14 9.97889 13.65 9.62889 13.23 9.62889Z"
                          fill="#ED4646"/>
                </svg>
                <a id="header-phone_1" onclick="yaCounter47702209.reachGoal('telefon');" class="phone"
                   href="tel:+73432062630">+7 (343) 206-26-30</a>
            </div>
            <div class="bottom-box">
                <a id="header-whatsapp" href="https://wa.me/79022627066">
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <circle cx="13" cy="13" r="13" fill="#54CC61"/>
                        <path d="M9.77338 18.7778C9.3882 18.537 7.51042 19.9333 7.22153 19.5963C6.93264 19.3074 8.1845 17.3333 7.94376 16.9963C7.17338 15.937 6.74005 14.637 6.74005 13.2407C6.74005 9.67776 9.62894 6.74072 13.2401 6.74072C16.8512 6.74072 19.7401 9.67776 19.7401 13.2407C19.7401 16.8037 16.8512 19.7407 13.2401 19.7407C12.7586 19.7407 12.3252 19.6926 11.8919 19.5963"
                              fill="#54CC61"/>
                        <path d="M9.77338 18.7778C9.3882 18.537 7.51042 19.9333 7.22153 19.5963C6.93264 19.3074 8.1845 17.3333 7.94376 16.9963C7.17338 15.937 6.74005 14.637 6.74005 13.2407C6.74005 9.67776 9.62894 6.74072 13.2401 6.74072C16.8512 6.74072 19.7401 9.67776 19.7401 13.2407C19.7401 16.8037 16.8512 19.7407 13.2401 19.7407C12.7586 19.7407 12.3252 19.6926 11.8919 19.5963"
                              stroke="white" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M11.8907 9.96666L12.4685 11.4111C12.5166 11.5074 12.4685 11.6037 12.3722 11.6518C12.1314 11.7963 11.7944 12.1333 12.1796 12.663C12.661 13.337 13.961 15.0222 15.0203 13.9148C15.0685 13.8667 15.1647 13.8185 15.261 13.8667L16.8018 14.5407C16.8981 14.5889 16.9462 14.7333 16.8981 14.8296C16.561 15.5037 15.261 17.2852 12.0351 14.4926C8.76104 11.6518 10.8796 10.2556 11.6018 9.91851C11.6981 9.77407 11.8425 9.82222 11.8907 9.96666Z"
                              fill="#54CC61" stroke="white" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </a>
                <a id="header-telegram" onclick="yaCounter47702209.reachGoal('telefon');"
                   href="https://t.me/predpriatie_stroitelnih_mashin">
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <circle cx="13" cy="13" r="13" fill="#3B8AF0"/>
                        <path d="M6.78789 12.3259C10.062 11.074 19.499 7.22217 19.499 7.22217L17.6212 18.1037C17.5249 18.6333 16.899 18.8259 16.5138 18.4888L13.5768 16.0333L11.5064 17.9592L11.8434 14.7333L18.1027 8.81106L10.399 13.6259L10.8805 16.3703L9.29159 13.8185L6.88418 13.0481C6.499 12.9036 6.45085 12.4222 6.78789 12.3259Z"
                              fill="#3B8AF0" stroke="white" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="contacts part-2">
            <div class="top-box">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.23 9.62889C12.2733 9.62889 11.3478 9.47333 10.4844 9.19333C10.2122 9.1 9.90889 9.17 9.69889 9.38L8.47778 10.9122C6.27667 9.86222 4.21556 7.87889 3.11889 5.6L4.63556 4.30889C4.84556 4.09111 4.90778 3.78778 4.82222 3.51556C4.53444 2.65222 4.38667 1.72667 4.38667 0.77C4.38667 0.35 4.03667 0 3.61667 0H0.925556C0.505556 0 0 0.186667 0 0.77C0 7.99556 6.01222 14 13.23 14C13.7822 14 14 13.51 14 13.0822V10.3989C14 9.97889 13.65 9.62889 13.23 9.62889Z"
                          fill="#ED4646"/>
                </svg>
                <a id="header-phone_3" onclick="yaCounter47702209.reachGoal('telefon');" class="phone"
                   href="tel:+79089060719"> +7 (908) 906-07-19</a>
            </div>
            <p>регионов</p>
        </div>
        <div class="contacts part-3">
            <div class="top-box">
                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5 0H1.5C0.675 0 0.00749999 0.675 0.00749999 1.5L0 10.5C0 11.325 0.675 12 1.5 12H13.5C14.325 12 15 11.325 15 10.5V1.5C15 0.675 14.325 0 13.5 0ZM13.5 3L7.5 6.75L1.5 3V1.5L7.5 5.25L13.5 1.5V3Z"
                          fill="#ED4646"/>
                </svg>
                <a id="header-email" href="mailto:info@psm-ekb96.ru">info@psm-ekb96.ru</a>
            </div>
            <p>электронная почта</p>
        </div>
    </div>

    <div class="nav-bar-background">
        <div class="nav-bar">
            <?php
            wp_nav_menu(array(
                'menu_class' => 'menu',
                'theme_location' => 'top',
                'after' => '',
                'container' => ''
            ));
            ?>
        </div>
    </div>


    <div class="nav-menu-mobile-background-wrapper">
        <div class="nav-menu-mobile" data-nav-menu-mobile>
            <a class="naw-menu-mobile_header-link" href="/">
                <p class="naw-menu-mobile_header">Предприятие <br> Строительных <br> Машин</p>
            </a>
            <div class="naw-menu-mobile_tell-wrapper">
                <a class="naw-menu-mobile_tell" href="tel:+7 (908) 906-07-19">+7 (908) 906-07-19</a>
                <p class="naw-menu-mobile_tell-description">Заказать звонок</p>
            </div>
            <button class="naw-menu-mobile_toggle naw-menu-mobile_toggle-close" data-naw-menu-mobile_toggle></button>

            <div class="nav-bar-mobile-wrapper" data-nav-bar-mobile-wrapper>
                <div class="nav-bar-mobile">
                    <?php
                    wp_nav_menu(array(
                        'menu_class' => 'menu',
                        'theme_location' => 'top',
                        'after' => '',
                        'container' => ''
                    ));
                    ?>
                </div>
                <div class="nav-bar-mobile_tell-item">
                    <a class="nav-bar-mobile_tell_number" href="tel:+7 (343) 206-26-30">+7 (343) 206-26-30</a>
                    <div class="nav-bar-mobile_tell_messengers">
                        <div class="nav-bar-mobile_tell_whatsapp"></div>
                        <div class="nav-bar-mobile_tell_telegram"></div>
                    </div>
                </div>
                <div class="nav-bar-mobile_tell-item">
                    <p class="nav-bar-mobile_tell_description">для регионов</p>
                    <a class="nav-bar-mobile_tell_number" href="tel:+7 (343) 206-26-30">+7 (343) 206-26-30</a>
                </div>
                <p class="nav-bar-mobile_location">
                    г. Екатеринбург, <br>
                    ул. Маневровая, д. 31
                </p>
                <a href="#" class="nav-bar-mobile_button-call" onclick="yaCounter47702209.reachGoal('zakazat-zvonok');" data-call="callback">Заказать звонок</a>
            </div>
        </div>
    </div>

</div>


<script src="/wp-content/themes/psm-theme/js/home.js"></script>

<!---->
<!--<div id="header">-->
<!--    <div class="container">-->
<!--        <div class="row holder">-->
<!--            <div class="col-sm-3 col-xs-6">-->
<!--                <a href="/" title="" class="logo">-->
<!--                    <img src="/wp-content/uploads/2019/12/logo.png" alt="логотип Предприятия строительных машин">-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-sm-9 col-xs-12 text-right">-->
<!--                <div class="col-sm-5 select-city text-left">-->
<!--                    <div>Ваш город:-->
<!--                        <*? require 'citylist.php'; ?>-->
<!--                        <br><br>Адрес: <span>620050</span>, <span>Свердловская обл., <br> г. Екатеринбург, ул. Маневровая, д. 31</span><br>-->
<!--                        Время работы: Круглосуточно-->
<!--                    </div>-->
<!--                    <div><a href="#" onclick="yaCounter47702209.reachGoal('zakazat-zvonok');" data-call="callback"-->
<!--                            class="callback">Заказать звонок</a><a href="mailto:info@psm-ekb96.ru"></a></div>-->
<!--                </div>-->
<!--                <div class="col-sm-7">-->
<!--                    <div class="contacts">-->
<!--                        <div class="contacts">-->
<!--                            <div>Телефоны:-->
<!--                                <a id="header-phone_1" onclick="yaCounter47702209.reachGoal('telefon');" class="phone"-->
<!--                                   href="tel:+73432062630">+7 (343) 206-26-30</a>-->
<!--                            </div>-->
<!--                            <div>-->
<!--                                <a id="header-telegram" onclick="yaCounter47702209.reachGoal('telefon');"-->
<!--                                   href="https://t.me/predpriatie_stroitelnih_mashin">-->
<!--                                    <img class="header-whatsapp"-->
<!--                                         src="/wp-content/uploads/2019/10/arenda-avtovyshki-foto-t.png" alt="whatrsapp">-->
<!--                                </a>-->
<!--                                <a id="header-whatsapp" href="https://wa.me/79022627066">-->
<!--                                    <img class="header-whatsapp" src="/wp-content/uploads/2019/10/whatsapp-1.png"
                                     alt="whatsapp">-->
<!--                                </a>-->
<!--                                <a id="header-phone_2" class="phone" href="tel:+79022627066">+7 (902) 262-70-66</a>-->
<!--                            </div>-->
<!--                            Для регионов: <a id="header-phone_3" onclick="yaCounter47702209.reachGoal('telefon');"-->
<!--                                             class="phone" href="tel:+79089060719"> +7 (908) 906-07-19</a>-->
<!--                            <div>E-mail: <a id="header-email" href="mailto:info@psm-ekb96.ru">info@psm-ekb96.ru</a>-->
<!--                            </div>-->
<!--                            <span style="display: none;" class="company">ООО "Предприятие Строительных Машин"</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <img class="mob-button" src="/wp-content/uploads/2019/11/menu.png" alt="menu">-->
<!--            </div>-->
<!--            <div class="col-sm-12">-->
<!--                <nav>-->
<!--                    <*?php-->
<!--                    wp_nav_menu(array(-->
<!--                        'menu_class' => 'menu',-->
<!--                        'theme_location' => 'top',-->
<!--                        'after' => '',-->
<!--                        'container' => ''-->
<!--                    ));-->
<!--                    ?>-->
<!--                </nav>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="mobile-menu1">-->
<!--    <div class="mobile-menu-container">-->
<!--        <div class="mobile-header">-->
<!--            <div class="mobile-menu-close">X</div>-->
<!--            <h3 class="muted"><a href="/"><img src="/wp-content/uploads/2019/12/logo.png"-->
<!--                                               alt="логотип Предприятия строительных машин"></a></h3></div>-->
<!--        <div class="mobile-menu-content text-center">                <*?php wp_nav_menu(array('menu_class' => 'menu', 'theme_location' => 'top', 'after' => '', 'container' => '')); ?>            </div>-->
<!--    </div>-->
<!--</div>-->

