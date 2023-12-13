<?php get_header(); ?>

<div class="container-width1110">

    <?php breadcrumbs(); ?>

    <div class="our-works">
        <p class="our-works_header">Наши автовышки используют <br> для <span>разнообразных работ</span></p>

        <div class="our-works_items-wrapper">

            <?php
            global $post;
            $myposts = get_posts([
                'posts_per_page' => -1,
                'category_name' => 'nashi-raboty',
                'post_type' => 'post',
            ]);

            foreach ($myposts as $post) {
                setup_postdata($post);
                $image = get_field('foto_raboti');
                ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="our-works_item">
                        <img class="our-works_item_img"
                             src="<?= $image['url']; ?>"
                             alt="<?php the_title() ?>" width="300" height="225"/>
                        <p class="our-works_item_item_description">
                            Вид АГП: <?php the_field('vid_mashini') ?>
                            <span>ОБЪЕКТ: <?php the_field('mesto_raboti') ?></span><span>ДАТА: <?php the_field('den_raboti') ?></span>
                        </p>
                    </div>
                </a>
                <?php
            }
            wp_reset_postdata();
            ?>

        </div>
    </div>

</div>


<?php get_footer(); ?>
