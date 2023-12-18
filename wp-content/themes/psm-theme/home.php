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


<?= do_shortcode('[our-advantages]') ?>


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


<div class="question-and-answer-block">
    <div class="left-box">
        <p class="core-title">Ответы <span>на вопросы</span></p>
        <div class="contact-box">
            <p class="part-1">Не нашли ответ на свой вопрос?</p>
            <p class="part-2">Задайте его нам напрямую! Мы свяжемся с Вами в течении 10 минут и проконсультируем
                ;)</p>
            <div class="item-1">
                <a class="button-blue" href="/">Задать вопрос</a>
                <DIV>
                    <P class="work-schedule">пн-пт 10:00 - 19:00</P>
                    <a class="tel-link" href="tel:+79089060719">8 908 906 07 19</a>
                </DIV>
            </div>
            <div class="item-2">
                <DIV class="icon-box">
                    <div class="avatar">
                        <img src="/wp-content/uploads/2023/07/Ellipse%20645.png" alt=""/>
                    </div>
                    <div class="telegram-box">
                        <a href="tg://resolve?domain=+79089060719">
                            <svg width="29" height="26" viewBox="0 0 29 26" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.46811 11.6C8.26811 9 27.8681 1 27.8681 1L23.9681 23.6C23.7681 24.7 22.4681 25.1 21.6681 24.4L15.5681 19.3L11.2681 23.3L11.9681 16.6L24.9681 4.3L8.96811 14.3L9.96811 20L6.66811 14.7L1.66811 13.1C0.868113 12.8 0.768113 11.8 1.46811 11.6Z"
                                      stroke="white" stroke-miterlimit="10" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </DIV>
                <P>Не любите говорить по телефону? Пишите в ватсап</P>
            </div>
        </div>
    </div>

    <?= do_shortcode('[question_and_answer]'); ?>

</div>


<?php
$queried_object = get_queried_object();
$home_kontakty = get_field('home_kontakty', $queried_object->ID);
?>
<div class="contacts-block width-block">
    <div class="left-box">
        <p class="part-1">Контакты</p>
        <p class="part-2">Свяжитесь с нами</p>
        <a class="left-box-tel" href="tel:70002421482"><?= $home_kontakty['nomer_telefona'] ?></a>
        <a class="left-box-mail" href="mailto:info@psm-ekb96.ru"><?= $home_kontakty['jelektrony_pochta'] ?></a>
    </div>
    <div class="right-box">
        <p class="part-1">Мы находимся</p>
        <p class="part-2"><?= $home_kontakty['adres'] ?></p>
        <div class="link-box">
            <a href="/kontakty">Посмотреть нас на карте</a>
            <svg width="41" height="8" viewBox="0 0 41 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M40.8536 4.35355C41.0488 4.15829 41.0488 3.84171 40.8536 3.64645L37.6716 0.464466C37.4763 0.269204 37.1597 0.269204 36.9645 0.464466C36.7692 0.659728 36.7692 0.976311 36.9645 1.17157L39.7929 4L36.9645 6.82843C36.7692 7.02369 36.7692 7.34027 36.9645 7.53553C37.1597 7.7308 37.4763 7.7308 37.6716 7.53553L40.8536 4.35355ZM0 4.5H40.5V3.5H0V4.5Z"
                      fill="black"/>
            </svg>
        </div>
        <div class="box-messengers">
            <div>
                <div class="avatar-box">
                    <img src="<?= $home_kontakty['foto_sotrudnika']['url'] ?>" alt="<?= $home_kontakty['foto_sotrudnika']['alt'] ?>">
                </div>
                <div class="whatsapp-box">
                    <a href="<?= $home_kontakty['ikonka_messendzhera_1']['kod_ssylka_messendzhera'] ?>">
                        <img src="<?= $home_kontakty['ikonka_messendzhera_1']['ikonka']['url'] ?>" alt="<?= $home_kontakty['ikonka_messendzhera_1']['ikonka']['alt'] ?>">
                    </a>
                </div>
                <div class="telegram-box">
                    <a href="<?= $home_kontakty['ikonka_messendzhera_2']['kod_ssylka_messendzhera'] ?>">
                        <img src="<?= $home_kontakty['ikonka_messendzhera_2']['ikonka']['url'] ?>" alt="<?= $home_kontakty['ikonka_messendzhera_2']['ikonka']['alt'] ?>">
                    </a>
                </div>
            </div>
            <p><?= $home_kontakty['uvedomlenija'] ?></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
