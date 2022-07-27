

<div class="event-summary__content">
  <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
</div>




<?php


while($homepageContinents->have_posts()) {
  $homepageContinents->the_post(); ?>
  <li><div class="event-summary__content">
  <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
</div></li>
<?php }
?>