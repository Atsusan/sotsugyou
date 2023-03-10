<?php
/*
Template Name: お問い合わせ完了
*/
get_header(); ?>

    <!-- main -->

    <main>
        <section id="contact-thanks" class="contact-thanks section">
            <div class="inner">
                <div class="contact-thanks-form">
                    <p class="contact-thanks-intro wow fadeInUp">
                        お問い合わせありがとうございました。
                        <br>
                        2日以内に担当者からメールにてご連絡いたしますので、しばらくお待ちいただけますと幸いです。
                        <br>
                        <div class="contact-thanks-intro-link-box wow fadeInUp">
                            <span class="contact-thanks-intro-span">→</span>
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="contact-thanks-intro-link">トップへ戻る</a>
                        </div>
                    </p>
                </div><!-- /.contact-form -->
            </div><!-- /.inner -->
        </section><!-- /#contact.contact section -->
    </main>
<?php get_footer(); ?>