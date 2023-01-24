<?php
/*
Template Name: 研修事例
*/
get_header(); ?>

<!-- main -->
<main>
    <section id="cases" class="cases section">
        <div class="inner">

                    <nav class="cases-nav">
                        <ul class="cases-nav-list">
                            <li class="cases-nav-item">
                                <a href="#training" class="cases-item-link">
                                    ビジネス英語研修
                                </a>
                                <!-- /.cases-item-link -->
                            </li>
                            <!-- /.cases-item -->
                            <li class="cases-nav-item">
                                <a href="#communication" class="cases-item-link">
                                    異文化コミュニケーション
                                </a>
                                <!-- /.cases-item-link -->
                            </li>
                            <!-- /.cases-item -->
                            <li class="cases-nav-item">
                                <a href="#program" class="cases-item-link">
                                    ビジネス留学プログラム
                                </a>
                                <!-- /.cases-item-link -->
                            </li>
                            <!-- /.cases-item -->
                        </ul>
                        <!-- /.cases-list -->
                    </nav><!-- /.cases-nav -->
                    <section class="cases-section">
                        <div id="training" class="cases-titles">
                            <h2 class="cases-title">ビジネス英語研修</h2>
                            <span class="cases-sub">Business&nbsp;English&nbsp;Training</span>
                        </div><!-- /.cases-titles -->

                        <article class="cases-items">

                            <?php get_template_part('template-parts/case-training'); ?>


                        </article><!-- /.cases-items -->
                        <div class="cases-btn">
                            <a href="<?php bloginfo('url'); ?>/service#training" class="btn btn-arrow cases-btn-padding">ビジネス英語研修の詳細</a>
                            <!-- /.btn btn-arrow cases-btn-padding -->
                        </div><!-- /.cases-btn -->
                    </section><!-- /.cases-section -->

                    <section class="cases-section">
                        <div id="communication" class="cases-titles">
                            <h2 class="cases-title">異文化コミュニケーション</h2>
                            <span class="cases-sub">Cross-cultural&nbsp;communication</span>
                        </div><!-- /.cases-titles -->

                        <article class="cases-items">

                        <?php get_template_part('template-parts/case-communication'); ?>

                        </article><!-- /.cases-items -->
                        <div class="cases-btn">
                            <a href="<?php bloginfo('url'); ?>/service#communication" class="btn btn-arrow cases-btn-padding">異文化コミュニケーションの詳細</a>
                            <!-- /.btn btn-arrow cases-btn-padding -->
                        </div><!-- /.cases-btn -->
                    </section><!-- /.cases-section -->


                    <section class="cases-section">
                        <div id="program" class="cases-titles">
                            <h2 class="cases-title">ビジネス留学プログラム</h2>
                            <span class="cases-sub">Business&nbsp;study&nbsp;abroad&nbsp;program</span>
                        </div><!-- /.cases-titles -->

                        <article class="cases-items">

                        <?php get_template_part('template-parts/case-program'); ?>

                        </article><!-- /.cases-items -->
                        <div class="cases-btn">
                            <a href="<?php bloginfo('url'); ?>/service#program" class="btn btn-arrow cases-btn-padding">ビジネス留学プログラムの詳細</a>
                            <!-- /.btn btn-arrow cases-btn-padding -->
                        </div><!-- /.cases-btn -->
                    </section><!-- /.cases-section -->


        </div>
        <!-- /.inner -->
    </section>
    <!-- /#cases.cases section -->

</main>
<!-- / main -->

<?php get_footer(); ?>