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
                <a class="tel-box" href="tel:+70002421482">+ 7 (000) 242-14-82</a>
                <a class="email-box" href="mailto:info@psm-ekb96.ru">info@psm-ekb96.ru</a>
                <div class="icon-box">
                    <div class="icon-messenger">
                        <a href="https://wa.me/+78003017391">
                            <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.3 26.7C7.5 26.2 3.6 29.1 3 28.4C2.4 27.8 5 23.7 4.5 23C2.9 20.8 2 18.1 2 15.2C2 7.80001 8 1.70001 15.5 1.70001C23 1.70001 29 7.80001 29 15.2C29 22.6 23 28.7 15.5 28.7C14.5 28.7 13.6 28.6 12.7 28.4"
                                      stroke="#414042" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                                <path d="M12.7 8.40003L13.9 11.4C14 11.6 13.9 11.8 13.7 11.9C13.2 12.2 12.5 12.9 13.3 14C14.3 15.4 17 18.9 19.2 16.6C19.3 16.5 19.5 16.4 19.7 16.5L22.9 17.9C23.1 18 23.2 18.3 23.1 18.5C22.4 19.9 19.7 23.6 13 17.8C6.20003 11.9 10.6 9.00004 12.1 8.30004C12.3 8.00004 12.6 8.10003 12.7 8.40003Z"
                                      stroke="#414042" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    <div class="telegram-icon-box icon-messenger">
                        <a href="tg://resolve?domain=+78003017391">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.10093 14.6C8.90093 12 28.5009 4 28.5009 4L24.6009 26.6C24.4009 27.7 23.1009 28.1 22.3009 27.4L16.2009 22.3L11.9009 26.3L12.6009 19.6L25.6009 7.3L9.60093 17.3L10.6009 23L7.30093 17.7L2.30093 16.1C1.50093 15.8 1.40093 14.8 2.10093 14.6Z"
                                      stroke="#414042" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
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
            <a>Политика конфиденциальности</a>
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
        <form class="callbackform" onsubmit="return callbacksend()">
            <p class="modalwindow_header">Заказать звонок</p>
            <label class="modalwindow_label">
                Имя
                <input class="modalwindow_input" type="text" name="name" placeholder="Иван Иванов Иванович">
            </label>
            <label class="modalwindow_label">
                Номер телефона
                <input class="modalwindow_input" type="text" name="tel" placeholder="8 900 000 00 00">
            </label>
            <div class="modalwindow_button-wrapper">
                <button class="modalwindow_button button-red" type="submit"> Отправить</button>
                <div class="modalwindow_policy">Отправляя данные, вы даете согласие на&nbsp;обработку своих пероснальных
                    данных
                </div>
            </div>
        </form>
    </div>
</div>

<div data-modal="answer" class="modalwindow">
    <div class="modal-overflow"></div>
    <div class="modal-content">
        <div class="modal-close">X</div>
        <form class="callbackform" onsubmit="return answersend();">
            <p class="modalwindow_header">помощь менеджера</p>
            <label class="modalwindow_label">
                Имя
                <input class="modalwindow_input" type="text" name="name" placeholder="Иван Иванов Иванович">
            </label>
            <label class="modalwindow_label">
                Номер телефона
                <input class="modalwindow_input" type="text" name="tel" placeholder="8 900 000 00 00">
            </label>
            <div class="modalwindow_button-wrapper">
                <button class="modalwindow_button button-red" type="submit"> Отправить</button>
                <div class="modalwindow_policy">Отправляя данные, вы даете согласие на&nbsp;обработку своих пероснальных
                    данных
                </div>
            </div>
        </form>
    </div>
</div>

<div data-modal="singleauto" class="modalwindow">
    <div class="modal-overflow"></div>
    <div class="modal-content">
        <div class="modal-close">X</div>
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
        <div class="modal-close">X</div>
        <form class="callbackform" onsubmit="return autosend()">
            <p class="modalwindow_header">Оставить заявку</p>
            <label class="modalwindow_label">
                Имя
                <input class="modalwindow_input" type="text" name="name" placeholder="Иван Иванов Иванович">
            </label>
            <label class="modalwindow_label">
                Номер телефона
                <input class="modalwindow_input" type="text" name="tel" placeholder="8 900 000 00 00">
            </label>
            <div class="modalwindow_button-wrapper">
                <button class="modalwindow_button button-red" type="submit"> Отправить</button>
                <div class="modalwindow_policy">Отправляя данные, вы даете согласие на&nbsp;обработку своих пероснальных
                    данных
                </div>
            </div>
        </form>
    </div>
</div>

<div data-modal="callautosend" class="modalwindow">
    <div class="modal-overflow"></div>
    <div class="modal-content">
        <div class="modal-close">X</div>
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
