<?php get_header(); ?>

    <div class="bg-wrapper inner">
        <!-- main -->
        <main class="main">
            <section id="single" class="single section">

            <?php if(have_posts()): ?>
                <?php while(have_posts()): ?>
                    <?php the_post(); ?>
                    <div class="single-meta">

                    <?php
                        $category = get_the_category();
                        if($category[0]):
                    ?>
                       <span class="single-category">
                            <?php echo $category[0]->cat_name; ?>
                       </span>
                    <?php endif; ?>
                    <time class="single-time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d') ?></time>
                </div><!-- /.single-meta -->

                <h1 class="single-title"><?php the_title(); ?></h1>

                <div class="single-thumbnail">
                    <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                </div><!-- /.single-thumbnail -->

                <article class="single-content">
                   <?php the_content(); ?>
                   <!-- 改ページ対策 -->
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

                <div class="single-post-pagenation">
                    <div class="single-post-pagenation-prev">
                        <a href="#" rel="prev"><&nbsp;前の記事へ</a>
                    </div><!-- /.single-post-pagenation-prev -->
                    <div class="single-post-pagenation-next">
                        <a href="#" rel="next">次の記事へ&nbsp;></a>
                    </div><!-- /.single-post-pagenation-next -->
                </div><!-- /.single-post-list -->
                <?php endwhile; ?>
            <?php endif; ?>
            </section><!-- /#single.single section -->

        </main>
        <!-- / main -->

        <?php get_sidebar(); ?>
    </div>
    <!-- /.bg-wrapper inner -->

<?php get_footer(); ?>