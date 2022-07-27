<?php get_header(); ?>

<!-------------------------------- video ------------------------------------------>
<div class="video-size">
  <div id="playVideo">
    <video autoplay muted loop id="myVideo">
      <source src=<?php echo get_theme_file_uri('/video/webVideos.mp4'); ?> type="video/mp4">
      Your browser does not support HTML5 video.
    </video>

    <i class="fa-solid fa-pause faShow"></i>
    <i class="fa-solid fa-play"></i>
  </div>

  <div class="content">
  <h1 class="headline headline--medium">Portfolio</h1>
  <h2 class="headline headline--small">Eine Reisebüro-Website mit eigenem Theme und Plugin</h2>
    <a href="<?php echo get_post_type_archive_link('cv'); ?>" class="btn btn--medium btn--blue">Online Lebenslauf</a><span class="myPadding"></span>
    <a href="https://github.com/Hamed-Naderi/Portfolio" class="btn btn--medium btn--blue">Code auf GitHub</a>
  </div>
</div> 

<!-------------------------------- Kalender ------------------------------------------>
<div class="timelineCalaneder ">
  <div class="containerCalaneder rightCalaneder" data-aos="flip-right" data-aos-duration="1000">
    <div class="contentCalaneder">
      <h2 class="headline headline--small">Pläne für 2024</h2>
      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
    </div>
  </div>
  <div class="containerCalaneder leftCalaneder" data-aos="flip-left" data-aos-duration="1500">
    <div class="contentCalaneder">
      <h2  class="headline headline--small">Pläne für 2023</h2>
      <p>Lorem ipsum dolor sit amet, quo ei simul congue exerci, ad nec admodum perfecto mnesarchum, vim ea mazim fierent detracto. Ea quis iuvaret expetendis his, te elit voluptua dignissim per, habeo iusto primis ea eam.</p>
    </div>
  </div>
</div>

<!------------------------------- blogs & Pläne --------------------------> 
<div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Unsere Reisepläne</h2>
        <?php 
          $today = date('Ymd');
          $homepageEvents = new WP_Query(array(
            'posts_per_page' => 2,
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
              )
            )
          ));

          while($homepageEvents->have_posts()) {
            $homepageEvents->the_post();
            get_template_part('template-parts/content', 'event');
          }
        ?>
        
        <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event') ?>" class="btn btn--blue">Alle Reisepläne anzeigen</a></p>
      </div>
    </div>
    <div class="full-width-split__two">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Unsere Blogs</h2>
        <?php
          $homepagePosts = new WP_Query(array(
            'posts_per_page' => 2
          ));

          while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); ?>
            <div class="event-summary">
              <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                <span class="event-summary__month"><?php the_time('M'); ?></span>
                <span class="event-summary__day"><?php the_time('d'); ?></span>  
              </a>
              <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php if (has_excerpt()) {
                    echo get_the_excerpt();
                  } else {
                    echo wp_trim_words(get_the_content(), 18);
                    } ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
              </div>
            </div>
          <?php } wp_reset_postdata();
        ?> 
        <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">Alle Blogs anzeigen</a></p>
      </div>
    </div>
  </div> 


<!------------------------------- Kontinente -------------------------->      
<div class="teamMargin">
<div class=" t-center">
  <h2 class="headline headline--small underline-red">Wir bieten Reisen zu drei Kontinenten an</h2>
</div>

<div class="mainThePage">
<div class="rowThePage">
  <div class="columnThePage" data-aos="flip-down" data-aos-duration="2000">
    <div class="cardThePage">
      <img src="<?php echo get_theme_file_uri('/images/Asien.jpg'); ?>)" alt="Asien" style="width:100%">
      <div class="containerThePage">
        <h2>Asien</h2>
        <p class="titleThePage">Zwei Länder</p>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing</p>
        <p><a href="<?php echo site_url('/continents/asien') ?>"><button class="buttonThePage">Mehr Info</button></a></p>
      </div>
    </div>
  </div>

  <div class="columnThePage" data-aos="flip-down" data-aos-duration="1500">
    <div class="cardThePage">
      <img src="<?php echo get_theme_file_uri('/images/Afrika.jpg'); ?>)" alt="Afrika" style="width:100%" >
      <div class="containerThePage">
        <h2>Afrika</h2>
        <p class="titleThePage">Drei Länder</p>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing</p>
        <p><a href="<?php echo site_url('/continents/afrika') ?>"><button class="buttonThePage">Mehr Info</button></a></p>
      </div>
    </div>
  </div>
  
  <div class="columnThePage" data-aos="flip-down" data-aos-duration="2000">
    <div class="cardThePage">
      <img src="<?php echo get_theme_file_uri('/images/Europa.jpg'); ?>)" alt="Europa" style="width:100%">
      <div class="containerThePage">
        <h2>Europa</h2>
        <p class="titleThePage">Vier Länder</p>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing</p>
        <p><a href="<?php echo site_url('/continents/europa') ?>"><button class="buttonThePage">Mehr Info</button></a></p>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<!----------------------------- Slider -------------------------------->
<div class="hero-slider">
    <div data-glide-el="track" class="glide__track">
    <div class="glide__slides">
    <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/Slide-1.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--small t-center">Reisen zu interessanten Orten</h2>
        <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('destination') ?>" class="btn btn--blue">Mehr Info</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/Slide-2.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--small t-center">Diverse Freizeitmöglichkeiten</h2>
        <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event') ?>" class="btn btn--blue">Mehr Info</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/Slide-3.jpg'); ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--small t-center">kontaktieren Sie uns</h2>
        <p class="t-center no-margin"><a href="<?php echo site_url('/kontakt') ?>" class="btn btn--blue">Mehr Info</a></p>
      </div>
    </div>
  </div>
    </div>
      <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]">
      </div>
    </div>
  </div> 

<!------------------------------- unsere Vorteile -------------------------->
<div class="containerAdvantage">
  <div class="rowAdvantage">
    <div class="columnAdvantage">
      <div class="cardAdvantage">
        <p><i class="fa-solid fa-handshake"></i></p>
        <h3>12+</h3>
        <p>Partner</p>
      </div>
    </div>
    <div class="columnAdvantage">
      <div class="cardAdvantage">
        <p><i class="fa-solid fa-graduation-cap" ></i></p>
        <h3>25+</h3>
        <p>Experten</p>
      </div>
    </div>
    <div class="columnAdvantage">
      <div class="cardAdvantage">
        <p><i class="fa-solid fa-umbrella-beach"></i></p>
        <h3>45+</h3>
        <p>Reiseziele</p>
      </div>
    </div>
    <div class="columnAdvantage">
      <div class="cardAdvantage">
        <p><i class="fa-solid fa-person-walking-luggage"></i></p>
        <h3>10000+</h3>
        <p>Kunden</p>
      </div>
    </div>
</div>
</div>

<!------------------------------- Kundenzitate ----------------------- ---> 
<div class="quotesSlideshow-container">
  <div class="quotesSlides-container">
    <div class="quotesSlides">
      <q>Alles war perfekt, ich bin sehr zufrieden</q>
      <p class="quotesAuthor">- Max Müller</p>
    </div>
    <div class="quotesSlides">
      <q>Ich hatte eine tolle Zeit während der Reise, vielen Dank</q>
      <p class="quotesAuthor">- Anna Schmidt</p>
    </div>
    <div class="quotesSlides">
      <q>Freundliches Personal, regelmäßiger Zeitplan und viele Unterhaltungsmöglichkeiten</q>
      <p class="quotesAuthor">- Jakob Meyer</p>
    </div>
    <div class="quotesSlides">
      <q>Das war die beste Urlaubsreise meines Lebens</q>
      <p class="quotesAuthor">- Elisa Böhne</p>
    </div>
    <div class="quotesSlides">
      <q>Ich werde in Zukunft nur dieses Reisebüro wählen</q>
      <p class="quotesAuthor">- Lukas Beckner</p>
    </div>
  </div>

    <div class="quotesDot-container">

      <i class=" fa-solid fa-angles-left"></i>
      <span class="quotesDot"></span> 
      <span class="quotesDot"></span> 
      <span class="quotesDot"></span> 
      <span class="quotesDot"></span>
      <span class="quotesDot"></span>
      <i class=" fa-solid fa-angles-right"></i>
    </div>
  </div>
</div>

  <?php get_footer();
?>