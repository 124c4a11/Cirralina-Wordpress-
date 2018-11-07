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

  
  if (!empty($_POST)) {
    // filter
    $custom_filter = new WP_Query($args);

    if ($custom_filter->have_posts()) {
      while ($custom_filter->have_posts()) {
        $custom_filter->the_post();
        the_title();
      }
    } else {
      echo 'no find posts';
    }
  } else {
    // archive
    $default_query = new WP_Query(array('post_type' => 'deals', 'post_per_page' => 5, ));

    $i = 0;
    
    if ($default_query->have_posts()) {
      while ($default_query->have_posts()) {
        $default_query->the_post();
        $i++;

        if ($i == 1) {
          echo '<strong>';
          the_title();
          echo '</strong>';
        } else {
          the_title();
        }
      }
    } else {
      echo 'no find posts';
    }
  }
}