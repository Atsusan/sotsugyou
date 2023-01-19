<!-- aside -->
<aside class="aside">
    <h2 class="news-aside-title news-aside-title-new">新着記事</h2>
    <ul class="news-aside-list">

        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 5,
            );
            $recent_query = new WP_Query($args);
        ?>

        <?php if($recent_query->have_posts()): ?>
            <?php while($recent_query->have_posts()): ?>
                <?php $recent_query->the_post(); ?>

                <li class="news-aside-item">
                    <a href="<?php the_permalink(); ?>" class="news-aside-item-link">
                        <div class="news-aside-item-img">
                            <?php my_post_thumbanil(); ?>
                        </div><!-- /.news-aside-item-img -->
                        <div class="news-aside-item-main">
                            <div class="news-aside-item-head">
                                <?php my_the_category('news-aside-item-meta-category'); ?>
                                <time class="news-aside-item-meta-time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                            </div><!-- /.news-aside-item-head -->
                            <div class="news-aside-item-body">
                                <h3 class="news-aside-item-title">
                                    <?php my_limit_title(32); ?>
                                </h3><!-- /.news-aside-item-title -->
                            </div><!-- /.news-aside-item-body -->
                        </div><!-- /.news-aside-item-main -->
                    </a><!-- /.news-aside-item-link -->
                </li><!-- /.news-aside-item -->

            <?php endwhile; ?>
        <?php else: ?>
            <p>記事はありません。</p>
        <?php endif; wp_reset_postdata(); ?>

    </ul>

    <h2 class="news-aside-title news-aside-title-category">カテゴリ</h2>
    <ul class="news-aside-category-list">
        <li class="news-aside-category-item">
            <a href="#" class="news-aside-category-item-link">
                <span class="news-aside-category-item-span"></span>
                <h3 class="news-aside-category-item-title">テキストテキスト</h3>
            </a>
        </li><!-- /.news-aside-category-item -->
        <li class="news-aside-category-item">
            <a href="#" class="news-aside-category-item-link">
                <span class="news-aside-category-item-span"></span>
                <h3 class="news-aside-category-item-title">テキストテキスト</h3>
            </a>
        </li><!-- /.news-aside-category-item -->
        <li class="news-aside-category-item">
            <a href="#" class="news-aside-category-item-link">
                <span class="news-aside-category-item-span"></span>
                <h3 class="news-aside-category-item-title">テキストテキスト</h3>
            </a>
        </li><!-- /.news-aside-category-item -->
        <li class="news-aside-category-item">
            <a href="#" class="news-aside-category-item-link">
                <span class="news-aside-category-item-span"></span>
                <h3 class="news-aside-category-item-title">テキストテキスト</h3>
            </a>
        </li><!-- /.news-aside-category-item -->
        <li class="news-aside-category-item">
            <a href="#" class="news-aside-category-item-link">
                <span class="news-aside-category-item-span"></span>
                <h3 class="news-aside-category-item-title">テキストテキスト</h3>
            </a>
        </li><!-- /.news-aside-category-item -->
        <li class="news-aside-category-item">
            <a href="#" class="news-aside-category-item-link">
                <span class="news-aside-category-item-span"></span>
                <h3 class="news-aside-category-item-title">テキストテキスト</h3>
            </a>
        </li><!-- /.news-aside-category-item -->
    </ul>
    <!-- /.news-aside-category-list -->
</aside>
<!-- / aside -->