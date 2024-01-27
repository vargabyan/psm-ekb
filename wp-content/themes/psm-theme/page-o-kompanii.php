<?php
get_header();

$mi_pridlogaem = get_field('mi_pridlogaem');
?>

<div class="container-width1110">

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
                </div>
            </div>
        </div>
    </div>


    <div class="about-company">
        <div class="about-company_text-wrapper">
            <p class="about-company_header"><?php the_title() ?></p>
            <p class="about-company_text"><?php the_content() ?></p>
        </div>
        <img class="about-company_img" src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0]; ?>"
             alt="<?= wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[3]; ?>"/>

    </div>
    <div class="offer-elevator">
        <div class="offer-elevator_header-wrapper">
            <p class="offer-elevator_header"><?= $mi_pridlogaem['zagalovk'] ?></p>
            <p class="offer-elevator_price"><?= $mi_pridlogaem['predlojenia'] ?></p>

            <div class="offer-elevator_links-wrapper">
                <a class="offer-elevator_link-watch-catalog button-red">Смотреть каталог</a>
                <p class="offer-elevator_link-call">Или звоните нам по номеру
                    <a class="offer-elevator_link-call_tel"
                       href="tel:88003017391"><?= $mi_pridlogaem['ili_zvonite_nam_po_nomeru'] ?></a></p>
            </div>
        </div>
        <div class="offer-elevator_characteristics-items">
            <ul class="offer-elevator_characteristics-items-wrapper">
                <?php
                foreach ($mi_pridlogaem['punkti_predlojenia'] as $item) { ?>
                    <li class="offer-elevator_characteristics-item"><?= $item[1] ?></li>
                <?php }
                ?>
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
        <a class="product-showcase_button-show-more button-blue" href="/katalog">Перейти в каталог автовышек</a>
    </div>
</div>

<?= do_shortcode('[help_block id=343]') ?>


<?php get_footer() ?>
