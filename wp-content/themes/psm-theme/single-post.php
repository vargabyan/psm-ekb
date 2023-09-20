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

<div class="container">
    <p class="p-date">
        Опубликовано: <? the_date(); ?>
    </p>
    <center style="margin-top: 30px;"><?the_post_thumbnail();?></center>
    <h1 class="title-main">
        <?
        the_title();
        ?>
    </h1>
</div>
<div class="container container11">
        <?
        the_content();
        ?>
</div>




<?
$showposts = get_field( "showpost" );
    //$showposts = '314, 310';
    //var_dump($showposts);
?>

<? if($showposts){ ?>

    <div class="product-section">
        <div class="container">
            <h2 class="read-more">Читайте также</h2>
            <div class="row">


                <?



                $args = array(
        'post_type' => 'post', // Указываем наш новый тип записи
        'posts_per_page' => 10,
        'include' => $showposts,
    );

                $p = get_posts( $args );
                $content='';
                $i=0;
                foreach ( $p as $post ) {
                    $cost=get_post_custom_values('Стоимость');
                    setup_postdata( $post ); ?>

                    <div class="col-sm-4 col-md-3">
                        <div class="product-card1">
                            <div class="product-image1"><?= get_the_post_thumbnail(); ?></div>
                            <div class="product-title1"><?= get_the_title(); ?></div>

                            <a href="<?= get_permalink(); ?>">
                                <div class="read-more-butt"><span>Читать далее</span></div>
                            </a>
                        </div>
                    </div>
                    <?
                }
                wp_reset_postdata();


                ?>
            </div>
        </div>
    </div>

<? } ?>
<?php get_footer(); ?>
