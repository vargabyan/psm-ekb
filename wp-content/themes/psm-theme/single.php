<?
/* Template Name: auto
Template Post Type: auto
*/?>

<?php get_header();  ?>
<?php
// Retrieves the stored value from the database
$meta_url = get_post_meta( get_the_ID(), 'links-news-original', true );
?>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php if ( function_exists( 'breadcrumbs' ) ) breadcrumbs(); ?>
            </div>
        </div>
    </div>
</div>

<div class="container single-product-card">
    <div class="row">
        <div class="col-md-6">
            <? the_post_thumbnail(); ?>
        </div>
        <div class="col-md-6">
            <h1><?php the_title(); ?></h1>
            <?php the_meta(); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) :

                the_post();
                the_content();
            endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>

            <?php endif; ?>

        </div>

        <div class="col-md-12 cat-block">
            Находится в категориях:
            <?
            $categories = get_categories(array(
                'taxonomy' => 'auto',
                'type' => 'auto',
                'orderby' => 'name',
                'order' => 'ASC'
            ));
            foreach( $categories as $category ){
                $cat.= '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a>';
            }
            echo $cat;
            ?>
        </div>
    </div>
</div>

<div class="advantages-section">
    <div class="container">
        <div class="row">
            <h2 class="text-center">Наши преимущества</h2>
            <div class="col-sm-4 col-md-4">
                <div class="advantages-card">
                    <div class="advantages-image"><img src="/wp-content/uploads/2019/10/dostavka-1.png"></div>
                    <div class="advantages-title">
                        <h3>Быстрая доставка</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="advantages-card">
                    <div class="advantages-image"><img src="/wp-content/uploads/2019/10/dostavka-1.png"></div>
                    <div class="advantages-title">
                        <h3>Собственный автопарк</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="advantages-card">
                    <div class="advantages-image"><img src="/wp-content/uploads/2019/10/dostavka-1.png"></div>
                    <div class="advantages-title">
                        <h3>Профессиональные водители</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
