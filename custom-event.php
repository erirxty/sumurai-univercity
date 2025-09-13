<?php
/* 
Template Name: イベント投稿ページ
Template Post Type: post
*/
?>

<?php get_header( ); ?>
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
                <!-- <div class="tab_panel_title">イベント</div> -->
                 <div class="tab_panel_title"><?php echo $catname; ?></div>
                <div class="tab_panel_content">
                  <div class="tab_panel_text">
                    <div class="news_posts_small">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sx-12">
                          <div class="calendar_news_border">
                            <div class="calendar_news_border_1">
                              <!-- <div class="calendar_month">OCT</div> -->
                               <div class="calendar_month"><?php echo post_custom( 'month' ); ?></div>
                              <div class="calendar_day">
                                <!-- <span>15</span> -->
                                 <span><?php echo post_custom( 'day' ); ?></span><span>日</span>
                              </div>
                            </div>
                          </div>
                          <!-- <div class="calendar_hour">AM10:00-12:00</div> -->
                           <div class="calendar_hour"><?php echo post_custom( 'time' ); ?></div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sx-12">
                          <div class="news_post_small_header">
                            <!-- <img src="images/tags-solid.png" alt="" /> NEWS -->
                            <img src="<?php echo get_template_directory_uri( );?>/images/tags-solid.png" alt="" /><?php echo $catname; ?>
                          </div>
                          <div class="news_detail_title">
                            <!-- AWSハンズオンセミナー -->
                             <?php the_title(); ?>
                          </div>
                          <div class="news_time">
                            <div>
                              <!-- <img src="images/clock-regular.png" alt="" />
                              <span>日付：2019年08月18日</span> -->
                              <img src="<?php echo get_template_directory_uri();?>/images/clock-regular.png" alt="" />
                              <span>日付： <?php echo post_custom( 'date' ); ?></span>
                            </div>
                            <div>
                              <!-- <img src="images/yen-sign-solid.png" alt="" />
                              <span>参加費：無料</span> -->
                              <img src="<?php echo get_template_directory_uri(); ?>/images/yen-sign-solid.png" alt="" />
                              <span>
                                参加費：<?php 
                                if(post_custom( 'fee' ) == 0){
                                  echo '無料';
                                } else {
                                  echo '¥' . number_format(post_custom( 'fee' ));
                                }
                                ?>
                              </span>
                            </div>
                          </div>
                          <div class="news_post_meta">
                            <!-- 10月8日　新宿〇〇ビル8Fにて、AWSハンズオンセミナーを開催します。AWSを実際に構築してみます。参加希望者は... -->
                             <?php the_content( ); ?>
                          </div>

                          <hr />
                          <div class="social_share">
                            <!-- <img src="images/facebook-square-brands.png" alt="" />
                            <img src="images/x-square-brands.png" alt="" /> -->
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
          <!-- <div class="sidebar">
            <div class="category">
              <div class="section_title_container category_title">
                <h2>CATEGORY</h2>
                <div class="section_subtitle">カテゴリー</div>
              </div>
              <div class="sidebar_categories">
                <ul>
                  <li><a href="#">News ニュース</a></li>
                  <li><a href="#">Event イベント</a></li>
                  <li><a href="#">CampusLife 侍の学生</a></li>
                </ul>
              </div>
            </div>
            <div class="category">
              <div class="section_title_container category_title">
                <h2>Latest Post</h2>
                <div class="section_subtitle">最新記事</div>
              </div>
              <div class="sidebar_categories">
                <ul>
                  <li><a href="#">AWS ハンズオンセミ…</a></li>
                  <li><a href="#">AWS ハンズオンセミ…</a></li>
                  <li><a href="#">AWS ハンズオンセミ…</a></li>
                </ul>
              </div>
            </div>
          </div> -->
          <?php get_sidebar( ); ?>
        </div>
      </div>
    </div>
    
    <?php get_footer( ); ?>