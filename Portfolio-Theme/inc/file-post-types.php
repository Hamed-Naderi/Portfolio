<?php

function portfolio_post_types() {
    // Destination Post Type
    register_post_type('destination', array(
      'map_meta_cap' => true,
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt'),
      'rewrite' => array('slug' => 'destinations'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
        'name' => 'Destinations',
        'add_new_item' => 'Add New Destination',
        'edit_item' => 'Edit Destination',
        'all_items' => 'All Destinations',
        'singular_name' => 'Destination'
      ),
      'menu_icon' => 'dashicons-format-gallery'
    ));

    // Cv Post Type
    register_post_type('cv', array(
      'rewrite' => array('slug' => 'cv'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
        'name' => 'CV',
        'singular_name' => 'CV'
      ),
      'menu_icon' => 'dashicons-media-text'
    ));
  
    // Event Post Type
    register_post_type('event', array(
      'map_meta_cap' => true,
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt'),
      'rewrite' => array('slug' => 'events'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
        'name' => 'Events',
        'add_new_item' => 'Add New Event',
        'edit_item' => 'Edit Event',
        'all_items' => 'All Events',
        'singular_name' => 'Event'
      ),
      'menu_icon' => 'dashicons-calendar'
    ));
  
    // Information Post Type
    register_post_type('information', array(
      'map_meta_cap' => true,
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt'),
      'rewrite' => array('slug' => 'informations'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
        'name' => 'Informations',
        'add_new_item' => 'Add New Information',
        'edit_item' => 'Edit Information',
        'all_items' => 'All Informations',
        'singular_name' => 'Information'
      ),
      'menu_icon' => 'dashicons-location-alt'
    ));
  
    // Continent Post Type
    register_post_type('continent', array(
      'show_in_rest' => true,
      'supports' => array('title'),
      'rewrite' => array('slug' => 'continents'),
      'has_archive' => true,
      'public' => true,
      'labels' => array(
        'name' => 'Continents',
        'add_new_item' => 'Add New Continent',
        'edit_item' => 'Edit Continent',
        'all_items' => 'All Continents',
        'singular_name' => 'Continent'
      ),
      'menu_icon' => 'dashicons-awards'
    ));

    // Leader Post Type
    register_post_type('leader', array(
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'thumbnail'),
      'public' => true,
      'labels' => array(
        'name' => 'Leaders',
        'add_new_item' => 'Add New Leader',
        'edit_item' => 'Edit Leader',
        'all_items' => 'All Leaders',
        'singular_name' => 'Leader'
      ),
      'menu_icon' => 'dashicons-welcome-learn-more'
    ));
  }
  
  add_action('init', 'portfolio_post_types');
  

?>