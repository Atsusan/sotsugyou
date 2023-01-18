<?php
/*
Template Name: お知らせ
*/
get_header(); ?>

<div class="bg-wrapper inner">
    <!-- main -->
    <main class="main">
        <section id="news" class="news-home section">
            <h2 class="news-title">ニュース</h2>

            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 10,
                );

                $the_query = new WP_Query($args);
            ?>
            <?php if($the_query->have_posts()): $count = 0; ?>
                <?php while($the_query->have_posts()): ?>
                    <?php $the_query->the_post(); $count ++; ?>

            <!-- ループ内 -->


                <ul class="news-homeList">
                    <li class="news-homeItem">
                        <a href="<?php the_permalink(); ?>" class="news-homeItem-link">
                            <div class="news-homeItem-img">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php endif; ?>
                            </div><!-- /.news-homeItem-img -->

                            <div class="news-homeItem-main">
                                <div class="news-homeItem-head">
                                    <?php
                                        $category = get_the_category();
                                        if($category[0]):
                                            ?>
                                        <p class="news-homeItem-meta-category">
                                            <!-- カテゴリーがあれば表示する -->
                                                <?php echo $category[0]->name; ?>
                                        </p>
                                    <?php endif; ?>

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

                <!-- pagination -->

                <?php if(paginate_links()): ?>
                    <ul class="pagination">
                        <?php
                            echo paginate_links(
                                array(
                                    'end_size' => '1',
                                    'mid_size' => '1',
                                    'prev_next' => true,
                                    'prev_text' => '<span href="#" class="page-number pagination-previous">&gt;<span>',
                                    'next_text' => '<span href="#" class="page-number pagination-next">&gl;<span>'
                                )
                            );
                        ?>
                    </ul>
                <?php endif; ?>

                <!-- end ループ内 -->
                <?php endwhile; ?>
                <?php else: ?>
                    <p>記事はありません。</p>
                <?php endif; wp_reset_postdata(); ?>

                <div class="pagination news-pagination">
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