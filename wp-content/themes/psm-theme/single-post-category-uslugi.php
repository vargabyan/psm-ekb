<?php

/*
Template Name: Конкретная работа
Template Post Type: post, page, product
*/

get_header();
?>

<div class="container-width1110">

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
                </div>
            </div>
        </div>
    </div>

</div>

    <?php
    $post = get_post();
    $image = get_field('foto_raboti');
    ?>

    <div class="concrete-work">
        <div class="concrete-work_description">
            <p class="concrete-work_data"><?= the_field('den_raboti') ?></p>
            <p class="concrete-work_title"><?= the_title() ?></p>
            <p class="concrete-work_des-item"><span>Вид АГП</span><?= the_field('vid_mashini') ?></p>
            <p class="concrete-work_des-item"><span>Объект</span><?= the_field('mesto_raboti') ?></p>
            <div class="concrete-work_btn-wrapper">
                <a class="concrete-work_btn-get-personal-offer button-red" onclick="yaCounter47702209.reachGoal('zakazat-zvonok');" data-call="callback" href="#">Получить персональное предложение</a>
                <p class="concrete-work_sub-title">Оператор перезвонит Вам и подберет машину под Вашу заявку, а также согласует цену.</p>
            </div>
        </div>
        <img class="concrete-work_img" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
    </div>


<div class="container-width1110">

    <?php
    global $post;

    $nashi_raboty = get_posts([
        'posts_per_page' => -1,
        'category_name' => 'nashi-raboty',
        'post_type' => 'post',
        'exclude' => $post->ID,
    ]);
    ?>
    <DIV class="our-truck-crane-block width-block">

        <div class="top-box">
            <p>Другие наши работы</p>
            <div>
                <div class="our-truck-crane-swiper-button-prev swiper-button-prev-white"></div>
                <div class="our-truck-crane-swiper-button-next swiper-button-next-red"></div>
            </div>
        </div>

        <div class="our-truck-crane-swiper">
            <div class="swiper-wrapper">
                <?php
                foreach ($nashi_raboty as $post) {
                    setup_postdata($post);
                    $image = get_field('foto_raboti');
                    ?>
                    <div class="swiper-slide">
                        <a href="<?php the_permalink(); ?>">
                            <div class="our-works_item">
                                <img class="our-works_item_img"
                                     src="<?= $image['url']; ?>"
                                     alt="<?php the_title() ?>"/>
                                <p class="our-works_item_item_description">
                                    Вид АГП: <?php the_field('vid_mashini') ?>
                                    <span>ОБЪЕКТ: <?php the_field('mesto_raboti') ?></span>
                                </p>
                            </div>
                        </a>
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div>

        </div>

        <div class="hidden-bottom-button">
            <div class="our-truck-crane-swiper-button-prev swiper-button-prev-white"></div>
            <div class="our-truck-crane-swiper-button-next swiper-button-next-red"></div>
        </div>

    </DIV>


    <?php
    $post = get_post(1823);
    $logotipi_companiy = get_field('logotipi_companiy', $post->ID);
    ?>
    <div class="block-for-our-clients width-block">
        <div class="left-box">
            <p><?= $post->post_title ?></p>
        </div>
        <div class="right-box">
            <?php foreach ($logotipi_companiy as $item) { ?>
                <div><img
                            class="our-client_item_img" loading="lazy" src="<?= $item['logo']['url'] ?>"
                            alt="<?= $item['logo']['alt'] ?>"/>
                </div>
            <?php } ?>
        </div>
    </div>


    <div class="product-showcase width-block">
        <h2>Для реализации подобных <br> работ Вам пригодятся</h2>

        <?php
        $categories = [
            'taxonomy' => 'arenda-autovyshek',
            'type' => 'uslugi-autovyshki',
            'orderby' => 'name',
            'order' => 'ASC'
        ];

        component_get_cat($categories);
        ?>

        <?php
        $args = [
            'post_type' => 'uslugi-autovyshki', // Указываем наш новый тип записи
            'posts_per_page' => -1,
        ];

        component_get_auto($args);
        ?>
    </div>


    <?= do_shortcode('[help_block id=363]') ?>

</div>


<?php get_footer(); ?>
