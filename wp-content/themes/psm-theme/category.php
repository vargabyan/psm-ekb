<link rel="stylesheet" href="/wp-content/themes/psm-theme/css/fonts.css">
<link rel="stylesheet" href="/wp-content/themes/psm-theme/article/article.css">


<?php get_header(); ?>

<div class="container-width1110">

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
                    <a class="article-pages_item_link" href="<?php get_the_permalink(); ?>">Условия аренды</a>
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

<?php require __DIR__ . "/../psm-theme/cp-help-block/index.php"?>

<?php get_footer(); ?>
