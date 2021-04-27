<?php
/**
 * Template Name: Flexible Content
**/
?> 

<?php get_header(); ?>

<?php if( have_rows('flexible_content') ):
  while( have_rows('flexible_content') ): the_row();
    
    $layout_name = get_row_layout();
    get_template_part( "templates/blocks/$layout_name" );

  endwhile;
endif; ?>

<?php get_footer(); ?>