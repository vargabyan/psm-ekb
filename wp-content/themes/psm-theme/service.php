<?php
/**
 * Template Name: Услуга
 * Template Post Type: page
 */
get_header(); ?>
    <link rel="stylesheet" href="/wp-content/themes/psm-theme/magnific-popup.css">

<?php
// Retrieves the stored value from the database
//$meta_url = get_post_meta( get_the_ID(), 'links-news-original', true );
?>
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
                </div>
            </div>
        </div>
    </div>

<?
$term = get_the_terms($post->ID, 'arenda-autovyshek');
if ($term) {
    $term1 = array_shift($term);
    $tax = $term1->term_taxonomy_id;
}
?>

<?php require __DIR__ . '/cp-elevator-services/index.php' ?>

<?php require __DIR__ . '/cp-help-block/index.php' ?>

<?php require __DIR__ . '/cp-cars-you-will-need/index.php' ?>

    <div class="product-showcase width-block">
        <h2>Наши машины</h2>

        <div class="category-box">
            <div class="category-swiper-button-prev swiper-button">
                <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 9L1 5L5 1" stroke="white"/>
                </svg>
            </div>

            <div class="category-swiper">
                <div class="swiper-wrapper category-swiper-wrapper">

                    <?= do_shortcode('[cat]'); ?>

                </div>
            </div>

            <div class="category-swiper-button-next swiper-button">
                <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L5 5L1 9" stroke="white"/>
                </svg>
            </div>
        </div>

        <div class="products-box">
            <?= do_shortcode('[auto]'); ?>
        </div>

        <div class="product-showcase_button-show-more-wrapper">
            <button class="product-showcase_button-show-more button-blue">Перейти в каталог автовышек</button>
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
            <button class="button-red">Смотреть каталог автовышек</button>
        </div>
    </div>

<?php require __DIR__ . '/cp-help-block/index.php' ?>

    <script src="/wp-content/themes/psm-theme/js/home.js"></script>
<? get_footer();