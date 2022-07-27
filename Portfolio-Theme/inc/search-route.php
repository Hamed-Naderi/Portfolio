<?php

add_action('rest_api_init', 'portfolioRegisterSearch');

function portfolioRegisterSearch() {
  register_rest_route('portfolio/v1', 'search', array(

    
    'methods' => WP_REST_SERVER::READABLE,
    'callback' => 'portfolioSearchResults'
  ));
}

function portfolioSearchResults($data) {
  $mainQuery = new WP_Query(array(
    'post_type' => array('post', 'page', 'leader', 'continent','cv', 'information', 'destination', 'event'),
    's' => sanitize_text_field($data['term'])
  ));

  $results = array(
    'generalInfo' => array(),
    'leaders' => array(),
    'continents' => array(),
    'events' => array(),
    'destinations' => array()
  );

  while($mainQuery->have_posts()) {
    $mainQuery->the_post();

    if (get_post_type() == 'post' OR get_post_type() == 'page') {
      array_push($results['generalInfo'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink(),
        'postType' => get_post_type(),
        'authorName' => get_the_author()
      ));
    }

    if (get_post_type() == 'leader') {
      array_push($results['leaders'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink(),
        'image' => get_the_post_thumbnail_url(0, 'leaderLandscape')
      ));
    }

    if (get_post_type() == 'continent') {
      $relatedDestinations = get_field('related_destination');

      if ($relatedDestinations) {
        foreach($relatedDestinations as $destination) {
          array_push($results['destinations'], array(
            'title' => get_the_title($destination),
            'permalink' => get_the_permalink($destination)
          ));
        }
      }
    
      array_push($results['continents'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink(),
        'id' => get_the_id()
      ));
    }

    if (get_post_type() == 'destination') {
      array_push($results['destinations'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink()
      ));
    }

    if (get_post_type() == 'event') {
      $eventDate = new DateTime(get_field('event_date'));
      $description = null;
      if (has_excerpt()) {
        $description = get_the_excerpt();
      } else {
        $description = wp_trim_words(get_the_content(), 18);
      }

      array_push($results['events'], array(
        'title' => get_the_title(),
        'permalink' => get_the_permalink(),
        'month' => $eventDate->format('M'),
        'day' => $eventDate->format('d'),
        'description' => $description
      ));
    }
    
  }

  if ($results['continents']) {
    $continentsMetaQuery = array('relation' => 'OR');

    foreach($results['continents'] as $item) {
      array_push($continentsMetaQuery, array(
          'key' => 'related_continents',
          'compare' => 'LIKE',
          'value' => '"' . $item['id'] . '"'
        ));
    }

    $continentRelationshipQuery = new WP_Query(array(
      'post_type' => array('leader', 'event'),
      'meta_query' => $continentsMetaQuery
    ));

    while($continentRelationshipQuery->have_posts()) {
      $continentRelationshipQuery->the_post();

      if (get_post_type() == 'event') {
        $eventDate = new DateTime(get_field('event_date'));
        $description = null;
        if (has_excerpt()) {
          $description = get_the_excerpt();
        } else {
          $description = wp_trim_words(get_the_content(), 18);
        }

        array_push($results['events'], array(
          'title' => get_the_title(),
          'permalink' => get_the_permalink(),
          'month' => $eventDate->format('M'),
          'day' => $eventDate->format('d'),
          'description' => $description
        ));
      }

      if (get_post_type() == 'leader') {
        array_push($results['leaders'], array(
          'title' => get_the_title(),
          'permalink' => get_the_permalink(),
          'image' => get_the_post_thumbnail_url(0, 'leaderLandscape')
        ));
      }

    }

    $results['leaders'] = array_values(array_unique($results['leaders'], SORT_REGULAR));
    $results['events'] = array_values(array_unique($results['events'], SORT_REGULAR));
  }


  return $results;

}