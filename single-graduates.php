<?php
/* 
Template Name: 卒業生の声投稿ページ
Template Post Type: post
*/
?>

<?php
/* 卒業生の声（カテゴリ：graduates）専用の個別ページテンプレート */
get_header();

if ( have_posts() ) :
  while ( have_posts() ) : the_post();

  // カテゴリ情報（見出し表示に利用）※空配列だった時の Notice 回避
  $cat = get_the_category();
  $catslug = $cat ? $cat[0]->slug : '';
  $catname = $cat ? $cat[0]->cat_name : '';

  // 卒業年（カスタムフィールド）
  $graduate_year = post_custom('graduate_year'); // 例: 2018
?>
  <!-- Hero -->
  <div class="home">
    <div class="breadcrumbs_container">
      <div class="image_header">
        <div class="header_info">
          <div><?php echo esc_html($catslug ?: 'graduates'); ?></div>
          <div><?php echo esc_html($catname ?: '卒業生の声'); ?></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Body -->
  <div class="course">
    <div class="row content-body">
      <!-- Main -->
      <div class="col-lg-8">
        <div class="course_tabs_container">
          <div class="tab_panels">
            <div class="tab_panel">
              <div class="tab_panel_title"><?php echo esc_html($catname ?: '卒業生の声'); ?></div>
              <div class="tab_panel_content">
                <div class="tab_panel_text">
                  <div class="news_posts_small">
                    <div class="row">
                      <!-- ▼ single.php ではここに「月日カレンダー」があったが、卒業生の声では非表示にするため丸ごと削除 -->

                      <div class="col-lg-12 col-md-12 col-sx-12">
                        <div class="news_post_small_header">
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/tags-solid.png" alt="" />
                          <?php echo esc_html($catname ?: '卒業生の声'); ?>
                        </div>

                        <div class="news_detail_title">
                          <?php the_title(); ?>
                        </div>

                        <?php if ( $graduate_year ) : ?>
                          <!-- 卒業年バッジ（見本の“帯”風） -->
                          <div class="grad-badge" style="
                                background:#f0f0f0;
                                border-radius:4px;
                                padding:12px 16px;
                                margin:14px 0 24px;
                                display:inline-block;
                                min-width:260px;">
                            <strong>卒業年：</strong><?php echo esc_html($graduate_year); ?>
                          </div>
                        <?php endif; ?>

                        <div class="news_post_meta">
                          <?php the_content(); ?>
                        </div>

                        <hr />
                        <div class="social_share">
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/facebook-square-brands.png" alt=""/>
                          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/x-square-brands.png" alt="" />
                        </div>
                      </div>
                    </div><!-- /.row -->
                  </div><!-- /.news_posts_small -->
                </div><!-- /.tab_panel_text -->
              </div><!-- /.tab_panel_content -->
            </div>
          </div>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-4" style="background-color: #2b7b8e33">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

<?php
  endwhile;
  endif;

get_footer();

?>
