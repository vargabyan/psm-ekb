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
            <h1 class="text-center">Наши машины</h1>
                <div class="container">
                    <div class="row">

<?

    global $post;
    $args = array(
        'post_type' => 'auto', // Указываем наш новый тип записи
        'posts_per_page' => 10,
        );

    $p = get_posts( $args );
    foreach ( $p as $post ) {
    $cost=get_post_custom_values('Стоимость');
        setup_postdata( $post ); ?>

            <div class="col-sm-6 col-md-3">
            <div class="product-card">
            <div class="product-image"><? the_post_thumbnail(); ?></div>
            <div class="product-title"><? the_title(); ?></div>
            <div class="card-descr"><span><?=get_post_meta(get_the_ID(),'meta1_field_6', true); ?></span></div>
            <a href="<?= get_permalink(); ?>">
            <div class="product-description"><span>Подробнее</span></div>
            </a>
            <a data-auto="<?= get_the_title();?>" data-call="auto" href="javascript:void(0);">
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
            <div class="col-sm-12 cat-block catrow all-hidden all-cat">
                <?
                $categories = get_categories(array(
                'taxonomy' => 'autocategory',
                'type' => 'auto',
                'orderby' => 'name',
                'order' => 'ASC'
                ));
                foreach( $categories as $category ){
                    $cat.= '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a>';
                }
                echo $cat;
                ?>
            </div>
			<div class="col-sm-12 text-center"><div class="flexdiv text-center justify-content-center"><a class="show-all">Показать все</a></div></div>
			<div class="col-sm-12 text-center"><div class="flexdiv"><a style="display: none;" class="hide-all">Скрыть все</a></div></div>
        </div>
    </div>
</div>

<div class="advantages-section">
    <div class="container">
        <div class="row">
        <h2 class="text-center">Наши преимущества</h2>
            <div class="col-sm-4 col-md-4">
                <div class="advantages-card">
                <div class="advantages-image"><img src="/wp-content/uploads/2019/10/dostavka-1.png"></div>
                <div class="advantages-title">
                <h3>Быстрая доставка</h3>
                </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="advantages-card">
                <div class="advantages-image"><img src="/wp-content/uploads/2019/10/dostavka-1.png"></div>
                <div class="advantages-title">
                <h3>Собственный автопарк</h3>
                </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="advantages-card">
                <div class="advantages-image"><img src="/wp-content/uploads/2019/10/dostavka-1.png"></div>
                <div class="advantages-title">
                <h3>Профессиональные водители</h3>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?=do_shortcode('[delivery_rent]')?>

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
