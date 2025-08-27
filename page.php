<?php get_header(); ?>

<!-- Home -->
<div class="home">
    <div class="breadcrumbs_container">
        <div class="image_header">
            <div class="header_info">
                <!-- 固定ページのタイトルを出力 -->
                
                <div><?php the_title(); ?></div>
            </div>
        </div>
    </div>
</div>

<!-- Course -->
<?php if (have_posts()) : //ループを実装する ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="course">
          <div class="row content-body">
            <!-- Course -->
            <div class="col-lg-8">
              <!-- Course Tabs -->
              <div class="course_tabs_container">
                <div class="tab_panels">
                  <!-- Description -->
                  <div class="tab_panel">
                    <div class="tab_panel_title"><?php the_title(); ?></div>
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>
            </div>


        <!-- サイドバー領域 -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

<!-- 卒業生の声セクション -->
<div class="news">
  <div class="footer_row">
    <div class="row news_row">
      <div class="col-lg-6 col-md-6 col-sx-12 news_col">
        <div class="home_title">Graduates</div>
        <div class="home_title_sub">卒業生の声</div>

        <?php
        // 取得したい投稿記事などの条件を引数として渡す
        $args = array(
          // 投稿タイプ
          'post_type'      => 'post',
          // カテゴリー名
          'category_name' => 'graduates',
          // 1ページに表示する投稿数
          'posts_per_page' => 3,
        );
        // データの取得
        $graduates_posts = get_posts($args);
        ?>

        <?php if (!empty($graduates_posts)) : ?>
          <!-- ループ処理 -->
          <?php foreach ($graduates_posts as $post) : ?>
            <?php setup_postdata($post); ?>
            <div class="news_post_small">
              <div class="news_post_meta">
                <ul>
                  <li>
                    <a href="<?php echo get_permalink(); ?>">
                      <!-- カスタムフィールド「graduate_year」の値を出力 -->
                      <?php echo get_post_meta(get_the_ID(), 'graduate_year', true); ?>年
                    </a>
                  </li>
                </ul>
              </div>
              <div class="news_post_small_title">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- 使用した投稿データをリセット -->
          <?php wp_reset_postdata(); ?>
        <?php else : ?>
          <div class="news_post_small">
            <p>卒業生の声はまだありません。</p>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

