<?php function cp_elevator()
{ ?>

    <link rel="stylesheet" href="/wp-content/themes/psm-theme/css/fonts.css">
    <link rel="stylesheet" href="/wp-content/themes/psm-theme/cp-elevator/elevator.css">


    <div class="container-width1110">

        <div class="elevator">
            <p class="elevator_header">
                Вам также может <br> понадобиться автовышка
            </p>

            <div class="elevator_content">

                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <div class="elevator_content-item">
                        <img class="elevator_content_img"
                             src="/wp-content/themes/psm-theme/cp-elevator/images/image%20210.png" alt="">
                        <p class="elevator_content_name">Архитектурная подсветка</p>
                    </div>

                    <div class="elevator_content-item">
                        <img class="elevator_content_img"
                             src="/wp-content/themes/psm-theme/cp-elevator/images/image%20211.png" alt="">
                        <p class="elevator_content_name">Для мойки окон</p>
                    </div>
                <?php } ?>

                <div class="elevator_content-item">
                    <img class="elevator_content_img"
                         src="/wp-content/themes/psm-theme/cp-elevator/images/image%20210.png" alt="">
                    <p class="elevator_content_name">Архитектурная подсветка</p>
                </div>

                <div class="elevator_content-item">
                    <img class="elevator_content_img"
                         src="/wp-content/themes/psm-theme/cp-elevator/images/image%20210.png" alt="">
                    <p class="elevator_content_name">Архитектурная подсветка</p>
                </div>

            </div>
        </div>

    </div>

<?php } ?>

<?php cp_elevator() ?>
