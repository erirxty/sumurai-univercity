  <!-- footer.php ここから -->
  <footer class="footer">
      <div class="row footer_row">
        <div class="col">
          <div class="footer_content">
            <div class="row">
              <div class="col-lg-4 footer_col">
                <div class="footer_section footer_about">
                  <div class="footer_logo_container">
                    <!-- <img src="images/logo_big.png" alt="" /> -->
                     <img src="<?php echo get_template_directory_uri(); ?>/images/logo_big.png" alt="" />
                    <a href="">
                      <div class="footer_logo_text">Samurai University</div>
                    </a>
                  </div>
                  <div class="footer_contact_info">
                    <div>〒105-0001</div>
                    <div>東京都港区虎ノ門一丁目3番1号 東京虎ノ門グローバルスクエア17階</div>
                    <ul>
                      <li><span>TEL: </span>03-2222-11</li>
                      <li><span>MAIL: </span>: sample@sejuku.net</li>
                    </ul>
                  </div>
                  <div class="footer_social">
                    <ul>
                      <li>
                        <a href="https://x.com/samuraijuku" target="_blank" rel="noopener noreferrer">
                          <svg width="43" height="43" viewBox="0 0 1200 1227" fill="none" xmlns="http://www.w3.org/2000/svg" style="vertical-align: middle;">
                            <path d="M714.163 519.284L1160.89 0H1055.03L667.137 450.887L357.328 0H0L468.492 681.821L0 1226.37H105.866L515.491 750.218L842.672 1226.37H1200L714.137 519.284H714.163ZM569.165 687.828L521.697 619.934L144.011 79.6944H306.615L611.412 515.685L658.88 583.579L1055.08 1150.3H892.476L569.165 687.854V687.828Z" fill="white"/>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="https://www.facebook.com/sejuku2013/"><i class="fa fa-facebook"
                            aria-hidden="true"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 footer_col">
                <div class="footer_section footer_links">
                  <div class="footer_links_container">
                    <ul>
                      <!-- <li><a href="news.html">ニュース</a></li>
                      <li><a href="events.html">イベント</a></li>
                      <li><a href="courses.html">コース</a></li>
                      <li><a href="about_us.html">侍大学について</a></li> -->
                      <li><a href="<?php echo home_url(); ?>/category/news">ニュース</a></li>
                      <li><a href="<?php echo home_url(); ?>/category/event">イベント</a></li>
                      <li><a href="<?php echo home_url(); ?>/course">コース</a></li>
                      <li><a href="<?php echo home_url(); ?>/about_us">侍大学について</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 footer_col clearfix">
                <iframe
                   src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsejuku2013%2F&tabs=timeline&width=500&height=265&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                   width="500" height="265" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true"
                   allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row copyright_row">
        <div class="col">
          <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
            <div class="cr_text">
              Copyright &copy; Samurai University All Rights Reserved.
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!--jQuery-->
  <!-- <script src="js/jquery-3.2.1.min.js"></script>
  <script src="styles/bootstrap4/popper.js"></script>
  <script src="styles/bootstrap4/bootstrap.min.js"></script> -->

  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/styles/bootstrap4/popper.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/styles/bootstrap4/bootstrap.min.js"></script>

  <script type="text/javascript">
    $(".carousel").carousel();
  </script>

  <?php wp_footer(  ); ?>

</body>

</html>
<!-- footer.php ここまで -->