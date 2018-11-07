<?php


function filter_deals($data) {
  $args = array(
    'posts_per_page' => 5,
    'tax_query' => array(
      'relation' => 'AND'
    )
  );

  if(isset($data['c_location']) && isset($data['c_location']) !== '') {
    array_push($args['tax_query'], array(
      'taxonomy' => 'location',
      'field' => 'name',
      'terms' => array($data['c_location'])
    ));
  }

  if(isset($data['c_type']) && isset($data['c_type']) !== '') {
    array_push($args['tax_query'], array(
      'taxonomy' => 'type',
      'field' => 'name',
      'terms' => array($data['c_type'])
    ));
  }

  if(isset($data['c_price']) && isset($data['c_price']) !== '') {
    array_push($args['tax_query'], array(
      'taxonomy' => 'price',
      'field' => 'name',
      'terms' => array($data['c_price'])
    ));
  }

  $custom_filter = new WP_Query($args);

  if ($custom_filter->have_posts()) {
    while ($custom_filter->have_posts()) {
      $custom_filter->the_post();
      the_title();
    }
  } else {
    echo 'no find posts';
  }
}