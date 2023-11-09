<?php
/**
 * Template Name: О компании
 * Template Post Type: page
 */
get_header();
?>

<link rel="stylesheet" href="/wp-content/themes/psm-theme/company/company.css">


<div class="container-width1110">
    <div class="about-company">
        <div class="about-company_text-wrapper">
            <p class="about-company_header">О компании</p>
            <p class="about-company_text">Ориентир в нашей работе – клиент. Поэтому в парке ООО «ПСМ» есть АГП от 15 до
                45 метров – с их помощью проводятся практически любые виды строительно-монтажных работ. Наши специалисты
                сориентируют вас не только по ценам, но и помогут подобрать подходящий вариант в зависимости от
                специфики работ. Правильный выбор не только обеспечивает быстрое, удобное и безопасное решение задачи,
                но и поможет сэкономить на аренде.</p>
            <p class="about-company_text">За более чем 11 лет работы мы поняли, что бывают непредвиденные и экстренные
                ситуации, поэтому даже если автовышка понадобиться в полночь – звоните. Мы работаем 24 часа и
                территориально расширяем свою деятельность – услуги доступны практически по всему Уралу и России.</p>
            <p class="about-company_text">Все наши водители подтверждают квалификацию и имеют удостоверение машиниста
                автогидроподъемника. В совокупности с немалым опытом, это дает уверенность в безопасном выполнении самых
                сложных работ. Но безопасность зависит не только от людей, но и от техники. Весь парк зарегистрирован в
                Ростехнадзоре и проходит регулярные проверки – при работе ничего не сломается и не потечет.</p>

        </div>
        <img class="about-company_img" src="/wp-content/uploads/2019/12/avtovyshki-o-kompanii.jpg"
             alt="О компании ПСМ - аренда автовышек в Екатеринбурге"/>

    </div>
    <div class="offer-elevator">
        <div class="offer-elevator_header-wrapper">
            <p class="offer-elevator_header">Мы предлагаем автовышки
                следующей высотности</p>
            <p class="offer-elevator_price">Цены на аренду начинаются от 900 руб/час
                за автовышку высотой 15 м.</p>

            <div class="offer-elevator_links-wrapper">

                <a class="offer-elevator_link-watch-catalog button-red">Смотреть каталог</a>
                <p class="offer-elevator_link-call">Или звоните нам по номеру
                    <a class="offer-elevator_link-call_tel" href="tel:88003017391">8 800 301 73 91</a></p>

            </div>
        </div>
        <div class="offer-elevator_characteristics-items">
            <ul class="offer-elevator_characteristics-items-wrapper">
                <li class="offer-elevator_characteristics-item">15 м с люлькой грузоподъемностью 200 кг.</li>
                <li class="offer-elevator_characteristics-item">25 м с люлькой грузоподъемностью 180 кг.</li>
                <li class="offer-elevator_characteristics-item">28 м с люлькой грузоподъемностью 200 кг.</li>
                <li class="offer-elevator_characteristics-item">30 м с люлькой грузоподъемностью 300 кг.</li>
                <li class="offer-elevator_characteristics-item">35 м с люлькой грузоподъемностью 300 кг.</li>
                <li class="offer-elevator_characteristics-item">40 м с люлькой грузоподъемностью 300 кг.</li>
                <li class="offer-elevator_characteristics-item">45 м с люлькой грузоподъемностью 300 кг.</li>
                <li class="offer-elevator_characteristics-item">45 м с люлькой грузоподъемностью 300 кг, <br>
                    вездеход.
                </li>
            </ul>
        </div>
    </div>
</div>

<?php do_shortcode('[work_steps]') ?>

<div class="product-showcase width-block">
    <h2>другая спец техника</h2>

    <?php do_shortcode('[cat]') ?>

    <?php do_shortcode('[auto]') ?>

    <div class="product-showcase_button-show-more-wrapper">
        <button class="product-showcase_button-show-more button-blue">Перейти в каталог автовышек</button>
    </div>
</div>

<?php do_shortcode('[help_in_different_ways]'); ?>

<script src="/wp-content/themes/psm-theme/js/home.js"></script>

<?php get_footer() ?>
