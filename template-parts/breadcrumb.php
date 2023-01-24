<?php if(is_singular('cases')) :?>
    <div class="single-cases-bcn">
        <a class="single-cases-link" href="<?php bloginfo('url') ?>">トップへ戻る</a>
    </div>
    <?php else :?>
    <!-- パンくずリスト -->
    <?php if (function_exists('bcn_display')) : ?>
        <?php if (is_front_page()) : ?>
        <?php else : ?>
            <div class="breadcrumb">
                <div class="inner">
                    <ul class="breadcrumb-tag-list">
                        <?php bcn_display(); ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>