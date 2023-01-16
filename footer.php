    <!-- footer-contents -->
    <div id="footer-contents">
        <div class="inner flex">
            <div class="footer-content footer-download">
                <div class="footer-head">
                    <h2 class="footer-title">download</h2>
                    <span class="footer-sub">資料ダウンロード</span>
                </div>
                <!-- /.footer-head -->
                <a class="btn btn-arrow-yellow" href="/page-download.html">View more</a>
            </div>
            <!-- /.footer-content -->
            <div class="footer-content footer-faq">
                <div class="footer-head">
                    <h2 class="footer-title">contact</h2>
                    <span class="footer-sub">お問い合わせ</span>
                </div>
                <!-- /.footer-head -->
                <a class="btn btn-arrow-yellow" href="/page-contact.html">View more</a>
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
                <div class="footer-logo"><a href="<?php esc_url(home_url('/')); ?>"><?php bloginfo('mame'); ?></a></div>
                <address class="footer-address">
                    〒550-1000 大阪市西区土佐堀9-5-5<br>
                    TEL 06-123-4567<br>
                    FAX 06-123-4568
                </address>
            </div>
            <small class="footer-copyright">&copy;2021 <?php bloginfo('name'); ?>. All Rights Reserved.</small>
            <!-- /.footer-copyright -->

        </div><!-- /inner -->
    </footer><!-- /footer -->

    <div class="floating">
        <a href="#"><i class="fas fa-chevron-up"></i></a>
    </div>


    <?php wp_footer(); ?>
</body>

</html>