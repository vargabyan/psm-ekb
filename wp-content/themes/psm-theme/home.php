<?php
/*
 * Template Name: Главная
 * Template Post Type: page
 * */

get_header();

$post = get_post();
$nasha_preimushhestva = get_field('nasha_preimushhestva');
$knopka_poluchit_predlozhenija = get_field('knopka_poluchit_predlozhenija');
?>

<div class="poster-block width-block">
    <div class="container-fluid poster-block-background">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-lg-7">
                <div class="left-block">
                    <div class="box-1">
                        <?php foreach ($nasha_preimushhestva as $item) { ?>
                            <button><?= $item?></button>
                        <?php } ?>
                    </div>
                    <div class="box-2">
                        <p><?= $post->post_content ?></p>
                        <ul>
                            <li><?php the_field('chto_my_predlagaem', $post->ID) ?></li>
                        </ul>
                    </div>
                    <div class="box-3">
                        <div class="col-svg">
                            <svg width="17" height="55" viewBox="0 0 17 55" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.3496 2.511C14.6073 2.61009 14.7359 2.89936 14.6368 3.15712L13.0221 7.35742C12.923 7.61517 12.6337 7.74379 12.376 7.6447C12.1182 7.54561 11.9896 7.25633 12.0887 6.99858L13.524 3.26498L9.79043 1.82963C9.53268 1.73054 9.40406 1.44126 9.50315 1.18351C9.60224 0.925759 9.89151 0.797139 10.1493 0.896229L14.3496 2.511ZM15.5239 54.2435C9.63503 48.4802 3.06564 38.3717 1.03303 28.3057C0.0152534 23.2654 0.128218 18.2004 2.07244 13.6921C4.02119 9.1734 7.78634 5.26891 13.967 2.52082L14.3733 3.43457C8.38912 6.09529 4.82641 9.83148 2.99069 14.0881C1.15044 18.3553 1.02231 23.2004 2.01324 28.1077C3.99804 37.937 10.4452 47.8739 16.2234 53.5288L15.5239 54.2435Z"
                                      fill="#BEBEBE"/>
                            </svg>
                        </div>
                        <div>
                            <a href="#" onclick="yaCounter47702209.reachGoal('zakazat-zvonok');" data-call="callback">
                                <button class="button-red"><?= $knopka_poluchit_predlozhenija['knopka'] ?></button>
                            </a>
                            <p><?= $knopka_poluchit_predlozhenija['opisanija_knopki'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-md-5 padding-0">
                <div class="right-block">
                    <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0]; ?>" alt="<?= wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[3]; ?>">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-showcase width-block">
    <h2>Наши машины</h2>

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
        'posts_per_page' => 3,
    ];

    component_get_auto($args);
    ?>

    <div class="product-showcase_button-show-more-wrapper">
        <button class="product-showcase_button-show-more button-blue">Перейти в каталог автовышек</button>
    </div>
</div>


<?php
$post = get_post(1794);
$mi_predlagaem = get_field('mi_predlagaem', $post->ID);
$kontakt = get_field('kontakt', $post->ID);
?>
<div class="advantages-block width-block">
    <div class="first-item">
        <p><?= $post->post_content ?></p>
    </div>

    <?php foreach ($mi_predlagaem as $item) { ?>
        <div class="item">
            <div>
                <img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
            </div>
            <p><?= $item['zagalovok'] ?></p>
        </div>
    <?php } ?>

    <div class="item-contact">
        <p class="part-1">Если у вас есть вопрос, то звоните нам по номеру <a
                    href="tel:<?= $kontakt['nomer_telefona'] ?>"><?= $kontakt['nomer_telefona'] ?></a>
        </p>
        <div>
            <div class="icon-box">
                <div>
                    <img src="<?= $kontakt['avatar']['url'] ?>" alt="<?= $kontakt['avatar']['alt'] ?>"/>
                </div>
                <a href="<?= $kontakt['link_messendzhera'] ?>">
                    <div class="telegram-icon">
                        <img width="29px" height="26px" src="<?= $kontakt['svg_messendzhera']['url'] ?>"
                             alt="<?= $kontakt['svg_messendzhera']['alt'] ?>"/>
                    </div>
                </a>
            </div>
            <p class="part-2"><?= $kontakt['uvedomlenija'] ?></p>
        </div>
    </div>
</div>


<?=do_shortcode('[work_steps]') ?>

<?php
global $post;

$nashi_raboty = get_posts([
    'posts_per_page' => -1,
    'category_name' => 'nashi-raboty',
    'post_type' => 'post',
]);
?>
<DIV class="our-truck-crane-block width-block">

    <div class="top-box">
        <p>Наши автовышки используют для <span>разнообразных работ</span> <br> <span>и не только</span></p>
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
        <div class="our-truck-crane-swiper-button-prev swiper-button-prev-white">
            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.70508 11.4119L1.29331 6.0001L6.70508 0.588336" stroke="#ED4646" stroke-width="1.35294"/>
            </svg>
        </div>
        <div class="our-truck-crane-swiper-button-next swiper-button-next-red">
            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.29492 0.588135L6.70669 5.9999L1.29492 11.4117" stroke="white" stroke-width="1.35294"/>
            </svg>
        </div>
    </div>

</DIV>


<?= do_shortcode('[pomojem_podobrat_oborudovanie]'); ?>

<?php
$post = get_post(1823);
$logotipi_companiy = get_field('logotipi_companiy', $post->ID);
?>
<div class="block-for-our-clients">
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


<?php
$reviews = get_field('dobavit_otzyv', 120);
?>
<div class="block-reviews width-block">
    <div class="top-box">
        <p>Что о нас говорят клиенты</p>
        <div class="button-box">
            <div class="review-swiper-prev swiper-button-prev-white"></div>
            <div class="review-swiper-next next-box swiper-button-next-red"></div>
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
                <div class="review-swiper-prev">
                    <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.70508 11.4121L1.29331 6.00035L6.70508 0.58858" stroke="#ED4646"
                              stroke-width="1.35294"/>
                    </svg>
                </div>
                <div class="review-swiper-next next-box">
                    <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.29492 0.587891L6.70669 5.99965L1.29492 11.4114" stroke="white"
                              stroke-width="1.35294"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

<?php do_shortcode('[question_and_answer]'); ?>

<div class="contacts-block width-block">
    <div class="left-box">
        <p class="part-1">Контакты</p>
        <p class="part-2">Свяжитесь с нами</p>
        <a class="left-box-tel" href="tel:70002421482">+ 7 (000) 242-14-82</a>
        <a class="left-box-mail" href="mailto:info@psm-ekb96.ru">info@psm-ekb96.ru</a>
    </div>
    <div class="right-box">
        <p class="part-1">Мы находимся</p>
        <p class="part-2">Свердловская обл., г. Екатеринбург, ул. Маневровая, д. 31</p>
        <div class="link-box">
            <a href="/kontakty">Посмотреть нас на карте</a>
            <svg width="41" height="8" viewBox="0 0 41 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M40.8536 4.35355C41.0488 4.15829 41.0488 3.84171 40.8536 3.64645L37.6716 0.464466C37.4763 0.269204 37.1597 0.269204 36.9645 0.464466C36.7692 0.659728 36.7692 0.976311 36.9645 1.17157L39.7929 4L36.9645 6.82843C36.7692 7.02369 36.7692 7.34027 36.9645 7.53553C37.1597 7.7308 37.4763 7.7308 37.6716 7.53553L40.8536 4.35355ZM0 4.5H40.5V3.5H0V4.5Z"
                      fill="black"/>
            </svg>
        </div>
        <div class="box-messengers">
            <div>
                <div>
                    <img src="/wp-content/uploads/2023/07/Ellipse%2086.png" alt="">
                </div>
                <div class="whatsapp-box">
                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.3 26C6.5 25.5 2.6 28.4 2 27.7C1.4 27.1 4 23 3.5 22.3C1.9 20.1 1 17.4 1 14.5C1 7.1 7 1 14.5 1C22 1 28 7.1 28 14.5C28 21.9 22 28 14.5 28C13.5 28 12.6 27.9 11.7 27.7"
                              stroke="white" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M11.7 7.70008L12.9 10.7001C13 10.9001 12.9 11.1001 12.7 11.2001C12.2 11.5001 11.5 12.2001 12.3 13.3001C13.3 14.7001 16 18.2001 18.2 15.9001C18.3 15.8001 18.5 15.7001 18.7 15.8001L21.9 17.2001C22.1 17.3001 22.2 17.6001 22.1 17.8001C21.4 19.2001 18.7 22.9001 12 17.1001C5.2 11.2001 9.6 8.30008 11.1 7.60008C11.3 7.30008 11.6 7.40008 11.7 7.70008Z"
                              stroke="white" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="telegram-box">
                    <svg width="29" height="26" viewBox="0 0 29 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.10093 11.6C7.90093 9 27.5009 1 27.5009 1L23.6009 23.6C23.4009 24.7 22.1009 25.1 21.3009 24.4L15.2009 19.3L10.9009 23.3L11.6009 16.6L24.6009 4.3L8.60093 14.3L9.60093 20L6.30093 14.7L1.30093 13.1C0.500925 12.8 0.400925 11.8 1.10093 11.6Z"
                              stroke="white" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <p>Ответим на все интересующие вас вопросы, предложим интересные решения</p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
