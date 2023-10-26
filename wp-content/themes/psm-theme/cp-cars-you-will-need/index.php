
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="/wp-content/themes/psm-theme/css/fonts.css">
<link rel="stylesheet" href="/wp-content/themes/psm-theme/cp-cars-you-will-need/cars-you-will-need.css">


<div class="container-width1110">

    <div class="cars-you-will-need">
        <p class="cars-you-will-need_header">Вам также может понадобиться <br> автовышка</p>
        <div class="cars-you-will-need_items-wrapper">
            <?php for($i = 0; $i < 5; $i++) { ?>
                <div class="cars-you-will-need_item">
                    <img class="cars-you-will-need_img" src="/wp-content/themes/psm-theme/cp-cars-you-will-need/images/image%20211.png" alt="">
                    <p class="cars-you-will-need_description">Архитектурная подсветка</p>
                </div>

                <div class="cars-you-will-need_item">
                    <img class="cars-you-will-need_img" src="/wp-content/themes/psm-theme/cp-cars-you-will-need/images/image%20210.png" alt="">
                    <p class="cars-you-will-need_description">Архитектурная подсветка</p>
                </div>
            <?php } ?>
        </div>

        <div class="swiper cars-you-will-need_swiper">
            <div class="swiper-wrapper">
                <?php for($i = 0; $i < 5; $i++) { ?>
                    <div class="swiper-slide">
                        <div class="cars-you-will-need_item">
                            <img class="cars-you-will-need_img" src="/wp-content/themes/psm-theme/cp-cars-you-will-need/images/image%20211.png" alt="">
                            <p class="cars-you-will-need_description">Архитектурная подсветка</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="cars-you-will-need_item">
                            <img class="cars-you-will-need_img" src="/wp-content/themes/psm-theme/cp-cars-you-will-need/images/image%20210.png" alt="">
                            <p class="cars-you-will-need_description">Архитектурная подсветка</p>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="cars-you-will-need_swiper-buttons">
                <div class="cars-you-will-need-swiper_swiper-button-prev"></div>
                <div class="cars-you-will-need-swiper_swiper-button-next"></div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="/wp-content/themes/psm-theme/cp-cars-you-will-need/scripts.js"></script>