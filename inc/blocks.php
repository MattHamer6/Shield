<?php 

add_filter( 'block_categories', 'visions_block_categories', 10, 2 );
add_action('acf/init', 'my_acf_init');

function my_acf_init() {
	if( function_exists('acf_register_block') ) {

    // Repeat this code below and use it to add/register a new ACF block
		acf_register_block(array(
			'name'				=> 'example_block',
			'title'				=> __('Example Block'),
			'description'		=> __('A brief description'),
			'render_callback'	=> 'visions_block_render_callback',
			'category'			=> 'visions-blocks',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'example', 'block', 'visions' ),
    ));
	}
} // End block registration



function visions_block_categories( $categories, $post ) {
  return array_merge(
      $categories,
      array(
          array(
              'slug' => 'visions-blocks',
              'title' => __( 'Visions', 'visions' ),
              'icon'  => 'wordpress',
          ),
      )
  );
}


function visions_block_render_callback( $block ) {

  $slug = str_replace('acf/', '', $block['name']);

  if( file_exists( get_theme_file_path("/templates/blocks/block-{$slug}.php") ) )
      include( get_theme_file_path("/templates/blocks/block-{$slug}.php") );
}