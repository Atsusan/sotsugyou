<?php get_header(); ?>

    <div class="bg-wrapper inner">
        <!-- main -->
        <main class="main">
            <section id="single" class="single section">

            <?php if(have_posts()): ?>
                <?php while(have_posts()): ?>
                    <?php the_post(); ?>
                    <div class="single-meta">
                    <?php my_the_category('single-category'); ?>
                    <?php my_the_time('single-time'); ?>
                </div><!-- /.single-meta -->

                <h1 class="single-title"><?php the_title(); ?></h1>

                <div class="single-thumbnail">
                    <?php my_post_thumbanil(); ?>
                </div><!-- /.single-thumbnail -->

                <article class="single-content">
                   <?php the_content(); ?>
                   <!-- 改ページ対策  php -->
                   <?php
                    wp_link_pages(
                        array(
                            'before' => '<nav class="entry-links">',
                            'after' => '</nav>',
                            'link_before' => '',
                            'link_after' => '',
                            'next_or_number' => 'number',
                            'separator' => '',
                        )
                    );
                   ?>
                <!-- /.single-content -->

                <!-- お知らせ投稿用ページネーション -->
                <?php
                    $args = array(
                        'mid_size' => 1,
                        'prev_text' => '&lt;&nbsp;前の記事へ',
                        'next_text' => '次の記事へ&nbsp;&gt;',
                        'screen_reader_text' => '',
                    );
                    the_post_navigation($args);
                ?>
                <!--お知らせ投稿用ページネーション -->


                <?php endwhile; ?>
            <?php endif; ?>
            </section><!-- /#single.single section -->

        </main>
        <!-- / main -->

        <?php get_sidebar(); ?>
    </div>
    <!-- /.bg-wrapper inner -->

<?php get_footer(); ?>