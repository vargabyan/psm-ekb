<?
get_header();
?>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div style="min-width: 65px; float: left;"><?php if (function_exists('breadcrumbs')) breadcrumbs(); ?></div>
                <div class="breadc"> › <a href="/uslugi-autovyshki/">Аренда автовышек</a> ›
                    <span><? the_field("tax_h1"); ?></span></div>
            </div>
        </div>
    </div>
</div>


<div class="product-showcase width-block">
    <? $queried_object = get_queried_object(); ?>
        <h2><? the_field("tax_h1"); ?></h2>
    <?php
        $args = array(
            'taxonomy' => 'arenda-autovyshek',
            'type' => 'uslugi-autovyshki',
            'orderby' => 'name',
            'order' => 'ASC'
        );

        component_get_cat($args);
    ?>

    <?php
        $args = array(
            'post_type' => 'uslugi-autovyshki', // Указываем наш новый тип записи
            'posts_per_page' => 10,
            'tax_query' => array(
                array(
                    'taxonomy' => 'arenda-autovyshek',
                    'field' => 'slug',
                    'terms' => $queried_object->slug,
                ),
            ),
        );

        component_get_auto($args);
    ?>

    <div class="product-showcase_button-show-more-wrapper">
        <button class="product-showcase_button-show-more button-blue">Перейти в каталог автовышек</button>
    </div>
</div>


<?= do_shortcode('[our-advantages]') ?>

<?php
$queried_object = get_queried_object();
$cat_id = $queried_object->taxonomy . '_' . $queried_object->term_id;

echo do_shortcode('[obshaya_cena id=' . $cat_id .']' );
?>

<?php
if (category_description()) { ?>
    <div class="seo-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?= category_description(); ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<? get_footer(); ?>
