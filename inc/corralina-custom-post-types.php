<?php


function corralina_custom_post_type_gallery() {
	$labels = array(
		'name'                  => _x( 'Galleries', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Gallery', 'Post type singular name', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'gallery' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
	);

	register_post_type( 'gallery', $args );
}
 
add_action( 'init', 'corralina_custom_post_type_gallery' );


function corralina_custom_post_type_deals() {
	$labels = array(
		'name'                  => _x( 'Deals', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Deal', 'Post type singular name', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'deal' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
	);

	register_post_type( 'deal', $args );
}
 
add_action( 'init', 'corralina_custom_post_type_deals' );


function corralina_custom_post_type_testimonials() {
	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'testimonial' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'author' ),
	);

	register_post_type( 'testimonial', $args );
}
 
add_action( 'init', 'corralina_custom_post_type_testimonials' );