<?php
get_header();
pageBanner(array(
  'title' => 'Informationen',
  'subtitle' => 'die Sie während Ihrer Reise benötigen'
));
 ?>

<div class="container container--narrow page-section">

<ul class="link-list min-list">

<h2 class="title-text">Notwendige Informationen:</h2>

<?php
  while(have_posts()) {
    the_post(); ?>
    <li><a href="<?php the_permalink(); ?>"><p class="the-contin-text"><i class="fa-solid fa-circle-question"></i> &nbsp;<?php the_title(); ?></p></a></li>
  <?php }
  echo paginate_links();
?>
</ul>
</div>

<?php 
get_footer();

?>