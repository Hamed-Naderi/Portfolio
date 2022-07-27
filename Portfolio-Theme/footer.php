<footer class="site-footer">

    <div class="site-footer__inner container container--narrow">

      <div class="group">
        <div class="site-footer__col-one">
          <h1 class="school-logo-text school-logo-text--alt-color"><a href="<?php echo site_url() ?>"><strong>Portfolio</a></h1>
          <p class="site-footer-Name" >Hamed Naderi <br> Theresienstraße 37 <br> 04129 Leipzig</p>
        </div>
        <div class="site-footer__col-two-three-group">
          <div class="site-footer__col-two">
            <h3 class="headline headline--small">Über mich</h3>
            <nav class="nav-list">
              <ul>
                <li><a href="<?php echo get_post_type_archive_link('cv'); ?>">Lebenslauf</a></li>
                <li><a href="<?php echo get_post_type_archive_link('cv'); ?>">GitHab</a></li>
              </ul>
            </nav>
          </div>
          <div class="site-footer__col-three">
            <h3 class="headline headline--small">Entdecken</h3>
            <nav class="nav-list">
              <ul>
                <li><a href="<?php echo get_post_type_archive_link('destination'); ?>">Reiseziel</a></li>
                <li><a href="<?php echo get_post_type_archive_link('event'); ?>">Reiseplan</a></li>
                <li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
                <li><a href="<?php echo site_url('/kontakt') ?>">Kontakt</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="site-footer__col-four">
          <h3 class="small">wir in den sozialen Medien</h3>
          <nav>
            <ul class="min-list social-icons-list group">
              <li><a href="#" class="social-color-facebook"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-twitter"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#" class="social-color-youtube"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>       
    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>