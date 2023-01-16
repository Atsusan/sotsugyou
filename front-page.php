<?php get_header(); ?>

    <!-- mainvisual -->
    <div id="mainvisual">
        <div class="inner">
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <ul class="swiper-wrapper">
                    <!-- Slides -->
                    <li class="swiper-slide">
                        <picture class="mainvisual-picture">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/x2/mv-1.jpg" media="(min-width: 768px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sp/hero1.jpg" alt="写真1枚目">
                        </picture>
                    </li>
                    <li class="swiper-slide">
                        <picture class="mainvisual-picture">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/x2/mv-2.jpg" media="(min-width: 768px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sp/hero2.jpg" alt="写真2枚目">
                        </picture>
                    </li>
                    <li class="swiper-slide">
                        <picture class="mainvisual-picture">
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/x2/mv-3.jpg" media="(min-width: 768px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/sp/hero3.jpg" alt="写真3枚目">
                        </picture>
                    </li>
                </ul>
            </div>
            <div class="mainvisual-text-container">
                <p class="mainvisual-title"><span>YOU&nbsp;CAN&nbsp;<br class="is-xsp">CHANGE<br>THE&nbsp;WORLD</span></p>
                <p class="mainvisual-sub"><span>世界で活躍できるグローバルな人材を育てる</span></p>
            </div>
            <!-- /.mainvisual-text-container -->
        </div>
        <!-- /.inner -->
    </div>
    <!-- /#mainvisual -->

    <main>
        <section id="about" class="about section about-background-skew section-background-skew">
            <div class="about-background-area">
                <div class="about-background-right"></div><!-- /.about-background -->
            </div>
            <div class="inner">
                <div class="about-head flex">
                    <div class="about-titles">
                        <h2 class="about-title section-title">about&nbsp;us</h2>
                        <p class="about-sub section-sub">当社について</p>
                    </div><!-- /.about-titles -->
                    <a href="#" class="more-wh is-pc"><span class="more-arrow-wh is-pc"></span>View
                        more</a>
                </div>
                <!-- /.about-head -->
                <div class="about-body flex">
                    <div class="about-text-box">
                        <p class="about-text">
                            急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。
                        </p>
                        <p class="about-text">コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。</p>
                        <p class="about-text">文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。</p>
                    </div>
                    <!-- /.about-text-box -->
                    <!-- /.about-text -->
                    <div class="about-footer">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img-company.jpg" alt="">
                        <div class="about-footer-link">
                            <a href="#" class="more-wh display-hidden-active"><span class="more-arrow-wh display-hidden-active"></span>View more</a>
                        </div>
                        <div class="about-background-right-sp"></div>
                    </div>
                    <!-- /.about-img -->
                </div>
                <!-- /.about-body -->
            </div>
            <!-- /.inner -->
        </section>
        <!-- /#about.about section -->

        <!-- service -->

        <section id="service" class="service section-background-skew service-background-skew">
            <div class="service-head-container inner">
                <div class="service-head flex">
                    <div class="service-section-titles">
                        <h2 class="service-section-title section-title">service</h2>
                        <div class="service-sub section-sub">サービス</div>
                    </div>
                    <!-- /.service-section-titles -->
                    <a href="#" class="more-bl is-pc"><span class="more-arrow-bl is-pc"></span>View more</a>
                </div>
                <!-- /.sercice-head -->
            </div>
            <!-- /.inner -->

            <div class="inner">
                <ul class="service-list">
                    <li class="service-item">
                        <div class="service-item-head">
                            <div class="service-item-numbertag">01</div>
                            <div class="service-item-img service-item-img-01">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/img-service01.jpg" alt="">
                            </div>
                            <h3 class="service-subtitle"><span>ビジネス英語研修</span></h3>
                        </div>
                        <div class="service-item-body">
                            <p class="service-text service-text-01">
                                ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。
                            </p>
                        </div>
                    </li>
                    <li class="service-item">
                        <div class="service-item-head">
                            <div class="service-item-numbertag">02</div>
                            <div class="service-item-img service-item-img-02">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/img-service02.jpg" alt="">
                            </div>
                            <div class="service-subtitle">
                                <h3 class="service-subtitle-1"><span>異文化</span></h3>
                                <h3 class="service-subtitle-2"><span>コミュニケーション研修</span></h3>
                            </div>
                        </div>
                        <div class="service-item-body">
                            <p class="service-text service-text-02">急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。<br>
                                言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。</p>
                        </div>
                    </li>
                    <li class="service-item">
                        <div class="service-item-head">
                            <div class="service-item-numbertag">03</div>
                            <div class="service-item-img service-item-img-03">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/img-service03.jpg" alt="">
                            </div>
                            <div class="service-subtitle">
                                <h3 class="service-subtitle-1"><span>ビジネス留学</span></h3>
                                <h3 class="service-subtitle-2"><span>サポートプログラム</span></h3>
                            </div>
                        </div>
                        <div class="service-item-body">
                            <p class="service-text service-text-03">
                                将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。<br>
                                通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。
                            </p>
                        </div>
                    </li>
                </ul>
                <!-- /.service-list -->
                <div class="service-footer">
                    <a href="#" class="more-bl display-hidden-active"><span class="more-arrow-bl display-hidden-active"></span>View more</a>
                </div>
            </div>
            <!-- /.inner -->
        </section>
        <!-- /#secrvice.service -->

        <!-- casestudy -->

        <section id="casestudy" class="casestudy section">
            <div class="inner">
                <div class="casestudy-head flex">
                    <div class="casestudy-titles">
                        <h2 class="casestudy-title section-title">case study</h2>
                        <div class="casestudy-sub section-sub">導入事例</div>
                    </div>
                    <!-- /.casestudy-titles -->
                    <a href="#" class="more-wh is-pc"><span class="more-arrow-wh is-pc"></span>View more</a>
                </div>
                <!-- /.casestudy-head flex -->
                <ul class="casestudy-list">

                    <li class="casestudy-item">
                        <a href="#" class="casestudy-item-link">
                            <div class="casestudy-item-head">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo/img-case01.jpg" alt="">
                            </div>
                            <!-- /.casestudy-item-head -->
                            <div class="casestudy-item-body">
                                <p class="casestudy-item-title">AAA株式会社&emsp;様</p>
                                <div class="casestudy-link">
                                    <p class="casestudy-item-category">ビジネス英語研修</p>
                                    <span class="casestudy-item-arrow"></span>
                                </div>
                            </div>
                            <!-- /.casestudy-item-body -->
                        </a>
                        <!-- /.casestudy-item-link -->
                    </li>

                    <li class="casestudy-item">
                        <a href="#" class="casestudy-item-link">
                            <div class="casestudy-item-head">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo/img-case02.jpg" alt="">
                            </div>
                            <!-- /.casestudy-item-head -->
                            <div class="casestudy-item-body">
                                <p class="casestudy-item-title">合同会社BBB&emsp;様</p>
                                <div class="casestudy-link">
                                    <p class="casestudy-item-category">異文化コミュニケーション</p>
                                    <span class="casestudy-item-arrow"></span>
                                </div>
                            </div>
                            <!-- /.casestudy-item-body -->
                        </a>
                        <!-- /.casestudy-item-link -->
                    </li>
                    <li class="casestudy-item">
                        <a href="#" class="casestudy-item-link">
                            <div class="casestudy-item-head">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo/img-case03.jpg" alt="">
                            </div>
                            <!-- /.casestudy-item-head -->
                            <div class="casestudy-item-body">
                                <p class="casestudy-item-title">株式会社CCC&emsp;様</p>
                                <div class="casestudy-link">
                                    <p class="casestudy-item-category">ビジネス留学プログラム</p>
                                    <span class="casestudy-item-arrow"></span>
                                </div>
                            </div>
                            <!-- /.casestudy-item-body -->
                        </a>
                        <!-- /.casestudy-item-link -->
                    </li>
                    <li class="casestudy-item">
                        <a href="#" class="casestudy-item-link">
                            <div class="casestudy-item-head">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo/img-case04.jpg" alt="">
                            </div>
                            <!-- /.casestudy-item-head -->
                            <div class="casestudy-item-body">
                                <p class="casestudy-item-title">DDD株式会社&emsp;様</p>
                                <div class="casestudy-link">
                                    <p class="casestudy-item-category">異文化コミュニケーション</p>
                                    <span class="casestudy-item-arrow"></span>
                                </div>
                            </div>
                            <!-- /.casestudy-item-body -->
                        </a>
                        <!-- /.casestudy-item-link -->
                    </li>
                    <li class="casestudy-item">
                        <a href="#" class="casestudy-item-link">
                            <div class="casestudy-item-head">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo/img-case05.jpg" alt="">
                            </div>
                            <!-- /.casestudy-item-head -->
                            <div class="casestudy-item-body">
                                <p class="casestudy-item-title">EEE株式会社&emsp;様</p>
                                <div class="casestudy-link">
                                    <p class="casestudy-item-category">ビジネス留学プログラム</p>
                                    <span class="casestudy-item-arrow"></span>
                                </div>
                            </div>
                            <!-- /.casestudy-item-body -->
                        </a>
                        <!-- /.casestudy-item-link -->
                    </li>
                    <li class="casestudy-item">
                        <a href="#" class="casestudy-item-link">
                            <div class="casestudy-item-head">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/logo/img-case06.jpg" alt="">
                            </div>
                            <!-- /.casestudy-item-head -->
                            <div class="casestudy-item-body">
                                <p class="casestudy-item-title">FFF株式会社&emsp;様</p>
                                <div class="casestudy-link">
                                    <p class="casestudy-item-category">ビジネス英語研修</p>
                                    <span class="casestudy-item-arrow"></span>
                                </div>
                            </div>
                            <!-- /.casestudy-item-body -->
                        </a>
                        <!-- /.casestudy-item-link -->
                    </li>
                </ul>
                <!-- /.casestudy-list -->
                <div class="casestudy-footer">
                    <a href="#" class="more-wh display-hidden-active"><span class="more-arrow-wh display-hidden-active"></span>View more</a>
                </div>
            </div>
            <!-- /.inner -->
        </section>
        <!-- /#casestudy.casestudy section -->

        <!-- news -->

        <section id="news" class="news section section-background-skew news-background-skew">
            <div class="news-inner inner">
                <div class="news-head flex">
                    <div class="news-titles">
                        <h2 class="news-section-title section-title">news</h2>
                        <div class="news-section-sub section-sub">新着情報</div>
                    </div>
                    <a href="#" class="more-bl is-pc"><span class="more-arrow-bl is-pc"></span>View more</a>
                </div>
                <!-- /.news-head flex -->
                <div class="news-body">
                    <ul class="news-list">
                        <li class="news-item">
                            <a href="#" class="news-item-link">
                                <div class="news-item-head">
                                    <p class="news-item-category">営業時間</p>
                                    <p class="news-item-date"><time datetime="2021-07-20"></time>2021.07.20</p>
                                </div>
                                <div class="news-item-body">
                                    <h3 class="news-item-title">お盆期間中の営業について</h3>
                                </div>
                            </a>
                        </li>
                        <li class="news-item">
                            <a href="#" class="news-item-link">
                                <div class="news-item-head">
                                    <p class="news-item-category">その他</p>
                                    <p class="news-item-date"><time datetime="2021-06-01"></time>2021.06.01</p>
                                </div>
                                <div class="news-item-body">
                                    <h3 class="news-item-title">新型コロナウイルス対策ご協力のお願い</h3>
                                </div>
                            </a>
                        </li>
                        <li class="news-item">
                            <a href="#" class="news-item-link">
                                <div class="news-item-head">
                                    <p class="news-item-category">その他</p>
                                    <p class="news-item-date"><time datetime="2021-05-01"></time>2021.05.01</p>
                                </div>
                                <div class="news-item-body">
                                    <h3 class="news-item-title">オンライン英会話スクール「グッドイングリッシュオンライン株式会社」との業務提携について</h3>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.news-list -->
                </div>
                <!-- /.news-body -->
                <div class="news-footer">
                    <a href="#" class="more-bl display-hidden-active"><span class="more-arrow-bl display-hidden-active"></span>View more</a>
                </div>
            </div>
            <!-- /.inner -->
        </section>
        <!-- /#news.news section -->



    </main>
<?php get_footer(); ?>