<?php
get_header();

pageBanner(array(
  'title' => 'Reiseziele',
  'subtitle' => 'Hier sind die Reiseziele, die wir anbieten'
));
?>


<div class="mainContainer">
  <h1>Wählen Sie Ihr Reisziel:</h1>
  <button class="btnDestination activeDestin destinAll"> Alle</button>
  <button class="btnDestination asia"> Asien</button>
  <button class="btnDestination europe"> Europa</button>
  <button class="btnDestination afrika"> Afrika</button>
</div>
<div class="rowDestination">
<?php
  while(have_posts()) {
    the_post(); ?>

  <div class="columnDestination <?php echo get_field('destination_image')['caption'] ?>">
    <div class="contentDestination">
      <a class="destination-links" href="<?php the_permalink(); ?>">
        <img src="<?php echo get_field('destination_image')['sizes']['destination_size']; ?>" alt="Mountains" class="effectDestination">
        <div class="discribeDestination">
          <h2><?php the_title(); ?></h2>
        </div>
      </a>
    </div>
  </div>

<?php } ?>


</div>

<?php get_footer();
?>