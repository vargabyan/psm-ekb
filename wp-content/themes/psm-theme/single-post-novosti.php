<?php

/*
Template Name: Каждый новости
Template Post Type: post, page, product
*/

get_header()
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


<?php
$image_core = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
$avtor_stati = get_field('avtor_stati');
?>

    <div class="container-width1110">

        <section class="price-for-renting">
            <div class="price-for-renting_description-wrapper">
                <div class="price-for-renting_description">
                    <p class="price-for-renting_header"><?php the_title(); ?></p>
                    <div class="price-for-renting_author-wrapper">
                        <img class="price-for-renting_avatar"
                             src="<?= $avtor_stati['foto']['url'] ?>" alt="<?= $avtor_stati['foto']['alt'] ?>">
                        <p class="price-for-renting_author">
                            Автор статьи
                            <span><?= $avtor_stati['imja'] ?></span>
                        </p>
                    </div>
                </div>
                <img class="price-for-renting_img" src="<?= $image_core[0] ?>" alt="<?= $image_core[3] ?>">
            </div>
            <div class="price-for-renting_following-wrapper">
                <p class="price-for-renting_date">
                    дата  <? the_date(); ?>
                    <span>256</span>
                </p>
                <p class="price-for-renting_time">
                    Время прочтения:
                    <span><?= the_field('vremja_prochtenija_statja') ?></span>
                </p>
                <p class="price-for-renting_following">
                    Поделиться
                </p>
            </div>
        </section>


    </div>


<?php
$dobavit_statia = get_field('dobavit_statia');
?>

    <div class="container-width1110">
        <section class="price-for-renting_article">
            <div class="price-for-renting_article_include-article">
                <p class="price-for-renting_article_include-article_header">В этой статье:</p>
                <?php foreach ($dobavit_statia as $key => $item) { ?>
                    <a class="price-for-renting_article_include-article_subtitle"
                       href="#<?= $key ?>"><?= $item['zagalovk'] ?></a>
                <?php } ?>
            </div>
            <div class="price-for-renting_article_description">
                <?php foreach ($dobavit_statia as $key => $item) { ?>
                    <p class="price-for-renting_article_description_header"
                       id="<?= $key ?>"><?= $item['zagalovk'] ?></p>
                    <p class="price-for-renting_article_description_text"><?= $item['soderjania'] ?></p>
                <?php } ?>
            </div>
        </section>


        <?= do_shortcode('[obshaya_cena]'); ?>


        <div class="price-for-renting_swiper-block">

            <div class="price-for-renting_swiper-block_header-wrapper">
                <p class="price-for-renting_swiper-block_header">другие статьи</p>
                <div class="price-for-renting_swiper-block_button-wrapper">
                    <div class="price-for-renting_swiper-button-prev swiper-button-white-hover"></div>
                    <div class="price-for-renting_swiper-button-next swiper-button-red-hover"></div>
                </div>
            </div>

            <div class="swiper price-for-renting_swiper">
                <div class="swiper-wrapper">
                    <?php
                    global $post;
                    $current_post = get_post();
                    $p = get_posts([
                        'posts_per_page' => -1,
                        'category_name' => 'novosti',
                        'post_type' => 'post',
                        'exclude' => $current_post->ID,
                    ]);

                    foreach ($p as $post) {
                        setup_postdata($post);
                        ?>
                        <div class="swiper-slide">
                            <div class="article-pages_item">
                                <div class="article-pages_item_img">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="article-pages_item-title">
                                    Цены на аренду автовышек в Екатеринбурге
                                </div>
                                <p class="article-pages_item_description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum
                                    laoreet. Proin gravida dolor sit
                                </p>
                                <a class="article-pages_item_link button-blue"
                                   href="<?= get_the_permalink($post->ID); ?>">Условия
                                    аренды</a>
                            </div>
                        </div>
                    <?php }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>

        </div>
    </div>


<?php get_footer() ?>