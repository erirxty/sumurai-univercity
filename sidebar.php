<!-- sidebar-main に切り出す -->
<div class="sidebar">
            <div class="sidebar_search">
              <div class="category">
                <div class="section_title_container category_title">
                <h2>検索</h2>
                <?php get_search_form(  ); ?>
                </div>
              </div>
            </div>
            
            <div class="category">
              <div class="section_title_container category_title">
                <h2>CATEGORY</h2>
                <div class="section_subtitle">カテゴリー</div>
              </div>
              <div class="sidebar_categories">
                <ul>
                  <?php
                   $args =array(
                    // 投稿記事があるカテゴリーのみ表示する
                    'hide_empty' => 1, 
                    // リストのリンクのタイトル（''であれば取得しない）
                    'title_li' => '',
                   );
                   wp_list_categories( $args );
                  ?>
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
                  <?php
                  $args = array(
                    // 表示件数の指定
                    'posts_per_page' => 3 
                  );
                  $posts = get_posts( $args );
                  // ループの開始
                  foreach ( $posts as $post ):
                  // 記事データのセット
                  setup_postdata( $post );
                  ?>
                  <li>
                    <a href="<?php the_permalink(  ); ?>"><?php the_title( ); ?></a>
                  </li>
                  <?php
                  endforeach;
                  // 今回作成したクエリをリセットする
                  wp_reset_postdata(  ); 
                  ?>
                </ul>
              </div>
            </div>
          </div>
          <!-- sidebar-main ここまで -->