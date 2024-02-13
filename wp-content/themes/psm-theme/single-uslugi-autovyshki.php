<?php
get_header();
$post = get_post();
?>


<div class="maxwidth-1110px">

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="header-container">
        <?php the_title(); ?>
    </div>

    <div class="product-container">

        <div class="right_box">
            <div class="top_box">

                <div class="vertical-slider">
                    <div class="swiper-vertical">

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

        <div class="left_box" data-characteristic-block>

            <p class="col_1">Характеристики</p>

            <div class="col_2" data-characteristic-hidden-place>
<!--                <div>-->
<!--                    <p class="part_1">Грузоподъемность раб. платформы, кг</p>-->
<!--                    <p class="part_2">200</p>-->
<!--                </div>-->
<!--                <div>-->
<!--                    <p class="part_1">Рабочая высота, м</p>-->
<!--                    <p class="part_2">15</p>-->
<!--                </div>-->
<!--                <div>-->
<!--                    <p class="part_1">Горизонтальный вылет стрелы, м</p>-->
<!--                    <p class="part_2">9</p>-->
<!--                </div>-->
                <?=get_post_meta($post->ID, 'meta1_field_6', true);?>
            </div>

            <p class="col_3" data-characteristic-hidden-btn>
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
                        <p class="part_2"><?=get_post_meta($post->ID, 'meta1_field_1', true);?></p>
                        <p class="part_3">без учета НДС 20%</p>
                    </div>
                    <div>
                        <p class="part_1">Цена за смену</p>
                        <p class="part_2"><?=get_post_meta($post->ID, 'meta1_field_2', true);?></p>
                        <p class="part_3">без учета НДС 20%</p>
                    </div>
                </div>
                <div class="box_3">
                    <a class="part_1" onclick="yaCounter47702209.reachGoal(`zakaz-s-listinga`);" data-auto="'.$post->post_title.'" data-call="auto" href="javascript:void(0);">Заказать автовышку</a>
                    <a class="part_2" onclick="yaCounter47702209.reachGoal('zakazat-zvonok');" data-auto="'.$post->post_title.'" data-call="answer" href="javascript:void(0);">Помощь менеджера</a>
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
                <?=get_post_meta($post->ID, 'meta1_field_6', true);?>
            </div>
            <button data-description >Описание</button>
            <div data-description-box-mobile >
                <?=get_post_meta($post->ID, 'meta1_field_8', true);?>
            </div>
            <button data-payment-delivery >Оплата и доставка</button>
            <div data-payment-delivery-box-mobile >
                <?=get_post_meta($post->ID, 'meta1_field_7', true);?>
            </div>
        </div>
        <div class="left_box">
            <div class="product-data-text-content-pc" data-features-box-pc >
                <?=get_post_meta($post->ID, 'meta1_field_6', true);?>
            </div>
            <div data-description-box-pc >
                <?=get_post_meta($post->ID, 'meta1_field_8', true);?>
            </div>
            <div data-payment-delivery-box-pc >
                <?=get_post_meta($post->ID, 'meta1_field_7', true);?>
            </div>
        </div>
    </div>

</div>

<div class="maxwidth-1110px">
    <div class="product-showcase">
        <h2>другая спец техника</h2>

        <?php
            $categories = [
                'id' => $post->id,
                'taxonomy' => 'arenda-autovyshek',
                'type' => 'uslugi-autovyshki',
                'orderby' => 'name',
                'order' => 'ASC',
//                'include' => $tax
            ];

            component_get_cat($categories)
        ?>

        <?php
            $args = [
                'post_type' => 'uslugi-autovyshki', // Указываем наш новый тип записи
                'posts_per_page' => 3,
                'exclude' => get_the_ID()
            ];

            component_get_auto($args)
        ?>

        <div class="product-showcase_button-show-more-wrapper">
            <a class="product-showcase_button-show-more button-blue" href="/katalog">Перейти в каталог автовышек</a>
        </div>
    </div>


    <?php
    $queried_object = get_queried_object();
    $post = get_post(1958);
    $ne_nashli_to_chto_iskali = get_field('ne_nashli_to_chto_iskali');
    ?>
    <div class="question-and-answer-block" data-page-type="<?= $queried_object->post_type ?>">
        <div class="not-found">
            <p class="not-found_header">Не нашли то, что <span>искали?</span></p>
            <div class="not-found_avatar-wrapper">
                <img class="not-found_avatar" src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0]; ?>" alt="<?= wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[3]; ?>">
                <p class="not-found_message"><?= $post->post_content ?></p>
            </div>
            <a href="#" class="not-found_leave-request button-black" onclick="yaCounter47702209.reachGoal('zakazat-zvonok');" data-call="callback">Оставить заявку</a>
            <p class="not-found_notice">
                <?= $ne_nashli_to_chto_iskali['uvedomlenia'] ?>
            </p>
            <a class="not-found_tel" href="tel:<?= $ne_nashli_to_chto_iskali['telefon'] ?>"><?= $ne_nashli_to_chto_iskali['telefon'] ?></a>
        </div>

        <?= do_shortcode('[question_and_answer]'); ?>

    </div>

</div>


<?php get_footer(); ?>
