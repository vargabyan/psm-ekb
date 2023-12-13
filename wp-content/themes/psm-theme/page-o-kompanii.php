<?php
get_header();
?>


<div class="container-width1110">
    <div class="about-company">
        <div class="about-company_text-wrapper">
            <p class="about-company_header"><?php the_title() ?></p>
            <p class="about-company_text"><?php the_content() ?></p>
        </div>
        <img class="about-company_img" src="<?= wp_get_attachment_image_src( get_post_thumbnail_id(), 'full')[0]; ?>"
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

<?php do_shortcode('[help_in_different_ways]'); ?>


<?php get_footer() ?>
