<? get_header(); ?>
<div class="container">
    <div class="row">

        <h1 class="title-main text-center">Блог</h1>


<?php if ( have_posts() ) : while ( have_posts() ) :
    the_post();

?>

<div class="col-sm-4 col-md-3">
    <div class="product-card1">
        <div class="product-image1">
            <? the_post_thumbnail(); ?>
        </div>
        <div class="product-title1"><?the_title();?></div>

        <a href="<?=get_the_permalink();?>">
            <div class="read-more-butt"><span>Читать далее</span></div>
        </a>
    </div>
</div>

<?


endwhile; else: ?>
<p>Sorry, no posts matched your criteria.

</p>

<?php endif; ?>
</div>
</div>
<? get_footer(); ?>
