<?php 
add_action( 'init', 'Projects' );
function Projects() {
  register_post_type( 'projects',
    array(
      'labels' => array(
        'name' => __( 'Projects' ),
        'singular_name' => __( 'Project' )
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => false, // Do you want to enable Gutenberg?
			'supports' => array( 'title', 'thumbnail' ),
			'taxonomies' => array( 'category' ), // Enable categories with CPT
      'menu_icon' => 'dashicons-portfolio'
    )
  );
}