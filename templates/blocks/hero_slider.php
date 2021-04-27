<?php 
  $count = 1; 
  $rows = count(get_sub_field('slides'));
?>

<section class="hero-slider">
  <div class="hero-slider-slides">
    <?php while( have_rows('slides') ): the_row(); 
      $propertyId = get_sub_field('property');
    ?>
      <?php // Get content from Property post type
        if( $propertyId ): 
          global $post;
          $post = $propertyId;
          setup_postdata( $post );
          $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
          $name = get_field('property_name');
          $loc = get_field('property_location');
      ?>

        <div class="slide" style="background-image: url('<?php echo $image[0]; ?>');">
          <div class="container large-container h-100">
            <div class="slide-wrapper">
              <div class="content">
                <h1><?php the_field('intro_slide_text', 'option'); ?></h1>
                <div class="property-details">
                  <b><?php echo $name; ?></b>
                  <div>
                    <p><i class="fas fa-map-marker-alt"></i> <?php echo $loc; ?></p>
                    <span><?php echo $count; ?>/<?php echo $rows; ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="overlay"></div>
        </div>

        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
      <?php $count++; ?>
    <?php endwhile; ?>
  </div>
  <div class="slider-dots">
    <div class="container large-container">
      <div class="slider-dots-wrapper">
      </div>
    </div>
  </div>
</section>