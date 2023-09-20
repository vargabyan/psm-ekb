<? get_header(); ?>
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            <?php if ( function_exists( 'breadcrumbs' ) ) breadcrumbs(); ?>
            </div>
        </div>
    </div>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.

<?var_dump(is_tax()); ?>

</p>

<?php endif; ?>
<script>
document.addEventListener('DOMContentLoaded',function(){

    jQuery('.product-card img').removeAttr('width');
    jQuery('.product-card img').removeAttr('height');

},false)
</script>

<? get_footer(); ?>
