<? get_header(); ?>

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div style="min-width: 65px; float: left;"><?php if ( function_exists( 'breadcrumbs' ) ) breadcrumbs(); ?></div> <div class="breadc"> › <a href="/uslugi-autovyshki/">Аренда автовышек</a> › <span><? the_field( "tax_h1" ); ?></span></div>
            </div>
        </div>
    </div>
</div>

<div class="breadcrumb_block">

    <?php if ( function_exists( 'breadcrumbs' ) ) breadcrumbs(); ?>

</div>

655

<div class="maxwidth-1110px">
    <div class="block_container_3">

        <div class="product-showcase width-block">
            <h2><? the_field( "tax_h1" ); ?></h2>

            <div class="category-box">
                <div class="category-swiper-button-prev">
                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 9L1 5L5 1" stroke="white"/>
                    </svg>
                </div>

                <div class="category-swiper">
                    <div class="swiper-wrapper category-swiper-wrapper">

                        <?= do_shortcode('[cat]'); ?>

                    </div>
                </div>

                <div class="category-swiper-button-next">
                    <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L5 5L1 9" stroke="white"/>
                    </svg>
                </div>
            </div>

            <div class="products-box">
                <?= do_shortcode('[auto]'); ?>
            </div>
        </div>
    </div>

<div class="product-section">
    <h1 class="text-center"><? the_field( "tax_h1" ); ?></h1>
    <div class="container">
        <div class="row">

            <?    $queried_object = get_queried_object(); ?>

            <?
            global $post;
            $args = array(
                'post_type' => 'uslugi-autovyshki', // Указываем наш новый тип записи
                'posts_per_page' => 10,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'arenda-autovyshek',
                        'field' => 'slug',
                        'terms' => $queried_object -> slug,
                    ),
                ),
            );
            $p = get_posts( $args );
            foreach ( $p as $post ) {
                $cost=get_post_custom_values('Стоимость');
                setup_postdata( $post ); ?>

                <div class="col-sm-6 col-md-3">
                    <div class="product-card">
                        <div class="product-image"><? the_post_thumbnail(); ?></div>
                        <div class="product-title"><a href="<?= get_permalink(); ?>"><? the_title(); ?></a></div>
                        <div class="card-descr"><span><?=get_post_meta(get_the_ID(),'meta1_field_6', true); ?></span></div>
                        <div class="price"><?=$cost[0];  ?></div>
                        <a href="<?= get_permalink(); ?>">
                            <div class="product-description"><span>Условия аренды</span></div>
                        </a>
                        <a onclick="yaCounter47702209.reachGoal('zakaz-s-listinga');" data-auto="<?= get_the_title();?>" data-call="auto" href="javascript:void(0);">
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


33262

<div class="cat-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 cat-block catrow all-hidden all-cat">
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

<?=do_shortcode('[delivery_rent]')?>

<? if(category_description()){ ?>
    <div class="seo-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center"><img src="/wp-content/uploads/2019/10/p2.jpg"></div>
                <div class="col-md-6">
                    <?= category_description(); ?>
                </div>
            </div>
        </div>
    </div>
<? } ?>
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script>
    document.addEventListener('DOMContentLoaded',function(){

        jQuery('.product-card img').removeAttr('width');
        jQuery('.product-card img').removeAttr('height');

    },false)
</script>

<script src="http://code.jquery.com/jquery-1.8.3.js"></script>

<? get_footer(); ?>
