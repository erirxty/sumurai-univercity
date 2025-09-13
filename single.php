<!-- ニュースの投稿ページではすべての投稿ページに適用されるsingle.phpを利用します。
custom-event.phpを複製し、ファイル名をsingle.phpに変更してください。 -->

<?php get_header( ); 

/* 卒業生の声（category: graduates）は専用テンプレへ委譲 */
if ( has_category('graduates') ) {
  get_template_part('single', 'graduates'); // single-graduates.php を呼ぶ
  get_footer();
  return; // 以降の汎用 single を実行しない
}

?>
  <?php if (have_posts()): //ループを実装する ?> 
    <?php while(have_posts()) : the_post(); ?>

    <!-- Home -->
    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
            <!-- <div>Event</div>
            <div>イベント</div> -->
            <?php
            $cat = get_the_category(  );
            $catslug = $cat[0] -> slug;
            $catname = $cat[0] -> cat_name;
            ?>
            <div><?php echo $catslug; ?></div>
            <div><?php echo $catname; ?></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Post 部分 -->
    <div class="course">
      <div class="row content-body">
        <!-- Course -->
        <div class="col-lg-8">
          <!-- Course Tabs -->
          <div class="course_tabs_container">
            <div class="tab_panels">
              <!-- Description -->
              <div class="tab_panel">
                 <div class="tab_panel_title"><?php echo $catname; ?></div>
                <div class="tab_panel_content">
                  <div class="tab_panel_text">
                    <div class="news_posts_small">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sx-12">
                          <div class="calendar_news_border">
                            <div class="calendar_news_border_1">
                               <div class="calendar_month"><?php echo get_post_time( 'F' ); ?></div>
                              <div class="calendar_day">
                                 <span><?php echo get_the_date( 'd' ); ?></span><span>日</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sx-12">
                          <div class="news_post_small_header">
                            <img src="<?php echo get_template_directory_uri( );?>/images/tags-solid.png" alt="" />
                            <?php echo $catname; ?>
                          </div>
                          <div class="news_detail_title">
                             <?php the_title(); ?>
                          </div>
                          
                          <div class="news_post_meta">
                             <?php the_content( ); ?>
                          </div>

                          <hr />
                          <div class="social_share">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/facebook-square-brands.png" alt=""/>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/x-square-brands.png" alt="" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif;?>

        <!--  Sidebar -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
          <?php get_sidebar( ); ?>
        </div>
      </div>
    </div>
    
<?php get_footer( ); ?>
