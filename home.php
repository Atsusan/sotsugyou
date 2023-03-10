<?php
/*
Template Name: お知らせ
*/
get_header(); ?>

<div class="bg-wrapper inner">
    <!-- main -->
    <main class="main">
        <section id="news" class="news-home section">
            <h2 class="news-title wow fadeInUp">ニュース</h2>


            <ul class="news-homeList">
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


                    <li class="news-homeItem">
                        <a href="<?php the_permalink(); ?>" class="news-homeItem-link scale-main-parent">
                            <div class="news-homeItem-img scale-main wow fadeInUp">
                                <?php my_post_thumbanil();?>
                            </div><!-- /.news-homeItem-img -->

                            <div class="news-homeItem-main">
                                <div class="news-homeItem-head wow fadeInUp">
                                    <?php my_the_category('news-homeItem-meta-category'); ?>

                                    <!-- 新着2件のみ new を表示する-->
                                    <?php if($count <= 2): ?>
                                        <span class="news-homeItem-meta-new wow fadeInUp">new</span>
                                    <?php endif; ?>

                                    <?php my_the_time('news-homeItem-meta-time'); ?>
                                </div><!-- /.news-homeItem-head -->
                                <div class="news-homeItem-body">
                                    <h3 class="news-homeItem-title wow fadeInUp"><?php the_title(); ?></h3><!-- /.news-homeItem-title -->
                                </div>
                                <!-- /.news-homeItem-body -->
                            </div><!-- /.news-homeItem-main -->
                        </a><!-- /.news-homeItem-link -->
                    </li><!-- /.news-homeItem -->


                    <!-- end ループ内 -->
                    <?php endwhile; ?>
                    <?php else: ?>
                        <p>記事はありません。</p>
                    <?php endif; wp_reset_postdata(); ?>
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

                        ));
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