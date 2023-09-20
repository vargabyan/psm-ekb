<? get_header(); ?>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            <?php if ( function_exists( 'breadcrumbs' ) ) breadcrumbs(); ?>
            </div>
        </div>
    </div>
</div>

<div class="product-section">
            <h1 class="text-center">Услуги автовышки</h1>
                <div class="container">
                    <div class="row">

<?

    global $post;
    $args = array(
        'post_type' => 'uslugi-autovyshki', // Указываем наш новый тип записи
        'posts_per_page' => 10,
        );

    $p = get_posts( $args );
    foreach ( $p as $post ) {
    $cost=get_post_custom_values('Стоимость');
        setup_postdata( $post ); ?>

            <div class="col-sm-6 col-md-3">
            <div class="product-card">
            <div class="product-image"><? the_post_thumbnail(); ?></div>
            <div class="product-title"><a href="<?= get_permalink(); ?>"><?= get_the_title(); ?></a></div>
            <div class="card-descr"><span><?=get_post_meta(get_the_ID(),'meta1_field_6', true); ?></span></div>
            <a href="<?= get_permalink(); ?>">
            <div class="product-description"><span>Подробнее</span></div>
            </a>
            <a onclick="yaCounter47702209.reachGoal(' zakaz-s-listinga');" data-auto="<?= get_the_title();?>" data-call="auto" href="javascript:void(0);">
            <div class="product-description"><span>Заказать</span></div>
            </a>
            </div>
            </div>



            <?

    }
    wp_reset_postdata();

?>

                    </div>
                </div>
            </div>
<div class="cat-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 cat-block all-hidden">
                <?
                $categories = get_categories(array(
                'taxonomy' => 'arenda-autovyshek',
                'type' => 'uslugi-autovyshki',
                'orderby' => 'name',
                'order' => 'ASC'
                ));
                foreach( $categories as $category ){
                    $cat.= '<a href="' . get_category_link( $category->term_id ) .  '">' . $category->name.'</a>';
                }
                echo $cat;
                ?>
            </div>
			<div class="col-sm-12"><div class="flexdiv text-center justify-content-center"><a class="show-all">Показать все</a></div></div>
        </div>
    </div>
</div>

<div class="advantages-section">
<div class="container">
<div class="row">
<h2 class="text-center">Наши преимущества</h2>
<div class="col-sm-4 col-md-4">
<div class="advantages-card">
<div class="advantages-image"><noscript><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-operativno.png" alt="Оперативная доставка" /></noscript><img class=" ls-is-cached lazyloaded" src="/wp-content/uploads/2019/10/arenda-avtovyshki-operativno.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-operativno.png" alt="Оперативная доставка"></div>
<div class="advantages-title">
<h3>Оперативная доставка. Всегда вовремя.</h3>
</div>
</div>
</div>
<div class="col-sm-4 col-md-4">
<div class="advantages-card">
<div class="advantages-image"><noscript><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-24.png" alt="Работа в круглосуточном режиме" /></noscript><img class=" lazyloaded" src="/wp-content/uploads/2019/10/arenda-avtovyshki-24.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-24.png" alt="Работа в круглосуточном режиме"></div>
<div class="advantages-title">
<h3>Работа в круглосуточном режиме</h3>
</div>
</div>
</div>
<div class="col-sm-4 col-md-4">
<div class="advantages-card">
<div class="advantages-image"><noscript><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-sale.png" alt="Собственный автопарк" /></noscript><img class=" lazyloaded" src="/wp-content/uploads/2019/10/arenda-avtovyshki-sale.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-sale.png" alt="Собственный автопарк"></div>
<div class="advantages-title">
<h3>Собственный автопарк</h3>
</div>
</div>
</div>
</div>
<p>&nbsp;</p>
<div class="row">
<div class="col-sm-4 col-md-4">
<div class="advantages-card">
<div class="advantages-image"><noscript><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-voditeli.png" alt="Современная техника в отличном состоянии" /></noscript><img class=" lazyloaded" src="/wp-content/uploads/2019/10/arenda-avtovyshki-voditeli.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-voditeli.png" alt="Современная техника в отличном состоянии"></div>
<div class="advantages-title">
<h3>Современная техника в отличном состоянии</h3>
</div>
</div>
</div>
<div class="col-sm-4 col-md-4">
<div class="advantages-card">
<div class="advantages-image"><noscript><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-rostehnadzor.png" alt="Разрешения РосТехНадзора" /></noscript><img class=" lazyloaded" src="/wp-content/uploads/2019/10/arenda-avtovyshki-rostehnadzor.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-rostehnadzor.png" alt="Разрешения РосТехНадзора"></div>
<div class="advantages-title">
<h3>Разрешения РосТехНадзора</h3>
</div>
</div>
</div>
<div class="col-sm-4 col-md-4">
<div class="advantages-card">
<div class="advantages-image"><noscript><img src="/wp-content/uploads/2019/10/arenda-avtovyshki-nds.png" alt="Безналичный расчет, НДС" /></noscript><img class=" lazyloaded" src="/wp-content/uploads/2019/10/arenda-avtovyshki-nds.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-nds.png" alt="Безналичный расчет, НДС"></div>
<div class="advantages-title">
<h3>Безналичный расчет, НДС</h3>
</div>
</div>
</div>
</div>
</div>
</div>

<?=fo_shortcode('[delivery_rent]')?>

<div class="seo-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center"><img src="/wp-content/uploads/2019/10/p2.jpg"></div>
            <div class="col-md-6">
            <h3>О нас</h3>
            <p>ООО «Предприятие Строительных Машин» существует на рынке специальной техники уже более 11 лет. За это время мы смогли не только собрать внушительный собственный парк автовышек – есть АГП 15, 22, 28, 30, 40, 45 метров, но и наладить максимально удобную и прозрачную систему документации при заключении договора с клиентом. Каждая наша автовышка телескопическая (ссылку потом пропишем), вся техника прошла регистрацию в РОСТЕХНАДЗОРЕ, за рулем аттестованные машинисты. Подача спецтехники с люлькой 24 часа в сутки. Арендовать автогидроподьемник на час вы можете по безналичному расчету, мы работаем с НДС.</p>
            </div>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script>
document.addEventListener('DOMContentLoaded',function(){

    jQuery('.product-card img').removeAttr('width');
    jQuery('.product-card img').removeAttr('height');

},false)
</script>

<script src="http://code.jquery.com/jquery-1.8.3.js"></script>

<? get_footer(); ?>
