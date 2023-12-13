<?php

/*
Template Name: Как заказать
Template Post Type: post, page, product
*/

get_header();
?>

    <div class="container-width1110">
        <div class="breadcrumb_block how-to-order_breadcrumb">
            <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
        </div>
    </div>

<?= do_shortcode('[uslugi-avtovishki]') ?>

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
            <button class="product-showcase_button-show-more button-blue">Перейти в каталог автовышек</button>
        </div>
    </div>


<?php require __DIR__ . '/cp-help-block/index.php' ?>

<?php get_footer(); ?>