<?php
/*
Template Name: カテゴリー詳細
*/
get_header(); ?>

<!-- カテゴリー表示用 home.phpから引用 -->

<div class="bg-wrapper inner">
    <!-- main -->
    <main class="main">
        <section id="news" class="news-home section">
            <h2 class="news-title wow fadeInUp"><?php the_archive_title(); ?></h2>

            <?php

                $catgories = get_the_category();
                foreach($catgories as $category):
                    $args = array(
                        'cat' => $category->term_id,
                        'post_type' => 'post',
                        'posts_per_page' => 10,
                    );
                endforeach;

                $the_query = new WP_Query($args);

            ?>
            <?php if($the_query->have_posts()): $count = 0; ?>
                <?php while($the_query->have_posts()): ?>
                    <?php $the_query->the_post(); $count ++; ?>

            <!-- ループ内 -->


                <ul class="news-homeList">
                    <li class="news-homeItem wow fadeInUp">
                        <a href="<?php the_permalink(); ?>" class="news-homeItem-link">
                            <div class="news-homeItem-img">
                                <?php my_post_thumbanil();?>
                            </div><!-- /.news-homeItem-img -->

                            <div class="news-homeItem-main">
                                <div class="news-homeItem-head">
                                    <?php my_the_category('news-homeItem-meta-category'); ?>

                                    <!-- 新着2件のみ new を表示する-->
                                    <?php if($count <= 2): ?>
                                        <span class="news-homeItem-meta-new">new</span>
                                    <?php endif; ?>

                                    <time class="news-homeItem-meta-time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d') ?></time>
                                </div><!-- /.news-homeItem-head -->
                                <div class="news-homeItem-body">
                                    <h3 class="news-homeItem-title"><?php the_title(); ?></h3><!-- /.news-homeItem-title -->
                                </div>
                                <!-- /.news-homeItem-body -->
                            </div><!-- /.news-homeItem-main -->
                        </a><!-- /.news-homeItem-link -->
                    </li><!-- /.news-homeItem -->
                </ul>
                <!-- /.news-list -->


                <!-- end ループ内 -->
                <?php endwhile; ?>
                <?php else: ?>
                    <p>記事はありません。</p>
                <?php endif; wp_reset_postdata(); ?>

                <div class="pagination news-pagination wow fadeInUp">
                    <?php
                        $big = 999999999; // need an unlikely integer

                    echo paginate_links(
                        array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $the_query->max_num_pages,
                        'prev_text' => '',
                        'next_text' => '',
                        )
                    );
                    ?>
                </div>
        </section>
        <!-- /#news.news section -->
    </main>
    <!-- / main -->

    <!-- aside -->
    <?php get_sidebar(); ?>
    <!-- / aside -->
</div>
<!-- /.bg-wrapper inner -->
<?php get_footer(); ?>