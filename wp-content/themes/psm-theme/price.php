<?php
/**
 * Template Name: Цены
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

<?php require __DIR__ . '/prices/index.php' ?>

    <script src="/wp-content/themes/psm-theme/js/home.js"></script>
<? get_footer();