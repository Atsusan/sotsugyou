<?php
/*
Template Name: お問い合わせ
*/
get_header(); ?>


    <div class="breadclumb">
        <div class="inner">
            <ul class="breadclumb-tag-list">
                <li class="breadclumb-item"><a href="#" class="breadclumb-item-link">ホーム</a></li>
                <li class="breadclumb-item"><a href="#" class="breadclumb-item-link">お問い合わせ</a></li>
            </ul>
        </div>
    </div>
    <!-- /.breadclumb -->

    <main>
        <section id="contact" class="contact section">
            <div class="inner">
                <div class="contact-form">
                    <p class="contact-intro">
                        研修のお申し込み、その他お問い合わせは、下記のフォームからお問い合わせ内容をご記入ください。
                        <br>
                        2日以内に担当者からメールにてご連絡いたします。
                    </p>
                    <h2 class="contact-form-title">お問い合わせ</h2><!-- /.contact-form-title -->
                    <div class="contact-form-content">
                        <form action="" method="post">
                            <dl class="contact-form-list">
                                <div class="contact-form-item">
                                    <dt class="contact-form-item-text">会社名</dt>
                                    <dd class="contact-form-input-box">
                                        <input class="js-require" type="text" name="company" placeholder="例）○○株式会社">
                                    </dd>
                                </div>
                                <div class="contact-form-item">
                                    <dt class="contact-form-item-text">お名前<span
                                            class="contact-form-item-text-span">必須</span></dt>
                                    <dd class="contact-form-input-box">
                                        <input class="js-require" type="text" name="name" placeholder="例）鈴木&nbsp;一郎">
                                    </dd>
                                </div>
                                <div class="contact-form-item">
                                    <dt class="contact-form-item-text">お名前（フリガナ）<span
                                            class="contact-form-item-text-span">必須</span></dt>
                                    <dd class="contact-form-input-box">
                                        <input class="js-require" type="text" name="kana" placeholder="例）スズキ&nbsp;イチロウ">
                                    </dd>
                                </div>
                                <div class="contact-form-item">
                                    <dt class="contact-form-item-text">電話番号<span
                                            class="contact-form-item-text-span">必須</span></dt>
                                    <dd class="contact-form-input-box">
                                        <input class="js-require" type="tel" name="tel" placeholder="例）0312345678">
                                    </dd>
                                </div>
                                <div class="contact-form-item">
                                    <dt class="contact-form-item-text">メールアドレス<span
                                            class="contact-form-item-text-span">必須</span></dt>
                                    <dd class="contact-form-input-box">
                                        <input type="email" name="email" id="form-email"
                                            placeholder="例）info@example.com">
                                        <span class="contact-form-focusLine"></span>
                                    </dd>
                                </div>
                                <div class="contact-form-item">
                                    <dt class="contact-form-item-text">ご用件<span
                                            class="contact-form-item-text-span">必須</span></dt>
                                    <dd class="contact-form-select">
                                        <select name="form-select" id="form-select" onchange="Color(this)">
                                            <option value="-" selected>ご選択ください</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                        </select>
                                    </dd>
                                </div>
                                <div class="contact-form-item">
                                    <dt class="contact-form-item-text">ご用件の詳細<span
                                            class="contact-form-item-text-span">必須</span></dt>
                                    <dd>
                                        <textarea name="message" placeholder="ご自由にご記入ください。"></textarea>
                                    </dd>
                                </div>
                            </dl>
                            <div class="contact-form-privacy">
                                <label for="form-privacy" class="contact-form-privacy-label">
                                    <input type="checkbox" name="privacy" id="form-privacy">
                                    <span>
                                        <a href="#" class="contact-form-privacy-link">
                                            個人情報保護方針
                                        </a>
                                        に同意します。
                                    </span>
                                </label>
                            </div>
                            <button id="contact-form-submit" class="contact-form-button btn btn-float">送&emsp;信</button>
                        </form>
                    </div>
                </div><!-- /.contact-form -->
            </div><!-- /.inner -->
        </section><!-- /#contact.contact section -->
    </main>


<?php get_footer(); ?>