<?php
  
  get_header();

  while(have_posts()) {
    the_post();
    pageBanner();
     ?>

    <div class="container container--narrow page-section">
          <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('continent'); ?>"><i class="fa fa-home" aria-hidden="true"></i>&nbsp; Alle Kontinente</a> <span class="metabox__main"><?php the_title(); ?></span></p>
      </div>

      <div class="generic-content"><?php the_field('main_body_content'); ?></div>

      <?php 

        $today = date('Ymd');
        $homepageEvents = new WP_Query(array(
          'posts_per_page' => 5,
          'post_type' => 'event',
          'meta_key' => 'event_date',
          'orderby' => 'meta_value_num',
          'order' => 'ASC',
          'meta_query' => array(
            array(
              'key' => 'event_date',
              'compare' => '>=',
              'value' => $today,
              'type' => 'numeric'
            ),
            array(
              'key' => 'related_continents',
              'compare' => 'LIKE',
              'value' => '"' . get_the_ID() . '"'
            )
          )
        ));

        if ($homepageEvents->have_posts()) {
          echo '<hr class="section-break">';
        echo '<h2 class="textAppendix">Kommende ' . get_the_title() . 'reisen:</h2>';

        while($homepageEvents->have_posts()) {
          $homepageEvents->the_post();
          get_template_part('template-parts/content-event');
        }
        }

        wp_reset_postdata();


        $relatedLeaders = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type' => 'leader',
          'orderby' => 'title',
          'order' => 'ASC',
          'meta_query' => array(
            array(
              'key' => 'related_continents',
              'compare' => 'LIKE',
              'value' => '"' . get_the_ID() . '"'
            )
          )
        ));

        if ($relatedLeaders->have_posts()) {
          echo '<hr class="section-break">';
        echo '<h2 class="textAppendix"> Unsere Reiseführer für ' . get_the_title() . ':</h2>';

        echo '<ul class="leader-cards">';
        while($relatedLeaders->have_posts()) {
          $relatedLeaders->the_post(); ?>
          <li class="leader-card__list-item">
            <a class="leader-card" href="<?php the_permalink(); ?>">
              <img class="leader-card__image" src="<?php the_post_thumbnail_url('leaderLandscape') ?>">
              <span class="leader-card__name"><?php the_title(); ?></span>
            </a>
          </li>
        <?php }
        echo '</ul>';
        }

        wp_reset_postdata();

        $relatedInformations = get_field('related_informations');

        if ($relatedInformations) {
          echo '<hr class="section-break">';
          echo '<h2 class="textAppendix">'.'Informationen zu Reisen nach ' . get_the_title() . ':</h2>';
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