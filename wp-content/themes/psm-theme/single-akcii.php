<?php
/**
 * Template Name: Акции
 * Template Post Type: page
 */

get_header();
?>


<div class="container-width1110">

    <div class="promotion-page">
        <p class="promotion-page_header">Акции</p>

        <p class="promotion-page_description">
            На этой странице вы сможете ознакомиться с текущими акциями и предложениями по аренде автовышек от компании
            <br> ООО «Предприятие строительных машин». Обращаем ваше внимание — срок действия предложений ограничен.
        </p>
        <div class="promotion-page_offer-wrapper">
            <p class="promotion-page_offer"><span>Предложение от 29-01-2020 г.</span>При аренде автовышки от 14 дней
                перебазировка в любой регион России бесплатно! Подробности по телефону:</p>
            <a class="promotion-page_tel" href="tel:+79022627066">+7 (902) 262-70-66</a>
            <a class="promotion-page_leave-review button-blue" onclick="yaCounter47702209.reachGoal('astavit-zayavok');" data-call="callback" href="">Оставить заявку</a>
        </div>
    </div>

</div>

<?php do_shortcode('[work_steps]'); ?>


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


<div class="help-block width-block">
    <div class="left-box">
        <div class="part-1">
            <p>Поможем подобрать оборудование</p>
        </div>
        <div class="part-2">
            <div>
                <img src="/wp-content/uploads/2023/07/Ellipse%2086.png" alt="" />
            </div>
            <p>Ответим на все ваши вопросы и поможем выбрать оборудование</p>
        </div>
        <br><br><br><br>
        <div class="part-4">
            <div class="icon-messenger">
                <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.3 26.7C7.5 26.2 3.6 29.1 3 28.4C2.4 27.8 5 23.7 4.5 23C2.9 20.8 2 18.1 2 15.2C2 7.80001 8 1.70001 15.5 1.70001C23 1.70001 29 7.80001 29 15.2C29 22.6 23 28.7 15.5 28.7C14.5 28.7 13.6 28.6 12.7 28.4" stroke="#414042" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12.7 8.40003L13.9 11.4C14 11.6 13.9 11.8 13.7 11.9C13.2 12.2 12.5 12.9 13.3 14C14.3 15.4 17 18.9 19.2 16.6C19.3 16.5 19.5 16.4 19.7 16.5L22.9 17.9C23.1 18 23.2 18.3 23.1 18.5C22.4 19.9 19.7 23.6 13 17.8C6.20003 11.9 10.6 9.00004 12.1 8.30004C12.3 8.00004 12.6 8.10003 12.7 8.40003Z" stroke="#414042" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="icon-box_description">Пишите нашему менеджеру в Whatsapp</div>

        </div>
    </div>
    <div class="line"></div>
    <div class="right-box">
        <label> Имя <input type="text" placeholder="Иван"> </label> <label class="number-label"> Номер телефона <input type="text" placeholder="8 900 000 00 00"> </label> <button class="button-black">Заказать дом мечты</button><p>Я даю свое согласие на <span>обработку персональных данных<span></p>
    </div>
    <div class="hidden-part">
        <p>Не любите говорить по телефону? Пишите в месенджеры</p>
        <div class="icon-box">
            <div>
                <img src="/wp-content/uploads/2023/07/Ellipse%2086.png" alt="" />
            </div>
            <div>
                <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.3 26.7C7.5 26.2 3.6 29.1 3 28.4C2.4 27.8 5 23.7 4.5 23C2.9 20.8 2 18.1 2 15.2C2 7.80001 8 1.70001 15.5 1.70001C23 1.70001 29 7.80001 29 15.2C29 22.6 23 28.7 15.5 28.7C14.5 28.7 13.6 28.6 12.7 28.4" stroke="#414042" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12.7 8.40003L13.9 11.4C14 11.6 13.9 11.8 13.7 11.9C13.2 12.2 12.5 12.9 13.3 14C14.3 15.4 17 18.9 19.2 16.6C19.3 16.5 19.5 16.4 19.7 16.5L22.9 17.9C23.1 18 23.2 18.3 23.1 18.5C22.4 19.9 19.7 23.6 13 17.8C6.20003 11.9 10.6 9.00004 12.1 8.30004C12.3 8.00004 12.6 8.10003 12.7 8.40003Z" stroke="#414042" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="telegram-icon-box">
                <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.10093 14.6C8.90093 12 28.5009 4 28.5009 4L24.6009 26.6C24.4009 27.7 23.1009 28.1 22.3009 27.4L16.2009 22.3L11.9009 26.3L12.6009 19.6L25.6009 7.3L9.60093 17.3L10.6009 23L7.30093 17.7L2.30093 16.1C1.50093 15.8 1.40093 14.8 2.10093 14.6Z" stroke="#414042" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
    </div>
</div>

<? get_footer(); ?>