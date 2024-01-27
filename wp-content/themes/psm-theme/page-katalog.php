<?php
/*
Template Name: Каталог
Template Post Type: post, page, product
*/


get_header();

$post = get_post();
$nasha_preimushhestva = get_field('nasha_preimushhestva');
$knopka_poluchit_predlozhenija = get_field('knopka_poluchit_predlozhenija');
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



    <div class="product-showcase width-block" data-page-type="katalog">
        <h2 class="katalog_sub-header"><?php the_title() ?></h2>
        <p class="katalog_sub-title"><?php the_content() ?></p>

        <?php
        $categories_params = [
            'taxonomy' => 'arenda-autovyshek',
            'type' => 'uslugi-autovyshki',
            'orderby' => 'name',
            'order' => 'ASC'
        ];

        global $post;
        $categories = get_categories($categories_params);
        ?>

        <div class="kategory-box-pc-version">
            <?php
            foreach ($categories as $post) {
                setup_postdata($post); ?>
                <a class="category_swiper-slide_item"
                   href="<?= get_category_link($post->term_id) ?>"><?= $post->name  ?></a>
            <?php }
            wp_reset_postdata(); ?>
        </div>

        <div class="kategory-box-pc-mobile-version">
            <?= component_get_cat($categories_params); ?>
        </div>

        <?php
        $args = [
            'post_type' => 'uslugi-autovyshki', // Указываем наш новый тип записи
            'posts_per_page' => -1,
        ];

        component_get_auto($args);
        ?>
    </div>
</div>


<?php
$post = get_post();
$shortkod_form = get_post(2044);
$pomosh = get_field('pomosh', 7);
?>
<div class="help-block width-block">
    <div class="left-box">
        <div class="part-1">
            <p><?= $pomosh['zagalovok'] ?></p>
        </div>
        <div class="part-2">
            <div>
                <img src="<?= $pomosh['foto_shatrudnika']['url'] ?>"
                     alt="<?= $pomosh['foto_shatrudnika']['alt'] ?>"/>
            </div>
            <p><?= $pomosh['soobshenia'] ?></p>
        </div>
        <div class="part-3-part-4-wrapper">
            <div class="part-3">
                <p><?= $pomosh['uvedomlenia'] ?></p>
            </div>
            <div class="part-4">
                <div class="icon-messenger">
                    <a href="<?= $pomosh['messengers_1']['link'] ?>">
                        <img src="<?= $pomosh['messengers_1']['ikonka']['url'] ?>"
                             alt="<?= $pomosh['messengers_1']['ikonka']['alt'] ?>">
                    </a>
                </div>
                <div class="telegram-icon-box icon-messenger">
                    <a href="<?= $pomosh['messengers_2']['link'] ?>">
                        <img src="<?= $pomosh['messengers_2']['ikonka']['url'] ?>"
                             alt="<?= $pomosh['messengers_2']['ikonka']['alt'] ?>">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <div class="right-box">
        <?= do_shortcode($shortkod_form->post_content) ?>
        <p>Я даю свое согласие на <span>обработку персональных данных</span></p>
    </div>
    <div class="hidden-part">
        <p><?= $pomosh['uvedomlenia'] ?></p>
        <div class="icon-box">
            <div>
                <img src="<?= $pomosh['foto_shatrudnika']['url'] ?>"
                     alt="<?= $pomosh['foto_shatrudnika']['alt'] ?>"/>
            </div>
            <div class="messengers-box">
                <a href="<?= $pomosh['messengers_1']['link'] ?>">
                    <img src="<?= $pomosh['messengers_1']['ikonka']['url'] ?>"
                         alt="<?= $pomosh['messengers_1']['ikonka']['alt'] ?>">
                </a>
            </div>
            <div class="messengers-box">
                <a href="<?= $pomosh['messengers_2']['link'] ?>">
                    <img src="<?= $pomosh['messengers_2']['ikonka']['url'] ?>"
                         alt="<?= $pomosh['messengers_2']['ikonka']['alt'] ?>">
                </a>
            </div>
        </div>
    </div>
</div>


<?php
$reviews = get_field('dobavit_otzyv', 120);
?>
<div class="block-reviews width-block">
    <div class="top-box">
        <p>Что о нас говорят клиенты</p>
        <div class="button-box">
            <div class="review-swiper-prev swiper-button-prev-white" data-review></div>
            <div class="review-swiper-next next-box swiper-button-next-red" data-review></div>
        </div>
    </div>

    <div class="bottom-box">
        <div class="review-swiper">
            <div class="swiper-wrapper">
                <?php foreach ($reviews as $review) { ?>
                    <div class="swiper-slide">
                        <div class="page-review_item">
                            <div class="page-review_avatar-wrapper">
                                <img class="page-review_item_img" src="<?= $review['foto']['url'] ?>"
                                     alt="<?= $review['foto']['alt'] ?>"/>
                                <p class="page-review_name"><?= $review['imja_i_drugie_dani'] ?></p>
                            </div>
                            <p class="page-review_item_item_comments"><?= $review['soderzhanija_otzyva'] ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="hidden-button-box">
                <div class="review-swiper-prev swiper-button-prev-white" data-review></div>
                <div class="review-swiper-next next-box swiper-button-next-red" data-review></div>
            </div>
        </div>
    </div>
</div>

<?php
$queried_object = get_queried_object();
$ne_nashli_otvet = get_field('ne_nashli_otvet', 7);
?>
<div class="question-and-answer-block width-block">
    <div class="left-box">
        <p class="core-title">Ответы <span>на вопросы</span></p>
        <div class="contact-box">
            <p class="part-1">Не нашли ответ на свой вопрос?</p>
            <p class="part-2"><?= $ne_nashli_otvet['chto_sdelat'] ?></p>
            <div class="item-1">
                <a class="button-blue" href="/">Задать вопрос</a>
                <DIV>
                    <P class="work-schedule"><?= $ne_nashli_otvet['vremya_raboti'] ?></P>
                    <a class="tel-link" href="tel:+79089060719"><?= $ne_nashli_otvet['nomer_telefona'] ?></a>
                </DIV>
            </div>
            <div class="item-2">
                <DIV class="icon-box">
                    <div class="avatar">
                        <img src="<?= $ne_nashli_otvet['foto_satrudnika']['url'] ?>"
                             alt="<?= $ne_nashli_otvet['foto_satrudnika']['alt'] ?>"/>
                    </div>
                    <div class="telegram-box">
                        <a href="<?= $ne_nashli_otvet['messenger']['link_messengera'] ?>">
                            <img src="<?= $ne_nashli_otvet['messenger']['iconka']['url'] ?>"
                                 alt="<?= $ne_nashli_otvet['messenger']['iconka']['alt'] ?>"/>
                        </a>
                    </div>
                </DIV>
                <P><?= $ne_nashli_otvet['messenger']['uvedomlenia'] ?></P>
            </div>
        </div>
    </div>

    <?= do_shortcode('[question_and_answer]'); ?>

</div>


<?php get_footer(); ?>
