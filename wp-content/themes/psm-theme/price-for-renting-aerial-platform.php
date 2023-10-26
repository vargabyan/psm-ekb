<?php
/*
Template Name: price-for-renting-aerial-platform
*/
?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/wp-content/themes/psm-theme/single-uslugi-autovyshki.css">
    <link rel="stylesheet" href="/wp-content/themes/psm-theme/cp-price-for-renting-aerial-platform/price-for-renting-aerial-platform.css">
    <link rel="stylesheet" href="/wp-content/themes/psm-theme/article/article.css">


<?php get_header() ?>

    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php if ( function_exists( 'breadcrumbs' ) ) breadcrumbs(); ?>
                </div>
            </div>
        </div>
    </div>


<?php require __DIR__ . '/cp-price-for-renting-aerial-platform/index.php'?>


<div class="container-width1110">
    <section class="price-for-renting_article">
        <div class="price-for-renting_article_include-article">
            <p class="price-for-renting_article_include-article_header">В этой статье:</p>
            <p class="price-for-renting_article_include-article_subtitle">Название подзаголовка</p>
        </div>
        <div class="price-for-renting_article_description">
            <p class="price-for-renting_article_description_header">название заголовка</p>
            <p class="price-for-renting_article_description_text">Бетоном называют камень, используемый при строительстве каких-либо объектов. Вода и щебень – ингредиенты, и которых состоит цемент. Все из этого подвергается некоторой необходимой компрессии. Иногда используются различные добавки. Но есть и исключения в виде асфальтобетона, здесь не требуется даже вода.</p>
            <p class="price-for-renting_article_description_text">Бетоном называют камень, используемый при строительстве каких-либо объектов. Вода и щебень – ингредиенты, и которых состоит цемент. Все из этого подвергается некоторой необходимой компрессии. Иногда используются различные добавки. Но есть и исключения в виде асфальтобетона, здесь не требуется даже вода.</p>
        </div>
    </section>

    <div class="price-for-renting_swiper-block">

        <div class="price-for-renting_swiper-block_header-wrapper">
            <p class="price-for-renting_swiper-block_header">другие статьи</p>
            <div class="price-for-renting_swiper-block_button-wrapper">
                <div class="price-for-renting_swiper-button-prev swiper-button-white-hover"></div>
                <div class="price-for-renting_swiper-button-next swiper-button-red-hover"></div>
            </div>
        </div>

        <div class="swiper price-for-renting_swiper">
            <div class="swiper-wrapper">
                    <?php for($i = 0; $i < 4; $i++) { ?>
                <div class="swiper-slide">
                        <div class="article-pages_item">
                            <div class="article-pages_item_img">
                                <img src="/wp-content/themes/psm-theme/access/images/image%20427.png" alt="">
                            </div>
                            <div class="article-pages_item-title">
                                Цены на аренду автовышек в Екатеринбурге
                            </div>
                            <p class="article-pages_item_description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit
                            </p>
                            <a class="article-pages_item_link button-blue" href="<?php get_the_permalink(); ?>">Условия аренды</a>
                        </div>
                </div>
                    <?php } ?>
            </div>
        </div>

    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="/wp-content/themes/psm-theme/js/price-for-renting-aerial-platform.js"></script>

<?php get_footer() ?>