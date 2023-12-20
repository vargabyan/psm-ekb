<?php get_header(); ?>

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

    <div class="article-pages">

        <p class="article-pages_header">Статьи</p>

        <div class="article-pages_items-wrapper">
            <?php if (have_posts()) : while (have_posts()) :
                the_post();
                ?>

                <div class="article-pages_item">
                    <div class="article-pages_item_img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="article-pages_item-title">
                        <?php the_title(); ?>
                    </div>
                    <p class="article-pages_item_description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit
                    </p>
                    <a class="article-pages_item_link button-blue" href="<?= get_the_permalink(); ?>">Условия аренды</a>
                </div>

            <?php
            endwhile;
            else: ?>
                <p>Sorry, no posts matched your criteria.

                </p>

            <?php endif; ?>
        </div>
    </div>
</div>

<?php
$post = get_post(2033);
$shortkod_form = get_post(2044);
$pomosh = get_field('pomosh', $post->ID);
?>

<div class="help-block width-block" data-page-type="blog">
    <div class="left-box">
        <div class="part-1">
            <p><?= $post->post_content ?></p>
        </div>
        <div class="part-2">
            <div>
                <img src="<?= $pomosh['foto_shatrudnika']['url'] ?>" alt="<?= $pomosh['foto_shatrudnika']['alt'] ?>"/>
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
            </div>
        </div>
    </div>
    <div class="line"></div>
    <div class="right-box">
        <?= do_shortcode($shortkod_form->post_content) ?>
        <p>Я даю свое согласие на <span>обработку персональных данных</span></p>
    </div>
    <button class="submit-your-application button-black"><?= $pomosh['tekst_knopki'] ?></button>
    <div class="hidden-part">
        <p><?= $pomosh['uvedomlenia'] ?></p>
        <div class="icon-box">
            <div class="messengers-box">
                <a href="<?= $pomosh['messengers_1']['link'] ?>">
                    <img src="<?= $pomosh['messengers_1']['ikonka']['url'] ?>"
                         alt="<?= $pomosh['messengers_1']['ikonka']['alt'] ?>">
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
