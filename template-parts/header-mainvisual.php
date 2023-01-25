
    <!-- header-mainvisual -->
    <?php if (is_front_page()) : ?>

<!-- front-page -->
<div id="mainvisual">
    <div class="inner">
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <ul class="swiper-wrapper">
                <!-- Slides -->
                <li class="swiper-slide">
                    <picture class="mainvisual-picture">
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/x2/mv-1.jpg" media="(min-width: 768px)">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sp/hero1.jpg" alt="写真1枚目">
                    </picture>
                </li>
                <li class="swiper-slide">
                    <picture class="mainvisual-picture">
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/x2/mv-2.jpg" media="(min-width: 768px)">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sp/hero2.jpg" alt="写真2枚目">
                    </picture>
                </li>
                <li class="swiper-slide">
                    <picture class="mainvisual-picture">
                        <source srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/x2/mv-3.jpg" media="(min-width: 768px)">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sp/hero3.jpg" alt="写真3枚目">
                    </picture>
                </li>
            </ul>
        </div>
        <div class="mainvisual-text-container wow fadeInUp">
            <p class="mainvisual-title"><span>YOU&nbsp;CAN&nbsp;<br class="is-xsp">CHANGE<br>THE&nbsp;WORLD</span></p>
            <p class="mainvisual-sub"><span>世界で活躍できるグローバルな人材を育てる</span></p>
        </div>
        <!-- /.mainvisual-text-container -->
    </div>
    <!-- /.inner -->
</div>
<!-- / end front-page -->

<?php elseif (is_page('about') || is_page('terms-of-use')) : ?>

<!-- page-about -->
<div class="company-mainvisual mv">
    <div class="company-background-img mv-background-img"></div>
    <?php if(is_page('about')): ?>
    <div class="company-title-area mv-title-area wow fadeInUp">
        <h2 class="company-title section-title mv-title"><span>about-us</span></h2>
        <p class="company-sub section-sub mv-subtitle"><span>当社について</span></p>
    </div>
    <?php endif; ?>
</div>
<!-- / end page-about -->

<?php elseif (is_page('service')) : ?>

<!-- page-service -->
<div class="service-mainvisual mv">
    <div class="service-background-img mv-background-img"></div>
    <div class="service-title-area mv-title-area wow fadeInUp">
        <h2 class="service-title section-title mv-title"><span>service</span></h2>
        <p class="service-sub section-sub mv-subtitle"><span>サービス</span></p>
    </div>
</div>
<!-- / end page-service -->


<?php elseif (is_page('case') || is_page('404-2')) : ?>

<!-- page-case -->

<div class="case-mainvisual mv">
    <div class="case-background-img mv-background-img"></div>
    <?php if(is_page('case')): ?>
    <div class="case-title-area mv-title-area wow fadeInUp">
        <h2 class="case-title section-title mv-title"><span>case&nbsp;study</span></h2>
        <p class="case-sub section-sub mv-subtitle"><span>導入事例</span></p>
    </div>
    <?php endif; ?>
</div>
<!-- / end page-case -->

<?php elseif (is_page('download') || is_page('download-thanks')) : ?>

<!-- page-download or page-download-thanks -->
<div class="download-mainvisual mv">
    <div class="download-background-img mv-background-img"></div>
    <div class="download-title-area mv-title-area wow fadeInUp">
        <h2 class="download-title section-title mv-title"><span>download</span></h2>
        <p class="download-sub section-sub mv-subtitle"><span>資料ダウンロード</span></p>
    </div>
</div>
<!-- end page-download or page-download-thanks -->

<?php elseif (is_page('contact') || is_page('contact-thanks')) : ?>

<!-- page-contact or page-contact-thanks -->
<div class="contact-mainvisual mv">
    <div class="contact-background-img mv-background-img"></div>
    <div class="contact-title-area mv-title-area wow fadeInUp">
        <h2 class="contact-title section-title mv-title"><span>contact</span></h2>
        <p class="contact-sub section-sub mv-subtitle"><span>お問い合わせ</span></p>
    </div>
</div>
<!-- / end page-contact or page-contact-thanks -->

<?php elseif (is_page('news') || is_single()) : ?>
<!-- home.php or single.php -->
<div class="news-mainvisual mv">
    <div class="news-background-img mv-background-img"></div>
    <div class="news-title-area mv-title-area wow fadeInUp">
        <h2 class="news-homeTitle section-title mv-title"><span>news</span></h2>
        <p class="news-homeSub section-sub mv-subtitle"><span>ニュース</span></p>
    </div>
</div>
<!-- end home.phe or single.php -->

<?php endif; ?>