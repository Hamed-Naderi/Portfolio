<?php

get_header();
pageBanner(array(
  'title' => 'Reisepläne',
  'subtitle' => 'Unsere aktuellen Reiseangebote'
));
 ?>

<div class="container container--narrow page-section">
<h2 class="title-text"></h2> <br>
<?php
  while(have_posts()) {
    the_post(); 
    get_template_part('template-parts/content-event');
   }
  echo paginate_links();
?>
<br><br>

<p class="past-text"><a href="<?php echo site_url('/past-events') ?>"><i class="fa-solid fa-paperclip"></i>&nbsp; Abgelaufene Reisen können Sie hier Sehen.</a></p>

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

<?php 
get_footer();
?>