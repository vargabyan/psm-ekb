<?php get_header(); ?>

<link rel="stylesheet" href="/wp-content/themes/psm-theme/magnific-popup.css">

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
            </div>
        </div>
    </div>
</div>


<?= do_shortcode('[uslugi-avtovishki]') ?>

<?= do_shortcode('[uslugi-avtovishki-vse]') ?>


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


<?= do_shortcode('[work_steps]'); ?>

<?php require __DIR__ . '/cp-help-block/index.php' ?>


<?php get_footer(); ?>
