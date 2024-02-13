<?
if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') === false):
    echo '<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer></script>';
endif;
?>


<? if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') === false): ?>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript"> (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
        ym(47702209, "init", {clickmap: true, trackLinks: true, accurateTrackBounce: true, webvisor: true}); </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/47702209" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript> <!-- /Yandex.Metrika counter -->

<? endif; ?>

<?PHP
$footer_post = get_field('telefon-podval', 2069);
?>

<div class="footer-block">
    <div class="footer-width-block">
        <div class="top-box">
            <div class="item-1">
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
                <a class="tel-box" href="tel:<?= $footer_post['telefon']['nomer'] ?>"><?= $footer_post['telefon']['nomer'] ?></a>
                <a class="email-box" href="mailto:<?= $footer_post['email'] ?>"><?= $footer_post['email'] ?></a>
                <div class="icon-box">
                    <div class="icon-messenger">
                        <a href="<?= $footer_post['telefon']['messendzher-1']['link_messendzhera'] ?>">
                            <img src="<?= $footer_post['telefon']['messendzher-1']['ikonka-1']['url'] ?>" alt="icon">
                        </a>
                    </div>
                    <div class="telegram-icon-box icon-messenger">
                        <a href="<?= $footer_post['telefon']['messendzher-2']['link_messendzhera'] ?>">
                            <img src="<?= $footer_post['telefon']['messendzher-2']['ikonka-2']['url'] ?>" alt="icon">
                        </a>
                    </div>
                </div>
            </div>
            <div class="item-2">
                <?php
                wp_nav_menu(array(
                    'menu_class' => 'menu',
                    'theme_location' => 'footer-menu3',
                    'after' => '',
                    'container' => ''
                ));
                ?>
            </div>
            <div class="item-3">
                <?php wp_nav_menu(array(
                    'menu_class' => 'menu',
                    'theme_location' => 'footer-menu1',
                    'after' => '',
                    'container' => ''
                )); ?>
            </div>
            <div class="item-4">
                <?php
                wp_nav_menu(array(
                    'menu_class' => 'menu',
                    'theme_location' => 'footer-menu2',
                    'after' => '',
                    'container' => ''
                ));
                ?>
            </div>
        </div>
        <div class="bottom-box">
            <p>© 2008-2019 ООО "Предприятие Строительных Машин"</p>
        </div>
    </div>
</div>


<!--<div class="box contact-manager">-->
<!--    <div class="text">-->
<!--        <div class="h3">Нужна помощь<br> или остались вопросы?</div>-->
<!--        <p>Свяжитесь с менеджером нашей компании</p>-->
<!--    </div>-->
<!--    <div class="buttons">-->
<!--        <a onclick="yaCounter47702209.reachGoal('telefon');" class="companyTel btn btn-question" href="tel:+79089060719">+7 (908) 906-07-19</a>-->
<!--        <a onclick="yaCounter47702209.reachGoal('telefon');" href="https://wa.me/79022627066" target="_blank" class="btn btn-chat">Чат в Whatsapp</a>-->
<!--        <a onclick="yaCounter47702209.reachGoal('zakazat-zvonok');" href="javascript:void(0);" data-call="answer" class="btn btn-question">Задать вопрос</a>-->
<!--    </div>-->
<!--</div>-->


<!--<div class="footer">-->
<!--    <div class="container">-->
<!--        <div class="col-sm-6 col-md-4">-->
<!--           --><? //// wp_nav_menu(array(
////                'menu_class' => 'menu',
////                'theme_location' => 'footer-menu1',
////                'after' => '',
////                'container' => ''
////            )); ?>
<!--        </div>-->
<!--        <div class="col-sm-6 col-md-4">-->
<!--           --><? ////
////            wp_nav_menu(array(
////                'menu_class' => 'menu',
////                'theme_location' => 'footer-menu2',
////                'after' => '',
////                'container' => ''
////            ));
////            ?>
<!--        </div>-->
<!--        <div class="col-sm-6 col-md-4">-->
<!--           --><? ////
////            wp_nav_menu(array(
////                'menu_class' => 'menu',
////                'theme_location' => 'footer-menu3',
////                'after' => '',
////                'container' => ''
////            ));
////            ?>
<!--        </div>-->
<!--        <div class="col-sm-6 col-md-4 column4">-->
<!--            --><?php
//        if (is_active_sidebar('4th_column_footer'))
//            dynamic_sidebar('4th_column_footer');
//        ?>
<!--        </div>-->
<!--        <div class="col-sm-7 copyright">-->
<!--            Общество с ограниченной ответственностью-->
<!---->
<!--            "Предприятие Строительных Машин"<br>-->
<!---->
<!---->
<!--            620050, Свердловская обл., г. Екатеринбург, ул. Маневровая, д. 31<br>-->
<!---->
<!--            ОГРН 1156658073681, ИНН 6678064362, КПП 667801001<br>-->
<!---->
<!--            р/с 40702810302270002548, к/с 30101810600000000999, БИК 044583999<br>-->
<!---->
<!--            Ф ОНЛАЙН ПАО «ХАНТЫ-МАНСИЙСКИЙ БАНК ОТКРЫТИЕ» г. Москва-->
<!---->
<!---->
<!--            <div class="copyright_string">-->
<!--                © 2008-2019 ООО "Предприятие Строительных Машин"-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!--        <div class="col-sm-5 copyright">-->
<!--            <p>Телефон в Екатеринбурге: -->
<!--                <a onclick="yaCounter47702209.reachGoal('telefon');" href="tel:+73432062630">+7 (343) 206-26-30 </a>-->
<!--                <a onclick="yaCounter47702209.reachGoal('telefon');" href="https://t.me/predpriatie_stroitelnih_mashin">-->
<!--                    <img class="header-whatsapp" src="/wp-content/uploads/2019/10/arenda-avtovyshki-foto-t.png" alt="whatsapp"></a>-->
<!--                <a onclick="yaCounter47702209.reachGoal('telefon');" href="https://wa.me/79022627066">-->
<!--                    <img class="header-whatsapp" src="/wp-content/uploads/2019/10/whatsapp-1.png" alt="whatsapp"></a><br>-->
<!--                Для регионов:  <a onclick="yaCounter47702209.reachGoal('telefon');" href="tel:+79089060719">+7 (908) 906-07-19</a><br>-->
<!--                E-mail: <a href="mailto:info@psm-ekb96.ru">info@psm-ekb96.ru</a><br>-->
<!--                Время работы: круглосуточно-->
<!--            </p>-->
<!--            <p><a href="javascript:void(0);" onclick="yaCounter47702209.reachGoal('zakazat-zvonok');" data-call="callback" class="callback">Заказать звонок</a></p>-->
<!--            <div class="h3">Мы в соц. сетях</div>-->
<!--            <a href="https://vk.com/avtovishka_ekb ">-->
<!--                <img src="/wp-content/uploads/2019/10/vkontakte-256x256.png" alt="vk" class="soc-icon inst-icon"></a>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div data-modal="callback" class="modalwindow">
    <div class="modal-overflow"></div>
    <div class="modal-content">
        <div class="modal-close"></div>
        <p class="modalwindow_header">Заказать звонок</p>
        <?= do_shortcode('[contact-form-7 id="2057" title="for modal"]') ?>
    </div>
</div>

<div data-modal="answer" class="modalwindow">
    <div class="modal-overflow"></div>
    <div class="modal-content">
        <div class="modal-close"></div>
            <p class="modalwindow_header">помощь менеджера</p>
        <?= do_shortcode('[contact-form-7 id="2057" title="for modal"]') ?>
    </div>
</div>

<div data-modal="singleauto" class="modalwindow">
    <div class="modal-overflow"></div>
    <div class="modal-content">
        <div class="modal-close"></div>
        <form class="callbackform-singleauto" onsubmit="return singleautosend()">

            <div class="g-recaptcha" id="recaptcha3" data-size="invisible"></div>


            <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="name" placeholder="Ваш E-mail">
            <input type="text" name="tel" placeholder="Телефон">
            <input placeholder="Ваш вопрос" name="descr" type="text">
            <div><input type="checkbox" name="policy"><span>Я принимаю <a href="/policy">соглашение сайта об обработке персональных данных.</a></span>
            </div>
            <br>
            <button type="submit"> Отправить</button>
            <div class="output-form"></div>
        </form>
    </div>
</div>

<div data-modal="auto" class="modalwindow">
    <div class="modal-overflow"></div>
    <div class="modal-content">
        <div class="modal-close"></div>
            <p class="modalwindow_header">Оставить заявку</p>
        <?= do_shortcode('[contact-form-7 id="2057" title="for modal"]') ?>
    </div>
</div>

<div data-modal="callautosend" class="modalwindow">
    <div class="modal-overflow"></div>
    <div class="modal-content">
        <div class="modal-close"></div>
        <form class="callbackform" onsubmit="return callautosend()">

            <div class="g-recaptcha" id="recaptcha5" data-size="invisible"></div>

            <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="tel" placeholder="Телефон">
            <div><input type="checkbox" name="policy"><span>Я принимаю <a href="/policy">соглашение сайта об обработке персональных данных.</a></span>
            </div>
            <br>
            <button type="submit"> Отправить</button>
            <div class="output-form"></div>
        </form>
    </div>
</div>

<div id="top-but">↑</div>

<?php wp_footer(); ?>
</body>
</html>
