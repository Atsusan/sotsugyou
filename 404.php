<?php
/*
Template Name: 404ページ
*/
get_header(); ?>
    <div class="container-404">
        <p class="title-404">404ページ</p>
        <p class="text-404">お探しのページは見つかりませんでした。</p>

        <a href="<?php bloginfo('url'); ?>" class="link-404 btn btn-float">トップへ戻る</a>
    </div>
<?php get_footer(); ?>