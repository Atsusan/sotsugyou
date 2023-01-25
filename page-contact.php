<?php
/*
Template Name: お問い合わせ
*/
get_header(); ?>

    <!-- main -->

    <main>
        <section id="contact" class="contact section">
            <div class="inner">
                <div class="contact-form">
                    <p class="contact-intro wow fadeInUp">
                        研修のお申し込み、その他お問い合わせは、下記のフォームからお問い合わせ内容をご記入ください。
                        <br>
                        2日以内に担当者からメールにてご連絡いたします。
                    </p>
                    <h2 class="contact-form-title wow fadeInUp">お問い合わせ</h2><!-- /.contact-form-title -->
                    <div class="contact-form-content wow fadeInUp">
                        <?php echo do_shortcode('[contact-form-7 id="262" title="お問い合わせ"]');?>
                    </div>
                </div><!-- /.contact-form -->
            </div><!-- /.inner -->
        </section><!-- /#contact.contact section -->
    </main>


<?php get_footer(); ?>