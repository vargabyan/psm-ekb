<?php get_header(); ?>

<link rel="stylesheet" href="/wp-content/themes/psm-theme/magnific-popup.css">

<?php
// Retrieves the stored value from the database
//$meta_url = get_post_meta( get_the_ID(), 'links-news-original', true );
?>
<!--<div class="breadcrumbs">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-xs-12">-->
<!--                --><?php //if ( function_exists( 'breadcrumbs' ) ) breadcrumbs(); ?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<?
$term = get_the_terms($post->ID, 'arenda-autovyshek');
if($term) {
    $term1 = array_shift($term);
    $tax = $term1->term_taxonomy_id;
}
?>


<!--MY code start ************************************************-->

<link rel="stylesheet" href="/wp-content/themes/psm-theme/css/fonts.css">
<link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="/wp-content/themes/psm-theme/single-uslugi-autovyshki.css">

<div class="maxwidth-1110px">

    <div class="breadcrumb_block">

        <?php if ( function_exists( 'breadcrumbs' ) ) breadcrumbs(); ?>

    </div>

    <div class="header-container">
        <?php the_title(); ?>
    </div>

    <div class="product-container">

        <div class="right_box">
            <div class="top_box">

                <div class="vertical-slider">
                    <div class="swiper-vertical">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">

                            <?php if (have_rows('photo-gal')) : ?>
                            <?php $id_img = 0; ?>
                                <?php while (have_rows('photo-gal')) : the_row(); ?>
                                    <?php $id_img++; ?>

                                    <?
                                    $img1 = get_sub_field('img');
                                    //var_dump($img1['url']);
                                    ?>
                                    <div class="swiper-slide">
                                         <img class="swiper-vertical__img" data-swiper-vertical__img id="<?php echo $id_img ?>" src="<?= $img1['url']?>">
                                    </div>
                                <? endwhile; ?>
                            <? endif; ?>

                        </div>

                    </div>
                </div>

                <div class="horizontal-slider">
                    <div class="swiper-horizontal">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">

                            <?php if (have_rows('photo-gal')) : ?>
                                <?php while (have_rows('photo-gal')) : the_row(); ?>

                                    <?
                                    $img1 = get_sub_field('img');
                                    //var_dump($img1['url']);
                                    ?>
                                    <div class="swiper-slide">
                                         <img class="horizontal-slider__img" id="<?php echo $id_img ?>" src="<?= $img1['url']?>">
                                    </div>
                                <? endwhile; ?>
                            <? endif; ?>

                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-horizontal-button-prev swiper-horizontal-button"></div>
                        <div class="swiper-horizontal-button-next swiper-horizontal-button"></div>

                    </div>
                </div>

            </div>
            <div class="bottom_box">
                <div>
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_367_326)">
                            <path d="M23.3334 9.33341H19.8334V4.66675H3.50008C2.21675 4.66675 1.16675 5.71675 1.16675 7.00008V19.8334H3.50008C3.50008 21.7701 5.06342 23.3334 7.00008 23.3334C8.93675 23.3334 10.5001 21.7701 10.5001 19.8334H17.5001C17.5001 21.7701 19.0634 23.3334 21.0001 23.3334C22.9368 23.3334 24.5001 21.7701 24.5001 19.8334H26.8334V14.0001L23.3334 9.33341ZM7.00008 21.5834C6.03175 21.5834 5.25008 20.8017 5.25008 19.8334C5.25008 18.8651 6.03175 18.0834 7.00008 18.0834C7.96842 18.0834 8.75008 18.8651 8.75008 19.8334C8.75008 20.8017 7.96842 21.5834 7.00008 21.5834ZM22.7501 11.0834L25.0368 14.0001H19.8334V11.0834H22.7501ZM21.0001 21.5834C20.0318 21.5834 19.2501 20.8017 19.2501 19.8334C19.2501 18.8651 20.0318 18.0834 21.0001 18.0834C21.9684 18.0834 22.7501 18.8651 22.7501 19.8334C22.7501 20.8017 21.9684 21.5834 21.0001 21.5834Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_367_326">
                                <rect width="28" height="28" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <p>
                    при заказе <span>2 автовышек на длительный срок,</span> доставка на объект <span>бесплатно</span>
                </p>
            </div>
        </div>

        <div class="left_box">

            <p class="col_1">Характеристики</p>

            <div class="col_2">
                <div>
                    <p class="part_1">Грузоподъемность раб. платформы, кг</p>
                    <p class="part_2">200</p>
                </div>
                <div>
                    <p class="part_1">Рабочая высота, м</p>
                    <p class="part_2">15</p>
                </div>
                <div>
                    <p class="part_1">Горизонтальный вылет стрелы, м</p>
                    <p class="part_2">9</p>
                </div>
            </div>

            <p class="col_3">
                Все характеристики
                <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 4L4 1L1 4" stroke="#3B8AF0"/>
                </svg>
            </p>

            <div class="line_item"></div>

            <div class="col_4">
                <div class="box_1">
                    <p class="part_1">Минимальный заказ <span>-</span></p>
                    <p class="part_2">4 часа</p>
                </div>
                <div class="box_2">
                    <div>
                        <p class="part_1">Цена за час</p>
                        <p class="part_2">900 рублей</p>
                        <p class="part_3">без учета НДС 20%</p>
                    </div>
                    <div>
                        <p class="part_1">Цена за смену</p>
                        <p class="part_2"> 7200 рублей</p>
                        <p class="part_3">без учета НДС 20%</p>
                    </div>
                </div>
                <div class="box_3">
                    <a class="part_1" href="#">Заказать автовышку</a>
                    <a class="part_2" href="#">Помощь менеджера</a>
                </div>
            </div>

            <div class="col_5">
                <div>
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_367_326)">
                            <path d="M23.3334 9.33341H19.8334V4.66675H3.50008C2.21675 4.66675 1.16675 5.71675 1.16675 7.00008V19.8334H3.50008C3.50008 21.7701 5.06342 23.3334 7.00008 23.3334C8.93675 23.3334 10.5001 21.7701 10.5001 19.8334H17.5001C17.5001 21.7701 19.0634 23.3334 21.0001 23.3334C22.9368 23.3334 24.5001 21.7701 24.5001 19.8334H26.8334V14.0001L23.3334 9.33341ZM7.00008 21.5834C6.03175 21.5834 5.25008 20.8017 5.25008 19.8334C5.25008 18.8651 6.03175 18.0834 7.00008 18.0834C7.96842 18.0834 8.75008 18.8651 8.75008 19.8334C8.75008 20.8017 7.96842 21.5834 7.00008 21.5834ZM22.7501 11.0834L25.0368 14.0001H19.8334V11.0834H22.7501ZM21.0001 21.5834C20.0318 21.5834 19.2501 20.8017 19.2501 19.8334C19.2501 18.8651 20.0318 18.0834 21.0001 18.0834C21.9684 18.0834 22.7501 18.8651 22.7501 19.8334C22.7501 20.8017 21.9684 21.5834 21.0001 21.5834Z" fill="white"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_367_326">
                                <rect width="28" height="28" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <p>
                    при заказе <span>2 автовышек на длительный срок,</span> доставка на объект <span>бесплатно</span>
                </p>
            </div>

        </div>

    </div>

</div>

<div class="product-data-container">

    <div class="product-data-container__content">
        <div class="right-box">
            <button class="product-data-button" data-features >Характеристики</button>
            <div class="product-data-text-content-mobile" data-features-box-mobile >
                <?=get_post_meta($post->ID, 'meta1_field_8', true);?>
            </div>
            <button data-description >Описание</button>
            <div data-description-box-mobile >
                <?=get_post_meta($post->ID, 'meta1_field_6', true);?>
            </div>
            <button data-payment-delivery >Оплата и доставка</button>
            <div data-payment-delivery-box-mobile >
                <?=get_post_meta($post->ID, 'meta1_field_7', true);?>
            </div>
        </div>
        <div class="left_box">
            <div class="product-data-text-content-pc" data-features-box-pc >
                <?=get_post_meta($post->ID, 'meta1_field_8', true);?>
            </div>
            <div data-description-box-pc >
                <?=get_post_meta($post->ID, 'meta1_field_6', true);?>
            </div>
            <div data-payment-delivery-box-pc >
                <?=get_post_meta($post->ID, 'meta1_field_7', true);?>
            </div>
        </div>
    </div>

</div>

<div class="maxwidth-1110px">
    <div class="block_container_3">

        <div class="product-showcase width-block">
        <h2>другая спец техника</h2>

        <div class="category-box">
            <div class="category-swiper-button-prev">
                <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 9L1 5L5 1" stroke="white"/>
                </svg>
            </div>

            <div class="category-swiper">
                <div class="swiper-wrapper category-swiper-wrapper">

                    <?= do_shortcode('[cat]'); ?>

                </div>
            </div>

            <div class="category-swiper-button-next">
                <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L5 5L1 9" stroke="white"/>
                </svg>
            </div>
        </div>

        <div class="products-box">
            <?= do_shortcode('[auto]'); ?>
        </div>
    </div>

    </div>
    <div class="question-block">
        <div class="left-box">
            <p class="core-title">Не нашли то, <br class="br-1"> что <br class="br-2"> искали?</p>
            <div class="avatar-box">
                <img src="/wp-content/uploads/2023/07/Ellipse%2086.png" alt="">
                <P>Оставьте заявку и  мы подберем для вас подходящий вариант</P>
            </div>
            <a class="order-button" href="#">Оставить заявку</a>
            <div class="hidden-contact-box">
                <p>
                    Если у вас есть вопрос,
                    то звоните нам по номеру
                </p>
                <a href="tel:88003017391">8 800 301 73 91</a>
            </div>
        </div>
        
        <div class="right-box">
            <p class="core-title-hidden">Ответы <span>на вопросы</span></p>

            <div class="accordion_wrapper">

                <div class="accordion_item">
                    <div class="accordion_heading">
                        <p>
                            Вопрос клиента, вопрос клиента, вопрос клиента?
                        </p>
                        <svg class="accordion_heading_svg"  width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.12 6.17205e-07L8 5.56275L1.88 8.21774e-08L-7.4858e-08 1.71255L8 9L16 1.71255L14.12 6.17205e-07Z" fill="#3B8AF0"/>
                        </svg>
                    </div>
                    <p class="accordion_content close">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, unde.
                    </p>
                </div>

                <div class="accordion_item">
                    <div class="accordion_heading">
                        <p>
                            Вопрос клиента, вопрос клиента, вопрос клиента?
                        </p>
                        <svg class="accordion_heading_svg"  width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.12 6.17205e-07L8 5.56275L1.88 8.21774e-08L-7.4858e-08 1.71255L8 9L16 1.71255L14.12 6.17205e-07Z" fill="#3B8AF0"/>
                        </svg>
                    </div>
                    <p class="accordion_content close">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, unde.
                    </p>
                </div>

                <div class="accordion_item">
                    <div class="accordion_heading">
                        <p>
                            Вопрос клиента, вопрос клиента, вопрос клиента?
                        </p>
                        <svg class="accordion_heading_svg"  width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.12 6.17205e-07L8 5.56275L1.88 8.21774e-08L-7.4858e-08 1.71255L8 9L16 1.71255L14.12 6.17205e-07Z" fill="#3B8AF0"/>
                        </svg>
                    </div>
                    <p class="accordion_content close">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, unde.
                    </p>
                </div>

                <div class="accordion_item">
                    <div class="accordion_heading">
                        <p>
                            Вопрос клиента, вопрос клиента, вопрос клиента?
                        </p>
                        <svg class="accordion_heading_svg"  width="16" height="9" viewBox="0 0 16 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.12 6.17205e-07L8 5.56275L1.88 8.21774e-08L-7.4858e-08 1.71255L8 9L16 1.71255L14.12 6.17205e-07Z" fill="#3B8AF0"/>
                        </svg>
                    </div>
                    <p class="accordion_content close">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, unde.
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>



<script src="/wp-content/themes/psm-theme/js/single-uslugi-autovyshki.js"></script>


<!--MY code end ************************************************-->


<!--<div class="container single-product-card">-->
<!---->
<!--    <div class="row">-->
<!---->
<!--        <div itemscope itemtype="http://schema.org/NewsArticle" >-->
<!--            <div class="col-xs-12"><h1 itemprop="headline" class="text-center">--><?php //the_title(); ?><!--</h1></div>-->
<!--            <meta itemprop="description" content="Краткое описание машины">-->
<!--        </div>-->
<!---->
<!---->
<!--        <div class="col-sm-6">-->
<!--            <div class="photo-gal-c">-->
<!--                <a href="--><?php //=get_the_post_thumbnail_url();?><!--"><img class="attachment-post-thumbnail" src="--><?php //=get_the_post_thumbnail_url();?><!--" alt="--><?php //the_title(); ?><!--"></a> <br>-->
<!--                --><?php //if (have_rows('photo-gal')) : ?>
<!--                    --><?php //while (have_rows('photo-gal')) : the_row(); ?>
<!---->
<!--                        --><?//
//                        $img1 = get_sub_field('img');
//                        //var_dump($img1['url']);
//                        ?>
<!--                        <div style="display: none;">-->
<!--                            <div class="zoom-container"> <a href="--><?php //= $img1['url']?><!--"><img class="photo-gal" src="--><?php //= $img1['url']?><!--"> </a></div>-->
<!--                        </div>-->
<!--                        <div class="photo-gal-c1">-->
<!--                            <div class="zoom-container"> <img class="photo-gal" src="--><?php //= $img1['url']?><!--"> </div>-->
<!--                        </div>-->
<!--                    --><?// endwhile; ?>
<!--                --><?// endif; ?>
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col-sm-6">-->
<!--            <div class="col-xs-12 price-col">-->
<!--                <div class="h3 text-center">Стоимость</div>-->
<!--                <div class="row">-->
<!--                    <div class="col-xs-12 text-center">--><?php //=get_post_meta($post->ID, 'meta1_field_7', true);?><!-- <br></div>-->
<!--                </div>-->
<!--            </div><a href="https://psm-ekb96.ru/akcii/"><img class="alignleft wp-image-880" src="http://psm-ekb96.ru/wp-content/uploads/2019/12/arenda-avtovyshki-akcii.png" alt="Акции" width="600" height="151" /></a><br>-->
<!--            <div class="h4">Внимание! При заказе 2 автовышек на длительный срок доставка на объект бесплатно! Подробности по телефону: <a class="phone" href="tel:+7 (902) 262-70-66">+7 (902) 262-70-66</a></div>-->
<!--            --><?php ////the_meta(); ?>
<!--            <div class="button-container">-->
<!--                <div class="col-xs-6"><a class="order-but but-auto" data-call="singleauto" href="javascript:void(0);" onclick="yaCounter47702209.reachGoal('zakazal-iz-kartochki');">Узнать стоимость</a></div>-->
<!--                <div class="col-xs-6"><a class="order-but but-auto" data-call="singleauto" href="javascript:void(0);" onclick="yaCounter47702209.reachGoal('zakazal-iz-kartochki');">Заказать</a></div>-->
<!--                <div class="col-xs-12"><a class="order-but but-auto" data-call="callautosend" href="javascript:void(0);" onclick="yaCounter47702209.reachGoal('zakazal-iz-kartochki');">Заказать по телефону</a></div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!--    <div class="row">-->
<!---->
<!--        <div class="col-sm-12 cat-block">-->
<!--            <p>Находится в категориях:</p>-->
<!--            <div class="all-hidden all-cat">-->
<!--                --><?//
//                $categories = get_categories(array(
//                    'id' => $post->id,
//                    'taxonomy' => 'arenda-autovyshek',
//                    'type' => 'uslugi-autovyshki',
//                    'orderby' => 'name',
//                    'order' => 'ASC',
//                    //'include' => $tax
//                ));
//                foreach( $categories as $category ){
//
//
//                    $cat.= '<a href="' . get_category_link( $category->term_id ) .  '">' . $category->name.'</a>';
//                }
//                echo $cat;
//                ?>
<!---->
<!--                --><?php //if (have_rows('dopolnitelnye_tegi')) : ?>
<!--                    --><?php //while (have_rows('dopolnitelnye_tegi')) : the_row(); ?>
<!---->
<!--                        <a href="--><?php //= get_sub_field('link-tag'); ?><!--"> --><?php //= get_sub_field('name-tag'); ?><!-- </a>-->
<!---->
<!--                    --><?// endwhile; ?>
<!--                --><?// endif; ?>
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col-sm-12"><div class="flexdiv"><a class="show-all">Показать все</a></div></div>-->
<!---->
<!--    </div>-->
<!---->
<!--    <div class="col-sm-12"><div class="flexdiv"><a style="display: none;" class="hide-all">Скрыть все</a></div></div>-->
<!---->
<!--</div>-->


<!--<div class="container">-->
<!--    --><?php
//        the_content();
//    ?>
<!--</div>-->

<!--<div class="product-section">-->
<!--    <div class="h2 text-center">Другие машины</div>-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!---->
<!---->
<!--            --><?//
//
//            $args = array(
//                'post_type' => 'uslugi-autovyshki', // Указываем наш новый тип записи
//                'posts_per_page' => 10,
//                'exclude' => get_the_ID()
//            );
//
//            $p = get_posts( $args );
//            $content='';
//            $i=0;
//            foreach ( $p as $post ) {
//                $cost=get_post_custom_values('Стоимость');
//                setup_postdata( $post ); ?>
<!---->
<!--                <div class="col-sm-6 col-md-3">-->
<!--                    <div class="product-card">-->
<!--                        <div class="product-image">--><?//= get_the_post_thumbnail(); ?><!--</div>-->
<!--                        <div class="product-title"><a href="--><?//= get_permalink(); ?><!--">--><?//= get_the_title(); ?><!--</a></div>-->
<!--                        <div class="card-descr"><span>--><?//= get_post_meta(get_the_ID(),'meta1_field_6', true); ?><!--</span></div>-->
<!--                        <a href="--><?//= get_permalink(); ?><!--">-->
<!--                            <div class="product-description"><span>Условия аренды</span></div>-->
<!--                        </a>-->
<!--                        <a onclick="yaCounter47702209.reachGoal('zakaz-s-listinga');"  data-auto="--><?//= get_the_title(); ?><!--" data-call="auto" href="javascript:void(0);">-->
<!--                            <div class="product-description"><span>Заказать</span></div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                --><?//
//            }
//            wp_reset_postdata();
//
//            ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->


<!---->
<!--<div class="advantages-section">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <h2 class="text-center">Наши преимущества</h2>-->
<!--            <div class="col-sm-4 col-md-4">-->
<!--                <div class="advantages-card">-->
<!--                    <div class="advantages-image"><noscript><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-operativno.png" alt="Оперативная доставка" /></noscript><img class=" ls-is-cached lazyloaded" src="/wp-content/uploads/2019/10/arenda-avtovyshki-operativno.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-operativno.png" alt="Оперативная доставка"></div>-->
<!--                    <div class="advantages-title">-->
<!--                        <h3>Оперативная доставка. Всегда вовремя.</h3>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-sm-4 col-md-4">-->
<!--                <div class="advantages-card">-->
<!--                    <div class="advantages-image"><noscript><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-24.png" alt="Работа в круглосуточном режиме" /></noscript><img class=" lazyloaded" src="/wp-content/uploads/2019/10/arenda-avtovyshki-24.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-24.png" alt="Работа в круглосуточном режиме"></div>-->
<!--                    <div class="advantages-title">-->
<!--                        <h3>Работа в круглосуточном режиме</h3>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-sm-4 col-md-4">-->
<!--                <div class="advantages-card">-->
<!--                    <div class="advantages-image"><noscript><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-sale.png" alt="Собственный автопарк" /></noscript><img class=" lazyloaded" src="/wp-content/uploads/2019/10/arenda-avtovyshki-sale.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-sale.png" alt="Собственный автопарк"></div>-->
<!--                    <div class="advantages-title">-->
<!--                        <h3>Собственный автопарк</h3>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <p>&nbsp;</p>-->
<!--        <div class="row">-->
<!--            <div class="col-sm-4 col-md-4">-->
<!--                <div class="advantages-card">-->
<!--                    <div class="advantages-image"><noscript><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-voditeli.png" alt="Современная техника в отличном состоянии" /></noscript><img class=" lazyloaded" src="/wp-content/uploads/2019/10/arenda-avtovyshki-voditeli.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-voditeli.png" alt="Современная техника в отличном состоянии"></div>-->
<!--                    <div class="advantages-title">-->
<!--                        <h3>Современная техника в отличном состоянии</h3>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-sm-4 col-md-4">-->
<!--                <div class="advantages-card">-->
<!--                    <div class="advantages-image"><noscript><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-rostehnadzor.png" alt="Разрешения РосТехНадзора" /></noscript><img class=" lazyloaded" src="/wp-content/uploads/2019/10/arenda-avtovyshki-rostehnadzor.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-rostehnadzor.png" alt="Разрешения РосТехНадзора"></div>-->
<!--                    <div class="advantages-title">-->
<!--                        <h3>Разрешения РосТехНадзора</h3>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-sm-4 col-md-4">-->
<!--                <div class="advantages-card">-->
<!--                    <div class="advantages-image"><noscript><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-nds.png" alt="Безналичный расчет, НДС" /></noscript><img class=" lazyloaded" src="/wp-content/uploads/2019/10/arenda-avtovyshki-nds.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-nds.png" alt="Безналичный расчет, НДС"></div>-->
<!--                    <div class="advantages-title">-->
<!--                        <h3>Безналичный расчет, НДС</h3>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<?//=do_shortcode('[work_steps]')?>
<!---->
<!--<div class="seo-section">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-6 text-center">-->
<!--                <img src="/wp-content/uploads/2019/10/p2.jpg">-->
<!--            </div>-->
<!--            <div class="col-md-6">-->
<!--                --><?//=get_post_meta($post->ID, 'meta1_field_8', true);?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<?//=do_shortcode('[reviews]')?>

<?//=do_shortcode('[delivery_rent]')?>

<script>
    document.addEventListener('DOMContentLoaded',function(){

        jQuery('.product-card img').removeAttr('width');
        jQuery('.product-card img').removeAttr('height');

        jQuery('.single-product-card .photo-gal').click(function(){
            var src = jQuery(this).attr('src')
            jQuery('.photo-gal-c .attachment-post-thumbnail').attr('src',src)
            jQuery('.photo-gal-c .attachment-post-thumbnail').attr('srcset',src)
        })

        jQuery('.photo-gal-c').magnificPopup({
            delegate: 'a',
            type: 'image',
            closeOnContentClick: false,
            closeBtnInside: false,
            mainClass: 'mfp-with-zoom mfp-img-mobile',
            image: {
                verticalFit: true,
                titleSrc: function(item) {
                    return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
                }
            },
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300, // don't foget to change the duration also in CSS
                opener: function(element) {
                    return element.find('img');
                }
            }

        });


    },false)
</script>

<?php get_footer(); ?>
