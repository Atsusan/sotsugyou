<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<!-- OGP宣言 -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no"><!-- 電話のリンクをしない設定 -->
    <title>Global Standard -news- </title>
    <meta name="description" content="You Can Cheange The World - 世界で活躍できるグローバルな人材を育てる"><!-- 概要欄 -->

    <meta property="og:title" content="Global Standard -news- "><!-- OGPタイトル -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://example.com/"><!-- OGPサイトURL -->
    <meta property="og:image" content="https://example.com/img/ogp.png"><!-- OGPサムネイル -->
    <meta property="og:site_name" content="Global Standard"><!-- OGPサイトネーム -->
    <meta property="og:description" content=""><!-- OGPサイトの概要欄 -->
    <meta name="twitter:card" content="summary_large_image"><!-- OGP Twitterカード -->
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css?ver=5.8.2">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,700&family=Noto+Sans+JP:wght@400;500;700&display=swap"
        rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,700&family=Noto+Sans+JP:wght@400;500;700&display=swap');
    </style>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- ファビコンの設定 -->
    <!-- <link rel="icon" href=""> -->
</head>

<body>

    <header id="header">
        <div class="inner">
             <h1 class="header-logo">
                <a href="#">
                    <img src="/img/logo/company-logo.svg" alt="Global Standard">
                </a>
            </h1><!-- /.header-logo -->

            <nav class="header-nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="#" class="nav-item-link">トップ</a></li>
                    <li class="nav-item"><a href="#" class="nav-item-link">当社について</a></li>
                    <li class="nav-item"><a href="#" class="nav-item-link">サービス</a></li>
                    <li class="nav-item"><a href="#" class="nav-item-link">導入事例</a></li>
                    <li class="nav-item"><a href="#" class="nav-item-link">お知らせ</a></li>
                    <li class="nav-item-download btn btn-float"><a href="#" class="nav-item-link">資料ダウンロード</a></li>
                    <li class="nav-item-content btn btn-filled"><a href="#" class="nav-item-link">お問い合わせ</a></li>
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
                    <li class="drawer-nav-item"><a class="drawer-nav-item-link" href="#">トップ</a></li>
                    <li class="drawer-nav-item"><a class="drawer-nav-item-link" href="#">当社について</a></li>
                    <li class="drawer-nav-item"><a class="drawer-nav-item-link" href="#">サービス</a></li>
                    <li class="drawer-nav-item"><a class="drawer-nav-item-link" href="#">導入事例</a></li>
                    <li class="drawer-nav-item"><a class="drawer-nav-item-link" href="#">お知らせ</a></li>
                    <li class="drawer-nav-item btn btn-drawer-filled"><a class="drawer-nav-item-link"
                            href="#">資料ダウンロード</a>
                    </li>
                    <li class="drawer-nav-item btn btn-drawer-float"><a class="drawer-nav-item-link" href="#">お問い合わせ</a>
                    </li>
                </ul>
                <!-- ドロワー 実装-->
            </nav>
        </div><!-- /.inner -->
    </header>
    <!-- /#header -->
    <!-- news-mainvisual -->
    <div class="news-mainvisual mv">
        <div class="news-background-img mv-background-img"></div>
        <div class="news-title-area mv-title-area">
            <h2 class="news-homeTitle section-title mv-title"><span>news</span></h2>
            <p class="news-homeSub section-sub mv-subtitle"><span>ニュース</span></p>
        </div>
    </div>
    <!-- news-mainvisual -->

    <!-- breadclumb -->
    <div class="breadclumb">
        <div class="inner">
            <ul class="breadclumb-tag-list">
                <li class="breadclumb-item"><a href="#" class="breadclumb-item-link">ホーム</a></li>
                <li class="breadclumb-item"><a href="#" class="breadclumb-item-link">ニュース</a></li>
            </ul>
        </div>
    </div>
    <!-- /.breadclumb -->

    <div class="bg-wrapper inner">
        <!-- main -->
        <main class="main">
            <section id="news" class="news-home section">
                <h2 class="news-title">カテゴリ</h2>
                <ul class="news-homeList">
                    <li class="news-homeItem">
                        <a href="#" class="news-homeItem-link">
                            <div class="news-homeItem-img">
                                <img src="/img/icatch-news.jpg" alt="icatch-news.jpg">
                            </div><!-- /.news-homeItem-img -->
                            <div class="news-homeItem-main">
                                <div class="news-homeItem-head">
                                    <p class="news-homeItem-meta-category">カテゴリ</p>
                                    <span class="news-homeItem-meta-new">new</span>
                                    <time class="news-homeItem-meta-time" datetime="2021-01-01">2021.01.01</time>
                                </div><!-- /.news-homeItem-head -->
                                <div class="news-homeItem-body">
                                    <h3 class="news-homeItem-title">お盆期間中の営業について</h3><!-- /.news-homeItem-title -->
                                </div>
                                <!-- /.news-homeItem-body -->
                            </div><!-- /.news-homeItem-main -->
                        </a><!-- /.news-homeItem-link -->
                    </li><!-- /.news-homeItem -->
                    <li class="news-homeItem">
                        <a href="#" class="news-homeItem-link">
                            <div class="news-homeItem-img">
                                <img src="/img/icatch-news.jpg" alt="icatch-news.jpg">
                            </div><!-- /.news-homeItem-img -->
                            <div class="news-homeItem-main">
                                <div class="news-homeItem-head">
                                    <p class="news-homeItem-meta-category">カテゴリ</p>
                                    <span class="news-homeItem-meta-new">new</span>
                                    <time class="news-homeItem-meta-time" datetime="2021-01-01">2021.01.01</time>
                                </div><!-- /.news-homeItem-head -->
                                <div class="news-homeItem-body">
                                    <h3 class="news-homeItem-title">新型コロナウイルス対策ご協力のお願い</h3><!-- /.news-homeItem-title -->
                                </div>
                                <!-- /.news-homeItem-body -->
                            </div><!-- /.news-homeItem-main -->
                        </a><!-- /.news-homeItem-link -->
                    </li><!-- /.news-homeItem -->
                    <li class="news-homeItem">
                        <a href="#" class="news-homeItem-link">
                            <div class="news-homeItem-img">
                                <img src="/img/icatch-news.jpg" alt="icatch-news.jpg">
                            </div><!-- /.news-homeItem-img -->
                            <div class="news-homeItem-main">
                                <div class="news-homeItem-head">
                                    <p class="news-homeItem-meta-category">カテゴリ</p>
                                    <time class="news-homeItem-meta-time" datetime="2021-01-01">2021.01.01</time>
                                </div><!-- /.news-homeItem-head -->
                                <div class="news-homeItem-body">
                                    <h3 class="news-homeItem-title">オンライン英会話スクール「グッドイングリッシュオンライン株式会社」との業務提携について</h3><!-- /.news-homeItem-title -->
                                </div>
                                <!-- /.news-homeItem-body -->
                            </div><!-- /.news-homeItem-main -->
                        </a><!-- /.news-homeItem-link -->
                    </li><!-- /.news-homeItem -->
                    <li class="news-homeItem">
                        <a href="#" class="news-homeItem-link">
                            <div class="news-homeItem-img">
                                <img src="/img/icatch-news.jpg" alt="icatch-news.jpg">
                            </div><!-- /.news-homeItem-img -->
                            <div class="news-homeItem-main">
                                <div class="news-homeItem-head">
                                    <p class="news-homeItem-meta-category">カテゴリ</p>
                                    <time class="news-homeItem-meta-time" datetime="2021-01-01">2021.01.01</time>
                                </div><!-- /.news-homeItem-head -->
                                <div class="news-homeItem-body">
                                    <h3 class="news-homeItem-title">○月のオンライン講座追加日程と、短期集中強化プランの申込み受付開始のお知らせ</h3><!-- /.news-homeItem-title -->
                                </div>
                                <!-- /.news-homeItem-body -->
                            </div><!-- /.news-homeItem-main -->
                        </a><!-- /.news-homeItem-link -->
                    </li><!-- /.news-homeItem -->
                    <li class="news-homeItem">
                        <a href="#" class="news-homeItem-link">
                            <div class="news-homeItem-img">
                                <img src="/img/icatch-news.jpg" alt="icatch-news.jpg">
                            </div><!-- /.news-homeItem-img -->
                            <div class="news-homeItem-main">
                                <div class="news-homeItem-head">
                                    <p class="news-homeItem-meta-category">カテゴリ</p>
                                    <time class="news-homeItem-meta-time" datetime="2021-01-01">2021.01.01</time>
                                </div><!-- /.news-homeItem-head -->
                                <div class="news-homeItem-body">
                                    <h3 class="news-homeItem-title">オンライン英会話スクール「グッドイングリッシュオンライン株式会社」との業務提携について</h3><!-- /.news-homeItem-title -->
                                </div>
                                <!-- /.news-homeItem-body -->
                            </div><!-- /.news-homeItem-main -->
                        </a><!-- /.news-homeItem-link -->
                    </li><!-- /.news-homeItem -->
                    <li class="news-homeItem">
                        <a href="#" class="news-homeItem-link">
                            <div class="news-homeItem-img">
                                <img src="/img/icatch-news.jpg" alt="icatch-news.jpg">
                            </div><!-- /.news-homeItem-img -->
                            <div class="news-homeItem-main">
                                <div class="news-homeItem-head">
                                    <p class="news-homeItem-meta-category">カテゴリ</p>
                                    <time class="news-homeItem-meta-time" datetime="2021-01-01">2021.01.01</time>
                                </div><!-- /.news-homeItem-head -->
                                <div class="news-homeItem-body">
                                    <h3 class="news-homeItem-title">○月のオンライン講座追加日程と、短期集中強化プランの申込み受付開始のお知らせ</h3><!-- /.news-homeItem-title -->
                                </div>
                                <!-- /.news-homeItem-body -->
                            </div><!-- /.news-homeItem-main -->
                        </a><!-- /.news-homeItem-link -->
                    </li><!-- /.news-homeItem -->
                    <li class="news-homeItem">
                        <a href="#" class="news-homeItem-link">
                            <div class="news-homeItem-img">
                                <img src="/img/icatch-news.jpg" alt="icatch-news.jpg">
                            </div><!-- /.news-homeItem-img -->
                            <div class="news-homeItem-main">
                                <div class="news-homeItem-head">
                                    <p class="news-homeItem-meta-category">カテゴリ</p>
                                    <time class="news-homeItem-meta-time" datetime="2021-01-01">2021.01.01</time>
                                </div><!-- /.news-homeItem-head -->
                                <div class="news-homeItem-body">
                                    <h3 class="news-homeItem-title">オンライン英会話スクール「グッドイングリッシュオンライン株式会社」との業務提携について</h3><!-- /.news-homeItem-title -->
                                </div>
                                <!-- /.news-homeItem-body -->
                            </div><!-- /.news-homeItem-main -->
                        </a><!-- /.news-homeItem-link -->
                    </li><!-- /.news-homeItem -->
                    <li class="news-homeItem">
                        <a href="#" class="news-homeItem-link">
                            <div class="news-homeItem-img">
                                <img src="/img/icatch-news.jpg" alt="icatch-news.jpg">
                            </div><!-- /.news-homeItem-img -->
                            <div class="news-homeItem-main">
                                <div class="news-homeItem-head">
                                    <p class="news-homeItem-meta-category">カテゴリ</p>
                                    <time class="news-homeItem-meta-time" datetime="2021-01-01">2021.01.01</time>
                                </div><!-- /.news-homeItem-head -->
                                <div class="news-homeItem-body">
                                    <h3 class="news-homeItem-title">○月のオンライン講座追加日程と、短期集中強化プランの申込み受付開始のお知らせ</h3><!-- /.news-homeItem-title -->
                                </div>
                                <!-- /.news-homeItem-body -->
                            </div><!-- /.news-homeItem-main -->
                        </a><!-- /.news-homeItem-link -->
                    </li><!-- /.news-homeItem -->
                    <li class="news-homeItem">
                        <a href="#" class="news-homeItem-link">
                            <div class="news-homeItem-img">
                                <img src="/img/icatch-news.jpg" alt="icatch-news.jpg">
                            </div><!-- /.news-homeItem-img -->
                            <div class="news-homeItem-main">
                                <div class="news-homeItem-head">
                                    <p class="news-homeItem-meta-category">カテゴリ</p>
                                    <time class="news-homeItem-meta-time" datetime="2021-01-01">2021.01.01</time>
                                </div><!-- /.news-homeItem-head -->
                                <div class="news-homeItem-body">
                                    <h3 class="news-homeItem-title">オンライン英会話スクール「グッドイングリッシュオンライン株式会社」との業務提携について</h3><!-- /.news-homeItem-title -->
                                </div>
                                <!-- /.news-homeItem-body -->
                            </div><!-- /.news-homeItem-main -->
                        </a><!-- /.news-homeItem-link -->
                    </li><!-- /.news-homeItem -->
                    <li class="news-homeItem">
                        <a href="#" class="news-homeItem-link">
                            <div class="news-homeItem-img">
                                <img src="/img/icatch-news.jpg" alt="icatch-news.jpg">
                            </div><!-- /.news-homeItem-img -->
                            <div class="news-homeItem-main">
                                <div class="news-homeItem-head">
                                    <p class="news-homeItem-meta-category">カテゴリ</p>
                                    <time class="news-homeItem-meta-time" datetime="2021-01-01">2021.01.01</time>
                                </div><!-- /.news-homeItem-head -->
                                <div class="news-homeItem-body">
                                    <h3 class="news-homeItem-title">○月のオンライン講座追加日程と、短期集中強化プランの申込み受付開始のお知らせ</h3><!-- /.news-homeItem-title -->
                                </div>
                                <!-- /.news-homeItem-body -->
                            </div><!-- /.news-homeItem-main -->
                        </a><!-- /.news-homeItem-link -->
                    </li><!-- /.news-homeItem -->
                </ul>
                <!-- /.news-list -->
                <div class="pagenation news-pagenation">
                    <a href="#" class="page-number pagenation-previous"><div></div></a>
                    <a href="#" class="page-number number">1</a>
                    <span class="page-number number current">2</span>
                    <a href="#" class="page-number number">3</a>
                    <a href="#" class="page-number number">4</a>
                    <a href="#" class="page-number number">5</a>
                    <a href="#" class="page-number pagenation-next"><div></div></a>
                </div>
                <!-- /.pagenation news-pagenation -->
            </section>
            <!-- /#news.news section -->
        </main>
        <!-- / main -->

        <!-- aside -->
        <aside class="aside">
            <h2 class="news-aside-title news-aside-title-new">新着記事</h2>
            <ul class="news-aside-list">
                <li class="news-aside-item">
                    <a href="#" class="news-aside-item-link">
                        <div class="news-aside-item-img">
                            <img src="/img/icatch-news.jpg" alt="icatch-news.jpg">
                        </div><!-- /.news-aside-item-img -->
                        <div class="news-aside-item-main">
                            <div class="news-aside-item-head">
                                <p class="news-aside-item-meta-category">カテゴリ</p>
                                <time class="news-aside-item-meta-time" datetime="2021-01-01">2021.01.01</time>
                            </div><!-- /.news-aside-item-head -->
                            <div class="news-aside-item-body">
                                <h3 class="news-aside-item-title">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じ…</h3><!-- /.news-aside-item-title -->
                            </div><!-- /.news-aside-item-body -->
                        </div><!-- /.news-aside-item-main -->
                    </a><!-- /.news-aside-item-link -->
                </li><!-- /.news-aside-item -->
                <li class="news-aside-item">
                    <a href="#" class="news-aside-item-link">
                        <div class="news-aside-item-img">
                            <img src="/img/icatch-news.jpg" alt="icatch-news.jpg">
                        </div><!-- /.news-aside-item-img -->
                        <div class="news-aside-item-main">
                            <div class="news-aside-item-head">
                                <p class="news-aside-item-meta-category">カテゴリ</p>
                                <time class="news-aside-item-meta-time" datetime="2021-01-01">2021.01.01</time>
                            </div><!-- /.news-aside-item-head -->
                            <div class="news-aside-item-body">
                                <h3 class="news-aside-item-title">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じ…</h3><!-- /.news-aside-item-title -->
                            </div><!-- /.news-aside-item-body -->
                        </div><!-- /.news-aside-item-main -->
                    </a><!-- /.news-aside-item-link -->
                </li><!-- /.news-aside-item -->
                <li class="news-aside-item">
                    <a href="#" class="news-aside-item-link">
                        <div class="news-aside-item-img">
                            <img src="/img/icatch-news.jpg" alt="icatch-news.jpg">
                        </div><!-- /.news-aside-item-img -->
                        <div class="news-aside-item-main">
                            <div class="news-aside-item-head">
                                <p class="news-aside-item-meta-category">カテゴリ</p>
                                <time class="news-aside-item-meta-time" datetime="2021-01-01">2021.01.01</time>
                            </div><!-- /.news-aside-item-head -->
                            <div class="news-aside-item-body">
                                <h3 class="news-aside-item-title">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じ…</h3><!-- /.news-aside-item-title -->
                            </div><!-- /.news-aside-item-body -->
                        </div><!-- /.news-aside-item-main -->
                    </a><!-- /.news-aside-item-link -->
                </li><!-- /.news-aside-item -->
                <li class="news-aside-item">
                    <a href="#" class="news-aside-item-link">
                        <div class="news-aside-item-img">
                            <img src="/img/icatch-news.jpg" alt="icatch-news.jpg">
                        </div><!-- /.news-aside-item-img -->
                        <div class="news-aside-item-main">
                            <div class="news-aside-item-head">
                                <p class="news-aside-item-meta-category">カテゴリ</p>
                                <time class="news-aside-item-meta-time" datetime="2021-01-01">2021.01.01</time>
                            </div><!-- /.news-aside-item-head -->
                            <div class="news-aside-item-body">
                                <h3 class="news-aside-item-title">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じ…</h3><!-- /.news-aside-item-title -->
                            </div><!-- /.news-aside-item-body -->
                        </div><!-- /.news-aside-item-main -->
                    </a><!-- /.news-aside-item-link -->
                </li><!-- /.news-aside-item -->
                <li class="news-aside-item">
                    <a href="#" class="news-aside-item-link">
                        <div class="news-aside-item-img">
                            <img src="/img/icatch-news.jpg" alt="icatch-news.jpg">
                        </div><!-- /.news-aside-item-img -->
                        <div class="news-aside-item-main">
                            <div class="news-aside-item-head">
                                <p class="news-aside-item-meta-category">カテゴリ</p>
                                <time class="news-aside-item-meta-time" datetime="2021-01-01">2021.01.01</time>
                            </div><!-- /.news-aside-item-head -->
                            <div class="news-aside-item-body">
                                <h3 class="news-aside-item-title">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じ…</h3><!-- /.news-aside-item-title -->
                            </div><!-- /.news-aside-item-body -->
                        </div><!-- /.news-aside-item-main -->
                    </a><!-- /.news-aside-item-link -->
                </li><!-- /.news-aside-item -->
            </ul>

            <h2 class="news-aside-title news-aside-title-category">カテゴリ</h2>
            <ul class="news-aside-category-list">
                <li class="news-aside-category-item">
                    <a href="#" class="news-aside-category-item-link">
                        <span class="news-aside-category-item-span"></span>
                        <h3 class="news-aside-category-item-title">テキストテキスト</h3>
                    </a>
                </li><!-- /.news-aside-category-item -->
                <li class="news-aside-category-item">
                    <a href="#" class="news-aside-category-item-link">
                        <span class="news-aside-category-item-span"></span>
                        <h3 class="news-aside-category-item-title">テキストテキスト</h3>
                    </a>
                </li><!-- /.news-aside-category-item -->
                <li class="news-aside-category-item">
                    <a href="#" class="news-aside-category-item-link">
                        <span class="news-aside-category-item-span"></span>
                        <h3 class="news-aside-category-item-title">テキストテキスト</h3>
                    </a>
                </li><!-- /.news-aside-category-item -->
                <li class="news-aside-category-item">
                    <a href="#" class="news-aside-category-item-link">
                        <span class="news-aside-category-item-span"></span>
                        <h3 class="news-aside-category-item-title">テキストテキスト</h3>
                    </a>
                </li><!-- /.news-aside-category-item -->
                <li class="news-aside-category-item">
                    <a href="#" class="news-aside-category-item-link">
                        <span class="news-aside-category-item-span"></span>
                        <h3 class="news-aside-category-item-title">テキストテキスト</h3>
                    </a>
                </li><!-- /.news-aside-category-item -->
                <li class="news-aside-category-item">
                    <a href="#" class="news-aside-category-item-link">
                        <span class="news-aside-category-item-span"></span>
                        <h3 class="news-aside-category-item-title">テキストテキスト</h3>
                    </a>
                </li><!-- /.news-aside-category-item -->
            </ul>
            <!-- /.news-aside-category-list -->
        </aside>
        <!-- / aside -->
    </div>
    <!-- /.bg-wrapper inner -->


    <!-- footer-contents -->
    <div id="footer-contents">
        <div class="inner flex">
            <div class="footer-content footer-download">
                <div class="footer-head">
                    <h2 class="footer-title">download</h2>
                    <span class="footer-sub">資料ダウンロード</span>
                </div>
                <!-- /.footer-head -->
                <a class="btn btn-arrow-yellow">View more</a>
            </div>
            <!-- /.footer-content -->
            <div class="footer-content footer-faq">
                <div class="footer-head">
                    <h2 class="footer-title">contact</h2>
                    <span class="footer-sub">お問い合わせ</span>
                </div>
                <!-- /.footer-head -->
                <a class="btn btn-arrow-yellow">View more</a>
            </div>
            <!-- /.footer-content -->
        </div>
        <!-- /.inner -->
    </div>
    <!-- /#footer-contents -->


    <!-- footer -->
    <footer id="footer">
        <div class="inner">
            <div class="footer-container">
                <div class="footer-logo"><a href="#">Global Standard</a></div>
                <address class="footer-address">
                    〒550-1000 大阪市西区土佐堀9-5-5<br>
                    TEL 06-123-4567<br>
                    FAX 06-123-4568
                </address>
            </div>
            <small class="footer-copyright">&copy;2021 Global Standard. All Rights Reserved.</small>
            <!-- /.footer-copyright -->

        </div><!-- /inner -->
    </footer><!-- /footer -->

    <div class="floating">
        <a href="#"><i class="fas fa-chevron-up"></i></a>
    </div>


    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Main JS -->
    <script src="./js/script.js"></script>
</body>

</html>