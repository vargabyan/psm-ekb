<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="/wp-content/themes/psm-theme/css/fonts.css">
<link rel="stylesheet" href="/wp-content/themes/psm-theme/prices/prices.css">

<div class="container-width1110">

    <div class="prices">
        <p class="prices_header">цены</p>

        <div class="prices_content">

            <?php
            $tables = get_field('tablicy_dlya_stranica_ceny');

            foreach ($tables as $item) {?>

                <div class="prices_content_item-wrapper">
                    <div class="prices_content_headers">
                        <p>Тип автовышки</p>
                        <p>Срок аренды</p>
                        <p>Цена без НДС</p>
                        <p>Цена с НДС 20%</p>
                        <p>Минимальный заказ</p>
                    </div>


                    <div class="prices_content_item prices_content_item-color">
                        <p class="prices_params prices_meter"><?= $item['tip_avtovyshki'] ?></p>
                        <div class="prices_params">
                            <p class="prices_params_item prices_border-line"><?= $item['srok_arendy']['1'] ?></p>
                            <p class="prices_params_item prices_border-line"><?= $item['srok_arendy']['2'] ?></p>
                            <p class="prices_params_item prices_border-line"><?= $item['srok_arendy']['3'] ?></p>
                            <p class="prices_params_item "><?= $item['srok_arendy']['4'] ?></p>
                        </div>
                        <div class="prices_params">
                            <p class="prices_params_item prices_border-line"><?= $item['cena_bez_nds']['1'] ?></p>
                            <p class="prices_params_item prices_border-line"><?= $item['cena_bez_nds']['2'] ?></p>
                            <p class="prices_params_item prices_border-line"><?= $item['cena_bez_nds']['3'] ?></p>
                            <p class="prices_params_item "><?= $item['cena_bez_nds']['4'] ?></p>
                        </div>
                        <div class="prices_params">
                            <p class="prices_params_item prices_border-line"><?= $item['cena_s_nds_20']['1'] ?></p>
                            <p class="prices_params_item prices_border-line"><?= $item['cena_s_nds_20']['2'] ?></p>
                            <p class="prices_params_item prices_border-line"><?= $item['cena_s_nds_20']['3'] ?></p>
                            <p class="prices_params_item "><?= $item['cena_s_nds_20']['4'] ?></p>
                        </div>
                        <p class="prices_time prices_time-background-without-color"><?= $item['minimalnyj_zakaz'] ?></p>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>

</div>
