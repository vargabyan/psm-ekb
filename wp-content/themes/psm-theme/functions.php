<?
register_nav_menus(array(
    'top'    => 'top menu',    //Название месторасположения меню в шаблоне
    'footer-menu1' => 'footer 1st column',
    'footer-menu2' => 'footer 2nd column',
    'footer-menu3' => 'footer 3rd column'
));

//разрешить загрузку webp
function webp_upload_mimes( $existing_mimes ) {
    // add webp to the list of mime types
    $existing_mimes['webp'] = 'image/webp';

    // return the array back to the function with our added mime type
    return $existing_mimes;
}
add_filter( 'mime_types', 'webp_upload_mimes' );

add_filter('use_block_editor_for_post', '__return_false');

add_action( 'widgets_init', 'register_my_widgets' );

//убрать лишние теги br и p в WordPress
remove_filter( 'the_content', 'wpautop' );// для контента
remove_filter( 'the_excerpt', 'wpautop' );// для анонсов
remove_filter( 'comment_text', 'wpautop' );// для комментарий
function register_my_widgets(){
    register_sidebar( array(
        'name'          => '4 колонка футера',
        'id'            => "4th_column_footer",
        'description'   => 'descr',
        'class'         => '4th_column',
        'before_widget' => '<div>',
        'after_widget'  => "</div>",
        'before_title'  => '<span>',
        'after_title'   => "</span>",
    ) );
}
add_theme_support( 'post-thumbnails' ); // для всех типов постов


function get_auto(){
    global $post;
    $args = array(
        'post_type' => 'uslugi-autovyshki', // Указываем наш новый тип записи
        'posts_per_page' => 10,
    );

    $p = get_posts( $args );
    $content='';
    $i=0;
    foreach ( $p as $post ) {
        //$cost=get_post_custom_values('Стоимость');
        //setup_postdata( $post );
//        $url = get_permalink($post->ID);
//        $content .='<div class="col-sm-6 col-md-3">';
//        $content .='<div class="product-card">';
//        $content .='<div class="product-image"><img loading="lazy" src="'.get_the_post_thumbnail_url($post->ID, 'medium').'" alt="'.$post->post_title.'"></div>';
//        $content .='<div class="product-title"><a href="'.$url.'">'.$post->post_title.'</a></div>';
//        $content .='<div class="card-descr"><a href="'.$url.'"><span>'.get_post_meta($post->ID,'meta1_field_6', true).'</span></a></div>';
//        $content .='<a class="product-description" href="'.$url.'">Условия аренды</a>';
//        $content .='<a onclick="yaCounter47702209.reachGoal(`zakaz-s-listinga`);" data-auto="'.$post->post_title.'" data-call="auto" href="javascript:void(0);">Заказать</a>';
//        $content .='</div>';
//        $content .='</div>';

        $url = get_permalink($post->ID);

        $content .='<div class="product-card-box">';
        $content .='<div class="img-box"><img loading="lazy" src="'.get_the_post_thumbnail_url($post->ID, 'medium').'" alt="'.$post->post_title.'"></div>';
        $content .='<div class="description-box">';
        $content .='<div class="title-box"><a href="'.$url.'">'.$post->post_title.'</a></div>';
        $content .='<div class="card-descr"><a href="'.$url.'"><span>'.get_post_meta($post->ID,'meta1_field_6', true).'</span></a></div>';
        $content .='</div>';
        $content .='<div class="button-box">';
        $content .='<a class="meake-order" onclick="yaCounter47702209.reachGoal(`zakaz-s-listinga`);" data-auto="'.$post->post_title.'" data-call="auto" href="javascript:void(0);">Заказать</a>';
        $content .='<a class="product-description" href="'.$url.'">Условия аренды</a>';
        $content .='</div>';
        $content .='</div>';


    }
    wp_reset_postdata();
    return $content;
}
add_shortcode('auto','get_auto');

function get_cat(){
    global $post;
    $categories = get_categories(array(
        'taxonomy' => 'arenda-autovyshek',
        'type' => 'uslugi-autovyshki',
        'orderby' => 'name',
        'order' => 'ASC'
    ));

    $cat = '';
    foreach( $categories as $category ){
        $cat .= '<a class="swiper-slide" href="' . get_category_link( $category->term_id ) .  '">' . $category->name.'</a>';
    }
    return $cat;
}

add_shortcode('cat','get_cat');

function breadcrumbs() {

    /* === ОПЦИИ === */
    $text['home']     = 'Главная'; // текст ссылки "Главная"
    $text['category'] = '%s'; // текст для страницы рубрики
    $text['search']   = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
    $text['tag']      = 'Записи с тегом "%s"'; // текст для страницы тега
    $text['author']   = 'Статьи автора %s'; // текст для страницы автора
    $text['404']      = 'Ошибка 404'; // текст для страницы 404
    $text['page']     = 'Страница %s'; // текст 'Страница N'
    $text['cpage']    = 'Страница комментариев %s'; // текст 'Страница комментариев N'

    $wrap_before    = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
    $wrap_after     = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
    $sep            = '<span class="breadcrumbs__separator"></span>'; // разделитель между "крошками"
    $before         = '<span class="breadcrumbs__current">'; // тег перед текущей "крошкой"
    $after          = '</span>'; // тег после текущей "крошки"

    $show_on_home   = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
    $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
    $show_current   = 1; // 1 - показывать название текущей страницы, 0 - не показывать
    $show_last_sep  = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
    /* === КОНЕЦ ОПЦИЙ === */

    global $post;
    $home_url       = home_url('/');
    $link           = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
    $link          .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
    $link          .= '<meta itemprop="position" content="%3$s" />';
    $link          .= '</span>';
    $parent_id      = ( $post ) ? $post->post_parent : '';
    $home_link      = sprintf( $link, $home_url, $text['home'], 1 );

    if ( is_home() || is_front_page() ) {

        if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;

    } else {

        $position = 0;

        echo $wrap_before;

        if ( $show_home_link ) {
            $position += 1;
            echo $home_link;
        }

        if ( is_category() ) {
            $parents = get_ancestors( get_query_var('cat'), 'category' );
            foreach ( array_reverse( $parents ) as $cat ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
            }
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                $cat = get_query_var('cat');
                echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_current ) {
                    if ( $position >= 1 ) echo $sep;
                    echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
                } elseif ( $show_last_sep ) echo $sep;
            }

        } elseif ( is_search() ) {
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                if ( $show_home_link ) echo $sep;
                echo sprintf( $link, $home_url . '?s=' . get_search_query(), sprintf( $text['search'], get_search_query() ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_current ) {
                    if ( $position >= 1 ) echo $sep;
                    echo $before . sprintf( $text['search'], get_search_query() ) . $after;
                } elseif ( $show_last_sep ) echo $sep;
            }

        } elseif ( is_year() ) {
            if ( $show_home_link && $show_current ) echo $sep;
            if ( $show_current ) echo $before . get_the_time('Y') . $after;
            elseif ( $show_home_link && $show_last_sep ) echo $sep;

        } elseif ( is_month() ) {
            if ( $show_home_link ) echo $sep;
            $position += 1;
            echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
            if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_day() ) {
            if ( $show_home_link ) echo $sep;
            $position += 1;
            echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
            $position += 1;
            echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
            if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_single() && ! is_attachment() ) {
            if ( get_post_type() != 'post' ) {
                $position += 1;
                $post_type = get_post_type_object( get_post_type() );
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
                if ( $show_current ) echo $sep . $before . get_the_title() . $after;
                elseif ( $show_last_sep ) echo $sep;
            } else {
                $cat = get_the_category(); $catID = $cat[0]->cat_ID;
                $parents = get_ancestors( $catID, 'category' );
                $parents = array_reverse( $parents );
                $parents[] = $catID;
                foreach ( $parents as $cat ) {
                    $position += 1;
                    if ( $position > 1 ) echo $sep;
                    echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
                }
                if ( get_query_var( 'cpage' ) ) {
                    $position += 1;
                    echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
                    echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
                } else {
                    if ( $show_current ) echo $sep . $before . get_the_title() . $after;
                    elseif ( $show_last_sep ) echo $sep;
                }
            }

        } elseif ( is_post_type_archive() ) {
            $post_type = get_post_type_object( get_post_type() );
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_home_link && $show_current ) echo $sep;
                if ( $show_current ) echo $before . $post_type->label . $after;
                elseif ( $show_home_link && $show_last_sep ) echo $sep;
            }

        } elseif ( is_attachment() ) {
            $parent = get_post( $parent_id );
            $cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
            $parents = get_ancestors( $catID, 'category' );
            $parents = array_reverse( $parents );
            $parents[] = $catID;
            foreach ( $parents as $cat ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
            }
            $position += 1;
            echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
            if ( $show_current ) echo $sep . $before . get_the_title() . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_page() && ! $parent_id ) {
            if ( $show_home_link && $show_current ) echo $sep;
            if ( $show_current ) echo $before . get_the_title() . $after;
            elseif ( $show_home_link && $show_last_sep ) echo $sep;

        } elseif ( is_page() && $parent_id ) {
            $parents = get_post_ancestors( get_the_ID() );
            foreach ( array_reverse( $parents ) as $pageID ) {
                $position += 1;
                if ( $position > 1 ) echo $sep;
                echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
            }
            if ( $show_current ) echo $sep . $before . get_the_title() . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( is_tag() ) {
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                $tagID = get_query_var( 'tag_id' );
                echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_home_link && $show_current ) echo $sep;
                if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
                elseif ( $show_home_link && $show_last_sep ) echo $sep;
            }

        } elseif ( is_author() ) {
            $author = get_userdata( get_query_var( 'author' ) );
            if ( get_query_var( 'paged' ) ) {
                $position += 1;
                echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
                echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
            } else {
                if ( $show_home_link && $show_current ) echo $sep;
                if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
                elseif ( $show_home_link && $show_last_sep ) echo $sep;
            }

        } elseif ( is_404() ) {
            if ( $show_home_link && $show_current ) echo $sep;
            if ( $show_current ) echo $before . $text['404'] . $after;
            elseif ( $show_last_sep ) echo $sep;

        } elseif ( has_post_format() && ! is_singular() ) {
            if ( $show_home_link && $show_current ) echo $sep;
            echo get_post_format_string( get_post_format() );
        }

        echo $wrap_after;

    }
}

//CREATE CUSTOM POST TYPE

// Регистрация новой таксономии:
add_action( 'init', 'create_cat_auto', 0 );
function create_cat_auto () {
    $args = array(
        // Название таксономии
        'label' => _x( 'Категории', 'taxonomy general name' ),

        // Значения таксономии в админ-панели:
        'labels' => array(
            // Общее название таксономии (множественное число).
            // По умолчанию: 'МеткИ' или 'РубрикИ'
            'name' => _x( 'Категории', 'taxonomy general name' ),
            // Название таксономии (единственное число).
            // По умолчанию: 'МеткА' или 'РубрикА'
            'singular_name' => _x( 'Аренда автовышек', 'taxonomy singular name' ),
            // Название таксономии в пункте меню.
            'menu_name' => __( 'Категории' ),
            // По умолчанию: 'Все метки' или 'Все рубрики'
            'all_items' => __( 'Все Машины' ),
            // Текст изменения таксономии на странице редактирования.
            // По умолчанию: 'Изменить метку' или 'Изменить рубрику'
            'edit_item' => __( 'Изменить машину' ),
            // Текст в админ-панели на странице редактирования данной таксономии.
            // По умолчанию: 'Просмотреть метку' или 'Просмотреть рубрику'
            'view_item' => __( 'Просмотреть машины' ),
            // Текст обновления таксономии во вкладке свойства.
            // По умолчанию: 'Обновить метку' или 'Обновить рубрику'
            'update_item' => __( 'Обновить машину' ),
            // Текст добавления новой таксономии при ее создании.
            // По умолчанию: 'Добавить новую метку' или 'Добавить новую рубрику'
            'add_new_item' => __( 'Добавить категорию' ),
            // Название таксономии при ее создании и редактировании.
            // По умолчанию: 'Название'
            'new_item_name' => __( 'Название' ),
            // Текст родительской таксономии при создании и редактировании.
            // Для древовидных таксономий.
            // По умолчанию: Родительская.
            'parent_item' => __( 'Родительская' ),
            // То же, что и parent_item, но с добавлением двоеточия.
            // По умолчанию: 'Родительская:'
            'parent_item_colon' => __( 'Родительская:' ),
            // Текст в кнопке поиска на странице всех таксономий.
            // По умолчанию: 'Поиск меток' или 'Поиск рубрик'
            'search_items' => __( 'Поиск машины' ),

            // ЧЕТЫРЕ НИЖНИХ параметра НЕ используется для древовидных таксономий:
            // Надпись популярных таксономий (на странице всех таксономий).
            // По умолчанию: Популярные метки или null.
            'popular_items' => null,
            // Надпись разделения таксономий запятыми в метабоксе.
            // По умолчанию: Метки разделяются запятыми или null.
            'separate_items_with_commas' => null,
            // Надпись добавления или удаления таксономий в метабоксе когда JavaScript отключен.
            // По умолчанию: Добавить или null.
            'add_or_remove_items' => null,
            // Текст выбора из часто используемых таксономий в метабоксе.
            // По умолчанию: Выбрать из часто используемых или null.
            'choose_from_most_used' => null,

            // Текст в случае, если запрашиваемая таксономия не найдена.
            // По умолчанию: 'Меток не найдено. или 'Рубрик не найдено.
            'not_found' => __( 'Категорий не найдено.' ),
        ),
        // Если true, то таксономия становится доступной для использования.
        'public' => true,
        // Доступность таксономии для управления в админ-панели, но не показывает ее в меню.
        // По умолчанию: 'public'.
        'show_ui' => true,
        // Показывать таксономию в админ-меню.
        // Значение аргумента 'show_ui' должно быть true.
        // По умолчанию: значение аргумента 'show_ui'.
        'show_in_menu' => true,
        // Добавляет или исключает таксономию в навигации сайта "Внешний вид -> Меню"
        // По умолчанию: 'public'.
        'show_in_nav_menus' => true,
        // Позволяет виджет 'Облако меток' использовать в таксономии.
        // По умолчанию: 'show_ui'.
        'show_tagcloud' => true,
        // Показ таксономии в меню быстрого доступа.
        // По умолчанию: 'show_ui'.
        'show_in_quick_edit' => true,
        // Обеспечивает показ метабокса с таксономией в записи. По умолчанию: null.
        'meta_box_cb' => null,
        // Позволяет автоматическое создание столбцов таксономии в таблице ассоциативных типов постов.
        // По умолчанию: false.
        'show_admin_column' => false,
        // Подключает описание таксономии в таблице со всеми таксономиями. По умолчанию: ''
        'description' => '',
        // Делает таксономию древовидной как рубрики или недревовидной как метки. По умолчанию: false.
        'hierarchical' => true,
        // Название функции, вызываемая после обновления ассоциативных типов объектов записи (поста)
        // Действует во многом как хук.
        // По умолчанию: ''.
        'update_count_callback' => '',
        // Значение запроса. По умолчанию: true.
        'query_var' => true,

        // Перезапись URL. По умолчанию: true.
        'rewrite' => array(
            // Текст в ЧПУ. По умолчанию: название таксономии.
            'slug' => 'arenda-autovyshek',
            // Позволяет ссылку добавить к базовому URL.
            'with_front' => false,
            // Использовать (true) или не использовать (false) древовидную структуру ссылок.
            // По умолчанию: false.
            'hierarchical' => true,
            // Перезаписывает конечное значение таксономии. По умолчанию: EP_NONE.
            'ep_mask' => EP_NONE,
        ),

        /*
            // Массив полномочий зарегестрированных пользователей:
            'capabilities' => array(
            'manage_terms' => 'manage_resource',
            'edit_terms'   => 'manage_categories',
            'delete_terms' => 'manage_categories',
            'assign_terms' => 'edit_posts',
        ),
        */

        // Должна ли таксономия запоминать порядок, в котором посты были созданы.
        // По умолчанию: null.
        'sort' => null,
        // Является ли таксономия собственной или встроенной.
        // Рекомендация: не использовать этот аргумент при регистрации собственной таксономии.
        // По умолчанию: false.
        '_builtin' => false,
    );
    // Названия типов записей к которым будет привязана таксономия
    register_taxonomy( 'arenda-autovyshek', array('uslugi-autovyshki'), $args );
}


// Регистрация пользовательского типа записи:
add_action( 'init', 'register_post_auto', 0 );
function register_post_auto() {
    $args = array(
        // Название пользовательского типа записи во множественном числе.
        // По умолчанию: значение аргумента 'name' массива 'labels'.
        'label'  => _x( 'Аренда автовышек', 'Post Type General Name', 'text_domain' ),
        'labels' => array(
            // Общее название пользовательского типа записи во множественном числе.
            // Переопределяет значение 'label'.
            // По умолчанию: 'Записи' или 'Страницы'
            'name' => _x( 'Аренда автовышек', 'Post Type General Name', 'text_domain' ),
            // Название пользовательского типа записи в единственном числе.
            // По умолчанию: 'Запись' или 'Страница'
            'singular_name' => _x( 'Машина', 'Post Type Singular Name', 'text_domain' ),
            // Текст добавления нового объекта типа записи в разделе 'Записи'/'Страницы' в админ-панели.
            // По умолчанию: 'Добавить новую'
            'add_new' => __( 'Добавить машину', 'text_domain' ),
            // Текст добавления нового объекта типа записи на странице создания.
            // По умолчанию: 'Добавить запись' или 'Добавить страницу'
            'add_new_item' => __( 'Добавить машину', 'text_domain' ),
            // Текст редактирования объекта типа записи на странице редактирования.
            // По умолчанию: 'Редактировать запись' или Редактировать страницу
            'edit_item' => __( 'Редактировать машину', 'text_domain' ),
            // Текст новой объекта типа записи.
            // По умолчанию: Новая запись или Новая страница
            'new_item' => __( 'Новая машина', 'text_domain' ),
            // Текст просмотра типа записи в админ-баре.
            // По умолчанию: 'Просмотреть запись' или 'Просмотреть страницу'
            'view_item' => __( 'Просмотреть машину', 'text_domain' ),
            // Текст на кнопке поиска объектов данного типа записи.
            // По умолчанию: 'Поиск записей' или 'Поиск страниц'
            'search_items' => __( 'Поиск машин', 'text_domain' ),
            // Текст в случае отрицательного результата поиска объектов данного типа записи.
            // По умолчанию: 'Записей не найдено' или 'Страниц не найдено'
            'not_found' => __( 'Машин не найдено', 'text_domain' ),
            // Текст в случае отрицательного результата поиска объектов данного типа записи в корзине.
            // По умолчанию: 'Записей в корзине не найдено' или 'Страниц в корзине не найдено'
            'not_found_in_trash' => __( 'Машин в корзине не найдено', 'text_domain' ),
            // Текст при выборе родительской страницы.
            // Данный аргумент применяется только для древовидных типов записи.
            // По умолчанию: __( 'Родительская:', 'text_domain' ).
            'parent_item_colon' => null,
            // Текст всех объектов типа записи в подменю.
            // По умолчанию: 'Все записи' или 'Все страницы
            'all_items' => __( 'Все машины', 'text_domain' ),
            // Текст архивов типа записи.
            // По умолчанию: 'Архивы записей' или 'Архивы страниц'
            'archives' => __( 'Архивы машин', 'text_domain' ),
            // Текст добавления медиафайлов в объект типа записи во вкладке 'Добавить медиазапись'.
            // По умолчанию: 'Вставить в запись' или 'Вставить в страницу'
            'insert_into_item' => __( 'Вставить в новость', 'text_domain' ),
            // Используется при просотре медиафайлов, прикрепленных к данному типу записи.
            // По умолчанию: _x( 'Загружен для:', 'text_domain' ).
            'uploaded_to_this_item' => _x( 'Загружен для:', 'text_domain' ),
            // Текст в метабоксе миниатюры на странице редактирования типа записи.
            // По умолчанию: 'Миниатюра записи'
            'featured_image' => __( 'Миниатюра машины', 'text_domain' ),
            // Текст для загрузки миниатюры.
            // По умолчанию: 'Задать миниатюру'
            'set_featured_image' => __( 'Задать миниатюру', 'text_domain' ),
            // Текст для удаления миниатюры.
            // По умолчанию: 'Удалить миниатюру'
            'remove_featured_image' => __( 'Удалить миниатюру', 'text_domain' ),
            // По умолчанию: 'Использовать миниатюру'
            'use_featured_image' => __( 'Использовать миниатюру', 'text_domain' ),
            // Текст в пункте меню. По умолчанию: значение аргумента 'name'.
            'menu_name' => __( 'Машины', 'text_domain' ),
            // Текст в админ-баре во вкладке 'Добавить'.
            // По умолчанию: значение аргумента 'singular_name'.
            'name_admin_bar' => __( 'Машина', 'text_domain' ),
            // Текст Screen reader в заголовке в разделе всех записей/страниц.
            // По умолчанию: 'Список записей' или 'Список страниц'
            'items_list' => __( 'Список машин', 'text_domain' ),
            // Текст Screen reader для постраничной навигации в разделе всех записей/страниц.
            // По умолчанию: 'Постраничная навигация'
            'items_list_navigation' => __( 'Постраничная навигация', 'text_domain' ),
            // Текст Screen reader для фильтра в разделе всех записей/страниц.
            // По умолчанию: 'Фильтр'
            'filter_items_list' => __( 'Фильтр', 'text_domain' ),
        ),
        // Короткое описание записи/страницы. По умолчанию: ''.
        'description' => '',
        // Управление видимостью в админ-панели ('show_in_nav_menus', 'show_ui')
        // и во внешнем фронтэнде ('exclude_from_search', 'publicly_queryable').
        // По умолчанию: false.
        'public' => true,
        // Исключить ли записи из результатов поиска фронтэнда.
        // По умолчанию: значение аргумента 'public'.
        'exclude_from_search' => true,
        // Доступность на внешнем сайте: могут ли запросы быть выполненными во фронтэнде как часть parse_request().
        // По умолчанию: значение аргумента 'public'.
        'publicly_queryable' => true,
        // Возможность управления данным пользовательским типом записи в админ-панели.
        // По умолчанию: значение аргумента 'public'.
        'show_ui' => true,
        // Доступность данного пользовательского типа записи в навигационном меню сайта.
        // По умолчанию: значение аргумента 'public'.
        'show_in_nav_menus' => true,
        // Показывать ли тип записи в админ-меню. Значение аргумента 'show_ui' должно быть true.
        // По умолчанию: значение аргумента 'show_ui'.
        'show_in_menu' => true,
        // Показывать ли тип записи в админ-баре. По умолчанию: значение аргумента 'show_in_menu'.
        'show_in_admin_bar' => true,

        // Порядок расположения в админ-меню. Значение аргумента 'show_in_menu' должно быть true.
        // По умолчанию: null - после пункта 'Комментарии'.
        'menu_position' => 5,
        /* Возможные значения:
        5 - после пункта 'Записи';
        10 - после пункта 'Медиафайлы';
        20 - после пункта 'Страницы';
        25 - после пункта 'Комментарии';
        60 - после пункта 'Внешний вид';
        65 - после пункта 'Плагины';
        70 - после пункта 'Пользователи';
        75 - после пункта 'Инструменты';
        80 - после пункта 'Настройки'.
        */

        // URL для загрузки изображения в админ-меню.
        // По умолчанию: null - используется изображение пункта меню 'Записи'.
        // Ссылки на изображения доступны здесь: https://developer.wordpress.org/resource/dashicons/
        'menu_icon' => 'dashicons-editor-textcolor',

        /* Массив полномочий зарегестрированных пользователей для этого типа записи:
        'capability_type' => 'post',
            'capabilities' => array(
            'edit_post' => 'edit_news',
            'read_post' => 'read_news',
            'delete_post' => 'delete_news',
            'edit_posts' => 'edit_news',
            'edit_others_posts' => 'edit_others_news',
            'publish_posts' => 'publish_news',
            'read_private_posts' => 'read_private_news',
            'create_posts' => 'edit_news',
        ),
        */

        // Использовать ли внутренние значения по умолчанию для управления правами.
        // По умолчанию: null.
        'map_meta_cap' => null,
        // Является ли тип записи иерархическим (т.е. страницей).
        // Позволяет установливать родительскую страницу. По умолчанию: false.
        'hierarchical' => false,

        // Управление полями для редактирования объекта типа записи.
        // По умолчанию: значения 'title' и 'editor'.
        'supports' => array(
            'title', // Заголовок объекта типа записи.
            'editor', // Редактор контента.
            'author', // Автор.
            'thumbnail', // Миниатюра.
            'excerpt', // Цитата, отрывок.
            'trackbacks', // Отправить обратные ссылки.
            'custom-fields', // Произвольные поля.
            'comments', // Комментарии.
            'revisions', // Сохраняет версии.
            'page-attributes', // Атрибуты.
            'post-formats', // Формат записи.
        ),

        // Обеспечивает обратный вызов функции, которая требуется при настройке метабоксов в разделе редактирования.
        // По умолчанию: null.
        'register_meta_box_cb' => null,
        // Массив связанных таксономий для данного типа записи.
        // Пользовательскую таксономию необходимо зарегестрировать через функцию register_taxonomy().
        // По умолчанию: без таксономий.
        'taxonomies' => array('arenda-autovyshek'),  //uslugi-autovyshek
        // Включает архивы данного типа записи.
        // Будет использоваться значение $post_type как ярлык архива по умолчанию. По умолчанию: false
        'has_archive' => true,

        // Возможность перезаписи для данного типа записи.
        // Для предотвращения перезаписи, используют значение false.
        // По умолчанию: true и значение $post_type используется как ярлык.
        'rewrite' => array(
            // Текст в ссылке. По умолчанию: значение $post_type.
            'slug' => 'uslugi-autovyshki',
            // Должна ли структура ссылки быть с базовым URL.
            // Пример: если структура ссылки /blog/,
            // то ссылка при соответствующих параметрах 'with_front'
            // выглядит так: false->/news/, true->/blog/news/
            // По умолчанию: true.
            'with_front' => false,
            // Должна ли структура постоянных ссылок быть встроена для этого типа записи.
            // По умолчанию: значение 'has_archive'.
            'feeds' => false,
            // Должна ли структура ссылок обеспечена быть постраничной навигацией.
            // По умолчанию: true.
            'pages' => true,
        ),

        // Перезаписывает конечное значение. По умолчанию: EP_PERMALINK.
        'permalink_epmask' => EP_PERMALINK,
        // Задается значение запроса для данного типа записи.
        //  По умолчанию: true - задается значение $post_type.
        'query_var' => true,
        // Возможность данного типа записи быть экспортированным. По умолчанию: true.
        'can_export' => true,
        // Удалять ли записи данного типа при удалении их автора. По умолчанию: null.
        'delete_with_user' => null,
        // Представлять ли этот тип записи в REST API. По умолчанию: false.
        'show_in_rest' => false,
        // Базовый ярлык данного типа записи когда доступно использование REST API.
        //  По умолчанию: значение $post_type.
        'rest_base' => $post_type,
        // Является ли этот тип записи собственным или встроенным.
        //  Рекомендация: не использовать этот аргумент при регистрации собственного типа сообщения. По умолчанию: false.
        '_builtin' => false,
    );
    register_post_type( 'uslugi-autovyshki', $args );
}


class trueMetaBox {
    function __construct($options) {
        $this->options = $options;
        $this->prefix = $this->options['id'] .'_';
        add_action( 'add_meta_boxes', array( &$this, 'create' ) );
        add_action( 'save_post', array( &$this, 'save' ), 1, 2 );
    }
    function create() {
        foreach ($this->options['post'] as $post_type) {
            if (current_user_can( $this->options['cap'])) {
                add_meta_box($this->options['id'], $this->options['name'], array(&$this, 'fill'), $post_type, $this->options['pos'], $this->options['pri']);
            }
        }
    }
    function fill(){
        global $post; $p_i_d = $post->ID;
        wp_nonce_field( $this->options['id'], $this->options['id'].'_wpnonce', false, true );
        ?>
        <table class="form-table"><tbody><?php
        foreach ( $this->options['args'] as $param ) {
            if (current_user_can( $param['cap'])) {
                ?><tr><?php
                if(!$value = get_post_meta($post->ID, $this->prefix .$param['id'] , true)) $value = $param['std'];
                switch ( $param['type'] ) {
                    case 'text':{ ?>
                        <th scope="row"><label for="<?php echo $this->prefix .$param['id'] ?>"><?php echo $param['title'] ?></label></th>
                        <td>
                            <input name="<?php echo $this->prefix .$param['id'] ?>" type="<?php echo $param['type'] ?>" id="<?php echo $this->prefix .$param['id'] ?>" value="<?php echo $value ?>" placeholder="<?php echo $param['placeholder'] ?>" class="regular-text" /><br />
                            <span class="description"><?php echo $param['desc'] ?></span>
                        </td>
                        <?php
                        break;
                    }
                    case 'textarea':{ ?>
                        <th scope="row"><label for="<?php echo $this->prefix .$param['id'] ?>"><?php echo $param['title'] ?></label></th>
                        <td>
                            <textarea name="<?php echo $this->prefix .$param['id'] ?>" type="<?php echo $param['type'] ?>" id="<?php echo $this->prefix .$param['id'] ?>" value="<?php echo $value ?>" placeholder="<?php echo $param['placeholder'] ?>" class="large-text" /><?php echo $value ?></textarea><br />
                            <span class="description"><?php echo $param['desc'] ?></span>
                        </td>
                        <?php
                        break;
                    }
                    case 'checkbox':{ ?>
                        <th scope="row"><label for="<?php echo $this->prefix .$param['id'] ?>"><?php echo $param['title'] ?></label></th>
                        <td>
                            <label for="<?php echo $this->prefix .$param['id'] ?>"><input name="<?php echo $this->prefix .$param['id'] ?>" type="<?php echo $param['type'] ?>" id="<?php echo $this->prefix .$param['id'] ?>"<?php echo ($value=='on') ? ' checked="checked"' : '' ?> />
                                <?php echo $param['desc'] ?></label>
                        </td>
                        <?php
                        break;
                    }
                    case 'select':{ ?>
                        <th scope="row"><label for="<?php echo $this->prefix .$param['id'] ?>"><?php echo $param['title'] ?></label></th>
                        <td>
                            <label for="<?php echo $this->prefix .$param['id'] ?>">
                                <select name="<?php echo $this->prefix .$param['id'] ?>" id="<?php echo $this->prefix .$param['id'] ?>"><option>...</option><?php
                                    foreach($param['args'] as $val=>$name){
                                        ?><option value="<?php echo $val ?>"<?php echo ( $value == $val ) ? ' selected="selected"' : '' ?>><?php echo $name ?></option><?php
                                    }
                                    ?></select></label><br />
                            <span class="description"><?php echo $param['desc'] ?></span>
                        </td>
                        <?php
                        break;
                    }
                }
                ?></tr><?php
            }
        }
        ?></tbody></table><?php
    }

    function save($post_id, $post){
        if ( !wp_verify_nonce( $_POST[ $this->options['id'].'_wpnonce' ], $this->options['id'] ) ) return;
        if ( !current_user_can( 'edit_post', $post_id ) ) return;
        if ( !in_array($post->post_type, $this->options['post'])) return;
        foreach ( $this->options['args'] as $param ) {
            if ( current_user_can( $param['cap'] ) ) {
                if ( isset( $_POST[ $this->prefix . $param['id'] ] ) && trim( $_POST[ $this->prefix . $param['id'] ] ) ) {
                    update_post_meta( $post_id, $this->prefix . $param['id'], trim($_POST[ $this->prefix . $param['id'] ]) );
                } else {
                    delete_post_meta( $post_id, $this->prefix . $param['id'] );
                }
            }
        }
    }
}


$options = array(
    array( // первый метабокс
        'id'	=>	'meta1', // ID метабокса, а также префикс названия произвольного поля
        'name'	=>	'Стоимость услуг', // заголовок метабокса
        'post'	=>	array('uslugi-autovyshki'), // типы постов для которых нужно отобразить метабокс
        'pos'	=>	'normal', // расположение, параметр $context функции add_meta_box()
        'pri'	=>	'high', // приоритет, параметр $priority функции add_meta_box()
        'cap'	=>	'edit_posts', // какие права должны быть у пользователя
        'args'	=>	array(
            array(
                'id'			=>	'field_1', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
                'title'			=>	'Цена за час', // лейбл поля
                'type'			=>	'text', // тип, в данном случае обычное текстовое поле
                'placeholder'		=>	'', // атрибут placeholder
                'desc'			=>	'', // что-то типа пояснения, подписи к полю
                'cap'			=>	'edit_posts'
            ),
            array(
                'id'			=>	'field_2', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
                'title'			=>	'Цена за смену', // лейбл поля
                'type'			=>	'text', // тип, в данном случае обычное текстовое поле
                'placeholder'		=>	'', // атрибут placeholder
                'desc'			=>	'', // что-то типа пояснения, подписи к полю
                'cap'			=>	'edit_posts'
            ),
            array(
                'id'			=>	'field_6', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
                'title'			=>	'Описание карточки на листинге', // лейбл поля
                'type'			=>	'textarea', // тип, в данном случае обычное текстовое поле
                'placeholder'		=>	'', // атрибут placeholder
                'desc'			=>	'Описание карточки на листинге', // что-то типа пояснения, подписи к полю
                'cap'			=>	'edit_posts'
            ),
            array(
                'id'			=>	'field_7', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
                'title'			=>	'Описание стоимости услуг в карточке товара', // лейбл поля
                'type'			=>	'textarea', // тип, в данном случае обычное текстовое поле
                'placeholder'		=>	'', // атрибут placeholder
                'desc'			=>	'Описание стоимости услуг в карточке товара', // что-то типа пояснения, подписи к полю
                'cap'			=>	'edit_posts'
            ),
            array(
                'id'			=>	'field_8', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
                'title'			=>	'Сео текст', // лейбл поля
                'type'			=>	'textarea', // тип, в данном случае обычное текстовое поле
                'placeholder'		=>	'', // атрибут placeholder
                'desc'			=>	'Сео текст', // что-то типа пояснения, подписи к полю
                'cap'			=>	'edit_posts'
            )
        )
    ),
);
/**
 * Update CSS within in Admin
 */

function admin_style() {
    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri() . '/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');


foreach ($options as $option) {
    $truemetabox = new trueMetaBox($option);
}

add_shortcode('add_map','add_map');

function add_map(){
    if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Chrome-Lighthouse') === false):
        return'<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A348a0927ae0668a65e36f3b50454940061a1401427de5208dea2b9a777869f54&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>';
    endif;

}


// start 11111

class trueMetaBoxx {
    function __construct($options) {
        $this->options = $options;
        $this->prefix = $this->options['id'] .'_';
        add_action( 'add_meta_boxes', array( &$this, 'create' ) );
        add_action( 'save_post', array( &$this, 'save' ), 1, 2 );
    }
    function create() {
        foreach ($this->options['post'] as $post_type) {
            if (current_user_can( $this->options['cap'])) {
                add_meta_box($this->options['id'], $this->options['name'], array(&$this, 'fill'), $post_type, $this->options['pos'], $this->options['pri']);
            }
        }
    }
    function fill(){
        global $post; $p_i_d = $post->ID;
        wp_nonce_field( $this->options['id'], $this->options['id'].'_wpnonce', false, true );
        ?>
        <table class="form-table"><tbody><?php
        foreach ( $this->options['args'] as $param ) {
            if (current_user_can( $param['cap'])) {
                ?><tr><?php
                if(!$value = get_post_meta($post->ID, $this->prefix .$param['id'] , true)) $value = $param['std'];
                switch ( $param['type'] ) {
                    case 'text':{ ?>
                        <th scope="row"><label for="<?php echo $this->prefix .$param['id'] ?>"><?php echo $param['title'] ?></label></th>
                        <td>
                            <input name="<?php echo $this->prefix .$param['id'] ?>" type="<?php echo $param['type'] ?>" id="<?php echo $this->prefix .$param['id'] ?>" value="<?php echo $value ?>" placeholder="<?php echo $param['placeholder'] ?>" class="regular-text" /><br />
                            <span class="description"><?php echo $param['desc'] ?></span>
                        </td>
                        <?php
                        break;
                    }
                    case 'textarea':{ ?>
                        <th scope="row"><label for="<?php echo $this->prefix .$param['id'] ?>"><?php echo $param['title'] ?></label></th>
                        <td>
                            <textarea name="<?php echo $this->prefix .$param['id'] ?>" type="<?php echo $param['type'] ?>" id="<?php echo $this->prefix .$param['id'] ?>" value="<?php echo $value ?>" placeholder="<?php echo $param['placeholder'] ?>" class="large-text" /><?php echo $value ?></textarea><br />
                            <span class="description"><?php echo $param['desc'] ?></span>
                        </td>
                        <?php
                        break;
                    }
                    case 'checkbox':{ ?>
                        <th scope="row"><label for="<?php echo $this->prefix .$param['id'] ?>"><?php echo $param['title'] ?></label></th>
                        <td>
                            <label for="<?php echo $this->prefix .$param['id'] ?>"><input name="<?php echo $this->prefix .$param['id'] ?>" type="<?php echo $param['type'] ?>" id="<?php echo $this->prefix .$param['id'] ?>"<?php echo ($value=='on') ? ' checked="checked"' : '' ?> />
                                <?php echo $param['desc'] ?></label>
                        </td>
                        <?php
                        break;
                    }
                    case 'select':{ ?>
                        <th scope="row"><label for="<?php echo $this->prefix .$param['id'] ?>"><?php echo $param['title'] ?></label></th>
                        <td>
                            <label for="<?php echo $this->prefix .$param['id'] ?>">
                                <select name="<?php echo $this->prefix .$param['id'] ?>" id="<?php echo $this->prefix .$param['id'] ?>"><option>...</option><?php
                                    foreach($param['args'] as $val=>$name){
                                        ?><option value="<?php echo $val ?>"<?php echo ( $value == $val ) ? ' selected="selected"' : '' ?>><?php echo $name ?></option><?php
                                    }
                                    ?></select></label><br />
                            <span class="description"><?php echo $param['desc'] ?></span>
                        </td>
                        <?php
                        break;
                    }
                }
                ?></tr><?php
            }
        }
        ?></tbody></table><?php
    }
    function save($post_id, $post){
        if ( !wp_verify_nonce( $_POST[ $this->options['id'].'_wpnonce' ], $this->options['id'] ) ) return;
        if ( !current_user_can( 'edit_post', $post_id ) ) return;
        if ( !in_array($post->post_type, $this->options['post'])) return;
        foreach ( $this->options['args'] as $param ) {
            if ( current_user_can( $param['cap'] ) ) {
                if ( isset( $_POST[ $this->prefix . $param['id'] ] ) && trim( $_POST[ $this->prefix . $param['id'] ] ) ) {
                    update_post_meta( $post_id, $this->prefix . $param['id'], trim($_POST[ $this->prefix . $param['id'] ]) );
                } else {
                    delete_post_meta( $post_id, $this->prefix . $param['id'] );
                }
            }
        }
    }
}


$optionss = array(
    array( // первый метабокс
        'id'	=>	'meta1', // ID метабокса, а также префикс названия произвольного поля
        'name'	=>	'Стоимость услуг', // заголовок метабокса
        'post'	=>	array('auto'), // типы постов для которых нужно отобразить метабокс
        'pos'	=>	'normal', // расположение, параметр $context функции add_meta_box()
        'pri'	=>	'high', // приоритет, параметр $priority функции add_meta_box()
        'cap'	=>	'edit_posts', // какие права должны быть у пользователя
        'args'	=>	array(
            array(
                'id'			=>	'field_1', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
                'title'			=>	'Цена за час', // лейбл поля
                'type'			=>	'text', // тип, в данном случае обычное текстовое поле
                'placeholder'		=>	'', // атрибут placeholder
                'desc'			=>	'', // что-то типа пояснения, подписи к полю
                'cap'			=>	'edit_posts'
            ),
            array(
                'id'			=>	'field_2', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
                'title'			=>	'Цена за смену', // лейбл поля
                'type'			=>	'text', // тип, в данном случае обычное текстовое поле
                'placeholder'		=>	'', // атрибут placeholder
                'desc'			=>	'', // что-то типа пояснения, подписи к полю
                'cap'			=>	'edit_posts'
            ),
            array(
                'id'			=>	'field_6', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
                'title'			=>	'Описание карточки на листинге', // лейбл поля
                'type'			=>	'textarea', // тип, в данном случае обычное текстовое поле
                'placeholder'		=>	'', // атрибут placeholder
                'desc'			=>	'Описание карточки на листинге', // что-то типа пояснения, подписи к полю
                'cap'			=>	'edit_posts'
            ),
            array(
                'id'			=>	'field_7', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
                'title'			=>	'Описание стоимости услуг в карточке товара', // лейбл поля
                'type'			=>	'textarea', // тип, в данном случае обычное текстовое поле
                'placeholder'		=>	'', // атрибут placeholder
                'desc'			=>	'Описание стоимости услуг в карточке товара', // что-то типа пояснения, подписи к полю
                'cap'			=>	'edit_posts'
            ),
            array(
                'id'			=>	'field_8', // атрибуты name и id без префикса, например с префиксом будет meta1_field_1
                'title'			=>	'Сео текст', // лейбл поля
                'type'			=>	'textarea', // тип, в данном случае обычное текстовое поле
                'placeholder'		=>	'', // атрибут placeholder
                'desc'			=>	'Сео текст', // что-то типа пояснения, подписи к полю
                'cap'			=>	'edit_posts'
            )
        )
    ),
);

foreach ($optionss as $option) {
    $truemetabox = new trueMetaBox($option);
}

// stop 11111

function setup_theme() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'setup_theme' );

add_filter( 'document_title_parts', 'mytheme_remove_title' );
function mytheme_remove_title( $title ){
    if ( !is_home() ) {
        $title['site'] = '';
    }
    return $title;
}

wp_deregister_style('wp-block-library');


add_shortcode( 'aerial_platform_form', 'aerial_platform_form_func' );
function aerial_platform_form_func( $atts ){
    return '<div class="col-xs-12 order-form">
        <div class="h2">Нужна автовышка для мойки окон?</div>
        <form>
            <div class="row">
                <div id="recaptcha6" class="g-recaptcha" data-size="invisible"></div>
                <div class="col-md-4"><input name="name" type="text" placeholder="Ваше имя" /></div>
                <div class="col-md-4"><input name="tel" type="text" placeholder="+7(999)999-99-99" /></div>
                <div class="col-md-4"><input name="addr" type="text" placeholder="Ваш e-mail" /></div>
                <div class="col-md-12">
                    <input name="descr" type="text" placeholder="Подробнее о заказе" />
                    <input name="policy" type="checkbox" />Я принимаю <a href="/policy">соглашение сайта об обработке персональных данных.</a>
                    <button class="order-but but-auto" type="submit">Заказать</button>
                    <div class="output-form"></div>
                </div>
            </div>
        </form>
    </div>';
}

add_shortcode( 'aerial_platform_list', 'aerial_platform_list_func' );
function aerial_platform_list_func( $atts ){
    $pages = get_field('uslugi', get_the_ID());
    if (empty($pages)){
        $pages = get_pages([
            'child_of'     => 351,
            'post_type'    => 'page',
            'post_status'  => 'publish',
        ]);
    }
    $result = '';
    if(!empty($pages)) {
        $result = '<div class="row">
            <div class="text-center h2">Вам также может понадобиться автовышка:</div>
            <div class="aerial_platform_list">';
        foreach ($pages as $page) {
            $page_url = get_permalink($page->ID);
            $result .= '<div class="advantages-card">
                <div class="h3">
                    <a href="' . $page_url . '">
                        <img class="alignnone wp-image-483 size-full" src="' . get_the_post_thumbnail_url($page->ID) . '" alt="' . $page->post_title . '" width="280" height="150" />
                    </a>
                </div>
                <div class="advantages-title">
                    <div class="h3"><a href="' . $page_url . '">' . $page->post_title . '</a></div>
                </div>
            </div>';
        }
        $result .= '</div>
        </div>';
    }
    return $result;
}

add_shortcode( 'work_steps', 'work_steps_func' );
function work_steps_func( $atts ){
    return '<div class="stage-section">
        <div class="text-center h2">Этапы работ</div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                <div class="stage-card"><img loading="lazy" class="alignnone ls-is-cached" src="/wp-content/uploads/2019/10/arenda-avtovyshki-foto1.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-foto1.png" alt="Аренда автовышки" width="188" height="116"></div>
                <div class="text-center h3">Ваш звонок</div>
                </div>
                <div class="col-sm-3">
                <div class="stage-card"><img loading="lazy" class="alignnone ls-is-cached" src="/wp-content/uploads/2019/10/arenda-avtovyshki-foto2.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-foto2.png" alt="Аренда автовышки" width="188" height="116"></div>
                <div class="text-center h3">Ответ диспетчера</div>
                </div>
                <div class="col-sm-3">
                <div class="stage-card"><img loading="lazy" class="alignnone ls-is-cached" src="/wp-content/uploads/2019/10/arenda-avtovyshki-foto13-1.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-foto13-1.png" alt="Аренда автовышки" width="188" height="116"></div>
                <div class="text-center h3">Подписываем договор</div>
                </div>
                <div class="col-sm-3">
                <div class="last-stage-card"><img loading="lazy" class="alignnone ls-is-cached" src="/wp-content/uploads/2019/10/arenda-avtovyshki-foto4.png" data-src="/wp-content/uploads/2019/10/arenda-avtovyshki-foto4.png" alt="Аренда автовышки" width="188" height="116"></div>
                <div class="text-center h3">Отличный результат!</div>
                </div>
            </div>
        </div>
    </div>';
}

add_shortcode('reviews', 'reviews_func');
function reviews_func(){
    $result = '';
    $reviews = get_field('reviews', get_the_ID());
    if (!$reviews){
        $reviews = get_field('reviews', 7);
    }
    if ($reviews){
        $result = '
        <div class="top-box">
            <p>Что о нас говорят клиенты</p>
            <div class="button-box">
                <div class="review-swiper-prev">
                    <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.70508 11.4121L1.29331 6.00035L6.70508 0.58858" stroke="#ED4646" stroke-width="1.35294"/>
                    </svg>
                </div>
                <div class="review-swiper-next next-box">
                    <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.29492 0.587891L6.70669 5.99965L1.29492 11.4114" stroke="white" stroke-width="1.35294"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="bottom-box">
            <div class="review-swiper">
              <div class="swiper-wrapper">';
        foreach ($reviews as $review) {
            $result .= '
                    <div class="swiper-slide person-box">
                        <div>
                            <img loading="lazy" src="'.wp_get_attachment_url($review['img']).'" alt="'.htmlspecialchars($review['name']).'" />
                            <p class="person-name">'.$review['name'].'</p>
                        </div>
                        <div class="person-comment">'.$review['txt'].'</div>
                    </div>';
            }
        unset($review);
        $result .= '          
              </div>
                 <div class="hidden-button-box">
                    <div class="review-swiper-prev">
                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.70508 11.4121L1.29331 6.00035L6.70508 0.58858" stroke="#ED4646" stroke-width="1.35294"/>
                        </svg>
                    </div>
                    <div class="review-swiper-next next-box">
                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.29492 0.587891L6.70669 5.99965L1.29492 11.4114" stroke="white" stroke-width="1.35294"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>';
    }
    return $result;


//    $result = '';
//    $reviews = get_field('reviews', get_the_ID());
//    if (!$reviews){
//        $reviews = get_field('reviews', 7);
//    }
//    if ($reviews){
//        $result = '<section class="reviews-section">
//        <div class="container">
//            <div class="text-center h2">Отзывы наших клиентов</div>
//            <div class="reviews_list">';
//        foreach ($reviews as $review) {
//            $result .= '<div class="review">
//                <img loading="lazy" class="review_img" src="'.wp_get_attachment_url($review['img']).'" alt="'.htmlspecialchars($review['name']).'" />
//                <div class="review_title">'.$review['name'].'</div>
//                '.$review['txt'].'
//            </div>';
//        }
//        unset($review);
//        $result .= '</div></div></section>';
//    }
//    return $result;
    /* return '<div class="reviews-section">
         <div class="container">
             <div class="row">
                 <div class="text-center h2" style="visibility: visible;">Отзывы наших клиентов</div>
                 <div class="col-sm-6 col-md-3">
                 <div class="reviews-card">
                     <p><noscript><img loading="lazy" src="/wp-content/uploads/2019/10/s1-1.png" alt="Рустем М., 45 лет" /></noscript><img loading="lazy" class=" lazyloaded" src="/wp-content/uploads/2019/10/s1-1.png" data-src="/wp-content/uploads/2019/10/s1-1.png" alt="Рустем М., 45 лет"></p>
                     <div class="h3">Рустем М., 45 лет</div>
                     <p>Мы занимаемся наружной рекламой – баннеры, растяжки и все прочее. Поэтому необходимость в спецтехнике возникает постоянно. Арендовали автовышки и у частников, с которыми вечно были проблемы, а один раз и водитель даже был нетрезв, и у вроде солидных компаний. Но и тут не всегда все гладко было, то вышка опоздает, то еще что-то. Были мысли даже свою купить, чтобы все самим делать, но бухгалтер твердое нет сказал – невыгодно. Это надо и водителя обучать, и вышку регистрировать в РосТехНадзоре, а потом еще и расходы на текущее содержание. Приятель работает в строительной фирме, посоветовал ПСМ. Решили позвонить, узнать о ценах на вышку в 15 м – как раз срочный заказ был. Сумма устроила, но всегда ждешь подвоха, поэтому сильно не обольщались. Но автовышка приехала вовремя, даже с небольшим запасом по времени. Водитель хороший – баннер вешали недалеко от высоковольтки, но все грамотно сделал, что лучше и не надо. В общем, что я, что мои рабочие остались довольны. Теперь мы каждый раз берем в аренду автовышки у «Предприятия строительных машин». Спасибо им за избавление от головной боли, потому что на ПСМ можно положиться – в срок приедут, быстро все сделают и все живы- здоровы останутся. Ну и цена, разумеется, более чем адекватная.</p>
                 </div>
                 </div>
                 <div class="col-sm-6 col-md-3">
                     <div class="reviews-card">
                         <p><noscript><img loading="lazy" src="/wp-content/uploads/2019/10/s2-1.png" alt="Юлия М., 32 года" /></noscript><img loading="lazy" class=" lazyloaded" src="/wp-content/uploads/2019/10/s2-1.png" data-src="/wp-content/uploads/2019/10/s2-1.png" alt="Юлия М., 32 года"></p>
                         <div class="h3">Юлия М., 32 года</div>
                         <p>Долго не могла найти для своего директора компанию, которая дала бы вышку в аренду. Честно говоря, не вызывают доверия эти многочисленные фирмы-однодневки. В общем, когда обнаружила фирму Предприятие строительных машин, все проблемы решились – и с поиском водителя, и с самой вышкой, которая была очень высокой производительности. Начальство выразило мне благодарность, что я нашла такого надежного исполнителя.</p>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-3">
                     <div class="reviews-card">
                         <p><noscript><img loading="lazy" src="/wp-content/uploads/2019/10/s4.png" alt="Валерий К., 37 лет" /></noscript><img loading="lazy" class=" lazyloaded" src="/wp-content/uploads/2019/10/s4.png" data-src="/wp-content/uploads/2019/10/s4.png" alt="Валерий К., 37 лет"></p>
                         <div class="h3">Валерий К., 37 лет</div>
                         <p>Недавно заказывали маленькую автовышку на 15 метров для установки кондиционеров. Проехала в очень узкую арку,<br>
                         места для работы было очень мало, но благодаря небольшим габаритам машины и опыту машиниста, работу сделали<br>
                         качественно и быстро. Работой машиниста довольны на все 100%. Будем обращаться еще.</p>
                     </div>
                 </div>
                 <div class="col-sm-6 col-md-3">
                     <div class="reviews-card">
                         <p><noscript><img loading="lazy" src="/wp-content/uploads/2019/10/s3.png" alt="Артём, 28 лет" /></noscript><img loading="lazy" class=" lazyloaded" src="/wp-content/uploads/2019/10/s3.png" data-src="/wp-content/uploads/2019/10/s3.png" alt="Артём, 28 лет"></p>
                         <div class="h3">Артём, 28 лет</div>
                         <p>Мы долго искали, у кого арендовать вышку. Нужно было, чтобы и цена была хорошая, и уверенность в том, что она во время работы не сломается. Мы рады, что нашли Предприятие строительных машин. Отличный сервис, который прекрасно подойдет тем, кто не пользуется автовышкой постоянно. Очень быстро мы завершили весь объем работ. Если бы не они, сроки были бы сорваны. Достаточно сделать звонок – и менеджер сразу же примет заказ.</p>
                     </div>
                 </div>
             </div>
             <p><a class="order-but" href="/otzyvy">Все отзывы</a></p>
         </div>
     </div>';*/
}

add_shortcode('delivery_rent', 'delivery_rent_func');
function delivery_rent_func(){
    return '<div class="work-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            <div class="h3">Оплата/Доставка</div>
                <img loading="lazy" alt="Оплата/Доставка" src="/wp-content/uploads/2019/11/delivery.png">
            </div>
            <div class="col-sm-6">
            <div class="h3">Условия аренды</div>
                <img loading="lazy" alt="Условия аренды" src="/wp-content/uploads/2019/11/psm1.jpeg">
            </div>
        </div>
    </div>
</div>';
}


