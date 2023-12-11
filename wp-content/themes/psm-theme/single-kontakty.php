<?php
/**
 * Template Name: Контакты
 * Template Post Type: post, page, product
 */

get_header();
?>


<div class="container-width1110">

    <div class="contacts-page">

        <p class="contacts-page_header"><?php the_Title() ?></p>

        <p class="contacts-page_description">
            <?php the_content() ?>
        </p>

        <div class="contacts-page_items-wrapper">
            <?= do_shortcode('[get_contacts]'); ?>
        </div>

        <div class="contacts-additional">
            <p>620050, Свердловская обл., г. Екатеринбург, <br> ул. Маневровая, д. 31</p>
            <p>Общество с ограниченной ответственностью <br> «Предприятие Строительных Машин»</p>
        </div>
    </div>

    <div class="contacts-page_map">
        <?= do_shortcode('[add_map]'); ?>
    </div>

    <?php
        $file = get_field('rekvizit-pdf');
    ?>

    <div class="requisites">
        <div  class="requisites_header-wrapper">
            <p class="requisites_header">Реквизиты предприятия</p>
            <a href="<?php if($file) {echo $file['url'];} ?>">
                <div class="requisites_PDF">
                    <p class="requisites_PDF_text">Скачать реквизиты предприятия<span>PDF 10,4 МБ</span></p>
                </div>
            </a>
        </div>

        <div class="requisites_details">
            <div class="requisites_details_items-wrapper requisites_details_names-wrapper">
                <p class="requisites_details_item">Адрес</p>
                <p class="requisites_details_item">ОГРН</p>
                <p class="requisites_details_item">ИНН</p>
                <p class="requisites_details_item">КПП</p>
            </div>
            <div class="requisites_details_items-wrapper requisites_details_values-wrapper">
                <p class="requisites_details_item"><?php the_field('rekvizit_adres'); ?></p>
                <p class="requisites_details_item"><?php the_field('rekvizit_ogrn'); ?></p>
                <p class="requisites_details_item"><?php the_field('rekvizit_inn'); ?></p>
                <p class="requisites_details_item"><?php the_field('rekvizit_kpp'); ?></p>
            </div>
        </div>
    </div>

</div>


<? get_footer(); ?>
