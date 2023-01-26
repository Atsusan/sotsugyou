<?php
$custom_posts = get_posts(array(
    'post_type' => 'cases', // 投稿タイプ
    'posts_per_page' => -1, // 表示件数
    'tax_query' => array(
        array(
            'taxonomy' => 'genre', //タクソノミーを指定
            'field' => 'slug', //ターム名をスラッグで指定する
            'terms' => 'communication', //表示したいタームをスラッグで指定
            'operator' => 'IN'
        ),
    )
));

global $post;
if ($custom_posts) : foreach ($custom_posts as $post) : setup_postdata($post); ?>

        <!-- ループはじめ -->
        <div class="cases-item wow fadeInUp">
            <div class="cases-item-head">
                <div class="cases-item-titles">
                    <p class="cases-item-business"><?php echo nl2br(get_field('business')); ?></p><!-- /.cases-item-business -->
                    <h2 class="cases-item-name"><?php echo nl2br(get_field('company')); ?><span class="cases-item-name-span">様</span></h2>
                    <!-- /.cases-item-name -->
                </div><!-- /.cases-item-titles -->
                <div class="cases-item-logo">
                    <img src="<?php the_field('logo'); ?>" alt="">
                </div><!-- /.cases-item-logo -->
            </div><!-- /.cases-item-head -->
            <div class="cases-item-body">
                <h3 class="cases-item-title">研修コース：<span class="cases-item-title-span">
                        <?php
                        $field = get_field_object('course'); //フィールドの設定情報を取得
                        $value = $field['value']; //選択された値を取得
                        $label = $field['choices'][$value]; //選択された表示名（ラベル）を取得
                        ?>
                        <?php echo $label; ?>
                    </span>
                </h3><!-- /.cases-item-title -->
                <ul class="cases-item-lists">
                    <li class="cases-item-list">
                        <h4 class="cases-item-list-title">研修の目的</h4><!-- /.cases-item-list-title -->
                        <p class="cases-item-list-text">
                            <?php echo nl2br(get_field('objective')); ?>
                        </p><!-- /.cases-item-list-text -->
                    </li><!-- /.cases-item-list -->
                    <li class="cases-item-list">
                        <h4 class="cases-item-list-title">選んだ理由</h4><!-- /.cases-item-list-title -->
                        <p class="cases-item-list-text">
                            <?php echo nl2br(get_field('reasons')); ?>
                        </p><!-- /.cases-item-list-text -->
                    </li><!-- /.cases-item-list -->
                    <li class="cases-item-list">
                        <h4 class="cases-item-list-title">導入後の成果・効果</h4><!-- /.cases-item-list-title -->
                        <p class="cases-item-list-text">
                            <?php echo nl2br(get_field('results')); ?>
                        </p><!-- /.cases-item-list-text -->
                    </li><!-- /.cases-item-list -->
                </ul><!-- /.cases-item-lists -->
            </div><!-- /.cases-item-body -->
        </div><!-- /.cases-item -->

        <!-- ループおわり -->
<?php endforeach;
    wp_reset_postdata(); endif; ?>