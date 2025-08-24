<?php get_header(); ?>

<!-- Home -->
<div class="home">
    <div class="breadcrumbs_container">
        <div class="image_header">
            <div class="header_info">
                <?php
                // カテゴリー情報を取得
                $cat = get_the_category();
                // 取得したカテゴリー情報からスラッグ名とカテゴリー名を取得
                $catslug = $cat[0]->slug;
                $catname = $cat[0]->cat_name;
                ?>
                <!-- カテゴリースラッグを表示 -->
                <div><?php echo $catslug; ?></div>
                <!-- カテゴリー名を表示 -->
                <div><?php echo $catname; ?></div>
            </div>
        </div>
    </div>
</div>

<!-- Course -->
<div class="course">
    <div class="row content-body">  <!-- ここが重要: メインコンテンツとサイドバーを囲む 'row' -->
        <!-- メインコンテンツ領域 -->
        <div class="col-lg-8">
            <!-- Course Tabs -->
            <div class="course_tabs_container">
                <div class="tab_panels">
                    <!-- Description -->
                    <div class="tab_panel">
                        <!-- カテゴリー名を見出しとして表示 -->
                        <div class="tab_panel_title"><?php echo $catname; ?></div>
                        <div class="tab_panel_content">
                            <div class="tab_panel_text">
                                <!-- ニュース記事のループ開始 -->
                                <?php if (have_posts()) : ?>
                                    <?php while(have_posts()) : the_post(); ?>
                                    <div class="news_posts_small">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-sx-12">
                                                <div class="calendar_news_border">
                                                    <div class="calendar_news_border_1">
                                                        <div class="calendar_month">
                                                            <?php 
                                                                // カテゴリーが 'event' の場合はカスタムフィールド 'month' を表示、それ以外は投稿月を表示
                                                                if( is_category('event') ) :
                                                                    echo get_post_meta(get_the_ID(), 'month', true);
                                                                else:
                                                                    echo get_post_time('F');
                                                                endif;
                                                            ?>
                                                        </div>
                                                        <div class="calendar_day">
                                                            <span>
                                                                <?php 
                                                                // カテゴリーが 'event' の場合はカスタムフィールド 'day' を表示、それ以外は投稿日を表示
                                                                if( is_category('event') ) :
                                                                    echo get_post_meta(get_the_ID(), 'day', true);
                                                                else:
                                                                    echo get_the_date('d');
                                                                endif;
                                                                ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php
                                                // カテゴリーが 'event' の場合のみカスタムフィールド 'time' を表示
                                                if (is_category('event')) :
                                                ?>
                                                    <div class="calendar_hour"><?php echo get_post_meta(get_the_ID(), 'time', true); ?></div>
                                                <?php
                                                endif;
                                                ?>
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sx-12">
                                                <div class="news_post_small_title">
                                                    <!-- 記事タイトルへのリンク -->
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                </div>
                                                <div class="news_post_meta">
                                                    <ul>
                                                        <li>
                                                            <!-- 記事本文をHTMLタグを除去し、100文字に制限して表示 -->
                                                            <?php echo wp_trim_words( wp_strip_all_tags( get_the_content() ) , 100, '...'); ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="read_continue">
                                                    <button><a href="<?php the_permalink(); ?>" class="text-white">詳細を見る</a></button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr />
                                    </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <!-- ニュース記事のループ終了 -->

                                <!-- ページネーションの表示 -->
                                <div class="news-pagination">
                                    <?php
                                        echo paginate_links(array(
                                            'total' => $wp_query->max_num_pages,
                                            'prev_text' => '&lt;&lt;前へ',
                                            'next_text' => '次へ&gt;&gt;',
                                        ));
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- サイドバー領域 -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
            <?php get_sidebar(); ?>
        </div>
    </div> <!-- ここで 'row' を閉じる -->
</div>

<?php get_footer(); ?>
