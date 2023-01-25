<?php
/*
Template Name: 資料ダウンロード
*/
get_header(); ?>

  <!-- main -->

  <main>
    <section id="download" class="download section">
      <div class="inner">
        <div class="download-flex">
          <div class="download-item">
            <h2 class="download-item-title">世界で活躍できるグローバルな人材を育てる３つの研修プログラムをご用意しております。</h2><!-- /.download-item-title -->
            <div class="download-item-img">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/pamphlet.jpg" alt="pamphlet.jpg">
            </div><!-- /.download-item-img -->
            <p class="download-item-text">
              急速にグローバルに活躍できる企業が生き残る時代と移り変わりました。
              <br>
              ビジネス英語や経営学を効率よく学びながら、世界各国から集まるビジネスパーソンと交流し、世界レベルでの人脈を構築する研修をご用意しております。
              <br>
              <br>
              英語に苦手意識のある方でもご安心ください。
              <br>
              ビジネスで必要なコミュニケーションが取れるようになるまで実績豊富な講師陣がサポートいたします。
              <br>
              まずはこちらの資料をごらんください。
            </p><!-- /.download-item-text -->
          </div><!-- /.download-item -->
          <div class="download-form">
            <h2 class="download-form-title">資料ダウンロード</h2><!-- /.download-form-title -->
            <div class="download-form-content">
            <?php echo do_shortcode('[contact-form-7 id="252" title="ダウンロード"]');?>
            </div>
          </div><!-- /.download-form -->
        </div>
      </div><!-- /.inner -->
    </section><!-- /#download.download section -->
  </main>
<?php get_footer(); ?>