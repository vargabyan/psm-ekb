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
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>

<noscript>
    <div><img src="https://mc.yandex.ru/watch/91868462" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>


<?PHP
$header_post = get_field('telefoni-shapka', 2069);
?>

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
                   href="tel:<?= $header_post['nomer-1']['nomer'] ?>">
                    <?= $header_post['nomer-1']['nomer'] ?>
                </a>
            </div>
            <div class="header_messenger-wrapper">
                <a class="header_messenger_item" href="<?= $header_post['nomer-1']['messendzher_ikonka-1']['link_messendzhera'] ?>">
                    <img src="<?= $header_post['nomer-1']['messendzher_ikonka-1']['ikonka-1']['url'] ?>" alt="icon">
                </a>
                <a class="header_messenger_item" onclick="yaCounter47702209.reachGoal('telefon');"
                   href="<?= $header_post['nomer-1']['messendzher_ikonka-2']['link_messendzhera'] ?>">
                    <img src="<?= $header_post['nomer-1']['messendzher_ikonka-2']['ikonka-2']['url'] ?>" alt="icon">
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
                   href="tel:<?= $header_post['nomer-2']['nomer'] ?>">
                    <?= $header_post['nomer-2']['nomer'] ?>
                </a>
            </div>
            <p><?= $header_post['nomer-2']['tekst_pod_nomer'] ?></p>
        </div>
        <div class="contacts part-3">
            <div class="top-box">
                <svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.5 0H1.5C0.675 0 0.00749999 0.675 0.00749999 1.5L0 10.5C0 11.325 0.675 12 1.5 12H13.5C14.325 12 15 11.325 15 10.5V1.5C15 0.675 14.325 0 13.5 0ZM13.5 3L7.5 6.75L1.5 3V1.5L7.5 5.25L13.5 1.5V3Z"
                          fill="#ED4646"/>
                </svg>
                <a id="header-email" href="mailto:<?= $header_post['email']['email'] ?>"><?= $header_post['email']['email'] ?></a>
            </div>
            <p><?= $header_post['email']['tekst_pod_email'] ?></p>
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
                <a href="#" class="nav-bar-mobile_button-call" onclick="yaCounter47702209.reachGoal('zakazat-zvonok');"
                   data-call="callback">Заказать звонок</a>
            </div>
        </div>
    </div>

</div>


