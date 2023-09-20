<?php
/**
 * Template Name: Услуга
 * Template Post Type: page
 */
get_header(); ?>
    <link rel="stylesheet" href="/wp-content/themes/psm-theme/magnific-popup.css">

<?php
// Retrieves the stored value from the database
//$meta_url = get_post_meta( get_the_ID(), 'links-news-original', true );
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

<?
$term = get_the_terms($post->ID, 'arenda-autovyshek');
if ($term) {
    $term1 = array_shift($term);
    $tax = $term1->term_taxonomy_id;
}
?>
    <div class="container single-product-card">
        <div class="row">
            <div itemscope itemtype="http://schema.org/NewsArticle">
                <div class="col-xs-12"><h1 itemprop="headline" class="text-center"><?php the_title(); ?></h1></div>
                <meta itemprop="description" content="Краткое описание машины">
            </div>
            <div class="col-sm-6">
                <div class="photo-gal-c">
                    <a href="<?= get_the_post_thumbnail_url(); ?>"><img class="attachment-post-thumbnail" src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a> <br>
                    <?php if (have_rows('photo-gal')) : ?>
                        <?php while (have_rows('photo-gal')) : the_row(); ?>

                            <?
                            $img1 = get_sub_field('img');
                            //var_dump($img1['url']);
                            ?>
                            <div style="display: none;">
                                <div class="zoom-container"><a href="<?= $img1['url'] ?>"><img class="photo-gal" src="<?= $img1['url'] ?>"> </a></div>
                            </div>
                            <div class="photo-gal-c1">
                                <div class="zoom-container"><img class="photo-gal" src="<?= $img1['url'] ?>"></div>
                            </div>
                        <? endwhile; ?>
                    <? endif; ?>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12 price-col">
                    <h3>Стоимость</h3>
                    <div class="row">
                        <div class="col-xs-12 text-center"><?= get_post_meta($post->ID, 'meta1_field_7', true); ?> <br></div>
                    </div>
                </div>
                <a href="https://psm-ekb96.ru/akcii/"><img class="alignleft wp-image-880" src="http://psm-ekb96.ru/wp-content/uploads/2019/12/arenda-avtovyshki-akcii.png" alt="Акции" width="600" height="151"/></a><br>
                <div class="h4">Внимание! При заказе 2 автовышек на длительный срок доставка на объект бесплатно! Подробности по телефону: <a class="phone" href="tel:+7 (902) 262-70-66">+7 (902) 262-70-66</a></div>
                <?php //the_meta(); ?>
                <div class="button-container">
                    <div class="col-xs-6"><a class="order-but but-auto" data-call="singleauto" href="javascript:void(0);" onclick="yaCounter47702209.reachGoal('zakazal-iz-kartochki');">Узнать стоимость</a></div>
                    <div class="col-xs-6"><a class="order-but but-auto" data-call="singleauto" href="javascript:void(0);" onclick="yaCounter47702209.reachGoal('zakazal-iz-kartochki');">Заказать</a></div>
                    <div class="col-xs-12"><a class="order-but but-auto" data-call="callautosend" href="javascript:void(0);" onclick="yaCounter47702209.reachGoal('zakazal-iz-kartochki');">Заказать по телефону</a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 cat-block">
                <p>Находится в категориях:</p>
                <div class="all-hidden all-cat">
                    <?
                    $categories = get_categories(array(
                        'id' => $post->id,
                        'taxonomy' => 'arenda-autovyshek',
                        'type' => 'uslugi-autovyshki',
                        'orderby' => 'name',
                        'order' => 'ASC',
                        //'include' => $tax
                    ));
                    foreach ($categories as $category) {
                        $cat .= '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                    }
                    echo $cat;
                    ?>

                    <?php if (have_rows('dopolnitelnye_tegi')) : ?>
                        <?php while (have_rows('dopolnitelnye_tegi')) : the_row(); ?>
                            <a href="<?= get_sub_field('link-tag'); ?>"> <?= get_sub_field('name-tag'); ?> </a>
                        <? endwhile; ?>
                    <? endif; ?>
                </div>

            </div>
            <div class="col-sm-12">
                <div class="flexdiv"><a class="show-all">Показать все</a></div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="flexdiv"><a style="display: none;" class="hide-all">Скрыть все</a></div>
        </div>

    </div>
    <div class="container">
        <?
        the_content();
        ?>
    </div>

    <div class="product-section">
        <div class="h2 text-center">Другие машины</div>
        <div class="container">
            <div class="row">


                <?

                $args = array(
                    'post_type' => 'uslugi-autovyshki', // Указываем наш новый тип записи
                    'posts_per_page' => 10,
                    'exclude' => get_the_ID()
                );

                $p = get_posts($args);
                $content = '';
                $i = 0;
                foreach ($p as $post) {
                    $cost = get_post_custom_values('Стоимость');
                    setup_postdata($post); ?>

                    <div class="col-sm-6 col-md-3">
                        <div class="product-card">
                            <div class="product-image"><?= get_the_post_thumbnail(); ?></div>
                            <div class="product-title"><a href="<?= get_permalink(); ?>"><?= get_the_title(); ?></a></div>
                            <div class="card-descr"><span><?= get_post_meta(get_the_ID(), 'meta1_field_6', true); ?></span></div>
                            <a href="<?= get_permalink(); ?>">
                                <div class="product-description"><span>Условия аренды</span></div>
                            </a>
                            <a onclick="yaCounter47702209.reachGoal('zakaz-s-listinga');" data-auto="<?= get_the_title(); ?>" data-call="auto" href="javascript:void(0);">
                                <div class="product-description"><span>Заказать</span></div>
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


    <div class="advantages-section">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Наши преимущества</h2>
                <div class="col-sm-4 col-md-4">
                    <div class="advantages-card">
                        <div class="advantages-image">
                            <noscript><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-operativno.png" alt="Оперативная доставка"/></noscript>
                            <img class=" ls-is-cached lazyloaded" src="/wp-content/uploads/2019/10/arenda-avtovyshki-operativno.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-operativno.png" alt="Оперативная доставка"></div>
                        <div class="advantages-title">
                            <h3>Оперативная доставка. Всегда вовремя.</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="advantages-card">
                        <div class="advantages-image">
                            <noscript><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-24.png" alt="Работа в круглосуточном режиме"/></noscript>
                            <img class=" lazyloaded" src="/wp-content/uploads/2019/10/arenda-avtovyshki-24.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-24.png" alt="Работа в круглосуточном режиме"></div>
                        <div class="advantages-title">
                            <h3>Работа в круглосуточном режиме</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="advantages-card">
                        <div class="advantages-image">
                            <noscript><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-sale.png" alt="Собственный автопарк"/></noscript>
                            <img class=" lazyloaded" src="/wp-content/uploads/2019/10/arenda-avtovyshki-sale.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-sale.png" alt="Собственный автопарк"></div>
                        <div class="advantages-title">
                            <h3>Собственный автопарк</h3>
                        </div>
                    </div>
                </div>
            </div>
            <p>&nbsp;</p>
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="advantages-card">
                        <div class="advantages-image">
                            <noscript><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-voditeli.png" alt="Современная техника в отличном состоянии"/></noscript>
                            <img class=" lazyloaded" src="/wp-content/uploads/2019/10/arenda-avtovyshki-voditeli.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-voditeli.png" alt="Современная техника в отличном состоянии"></div>
                        <div class="advantages-title">
                            <h3>Современная техника в отличном состоянии</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="advantages-card">
                        <div class="advantages-image">
                            <noscript><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-rostehnadzor.png" alt="Разрешения РосТехНадзора"/></noscript>
                            <img class=" lazyloaded" src="/wp-content/uploads/2019/10/arenda-avtovyshki-rostehnadzor.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-rostehnadzor.png" alt="Разрешения РосТехНадзора"></div>
                        <div class="advantages-title">
                            <h3>Разрешения РосТехНадзора</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="advantages-card">
                        <div class="advantages-image">
                            <noscript><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-nds.png" alt="Безналичный расчет, НДС"/></noscript>
                            <img class=" lazyloaded" src="/wp-content/uploads/2019/10/arenda-avtovyshki-nds.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-nds.png" alt="Безналичный расчет, НДС"></div>
                        <div class="advantages-title">
                            <h3>Безналичный расчет, НДС</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?=do_shortcode('[work_steps]')?>

    <div class="seo-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="/wp-content/uploads/2019/10/p2.jpg">
                </div>
                <div class="col-md-6">
                    <?= get_post_meta($post->ID, 'meta1_field_8', true); ?>
                </div>
            </div>
            <p></p></div>
    </div>

<?=do_shortcode('[reviews]')?>

<?=do_shortcode('[delivery_rent]')?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            jQuery('.product-card img').removeAttr('width');
            jQuery('.product-card img').removeAttr('height');

            jQuery('.single-product-card .photo-gal').click(function () {
                var src = jQuery(this).attr('src')
                jQuery('.photo-gal-c .attachment-post-thumbnail').attr('src', src)
                jQuery('.photo-gal-c .attachment-post-thumbnail').attr('srcset', src)
            })

            jQuery('.photo-gal-c').magnificPopup({
                delegate: 'a',
                type: 'image',
                closeOnContentClick: false,
                closeBtnInside: false,
                mainClass: 'mfp-with-zoom mfp-img-mobile',
                image: {
                    verticalFit: true,
                    titleSrc: function (item) {
                        return item.el.attr('title') + ' &middot; <a class="image-source-link" href="' + item.el.attr('data-source') + '" target="_blank">image source</a>';
                    }
                },
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true,
                    duration: 300, // don't foget to change the duration also in CSS
                    opener: function (element) {
                        return element.find('img');
                    }
                }

            });


        }, false)
    </script>
<? get_footer();