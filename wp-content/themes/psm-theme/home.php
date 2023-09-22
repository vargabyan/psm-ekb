<!--<link-->
<!--        rel="stylesheet"-->
<!--        href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"-->
<!--/>-->
<!--<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>-->
<link rel="stylesheet" href="/wp-content/themes/psm-theme/css/fonts.css">
<link rel="stylesheet" href="/wp-content/themes/psm-theme/css/home.css">

<?php get_header(); ?>

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
                    <div  class="box-2">
                        <p>Аренда автовышек от <span>1200 рублей/час</span></p>
                        <ul>
                            <li>У нас собственный парк автовышек АГП от 15 до 45 метров от 900 руб./час (без учета НДС 20%)</li>
                        </ul>
                    </div>
                    <div  class="box-3">
                        <div class="col-svg">
                            <svg width="17" height="55" viewBox="0 0 17 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3496 2.511C14.6073 2.61009 14.7359 2.89936 14.6368 3.15712L13.0221 7.35742C12.923 7.61517 12.6337 7.74379 12.376 7.6447C12.1182 7.54561 11.9896 7.25633 12.0887 6.99858L13.524 3.26498L9.79043 1.82963C9.53268 1.73054 9.40406 1.44126 9.50315 1.18351C9.60224 0.925759 9.89151 0.797139 10.1493 0.896229L14.3496 2.511ZM15.5239 54.2435C9.63503 48.4802 3.06564 38.3717 1.03303 28.3057C0.0152534 23.2654 0.128218 18.2004 2.07244 13.6921C4.02119 9.1734 7.78634 5.26891 13.967 2.52082L14.3733 3.43457C8.38912 6.09529 4.82641 9.83148 2.99069 14.0881C1.15044 18.3553 1.02231 23.2004 2.01324 28.1077C3.99804 37.937 10.4452 47.8739 16.2234 53.5288L15.5239 54.2435Z" fill="#BEBEBE"/>
                            </svg>
                        </div>
                        <div>
                            <button>Получить персональное предложение</button>
                            <p>Оператор перезвонит Вам и подберет машину под Вашу заявку, а также согласует цену.</p>
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

    <div class="category-box">
        <div class="category-swiper-button-prev">
            <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 9L1 5L5 1" stroke="white"/>
            </svg>
        </div>

        <div class="category-swiper">
            <div class="swiper-wrapper category-swiper-wrapper">

                <?= do_shortcode('[cat]'); ?>

            </div>
        </div>

        <div class="category-swiper-button-next">
            <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L5 5L1 9" stroke="white"/>
            </svg>
        </div>
    </div>

    <div class="products-box">
        <?= do_shortcode('[auto]'); ?>
    </div>
</div>

<div class="advantages-block width-block">
    <div class="first-item">
        <p>Мы работаем с <span>2006 года</span></p>
    </div>
    <div class="item">
        <div>
<!--            <img src="/wp-content/uploads/2019/10/arenda-avtovyshki-operativno.png" alt="Оперативная доставка" />-->
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_321_366)">
                    <path d="M16 2.66675C10.84 2.66675 6.66666 6.84008 6.66666 12.0001C6.66666 19.0001 16 29.3334 16 29.3334C16 29.3334 25.3333 19.0001 25.3333 12.0001C25.3333 6.84008 21.16 2.66675 16 2.66675ZM16 15.3334C14.16 15.3334 12.6667 13.8401 12.6667 12.0001C12.6667 10.1601 14.16 8.66675 16 8.66675C17.84 8.66675 19.3333 10.1601 19.3333 12.0001C19.3333 13.8401 17.84 15.3334 16 15.3334Z" fill="white"/>
                </g>
                <defs>
                    <clipPath id="clip0_321_366">
                        <rect width="32" height="32" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        </div>
        <p>Оперативная доставка. Всегда вовремя.</p>
    </div>
    <div class="item">
        <div>
<!--            <img src="/wp-content/uploads/2019/10/arenda-avtovyshki-24.png" alt="Работа в круглосуточном режиме" />-->
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_321_369)">
                    <path d="M28 13.4933H18.96L22.6133 9.73333C18.9733 6.13333 13.08 6 9.44 9.6C5.8 13.2133 5.8 19.04 9.44 22.6533C13.08 26.2667 18.9733 26.2667 22.6133 22.6533C24.4267 20.8667 25.3333 18.7733 25.3333 16.1333H28C28 18.7733 26.8267 22.2 24.48 24.52C19.8 29.16 12.2 29.16 7.52 24.52C2.85333 19.8933 2.81333 12.3733 7.49333 7.74667C12.1733 3.12 19.68 3.12 24.36 7.74667L28 4V13.4933ZM16.6667 10.6667V16.3333L21.3333 19.1067L20.3733 20.72L14.6667 17.3333V10.6667H16.6667Z" fill="white"/>
                </g>
                <defs>
                    <clipPath id="clip0_321_369">
                        <rect width="32" height="32" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        </div>
        <p>Работа в круглосуточном режиме <span>24 часа</span></p>
    </div>
    <div class="item">
        <div>
<!--            <img src="/wp-content/uploads/2019/10/arenda-avtovyshki-sale.png" alt="Собственный автопарк" />-->
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_321_379)">
                    <path d="M26.6667 10.6667H22.6667V5.33337H4.00001C2.53334 5.33337 1.33334 6.53337 1.33334 8.00004V22.6667H4.00001C4.00001 24.88 5.78668 26.6667 8.00001 26.6667C10.2133 26.6667 12 24.88 12 22.6667H20C20 24.88 21.7867 26.6667 24 26.6667C26.2133 26.6667 28 24.88 28 22.6667H30.6667V16L26.6667 10.6667ZM8.00001 24.6667C6.89334 24.6667 6.00001 23.7734 6.00001 22.6667C6.00001 21.56 6.89334 20.6667 8.00001 20.6667C9.10668 20.6667 10 21.56 10 22.6667C10 23.7734 9.10668 24.6667 8.00001 24.6667ZM26 12.6667L28.6133 16H22.6667V12.6667H26ZM24 24.6667C22.8933 24.6667 22 23.7734 22 22.6667C22 21.56 22.8933 20.6667 24 20.6667C25.1067 20.6667 26 21.56 26 22.6667C26 23.7734 25.1067 24.6667 24 24.6667Z" fill="white"/>
                </g>
                <defs>
                    <clipPath id="clip0_321_379">
                        <rect width="32" height="32" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        </div>
        <p>Собственный автопарк</p>
    </div>
    <div class="item">
        <div>
<!--            <img src="/wp-content/uploads/2019/10/arenda-avtovyshki-voditeli.png" alt="Современная техника в отличном состоянии" />-->
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_321_376)">
                    <path d="M16 1.33337L4 6.66671V14.6667C4 22.0667 9.12 28.9867 16 30.6667C22.88 28.9867 28 22.0667 28 14.6667V6.66671L16 1.33337Z" fill="white"/>
                </g>
                <defs>
                    <clipPath id="clip0_321_376">
                        <rect width="32" height="32" fill="white"/>
                    </clipPath>
                </defs>
            </svg>
        </div>
        <p>Разрешения РосТехНадзора</p>
    </div>
    <div class="item-contact">
        <p class="part-1">Если у вас есть вопрос, то звоните нам по номеру <a href="tel:88003017391">8 800 301 73 91</a></p>
        <div>
            <div class="icon-box">
                <div>
                    <img src="/wp-content/uploads/2023/07/Ellipse%20645.png" alt="" />
                </div>
                <div class="telegram-icon">
                    <svg width="29" height="26" viewBox="0 0 29 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.46811 11.6C8.26811 9 27.8681 1 27.8681 1L23.9681 23.6C23.7681 24.7 22.4681 25.1 21.6681 24.4L15.5681 19.3L11.2681 23.3L11.9681 16.6L24.9681 4.3L8.96811 14.3L9.96811 20L6.66811 14.7L1.66811 13.1C0.868113 12.8 0.768113 11.8 1.46811 11.6Z" stroke="#303030" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <p class="part-2">Не любите говорить по телефону? Пишите в ватсап</p>
        </div>
    </div>
</div>

<div class="work-steps-block width-block">
    <div class="header-box">
        <p>Как мы <span>работаем</span></p>
    </div>
    <div class="work-steps-box">
        <div>
            <p class="part-1">/01</p>
            <p class="part-2">Ваш звонок</p>
            <p class="part-3">Рыбныыыыыыый текст который покорит сердца ваших клиентов</p>
        </div>
        <div>
            <p class="part-1">/02</p>
            <p class="part-2">ответ диспетчера</p>
            <p class="part-3">Рыбныыыыыыый текст который покорит сердца ваших клиентов</p>
        </div>
        <div>
            <p class="part-1">/03</p>
            <p class="part-2">подписываем договор</p>
            <p class="part-3">Рыбныыыыыыый текст который покорит сердца ваших клиентов</p>
        </div>
        <div>
            <p class="part-1">/04</p>
            <p class="part-2">отличный результат!</p>
            <p class="part-3">Рыбныыыыыыый текст который покорит сердца ваших клиентов</p>
        </div>
    </div>
    <div class="button-box">
        <button>Смотреть каталог автовышек</button>
    </div>
</div>

<DIV class="our-truck-crane-block width-block">

    <div class="top-box">
        <p>Наши автовышки используют для <span>разнообразных работ</span> <br> <span>и не только</span></p>
        <div>
            <div class="our-truck-crane-swiper-button-prev">
                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.70508 11.4119L1.29331 6.0001L6.70508 0.588336" stroke="#ED4646" stroke-width="1.35294"/>
                </svg>
            </div>
            <div class="our-truck-crane-swiper-button-next">
                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.29492 0.588135L6.70669 5.9999L1.29492 11.4117" stroke="white" stroke-width="1.35294"/>
                </svg>
            </div>
        </div>
    </div>

    <div class="our-truck-crane-swiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <img loading="lazy" class="alignleft wp-image-974 size-medium" src="http://psm-ekb96.ru/wp-content/uploads/2020/01/arenda-avtovyshki-foto007-300x225.jpg" alt="Автовышка для монтажа рекламной конструкции УГМК" width="300" height="225" />
                <div class="info-box">
                    <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-reklamnoj-konstrukcii-ugmk-g-verhnyaya-pyshma/">Вид АГП: Автовышка 45 м вездеход</a>
                    <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-reklamnoj-konstrukcii-ugmk-g-verhnyaya-pyshma/">ОБЪЕКТ:  г.Верхняя Пышма , УГМК. Осуществлен монтаж рекламной конструкции.</a>
                </div>

            </div>

            <div class="swiper-slide">
                <img loading="lazy" class="alignnone size-medium wp-image-223" src="http://psm-ekb96.ru/wp-content/uploads/2019/11/arenda-avtovyshki-foto001-300x225.jpg" alt="Аренда автовышки" width="300" height="225" />
                <div class="info-box">
                    <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-fasada-klubnogo-doma-tihvin-g-ekaterinburg/">Вид АГП: Вышка 45 м телескопическая</a>
                    <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-fasada-klubnogo-doma-tihvin-g-ekaterinburg/">ОБЪЕКТ:  клубный дом Тихвин г. Екатеринбург, ООО Технология. С помощью АГП 45 м выполняется работа художников по фасаду, высота здания 45 м.</a>
                </div>

            </div>

            <div class="swiper-slide">
                <img loading="lazy" class="alignnone wp-image-227 size-medium" src="http://psm-ekb96.ru/wp-content/uploads/2019/11/arenda-avtovyshki-foto002-300x225.jpg" alt="Аренда автовышки" width="300" height="225" />
                <div class="info-box">
                    <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-oborudovaniya-sotovoj-svyazi-tele-2-pos-klyuchi/">Вид АГП: Вышка 40 м</a>
                    <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-montazha-oborudovaniya-sotovoj-svyazi-tele-2-pos-klyuchi/">ОБЪЕКТ: Свердловская обл, Сысертский район, пос . Ключи , ООО Квазар Урал. Установка столба 40 м и монтаж оборудования сотовой связи ТЕЛЕ 2.</a>
                </div>

            </div>

            <div class="swiper-slide">
                <img loading="lazy" class="alignnone size-medium wp-image-231" src="http://psm-ekb96.ru/wp-content/uploads/2019/11/arenda-avtovyshki-foto003-300x225.jpg" alt="аренда автовышки" width="300" height="225" />
                <div class="info-box">
                    <a href="https://psm-ekb96.ru/foto/aavtovyshka-vezdekhod-dlya-zameny-steklopaketov-g-ekaterinburg-tekhnopark/">Вид АГП: Вышка 45 м</a>
                    <a href="https://psm-ekb96.ru/foto/aavtovyshka-vezdekhod-dlya-zameny-steklopaketov-g-ekaterinburg-tekhnopark/">ОБЪЕКТ:  г. Екатеринбург, ООО Рост-Импульс. В Технопарке наша  вышка 45 м вездеход помогала в замене стеклопакетов. Расстояние до здания 28 м, высота подъема 27 м.</a>
                </div>

            </div>

            <div class="swiper-slide">
                <img loading="lazy" class="alignnone size-medium wp-image-232" src="http://psm-ekb96.ru/wp-content/uploads/2019/11/arenda-avtovyshki-foto004-300x225.jpg" alt="Аренда автовышки" width="300" height="225" />
                <div class="info-box">
                    <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-klininga-fasada-gu-sberbanka-g-ekaterinburg/">Вид АГП: Автовышка 40 м</a>
                    <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-klininga-fasada-gu-sberbanka-g-ekaterinburg/">ОБЪЕКТ: г. Екатеринбург, Главное Управление Сбербанка. Работы по клинингу фасада и остекления от здания 16 м , высота 43 м.</a>
                </div>

            </div>

            <div class="swiper-slide">
                <img loading="lazy" class="alignnone size-medium wp-image-236" src="http://psm-ekb96.ru/wp-content/uploads/2019/11/arenda-avtovyshki-foto007-300x225.jpg" alt="Аренда автовышки" width="300" height="225" />
                <div class="info-box">
                    <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-uteplenie-perekrytiya-g-pervouralsk/">Вид АГП: Автовышка 40 м</a>
                    <a href="https://psm-ekb96.ru/foto/avtovyshka-dlya-uteplenie-perekrytiya-g-pervouralsk/">ОБЪЕКТ: г. Первоуральск, ООО АС-Логистик.  Утепление перекрытия по фасаду жилого дома. Расстояние от здания 15 м, высота 30 м.</a>
                </div>

            </div>

        </div>

    </div>

    <div class="hidden-bottom-button">
        <div class="our-truck-crane-swiper-button-prev">
            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.70508 11.4119L1.29331 6.0001L6.70508 0.588336" stroke="#ED4646" stroke-width="1.35294"/>
            </svg>
        </div>
        <div class="our-truck-crane-swiper-button-next">
            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.29492 0.588135L6.70669 5.9999L1.29492 11.4117" stroke="white" stroke-width="1.35294"/>
            </svg>
        </div>
    </div>

</DIV>

<?php require __DIR__ . "/../psm-theme/cp-help-block/index.php"?>

<div class="block-for-our-clients">
    <div class="left-box">
        <p>Наши клиенты</p>
    </div>
    <div class="right-box">
        <div><img loading="lazy" src="/wp-content/uploads/2019/10/mesto.jpg" alt="logo" /></div>
        <div><img loading="lazy" src="/wp-content/uploads/2019/10/megafon.jpg" alt="logo" /></div>
        <div><img loading="lazy" src="/wp-content/uploads/2019/10/logo.png" alt="logo" /></div>
        <div><img loading="lazy" src="/wp-content/uploads/2019/10/kvazar_logo.jpg" alt="logo" /></div>
        <div><img loading="lazy" src="/wp-content/uploads/2019/10/free-vector-tele2_041367_tele2.png" alt="logo" /></div>
        <div><img loading="lazy" class="alignnone size-full wp-image-238" src="http://psm-ekb96.ru/wp-content/uploads/2019/11/02-222x65_crop.png" alt="" width="222" height="65" /></div>
        <div><img loading="lazy" src="/wp-content/uploads/2019/10/70234_54eefa1d5fd5d54eefa1d5fd94.jpeg" alt="logo" /></div>
        <div><img loading="lazy" src="/wp-content/uploads/2019/10/1200px-logotip_russkaja_mednaja_kompanija.svg_.png" alt="logo" /></div>
    </div>
</div>

<div class="block-reviews width-block">
    <?= do_shortcode('[reviews]'); ?>
</div>

<?php get_footer(); ?>

<?php
///*
// * Template Name: Главная
// * Template Post Type: page
//  * */
//get_header(); ?>

<script src="/wp-content/themes/psm-theme/js/home.js"></script>
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
<!--            --><?//= do_shortcode('[auto]'); ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="category-section">-->
<!--    <div class="container">-->
<!--        <div class="row all-hidden catrow all-hidden all-cat">-->
<!---->
<!--            --><?//= do_shortcode('[cat]'); ?>
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
<!--                --><?///*= do_shortcode('[smartslider3 slider=2]'); */?>
<!--            </div>-->
<!--            <div class="col-sm-6">-->
<!--                <div class="h3">Техника на карте</div>-->
<!--                --><?//= do_shortcode('[add_map]'); ?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<?//= do_shortcode('[reviews]'); ?>

<?//= do_shortcode('[work_steps]'); ?>

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