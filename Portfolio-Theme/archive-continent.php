<?php
get_header();
pageBanner(array(
  'title' => 'Kontinente',
  'subtitle' => 'Unsere Touren finden auf drei Kontinenten statt'
));
 ?>

<div class="container container--narrow page-section">

  <ul class="link-list min-list">

  <h2 class="textAppendix">Bitte wählen Sie den Kontinent aus, den Sie bereisen möchten:</h2>
  <?php
    while(have_posts()) {
      the_post(); ?>
      <li><a href="<?php the_permalink(); ?>"><p class="the-contin-text"><i class="fa-solid fa-earth-africa"></i> &nbsp;<?php the_title(); ?></p></a></li>
    <?php }
    echo paginate_links();
  ?>

  </ul>
</div>

<?php get_footer();
?>