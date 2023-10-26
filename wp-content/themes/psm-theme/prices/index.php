<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="/wp-content/themes/psm-theme/css/fonts.css">
<link rel="stylesheet" href="/wp-content/themes/psm-theme/prices/prices.css">

<div class="container-width1110">

    <div class="prices">
        <p class="prices_header">цены</p>

        <div class="prices_content">

            <?php for ($i = 0; $i < 3; $i++) {?>

                <div class="prices_content_item-wrapper">
                    <div class="prices_content_headers">
                        <p>Тип автовышки</p>
                        <p>Срок аренды</p>
                        <p>Цена без НДС</p>
                        <p>Цена с НДС 20%</p>
                        <p>Минимальный заказ</p>
                    </div>


                    <div class="prices_content_item prices_content_item-color">
                        <p class="prices_params prices_meter">Автовышка <br> 15 метров</p>
                        <div class="prices_params">
                            <p class="prices_params_item prices_border-line">Цена за час</p>
                            <p class="prices_params_item prices_border-line">Цена за смену</p>
                            <p class="prices_params_item ">Неделя/месяц</p>
                        </div>
                        <div class="prices_params">
                            <p class="prices_params_item prices_border-line">1300 руб.</p>
                            <p class="prices_params_item prices_border-line">11 200 руб.</p>
                            <p class="prices_params_item ">Индивидуально</p>
                        </div>
                        <div class="prices_params">
                            <p class="prices_params_item prices_border-line">1500 руб.</p>
                            <p class="prices_params_item prices_border-line">12800 руб.</p>
                        </div>
                        <p class="prices_time prices_time-background-without-color">4 часа</p>
                    </div>
                </div>

            <?php }?>
        </div>
    </div>

</div>


<?php
    require __DIR__ . "/../cp-help-block/index.php";
?>
