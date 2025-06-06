<footer>
      <div id="footer-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-sp.png" alt="SocialTech" />
      </div>
      <div id="footer-link">
        <a href="<?php echo home_url(); ?>/mission">MISSION</a>
        <a href="<?php echo home_url(); ?>/product">PRODUCT</a>
        <a href="<?php echo home_url(); ?>#aboutus">ABOUT US</a>
        <a href="<?php echo home_url(); ?>#vision">VISION</a>
        <a href="<?php echo home_url(); ?>#company">COMPANY</a>
        <a href="<?php echo home_url(); ?>/category/news">NEWS</a>
        <a href="<?php echo home_url(); ?>#contact">CONTACT</a>
      </div>
      <div id="sns-footer">
        <div class="sns-btns">
          <a href="https://www.facebook.com/sejuku2013">
            <img src="<?php echo get_template_directory_uri(); ?>/images/button-facebook.png" alt="Facebookのリンク" />
          </a>
          <a href="https://twitter.com/samuraijuku">
            <img src="<?php echo get_template_directory_uri(); ?>/images/button-twitter.png" alt="Twitterのリンク" />
          </a>
          <a href="https://www.youtube.com/channel/UCCFOQO5aDK0xXam4cUQXT8g">
            <img src="<?php echo get_template_directory_uri(); ?>/images/button-youtube.png" alt="YouTubeのリンク" />
          </a>
        </div>
        <p id="copyright">&copy;2021 SocialTech, Inc. All Rights Reserved.</p>
      </div>
    </footer>
    <!-- jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
    <!-- slickの読み込み -->
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <?php wp_footer(); ?>
  </body>
</html>