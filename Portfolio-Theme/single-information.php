<?php
  
  get_header();

  while(have_posts()) {
    the_post();
    pageBanner();
     ?>

    <div class="container container--narrow page-section">
          <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('information'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Alle Informationen</a> <span class="metabox__main"><?php the_title(); ?></span></p>
      </div>

      <div class="generic-content"><?php the_content(); ?></div>


      <?php 
        $relatedPrograms = new WP_Query(array(
          'posts_per_page' => -1,
          'post_type' => 'program',
          'orderby' => 'title',
          'order' => 'ASC',
          'meta_query' => array(
            array(
              'key' => 'related_information',
              'compare' => 'LIKE',
              'value' => '"' . get_the_ID() . '"'
            )
          )
        ));

        wp_reset_postdata();

        wp_reset_postdata();

        $relatedInformations = get_field('related_informations');

        if ($relatedInformations) {
          echo '<hr class="section-break">';
          echo '<h2 class="textAppendix">'.'Informations für '. get_the_title() . '</h2>';
          echo '<ul class="min-list link-list">';
          foreach($relatedInformations as $information) {
            ?> <li><a href="<?php echo get_the_permalink($information); ?>"><p class="the-contin-text"><i class="fa-solid fa-circle-question"></i> &nbsp;<?php echo get_the_title($information) ?></p></a></li> <?php
          }
          echo '</ul>';

        }

      ?>
      <hr class="section-break">

      <ul class="link-list min-list">

      <h2 class="title-text">Kontinente, zu denen wir Reisen anbieten:</h2>

      <?php
      $homepageContinents = new WP_Query(array( 
        'post_type' => 'continent',
      ));

      while($homepageContinents->have_posts()) {
        $homepageContinents->the_post(); ?>
        <li><a href="<?php the_permalink();?>"><p class="the-contin-text"><i class="fa-solid fa-earth-africa"></i> &nbsp;<?php the_title(); ?></p></a></li>
        <?php }
      echo paginate_links();
      ?>

    </div>
  <?php }

  get_footer();

?>