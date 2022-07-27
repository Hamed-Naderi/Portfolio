<?php
  
  get_header();

  while(have_posts()) {
    the_post();
    pageBanner();
     ?>

    <div class="container container--narrow page-section">
          <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('destination'); ?>"><i class="fa fa-home" aria-hidden="true"></i> &nbsp;Alle Reiseziele</a> <span class="metabox__main"><?php the_title(); ?></span></p>
      </div>

      <div class="generic-content"><?php the_content(); ?></div>

      <?php

        $relatedEvents = get_field('related_events');

        if ($relatedEvents) {
          echo '<hr class="section-break">';
          echo '<h2 class="textAppendix">Aktuelle Angebote für '. get_the_title() . '</h2>';
          echo '<ul class="link-list min-list">';
          foreach($relatedEvents as $events) { ?>
            <li><a href="<?php echo get_the_permalink($events);?>"><p class="the-contin-text"><i class="fa-solid fa-map-location"></i>&nbsp;&nbsp;<?php echo get_the_title($events); ?></p></a></li>
          <?php }
          echo '</ul>';
        }
        
      ?>
</div>

<?php }
  get_footer();
?>

