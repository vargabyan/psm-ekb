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
    <h2><? the_field("tax_h1"); ?></h2>
    <? $queried_object = get_queried_object(); ?>
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


<?php do_shortcode('[our-advantages]') ?>

<?php component_get_prices() ?>


<?
if (category_description()) { ?>
    <div class="seo-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center"><img src="/wp-content/uploads/2019/10/p2.jpg"></div>
                <div class="col-md-6">
                    <?= category_description(); ?>
                </div>
            </div>
        </div>
    </div>
<? } ?>

<!--    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>-->
<!--    <script>-->
<!--        document.addEventListener('DOMContentLoaded', function () {-->
<!---->
<!--            jQuery('.product-card img').removeAttr('width');-->
<!--            jQuery('.product-card img').removeAttr('height');-->
<!---->
<!--        }, false)-->
<!--    </script>-->
<!---->
<!--    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>-->

<? get_footer(); ?>
