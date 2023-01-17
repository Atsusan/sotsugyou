<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- OGP宣言 -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no"><!-- 電話のリンクをしない設定 -->

    <meta property="og:title" content="Global Standard"><!-- OGPタイトル -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://example.com/"><!-- OGPサイトURL -->
    <meta property="og:image" content="https://example.com/img/ogp.png"><!-- OGPサムネイル -->
    <meta property="og:site_name" content="Global Standard"><!-- OGPサイトネーム -->
    <meta property="og:description" content=""><!-- OGPサイトの概要欄 -->
    <meta name="twitter:card" content="summary_large_image"><!-- OGP Twitterカード -->
    <!-- ファビコンの設定 -->
    <!-- <link rel="icon" href=""> -->
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <header id="header">
        <div class="inner">
            <h1 class="header-logo">
                <a href="<?php echo esc_url(home_url('/')) ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/company-logo.svg" alt="<?php bloginfo('name'); ?>">
                </a>
            </h1><!-- /.header-logo -->

            <nav class="header-nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-item-link">トップ</a></li>
                    <li class="nav-item"><a href="<?php bloginfo('url'); ?>/about" class="nav-item-link">当社について</a></li>
                    <li class="nav-item"><a href="<?php bloginfo('url'); ?>/service" class="nav-item-link">サービス</a></li>
                    <li class="nav-item"><a href="<?php bloginfo('url'); ?>/case" class="nav-item-link">導入事例</a></li>
                    <li class="nav-item"><a href="<?php echo home_url(); ?>/news" class="nav-item-link">お知らせ</a></li>
                    <li class="nav-item-download btn btn-float"><a href="<?php bloginfo('url'); ?>/download" class="nav-item-link">資料ダウンロード</a></li>
                    <li class="nav-item-content btn btn-filled"><a href="<?php bloginfo('url'); ?>/contact" class="nav-item-link">お問い合わせ</a></li>
                </ul>
                <!-- /.nav-list -->
            </nav>
            <!-- /.header-nav -->

            <!-- ドロワー 実装 -->
            <!-- ドロワーのアイコン部分 -->
            <a class="drawer-icon"><span></span></a>
            <!-- ドロワーの背景、マスク部分 -->
            <!-- <div class="drawer-background"></div> -->
            <!-- ドロワーの背景、コンテンツ部分 -->
            <nav class="drawer-nav">
                <ul class="drawer-nav-list">
                    <!-- ドロワーのアイテム部分 -->
                    <li class="drawer-nav-item"><a class="drawer-nav-item-link" href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
                    <li class="drawer-nav-item"><a class="drawer-nav-item-link" href="<?php echo esc_url(bloginfo('url')); ?>/about">当社について</a></li>
                    <li class="drawer-nav-item"><a class="drawer-nav-item-link" href="<?php echo esc_url(bloginfo('url')); ?>/service">サービス</a></li>
                    <li class="drawer-nav-item"><a class="drawer-nav-item-link" href="<?php echo esc_url(bloginfo('url')); ?>/case">導入事例</a></li>
                    <li class="drawer-nav-item"><a class="drawer-nav-item-link" href="<?php echo esc_url(bloginfo('url')); ?>/news">お知らせ</a></li>
                    <li class="drawer-nav-item btn btn-drawer-filled"><a class="drawer-nav-item-link" href="<?php echo esc_url(bloginfo('url')); ?>/download">資料ダウンロード</a></li>
                    <li class="drawer-nav-item btn btn-drawer-float"><a class="drawer-nav-item-link" href="<?php echo esc_url(bloginfo('url')); ?>/contact">お問い合わせ</a>
                    </li>
                </ul>
                <!-- ドロワー 実装-->
            </nav>
        </div><!-- /.inner -->
    </header>
    <!-- /#header -->

    <!-- header-mainvisual -->
     <?php get_template_part('template-parts/header-mainvisual'); ?>
    <!-- end header-mainvisual -->

    <!-- breadcrumb -->
    <?php get_template_part('template-parts/breadcrumb'); ?>
    <!-- /.breadcrumb -->