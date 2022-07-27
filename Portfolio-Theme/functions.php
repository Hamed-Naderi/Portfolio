<?php


require get_theme_file_path('/inc/file-post-types.php');
require get_theme_file_path('/inc/search-route.php');

function portfolio_custom_rest() {
  register_rest_field('post', 'authorName', array(
    'get_callback' => function() {return get_the_author();}
  ));
}

add_action('rest_api_init', 'portfolio_custom_rest');

function pageBanner($args = NULL) {
  
  if (!$args['title']) {
    $args['title'] = get_the_title();
  }

  if (!$args['subtitle']) {
    $args['subtitle'] = get_field('page_banner_subtitle');
  }

  if (!$args['photo']) {
    if (get_field('page_banner_background_image') AND !is_archive() AND !is_home() ) {
      $args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
    } else {
      $args['photo'] = get_theme_file_uri('/images/ocean.jpg');
    }
  }

  ?>
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php echo $args['title'] ?></h1>
      <div class="page-banner__intro">
        <p><?php echo $args['subtitle']; ?></p>
      </div>
    </div>  
  </div>
<?php }

function portfolio_files() {
  wp_enqueue_script('AOS-js', "//unpkg.com/aos@2.3.1/dist/aos.js");
  wp_enqueue_script('main-portfolio-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
  wp_enqueue_style('AOS-animate', "//unpkg.com/aos@2.3.1/dist/aos.css");
  wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
  wp_enqueue_style('portfolio_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('portfolio_extra_styles', get_theme_file_uri('/build/index.css'));

  wp_localize_script('main-portfolio-js', 'portfolioData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest')
  ));

}
add_action('wp_enqueue_scripts', 'portfolio_files');


function portfolio_features() {
  add_theme_support('title-tag');
  add_image_size('destination_size', 900, 900, true);
  add_theme_support('post-thumbnails');
  add_image_size('leaderLandscape', 400, 260, true);
  add_image_size('leaderPortrait', 480, 650, true);
  add_image_size('pageBanner', 5000, 2000, true);
}

add_action('after_setup_theme', 'portfolio_features');



function portfolio_adjust_queries($query) {
  if (!is_admin() AND is_post_type_archive('information') AND $query->is_main_query()) {
    $query->set('posts_per_page', -1);
  }

  if (!is_admin() AND is_post_type_archive('continent') AND $query->is_main_query()) {
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
    $query->set('posts_per_page', -1);
  }

  if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', array(
              array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              )
            ));
  }
}

add_action('pre_get_posts', 'portfolio_adjust_queries');

add_action('wp_default_scripts', function ($scripts) {
  if (!empty($scripts->registered['jquery'])) {
      $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
  }
});