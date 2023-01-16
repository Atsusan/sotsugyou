<?php get_header(); ?>


  <div class="download-mainvisual mv">
    <div class="download-background-img mv-background-img"></div>
    <div class="download-title-area mv-title-area">
      <h2 class="download-title section-title mv-title"><span>download</span></h2>
      <p class="download-sub section-sub mv-subtitle"><span>資料ダウンロード</span></p>
    </div>
  </div>
  <!-- /.download-mainvisual -->

  <div class="breadclumb">
    <div class="inner">
      <ul class="breadclumb-tag-list">
        <li class="breadclumb-item"><a href="#" class="breadclumb-item-link">ホーム</a></li>
        <li class="breadclumb-item"><a href="#" class="breadclumb-item-link">資料ダウンロード</a></li>
      </ul>
    </div>
  </div>
  <!-- /.breadclumb -->

  <!-- main -->

  <main>
    <section id="download" class="download section">
      <div class="inner">
        <div class="download-flex">
          <div class="download-item">
            <h2 class="download-item-title">世界で活躍できるグローバルな人材を育てる３つの研修プログラムをご用意しております。</h2><!-- /.download-item-title -->
            <div class="download-item-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/pamphlet.jpg" alt="pamphlet.jpg">
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
              <form action="" method="post">
                <dl class="download-form-list">
                  <div class="download-form-item">
                    <dt class="download-form-item-text">会社名</dt>
                    <dd class="download-form-input-box">
                      <input class="js-require" type="text" name="company" placeholder="例）○○株式会社">
                    </dd>
                  </div>
                  <div class="download-form-item">
                    <dt class="download-form-item-text">部署</dt>
                    <dd class="download-form-input-box">
                      <input class="js-require" type="text" name="business" placeholder="例）人事部">
                    </dd>
                  </div>
                  <div class="download-form-item">
                    <dt class="download-form-item-text">お名前<span class="download-form-item-text-span">必須</span></dt>
                    <dd class="download-form-input-box">
                      <input class="js-require" type="text" name="name" placeholder="例）鈴木&nbsp;一郎">
                    </dd>
                  </div>
                  <div class="download-form-item">
                    <dt class="download-form-item-text">お名前（フリガナ）<span class="download-form-item-text-span">必須</span></dt>
                    <dd class="download-form-input-box">
                      <input class="js-require" type="text" name="kana" placeholder="例）スズキ&nbsp;イチロウ">
                    </dd>
                  </div>
                  <div class="download-form-item">
                    <dt class="download-form-item-text">メールアドレス<span class="download-form-item-text-span">必須</span></dt>
                    <dd class="download-form-input-box">
                      <input type="email" name="email" id="form-email" placeholder="例）info@example.com">
                      <span class="download-form-focusLine"></span>
                    </dd>
                  </div>
                </dl>
                <div class="download-form-privacy">
                  <label for="form-privacy" class="download-form-privacy-label">
                    <input type="checkbox" name="privacy" id="form-privacy">
                    <span>
                      <a href="#" class="download-form-privacy-link">
                          個人情報保護方針
                      </a>
                      に同意します。
                    </span>
                  </label>
                </div>
                <button id="download-form-submit" class="download-form-button btn btn-float">資料をダウンロードする</button>
              </form>
            </div>
          </div><!-- /.download-form -->
        </div>
      </div><!-- /.inner -->
    </section><!-- /#download.download section -->
  </main> 
<?php get_footer(); ?>