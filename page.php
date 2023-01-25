<?php get_header(); ?>

    <div class="bg-wrapper inner">
        <!-- main -->
        <main class="main page-main">
            <section id="page" class="page section">

            <?php if(have_posts()): ?>
                <?php while(have_posts()): ?>
                    <?php the_post(); ?>

                <h1 class="page-title"><?php the_title(); ?></h1>

                <div class="page-thumbnail">
                    <?php my_post_thumbanil(); ?>
                </div><!-- /.page-thumbnail -->

                <article class="page-content">
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
                <!-- /.page-content -->


                <?php endwhile; ?>
            <?php endif; ?>
            </section><!-- /#page.page section -->

        </main>
        <!-- / main -->
    </div>
    <!-- /.bg-wrapper inner -->

<?php get_footer(); ?>