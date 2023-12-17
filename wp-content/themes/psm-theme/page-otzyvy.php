<?php
get_header()
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

    <?php
    $posts = get_field('dobavit_otzyv');
    ?>

    <div class="page-review">
        <p class="page-review_header"><?php the_title() ?></p>

        <div class="page-review_items-wrapper">

            <?php foreach ($posts as $post) { ?>
                <div class="page-review_item">
                    <div class="page-review_avatar-wrapper">
                        <img class="page-review_item_img" src="<?= $post['foto']['url'] ?>"
                             alt="<?= $post['foto']['alt'] ?>"/>
                        <p class="page-review_name"><?= $post['imja_i_drugie_dani'] ?></p>
                    </div>
                    <p class="page-review_item_item_comments"><?= $post['soderzhanija_otzyva'] ?></p>
                </div>
            <?php } ?>

        </div>
    </div>


    <section class="flamp-widget-wrapper">
        <a class="flamp-widget"
           href="//ekaterinburg.flamp.ru/firm/predpriyatie_stroitelnykh_mashin_ooo_kompaniya-70000001022135049"
           data-flamp-widget-type="responsive-new" data-flamp-widget-id="70000001022135049" data-flamp-widget-width="100%"
           data-flamp-widget-count="1">Отзывы о нас на Флампе</a>
    </section>


</div>


<?php get_footer() ?>

