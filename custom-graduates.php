<?php

/*
Template Name: 卒業生の声一覧
Template Post Type: page
*/

get_header(); ?>
<div class="home">
  <div class="breadcrumbs_container">
    <div class="image_header">
      <div class="header_info">
        <div>Graduates</div>
        <div>卒業生の声</div>
      </div>
    </div>
  </div>
</div>

<div class="course">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="courses_container">
          <div class="row courses_row">
            <?php
            // カスタム投稿タイプ 'graduates' のすべての投稿を取得
            $args = array(
              'post_type' => 'post',
              'category_name' => 'graduates',
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()) : ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="course">
                    <div class="course_image">
                      <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="course_body">
                      <!-- 投稿のタイトル -->
                      <h3 class="course_title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </h3>
                      <!-- 投稿日を年月日で表示 -->
                      <p class="course_date"><?php echo get_the_date('Y年m月d日'); ?></p>
                      <div class="course_text">
                        <!-- 投稿の抜粋 -->
                        <p><?php echo wp_trim_words(get_the_content(), 50, '...'); ?></p>
                      </div>
                    </div>
                    <div class="course_footer">
                      <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                        <div class="course_price ml-auto"><a href="<?php the_permalink(); ?>">詳細を見る</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php else : ?>
              <p>卒業生の声はまだありません。</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
