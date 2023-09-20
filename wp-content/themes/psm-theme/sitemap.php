<?php
/* Template Name: sitemap
Template Post Type: page
*/
get_header();
$pages = get_posts([
    'numberposts' => -1,
    'post_type'=>['post', 'page'],
    'post_status'=>'publish',
    'exclude'=>get_the_ID()
]);
$categories = get_terms( [
    'taxonomy' => 'category',
    'hide_empty' => false,
    'count'=>false,
    'exclude'=>1
] );
//print_r($categories);
?>
<style>
    .page-list{
        margin: 100px auto;
    }
    .title{
        margin: 0 0 1em 0;
        font-size: 40px;
    }
</style>
<div class="page-list">
    <div class="container">
        <h1 class="title"><?=get_the_title()?></h1>
        <h2>Посты</h2>
        <ul>
            <? foreach ($pages as $page){ ?>
                <li><a href="<?=get_permalink($page->ID)?>"><?=$page->post_title?></a></li>
            <? } ?>
        </ul>
        <h2>Категории</h2>
        <ul>
            <? foreach ($categories as $category){ ?>
                <li><a href="<?=get_category_link($category->term_id)?>"><?=$category->name?></a></li>
            <? } ?>
        </ul>
    </div>
</div>
<?php get_footer(); ?>
