<?php
/*
Template Name: Как заказать
*/

get_header();
?>

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/wp-content/themes/psm-theme/css/fonts.css">
    <link rel="stylesheet" href="/wp-content/themes/psm-theme/how-to-order/how-to-order.css">

    <div class="container-width1110">
        <div class="breadcrumb_block how-to-order_breadcrumb">
            <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
        </div>
    </div>

<?php require __DIR__ . '/cp-elevator-services/index.php' ?>

<?php do_shortcode('[work_steps]'); ?>

    <div class="product-showcase width-block">
        <h2>другая спец техника</h2>

        <?= do_shortcode('[cat]'); ?>

        <?= do_shortcode('[auto]'); ?>

        <div class="product-showcase_button-show-more-wrapper">
            <button class="product-showcase_button-show-more button-blue">Перейти в каталог автовышек</button>
        </div>
    </div>


<?php require __DIR__ . '/cp-help-block/index.php' ?>

    <script src="/wp-content/themes/psm-theme/js/home.js"></script>

<?php get_footer(); ?>