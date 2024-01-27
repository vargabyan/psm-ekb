<?php
get_header();

$predlozhenija_akcij = get_field('predlozhenija_akcij');
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

    <div class="promotion-page">
        <p class="promotion-page_header"><?php the_title() ?></p>

        <p class="promotion-page_description"><?php the_content() ?></p>

        <?php foreach ($predlozhenija_akcij as $item) { ?>
            <div class="promotion-page_offer-wrapper">
                <p class="promotion-page_offer"><span><?= $item['srok_dejstvija_predlozhenija'] ?></span><?= $item['tekst_predlozhenija'] ?></p>
                <a class="promotion-page_tel" href="tel:+79022627066"><?= $item['zvonite_po_nomeru'] ?></a>
                <a class="promotion-page_leave-review button-blue" onclick="yaCounter47702209.reachGoal('astavit-zayavok');" data-call="callback" href="">Оставить заявку</a>
            </div>
        <?php } ?>
    </div>

</div>

<?= do_shortcode('[work_steps]'); ?>


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


<?= do_shortcode('[help_block id=363]') ?>

<?php get_footer(); ?>