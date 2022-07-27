<?php
  
  get_header();

  while(have_posts()) {
    the_post();
    pageBanner();
     ?>

    <div class="container container--narrow page-section">
          <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event'); ?>"><i class="fa fa-home" aria-hidden="true"></i> &nbsp;Alle Reisepläne</a> <span class="metabox__main"><?php the_title(); ?></span></p>
      </div>

      <div class="generic-content"><?php the_content(); ?></div>

      <?php

        $relatedContinents = get_field('related_continents');

        if ($relatedContinents) {
          echo '<hr class="section-break">';
          echo '<h2 class="textAppendix">Weitere Reisepläne in</h2>';
          echo '<ul class="link-list min-list">';
          foreach($relatedContinents as $continent) { ?>
            <li><a href="<?php echo get_the_permalink($continent); ?>"><p class="the-contin-text"><i class="fa-solid fa-earth-africa"></i> &nbsp;<?php echo get_the_title($continent); ?></p></a></li>
          <?php }
          echo '</ul>';
        }

        wp_reset_postdata();

        $relatedInformations = get_field('related_informations');

        if ($relatedInformations) {
          echo '<hr class="section-break">';
          echo '<h2 class="textAppendix">'.'Informationen zu '. get_the_title() . '</h2>';
          echo '<ul class="min-list link-list">';
          foreach($relatedInformations as $information) {
            ?> <li><a href="<?php echo get_the_permalink($information); ?>"><p class="the-contin-text"><i class="fa-solid fa-circle-question"></i> &nbsp;<?php echo get_the_title($information) ?></p></a></li> <?php
          }
          echo '</ul>';

        }

      ?>
    </div>

<?php }
  get_footer();
?>