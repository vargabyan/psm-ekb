<?php get_header(); ?>
<link rel="stylesheet" href="/wp-content/themes/psm-theme/css/404.css">
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php if ( function_exists( 'breadcrumbs' ) ) breadcrumbs(); ?>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="content-wrapper">
        <div class="content">
            <div class="title">404</div>
            <div class="txt">Извините, страница не найдена</div>
            <a href="/" class="to-home">На главную</a>
        </div>
        <img src="/wp-content/uploads/2023/01/vyshka-1-min.png" alt="вышка" class="big-img">
    </div>
</div>
<?php get_footer(); ?>