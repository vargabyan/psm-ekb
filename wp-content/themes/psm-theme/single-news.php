<?
/* Template Name: auto
Template Post Type: auto
*/?>

<?php get_header(); ?>
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
            <div class="col-xs-12"><h1 class="text-center"><?php the_title(); ?></h1></div>
            <div class="col-sm-6">
                <? the_post_thumbnail(); ?>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12 price-col">
                    <h3>Стоимость</h3>
                    <div class="row">
                        <div class="col-xs-6">За час:</div>
                        <div class="col-xs-6 text-center">1100р </div>
                        <div class="col-xs-6 ">За смену:</div>
                        <div class="col-xs-6 text-center">8800р</div>
                    </div>
                </div>
                <?php //the_meta(); ?>
                    <div class="button-container">
                        <div class="col-xs-6"><a class="order-but but-auto" href="#">Узнать стоимость</a></div>
                        <div class="col-xs-6"><a class="order-but but-auto" href="#">Заказать</a></div>
                        <div class="col-xs-12"><a class="order-but but-auto" href="#">Заказать по телефону</a></div>
                    </div>

            </div>

            <div class="col-sm-12 cat-block">
                <?
                $categories = get_categories(array(
                //'taxonomy' => 'post',
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
<div class="description-section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php if ( have_posts() ) : while ( have_posts() ) :
                the_post();
                the_content();
                endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>

                <?php endif; ?>
            </div>
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

[work_steps]

<?php get_footer(); ?>
