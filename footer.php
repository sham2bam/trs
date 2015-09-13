<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Launchframe
 */
?>


  <footer class="site-footer row u-border-top" role="contentinfo">
    <div class="container">
      <div class="col-md-6">
        <h4>Say Hello</h4>
        <p>
          We’re here to serve you and are happy to do so. Get in touch with us and we’ll be happy to further the conversation.
        </p>
        <a href="/" class="button btn btn-primary">Say Hello</a>
      </div>
      <div class="col-md-6">
        <div class="footer-navs">
          <ul class="social-media">
            <li>
              <a href="/"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a href="/"><i class="fa fa-houzz"></i></a>
            </li>
            <li>
              <a href="/"><i class="fa fa-pinterest"></i></a>
            </li>
          </ul>
          <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </div>
      </div>
    </div>

    <div class="site-info">
      <div class="container">
        <div class="colophon col-md-6">Copyright (c) 2015 Copyright The Right Stage All Rights Reserved.</div>
        <div class="credit col-md-6">Site by <a href="https://shammer.co">shammer.co</a></div>
      </div>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
