<?php
  
  get_header();

  while(have_posts()) {
    the_post();
    pageBanner();
     ?>

    <div class="container container--narrow page-section">          
      <div class="generic-content">
        <div class="row group">
          <div class="one-third">
            <?php the_post_thumbnail('leaderPortrait'); ?>
          </div>
          <div class="two-thirds">

            <?php the_content(); ?>
          </div>
        </div>
      </div>

      <?php
        $relatedContinents = get_field('related_continents');

        if ($relatedContinents) {
          echo '<hr class="section-break">';
          echo '<h2 class="textAppendix">'. get_the_title() . ' ist für die folgenden Kontinente verantwortlich: </h2>';
          echo '<ul class="link-list min-list">';
          foreach($relatedContinents as $continent) { ?>
            <li><a href="<?php echo get_the_permalink($continent); ?>"><p class="the-contin-text"><i class="fa-solid fa-earth-africa"></i> &nbsp;<?php echo get_the_title($continent); ?></p></a></li>
          <?php }
          echo '</ul>';
        }
      ?>

    </div>
  <?php }
  get_footer();
?>