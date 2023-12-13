<?php
/*
 * Template Name: Главная
 * Template Post Type: page
 * */

get_header();
?>

    <div class="poster-block width-block">
        <div class="container-fluid poster-block-background">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-lg-7">
                    <div class="left-block">
                        <div class="box-1">
                            <button>Низкие цены</button>
                            <button>Оперативно</button>
                            <button>Большой выбор автовышек - более ХХХ</button>
                        </div>
                        <div class="box-2">
                            <p>Аренда автовышек от <span>1200 рублей/час</span></p>
                            <ul>
                                <li>У нас собственный парк автовышек АГП от 15 до 45 метров от 900 руб./час (без учета
                                    НДС
                                    20%)
                                </li>
                            </ul>
                        </div>
                        <div class="box-3">
                            <div class="col-svg">
                                <svg width="17" height="55" viewBox="0 0 17 55" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.3496 2.511C14.6073 2.61009 14.7359 2.89936 14.6368 3.15712L13.0221 7.35742C12.923 7.61517 12.6337 7.74379 12.376 7.6447C12.1182 7.54561 11.9896 7.25633 12.0887 6.99858L13.524 3.26498L9.79043 1.82963C9.53268 1.73054 9.40406 1.44126 9.50315 1.18351C9.60224 0.925759 9.89151 0.797139 10.1493 0.896229L14.3496 2.511ZM15.5239 54.2435C9.63503 48.4802 3.06564 38.3717 1.03303 28.3057C0.0152534 23.2654 0.128218 18.2004 2.07244 13.6921C4.02119 9.1734 7.78634 5.26891 13.967 2.52082L14.3733 3.43457C8.38912 6.09529 4.82641 9.83148 2.99069 14.0881C1.15044 18.3553 1.02231 23.2004 2.01324 28.1077C3.99804 37.937 10.4452 47.8739 16.2234 53.5288L15.5239 54.2435Z"
                                          fill="#BEBEBE"/>
                                </svg>
                            </div>
                            <div>
                                <a href="#" onclick="yaCounter47702209.reachGoal('zakazat-zvonok');" data-call="callback">
                                    <button class="button-red">Получить персональное предложение
                                    </button>
                                </a>
                                <p>Оператор перезвонит Вам и подберет машину под Вашу заявку, а также согласует
                                    цену.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-md-5 padding-0">
                    <div class="right-block">
                        <img src="/wp-content/uploads/2023/07/image-209.png" alt="Аренда автовышки">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-showcase width-block">
        <h2>Наши машины</h2>

        <?php
            $categories = [
                'taxonomy' => 'arenda-autovyshek',
                'type' => 'uslugi-autovyshki',
                'orderby' => 'name',
                'order' => 'ASC'
            ];

            component_get_cat($categories);
        ?>

        <?php
            $args = [
                'post_type' => 'uslugi-autovyshki', // Указываем наш новый тип записи
                'posts_per_page' => 3,
            ];

            component_get_auto($args);
        ?>

        <div class="product-showcase_button-show-more-wrapper">
            <button class="product-showcase_button-show-more button-blue">Перейти в каталог автовышек</button>
        </div>
    </div>


<?php do_shortcode('[our-advantages]') ?>

<?= do_shortcode('[work_steps]') ?>

    <DIV class="our-truck-crane-block width-block">

        <div class="top-box">
            <p>Наши автовышки используют для <span>разнообразных работ</span> <br> <span>и не только</span></p>
            <div>
                <div class="our-truck-crane-swiper-button-prev swiper-button-prev-white"></div>
                <div class="our-truck-crane-swiper-button-next swiper-button-next-red"></div>
            </div>
        </div>

        <div class="our-truck-crane-swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="our-truck-crane_item">
                        <img loading="lazy" class="alignleft wp-image-974 size-medium"
                             src="http://psm-ekb96.ru/wp-content/uploads/2020/01/arenda-avtovyshki-foto007-300x225.jpg"
                             alt="Автовышка для монтажа рекламной конструкции УГМК" width="300" height="225"/>
                        <div class="info-box">
                            <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-reklamnoj-konstrukcii-ugmk-g-verhnyaya-pyshma/">Вид
                                АГП: Автовышка 45 м вездеход</a>
                            <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-reklamnoj-konstrukcii-ugmk-g-verhnyaya-pyshma/">ОБЪЕКТ:
                                г.Верхняя Пышма , УГМК. Осуществлен монтаж рекламной конструкции.</a>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="our-truck-crane_item">
                        <img loading="lazy" class="alignnone size-medium wp-image-223"
                             src="http://psm-ekb96.ru/wp-content/uploads/2019/11/arenda-avtovyshki-foto001-300x225.jpg"
                             alt="Аренда автовышки" width="300" height="225"/>
                        <div class="info-box">
                            <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-fasada-klubnogo-doma-tihvin-g-ekaterinburg/">Вид
                                АГП: Вышка 45 м телескопическая</a>
                            <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-fasada-klubnogo-doma-tihvin-g-ekaterinburg/">ОБЪЕКТ:
                                клубный дом Тихвин г. Екатеринбург, ООО Технология. С помощью АГП 45 м выполняется
                                работа
                                художников по фасаду, высота здания 45 м.</a>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="our-truck-crane_item">
                        <img loading="lazy" class="alignnone wp-image-227 size-medium"
                             src="http://psm-ekb96.ru/wp-content/uploads/2019/11/arenda-avtovyshki-foto002-300x225.jpg"
                             alt="Аренда автовышки" width="300" height="225"/>
                        <div class="info-box">
                            <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-oborudovaniya-sotovoj-svyazi-tele-2-pos-klyuchi/">Вид
                                АГП: Вышка 40 м</a>
                            <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-oborudovaniya-sotovoj-svyazi-tele-2-pos-klyuchi/">ОБЪЕКТ:
                                Свердловская обл, Сысертский район, пос . Ключи , ООО Квазар Урал. Установка столба 40 м
                                и
                                монтаж оборудования сотовой связи ТЕЛЕ 2.</a>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="our-truck-crane_item">
                        <img loading="lazy" class="alignnone size-medium wp-image-231"
                             src="http://psm-ekb96.ru/wp-content/uploads/2019/11/arenda-avtovyshki-foto003-300x225.jpg"
                             alt="аренда автовышки" width="300" height="225"/>
                        <div class="info-box">
                            <a href="https://psm-ekb96.ru/foto/aavtovyshka-vezdekhod-dlya-zameny-steklopaketov-g-ekaterinburg-tekhnopark/">Вид
                                АГП: Вышка 45 м</a>
                            <a href="https://psm-ekb96.ru/foto/aavtovyshka-vezdekhod-dlya-zameny-steklopaketov-g-ekaterinburg-tekhnopark/">ОБЪЕКТ:
                                г. Екатеринбург, ООО Рост-Импульс. В Технопарке наша  вышка 45 м вездеход помогала в
                                замене
                                стеклопакетов. Расстояние до здания 28 м, высота подъема 27 м.</a>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="our-truck-crane_item">
                        <img loading="lazy" class="alignnone size-medium wp-image-232"
                             src="http://psm-ekb96.ru/wp-content/uploads/2019/11/arenda-avtovyshki-foto004-300x225.jpg"
                             alt="Аренда автовышки" width="300" height="225"/>
                        <div class="info-box">
                            <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-klininga-fasada-gu-sberbanka-g-ekaterinburg/">Вид
                                АГП: Автовышка 40 м</a>
                            <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-klininga-fasada-gu-sberbanka-g-ekaterinburg/">ОБЪЕКТ:
                                г. Екатеринбург, Главное Управление Сбербанка. Работы по клинингу фасада и остекления от
                                здания
                                16 м , высота 43 м.</a>
                        </div>

                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="our-truck-crane_item">
                        <img loading="lazy" class="alignnone size-medium wp-image-236"
                             src="http://psm-ekb96.ru/wp-content/uploads/2019/11/arenda-avtovyshki-foto007-300x225.jpg"
                             alt="Аренда автовышки" width="300" height="225"/>
                        <div class="info-box">
                            <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-uteplenie-perekrytiya-g-pervouralsk/">Вид
                                АГП:
                                Автовышка 40 м</a>
                            <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-uteplenie-perekrytiya-g-pervouralsk/">ОБЪЕКТ:
                                г.
                                Первоуральск, ООО АС-Логистик. Утепление перекрытия по фасаду жилого дома. Расстояние от
                                здания
                                15 м, высота 30 м.</a>
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="hidden-bottom-button">
            <div class="our-truck-crane-swiper-button-prev swiper-button-prev-white">
                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.70508 11.4119L1.29331 6.0001L6.70508 0.588336" stroke="#ED4646" stroke-width="1.35294"/>
                </svg>
            </div>
            <div class="our-truck-crane-swiper-button-next swiper-button-next-red">
                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.29492 0.588135L6.70669 5.9999L1.29492 11.4117" stroke="white" stroke-width="1.35294"/>
                </svg>
            </div>
        </div>

    </DIV>

<?php do_shortcode('[help_block]'); ?>

    <div class="block-for-our-clients">
        <div class="left-box">
            <p>Наши клиенты</p>
        </div>
        <div class="right-box">
            <div><img class="our-client_item_img" loading="lazy" src="/wp-content/uploads/2019/10/mesto.jpg"
                      alt="logo"/>
            </div>
            <div><img class="our-client_item_img" loading="lazy" src="/wp-content/uploads/2019/10/megafon.jpg"
                      alt="logo"/>
            </div>
            <div><img class="our-client_item_img" loading="lazy" src="/wp-content/uploads/2019/10/logo.png" alt="logo"/>
            </div>
            <div><img class="our-client_item_img" loading="lazy" src="/wp-content/uploads/2019/10/kvazar_logo.jpg"
                      alt="logo"/></div>
            <div><img class="our-client_item_img" loading="lazy"
                      src="/wp-content/uploads/2019/10/free-vector-tele2_041367_tele2.png" alt="logo"/></div>
            <div><img class="our-client_item_img" loading="lazy" class="alignnone size-full wp-image-238"
                      src="http://psm-ekb96.ru/wp-content/uploads/2019/11/02-222x65_crop.png" alt="" width="222"
                      height="65"/></div>
            <div><img class="our-client_item_img" loading="lazy"
                      src="/wp-content/uploads/2019/10/70234_54eefa1d5fd5d54eefa1d5fd94.jpeg" alt="logo"/></div>
            <div><img class="our-client_item_img" loading="lazy"
                      src="/wp-content/uploads/2019/10/1200px-logotip_russkaja_mednaja_kompanija.svg_.png" alt="logo"/>
            </div>
        </div>
    </div>

    <div class="block-reviews width-block">
        <?= do_shortcode('[reviews]'); ?>
    </div>

<?php do_shortcode('[question_and_answer]'); ?>

    <div class="contacts-block width-block">
        <div class="left-box">
            <p class="part-1">Контакты</p>
            <p class="part-2">Свяжитесь с нами</p>
            <a class="left-box-tel" href="tel:70002421482">+ 7 (000) 242-14-82</a>
            <a class="left-box-mail" href="mailto:info@psm-ekb96.ru">info@psm-ekb96.ru</a>
        </div>
        <div class="right-box">
            <p class="part-1">Мы находимся</p>
            <p class="part-2">Свердловская обл., г. Екатеринбург, ул. Маневровая, д. 31</p>
            <div class="link-box">
                <a href="/kontakty">Посмотреть нас на карте</a>
                <svg width="41" height="8" viewBox="0 0 41 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M40.8536 4.35355C41.0488 4.15829 41.0488 3.84171 40.8536 3.64645L37.6716 0.464466C37.4763 0.269204 37.1597 0.269204 36.9645 0.464466C36.7692 0.659728 36.7692 0.976311 36.9645 1.17157L39.7929 4L36.9645 6.82843C36.7692 7.02369 36.7692 7.34027 36.9645 7.53553C37.1597 7.7308 37.4763 7.7308 37.6716 7.53553L40.8536 4.35355ZM0 4.5H40.5V3.5H0V4.5Z"
                          fill="black"/>
                </svg>
            </div>
            <div class="box-messengers">
                <div>
                    <div>
                        <img src="/wp-content/uploads/2023/07/Ellipse%2086.png" alt="">
                    </div>
                    <div class="whatsapp-box">
                        <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.3 26C6.5 25.5 2.6 28.4 2 27.7C1.4 27.1 4 23 3.5 22.3C1.9 20.1 1 17.4 1 14.5C1 7.1 7 1 14.5 1C22 1 28 7.1 28 14.5C28 21.9 22 28 14.5 28C13.5 28 12.6 27.9 11.7 27.7"
                                  stroke="white" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M11.7 7.70008L12.9 10.7001C13 10.9001 12.9 11.1001 12.7 11.2001C12.2 11.5001 11.5 12.2001 12.3 13.3001C13.3 14.7001 16 18.2001 18.2 15.9001C18.3 15.8001 18.5 15.7001 18.7 15.8001L21.9 17.2001C22.1 17.3001 22.2 17.6001 22.1 17.8001C21.4 19.2001 18.7 22.9001 12 17.1001C5.2 11.2001 9.6 8.30008 11.1 7.60008C11.3 7.30008 11.6 7.40008 11.7 7.70008Z"
                                  stroke="white" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="telegram-box">
                        <svg width="29" height="26" viewBox="0 0 29 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.10093 11.6C7.90093 9 27.5009 1 27.5009 1L23.6009 23.6C23.4009 24.7 22.1009 25.1 21.3009 24.4L15.2009 19.3L10.9009 23.3L11.6009 16.6L24.6009 4.3L8.60093 14.3L9.60093 20L6.30093 14.7L1.30093 13.1C0.500925 12.8 0.400925 11.8 1.10093 11.6Z"
                                  stroke="white" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <p>Ответим на все интересующие вас вопросы, предложим интересные решения</p>
            </div>
        </div>
    </div>

<?php get_footer(); ?>


    <!--<section class="main">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-7 adaptivecol-img"><img src="/wp-content/uploads/2023/06/arenda-avtovyshki-min.webp" alt="Аренда автовышки" /></div>-->
    <!--            <div class="col-md-5">-->
    <!--                <h1>Автовышки</h1>-->
    <!--                Оператор перезвонит Вам и подберет машину под-->
    <!--                Вашу заявку, а также согласует цену.-->
    <!--                У нас собственный парк автовышек АГП от 15 до 45 метров от 900 руб./час (без учета НДС 20%).-->
    <!--                <div class="col-xs-12 order-form">-->
    <!--                    <div class="h2">Хотите арендовать автовышку для высотных работ?</div>-->
    <!--                    Тогда оставьте заявку, чтобы найти услуги АГП в Екатеринбурге-->
    <!--                    <form>-->
    <!--                        <div class="row">-->
    <!--                            <div id="recaptcha6" class="g-recaptcha" data-size="invisible"></div>-->
    <!--                            <div class="col-md-4"><input name="name" type="text" placeholder="Ваше имя" /></div>-->
    <!--                            <div class="col-md-4"><input name="tel" type="text" placeholder="+7(999)999-99-99" /></div>-->
    <!--                            <div class="col-md-4"><input name="addr" type="text" placeholder="Ваш e-mail" /></div>-->
    <!--                            <div class="col-md-12"><input name="descr" type="text" placeholder="Подробнее о заказе" />-->
    <!--                                <input name="policy" type="checkbox" />Я принимаю <a href="/policy">соглашение сайта об обработке персональных данных.</a>-->
    <!--                                <button class="order-but but-auto" type="submit">Отправить</button>-->
    <!--                                <div class="output-form"></div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </form></div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="row stock-block">-->
    <!--            <div class="col-md-6">-->
    <!--                <p class="text-center">БОЛЬШОЙ ВЫБОР АВТОВЫШЕК. НИЗКИЕ ЦЕНЫ.ОПЕРАТИВНО.</p>-->
    <!--            </div>-->
    <!--            <div class="col-xs-6 col-md-3"><a class="order-but but-auto" data-call="callback">Персональное предложение</a></div>-->
    <!--            <div class="col-xs-6 col-md-3"><a class="order-but but-auto" href="#" data-call="callback">Акция</a></div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!--<div class="product-section">-->
    <!--    <div class="text-center h2">Наши машины</div>-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            --><? //= do_shortcode('[auto]'); ?>
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="category-section">-->
    <!--    <div class="container">-->
    <!--        <div class="row all-hidden catrow all-hidden all-cat">-->
    <!---->
    <!--            --><? //= do_shortcode('[cat]'); ?>
    <!---->
    <!--        </div>-->
    <!--        <div class="flexdiv"><a class="show-all">Показать все</a></div>-->
    <!--        <div class="flexdiv"><a class="hide-all" style="display: none;">Скрыть все</a></div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="advantages-section">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="text-center h2">Наши преимущества</div>-->
    <!--            <div class="col-sm-4 col-md-4">-->
    <!--                <div class="advantages-card">-->
    <!--                    <div class="advantages-image"><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-operativno.png" alt="Оперативная доставка" /></div>-->
    <!--                    <div class="advantages-title">-->
    <!--                        <div class="h3">Оперативная доставка. Всегда вовремя.</div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-sm-4 col-md-4">-->
    <!--                <div class="advantages-card">-->
    <!--                    <div class="advantages-image"><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-24.png" alt="Работа в круглосуточном режиме" /></div>-->
    <!--                    <div class="advantages-title">-->
    <!--                        <div class="h3">Работа в круглосуточном режиме</div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-sm-4 col-md-4">-->
    <!--                <div class="advantages-card">-->
    <!--                    <div class="advantages-image"><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-sale.png" alt="Собственный автопарк" /></div>-->
    <!--                    <div class="advantages-title">-->
    <!--                        <div class="h3">Собственный автопарк</div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        &nbsp;-->
    <!--        <div class="row">-->
    <!--            <div class="col-sm-4 col-md-4">-->
    <!--                <div class="advantages-card">-->
    <!--                    <div class="advantages-image"><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-voditeli.png" alt="Современная техника в отличном состоянии" /></div>-->
    <!--                    <div class="advantages-title">-->
    <!--                        <div class="h3">Современная техника в отличном состоянии</div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-sm-4 col-md-4">-->
    <!--                <div class="advantages-card">-->
    <!--                    <div class="advantages-image"><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-rostehnadzor.png" alt="Разрешения РосТехНадзора" /></div>-->
    <!--                    <div class="advantages-title">-->
    <!--                        <div class="h3">Разрешения РосТехНадзора</div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-sm-4 col-md-4">-->
    <!--                <div class="advantages-card">-->
    <!--                    <div class="advantages-image"><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-nds.png" alt="Безналичный расчет, НДС" /></div>-->
    <!--                    <div class="advantages-title">-->
    <!--                        <div class="h3">Безналичный расчет, НДС</div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="seo-section">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-6 text-center"><img loading="lazy" class="alignnone" src="/wp-content/uploads/2019/10/p2.jpg" alt="Аренда автовышки" width="340" height="320" /></div>-->
    <!--            <div class="col-md-6">-->
    <!--                <div class="h3">О нас</div>-->
    <!--                ООО «Предприятие Строительных Машин» существует на рынке специальной техники уже более 11 лет. За это время мы смогли не только собрать внушительный собственный парк автовышек – есть АГП 15, 22, 28, 30, 40, 45 метров, но и наладить максимально удобную и прозрачную систему документации при заключении договора с клиентом. Каждая наша машина телескопическая (ссылку потом пропишем), вся техника прошла регистрацию в РОСТЕХНАДЗОРЕ, за рулем аттестованные машинисты. Подача спецтехники с люлькой 24 часа в сутки. Арендовать автогидроподьемник на час вы можете по безналичному расчету, мы работаем с НДС.-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="work-section">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-sm-6">-->
    <!--                <div class="h3">Наши работы</div>-->
    <!--                <div class="portfolio-slider-wrapper">-->
    <!--                    <div class="swiper portfolio-slider">-->
    <!--                        <div class="swiper-wrapper">-->
    <!--                            <img loading="lazy" class="swiper-slide portfolio-slide" alt="portfolio" src="/wp-content/uploads/2019/10/a-v-40-m-montazh-vyshki-40-m-dlja-sotovoj-svjazi-megafon-min.jpg">-->
    <!--                            <img loading="lazy" class="swiper-slide portfolio-slide" alt="portfolio" src="/wp-content/uploads/2019/10/a-v-45-m-mojka-fasada-vysota-43-m-upravlenie-sberbanka-min.jpg">-->
    <!--                            <img loading="lazy" class="swiper-slide portfolio-slide" alt="portfolio" src="/wp-content/uploads/2019/10/a-v-45-m-rabota-hudozhnikov-min.jpg">-->
    <!--                            <img loading="lazy" class="swiper-slide portfolio-slide" alt="portfolio" src="/wp-content/uploads/2019/10/av-45-m-stroitelsvo-muzeja-v.pyshma-min.jpg">-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <button class="portfolio-slider_nav-btn prev"></button>-->
    <!--                    <button class="portfolio-slider_nav-btn next"></button>-->
    <!--                </div>-->
    <!--                --><? ///*= do_shortcode('[smartslider3 slider=2]'); */?>
    <!--            </div>-->
    <!--            <div class="col-sm-6">-->
    <!--                <div class="h3">Техника на карте</div>-->
    <!--                --><? //= do_shortcode('[add_map]'); ?>
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

<? //= do_shortcode('[reviews]'); ?>

<? //= do_shortcode('[work_steps]'); ?>

    <!--<div class="container news-section">-->
    <!--    <div class="row">-->
    <!--        <div class="col-md-12">-->
    <!--            <div class="h2 wow fadeInUp animated" style="visibility: visible;"><span style="color: #333333;"><a style="color: #333333;" href="https://psm-ekb96.ru/foto/">Наши автовышки в работе</a></span></div>-->
    <!--        </div>-->
    <!--        <div class="col-md-4 col-sm-6 p0">-->
    <!--            <div class="news-card">-->
    <!---->
    <!--                <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-reklamnoj-konstrukcii-ugmk-g-verhnyaya-pyshma/"><img loading="lazy" class="alignleft wp-image-974 size-medium" src="http://psm-ekb96.ru/wp-content/uploads/2020/01/arenda-avtovyshki-foto007-300x225.jpg" alt="Автовышка для монтажа рекламной конструкции УГМК" width="300" height="225" /></a>-->
    <!--                <div class="news-descr">-->
    <!--                    <h3><span style="color: #ffffff;"><a style="color: #ffffff;" href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-reklamnoj-konstrukcii-ugmk-g-verhnyaya-pyshma/">Вид АГП: Автовышка 45 м вездеход</a></span></h3>-->
    <!--                    <span style="color: #ffffff;"><a style="color: #ffffff;" href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-reklamnoj-konstrukcii-ugmk-g-verhnyaya-pyshma/">ОБЪЕКТ:  г.Верхняя Пышма , УГМК. Осуществлен монтаж рекламной конструкции.</a></span>-->
    <!---->
    <!--                    ДАТА: 26 января 2020 г.-->
    <!---->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-md-4 col-sm-6 p0">-->
    <!--            <div class="news-card">-->
    <!---->
    <!--                <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-fasada-klubnogo-doma-tihvin-g-ekaterinburg/"><img loading="lazy" class="alignnone size-medium wp-image-223" src="http://psm-ekb96.ru/wp-content/uploads/2019/11/arenda-avtovyshki-foto001-300x225.jpg" alt="Аренда автовышки" width="300" height="225" /></a>-->
    <!--                <div class="news-descr">-->
    <!--                    <h3><span style="color: #ffffff;"><a style="color: #ffffff;" href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-fasada-klubnogo-doma-tihvin-g-ekaterinburg/">Вид АГП: Вышка 45 м телескопическая</a></span></h3>-->
    <!--                    <span style="color: #ffffff;"><a style="color: #ffffff;" href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-fasada-klubnogo-doma-tihvin-g-ekaterinburg/">ОБЪЕКТ:  клубный дом Тихвин г. Екатеринбург, ООО Технология. С помощью АГП 45 м выполняется работа художников по фасаду, высота здания 45 м.</a></span>-->
    <!---->
    <!--                    ДАТА: октябрь 2019-->
    <!---->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-md-4 col-sm-6 p0">-->
    <!--            <div class="news-card">-->
    <!---->
    <!--                <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-oborudovaniya-sotovoj-svyazi-tele-2-pos-klyuchi/"><img loading="lazy" class="alignnone wp-image-227 size-medium" src="http://psm-ekb96.ru/wp-content/uploads/2019/11/arenda-avtovyshki-foto002-300x225.jpg" alt="Аренда автовышки" width="300" height="225" /></a>-->
    <!--                <div class="news-descr">-->
    <!--                    <h3><span style="color: #ffffff;"><a style="color: #ffffff;" href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-oborudovaniya-sotovoj-svyazi-tele-2-pos-klyuchi/">Вид АГП: Вышка 40 м</a></span></h3>-->
    <!--                    <span style="color: #ffffff;"><a style="color: #ffffff;" href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-oborudovaniya-sotovoj-svyazi-tele-2-pos-klyuchi/">ОБЪЕКТ: Свердловская обл, Сысертский район, пос . Ключи , ООО Квазар Урал. Установка столба 40 м и монтаж оборудования сотовой связи ТЕЛЕ 2.</a></span>-->
    <!---->
    <!--                    ДАТА: октябрь 2019-->
    <!---->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-md-4 col-sm-6 p0">-->
    <!--            <div class="news-card">-->
    <!---->
    <!--                <a href="https://psm-ekb96.ru/foto/aavtovyshka-vezdekhod-dlya-zameny-steklopaketov-g-ekaterinburg-tekhnopark/"><img loading="lazy" class="alignnone size-medium wp-image-231" src="http://psm-ekb96.ru/wp-content/uploads/2019/11/arenda-avtovyshki-foto003-300x225.jpg" alt="аренда автовышки" width="300" height="225" /></a>-->
    <!--                <div class="news-descr">-->
    <!--                    <h3><span style="color: #ffffff;"><a style="color: #ffffff;" href="https://psm-ekb96.ru/foto/aavtovyshka-vezdekhod-dlya-zameny-steklopaketov-g-ekaterinburg-tekhnopark/">Вид АГП: Вышка 45 м</a></span></h3>-->
    <!--                    <span style="color: #ffffff;"><a style="color: #ffffff;" href="https://psm-ekb96.ru/foto/aavtovyshka-vezdekhod-dlya-zameny-steklopaketov-g-ekaterinburg-tekhnopark/">ОБЪЕКТ:  г. Екатеринбург, ООО Рост-Импульс. В Технопарке наша  вышка 45 м вездеход помогала в замене стеклопакетов. Расстояние до здания 28 м, высота подъема 27 м.</a></span>-->
    <!---->
    <!--                    ДАТА: октябрь 2019-->
    <!---->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-md-4 col-sm-6 p0">-->
    <!--            <div class="news-card">-->
    <!---->
    <!--                <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-klininga-fasada-gu-sberbanka-g-ekaterinburg/"><img loading="lazy" class="alignnone size-medium wp-image-232" src="http://psm-ekb96.ru/wp-content/uploads/2019/11/arenda-avtovyshki-foto004-300x225.jpg" alt="Аренда автовышки" width="300" height="225" /></a>-->
    <!--                <div class="news-descr">-->
    <!--                    <h3><span style="color: #ffffff;"><a style="color: #ffffff;" href="https://psm-ekb96.ru/foto/avtovyshka-dlya-klininga-fasada-gu-sberbanka-g-ekaterinburg/">Вид АГП: Автовышка 40 м</a></span></h3>-->
    <!--                    <span style="color: #ffffff;"><a style="color: #ffffff;" href="https://psm-ekb96.ru/foto/avtovyshka-dlya-klininga-fasada-gu-sberbanka-g-ekaterinburg/">ОБЪЕКТ: г. Екатеринбург, Главное Управление Сбербанка. Работы по клинингу фасада и остекления от здания 16 м , высота 43 м.</a></span>-->
    <!---->
    <!--                    ДАТА: октябрь 2019-->
    <!---->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="col-md-4 col-sm-6 p0">-->
    <!--            <div class="news-card">-->
    <!---->
    <!--                <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-uteplenie-perekrytiya-g-pervouralsk/"><img loading="lazy" class="alignnone size-medium wp-image-236" src="http://psm-ekb96.ru/wp-content/uploads/2019/11/arenda-avtovyshki-foto007-300x225.jpg" alt="Аренда автовышки" width="300" height="225" /></a>-->
    <!--                <div class="news-descr">-->
    <!--                    <h3><span style="color: #ffffff;"><a style="color: #ffffff;" href="https://psm-ekb96.ru/foto/avtovyshka-dlya-uteplenie-perekrytiya-g-pervouralsk/">Вид АГП: Автовышка 40 м</a></span></h3>-->
    <!--                    <span style="color: #ffffff;"><a style="color: #ffffff;" href="https://psm-ekb96.ru/foto/avtovyshka-dlya-uteplenie-perekrytiya-g-pervouralsk/">ОБЪЕКТ: г. Первоуральск, ООО АС-Логистик.  Утепление перекрытия по фасаду жилого дома. Расстояние от здания 15 м, высота 30 м.</a></span>-->
    <!---->
    <!--                    ДАТА: октябрь 2019-->
    <!---->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--<div class="container news-section">-->
    <!--    <div class="row">-->
    <!--        <div class="col-md-12">-->
    <!--            <div class="wow h2 fadeInUp animated" style="visibility: visible;">Наши клиенты</div>-->
    <!--            <div class="logo__wrapper">-->
    <!--                <div><img loading="lazy" src="/wp-content/uploads/2019/10/mesto.jpg" alt="logo" /></div>-->
    <!--                <div><img loading="lazy" src="/wp-content/uploads/2019/10/megafon.jpg" alt="logo" /></div>-->
    <!--                <div><img loading="lazy" src="/wp-content/uploads/2019/10/logo.png" alt="logo" /></div>-->
    <!--                <div><img loading="lazy" src="/wp-content/uploads/2019/10/kvazar_logo.jpg" alt="logo" /></div>-->
    <!--                <div><img loading="lazy" src="/wp-content/uploads/2019/10/free-vector-tele2_041367_tele2.png" alt="logo" /></div>-->
    <!--                <div><img loading="lazy" class="alignnone size-full wp-image-238" src="http://psm-ekb96.ru/wp-content/uploads/2019/11/02-222x65_crop.png" alt="" width="222" height="65" /></div>-->
    <!--                <div><img loading="lazy" src="/wp-content/uploads/2019/10/70234_54eefa1d5fd5d54eefa1d5fd94.jpeg" alt="logo" /></div>-->
    <!--                <div><img loading="lazy" src="/wp-content/uploads/2019/10/1200px-logotip_russkaja_mednaja_kompanija.svg_.png" alt="logo" /></div>-->
    <!--            </div>-->
    <!--            <div class="button-container">-->
    <!--                <div class="row justify-content-center">-->
    <!--                    <div class="col-3 text-center">-->
    <!--                        <div class="logo__button_left">-->
    <!--                            <div><img class="slide-arrow" src="/wp-content/uploads/2019/10/arenda-avtovyshki-str1.png" alt="Стрелка влево" width="26" height="49" /></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="col-3 text-center">-->
    <!--                        <div class="logo__button_right">-->
    <!--                            <div><img class="slide-arrow" src="/wp-content/uploads/2019/10/arenda-avtovyshki-str2.png" alt="Стрелка вправо" width="26" height="54" /></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
<?php //get_footer(); ?>