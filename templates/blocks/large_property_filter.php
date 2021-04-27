<?php 
  $title = get_sub_field('section_title');
  $intro = get_sub_field('section_introduction');
?>


<section class="large-property-filter">
  <div class="container large-container">
    <div class="large-property-filter-wrapper">
      <h2 class="module"><?php echo $title; ?></h2>
      <p class="module"><?php echo $intro; ?></p>

      <?php // Filter Property Buttons ?>
      <div class="filter-buttons module">
        <ul class="filters">
          <li class="filter active" data-filter=".available-now"><span>Available Now</span></li>
          <li class="filter" data-filter=".historic-projects"><span>Future Projects</span></li>
          <li class="filter" data-filter=".future-projects"><span>Historic Projects</span></li>
        </ul>
      </div>

      <?php // Load Projects Post Type ?>
      <div class="view-properties" id="view-properties">

        <?php
        $loop = new WP_Query(
            array(
                'post_type' => 'projects',
                'posts_per_page' => 9 
            )
        );

        while ( $loop->have_posts() ) : $loop->the_post(); 
          $categories = get_the_category();
          $category = '';
          $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

          // Get all category slugs for posts and populate the $cls variable
          if ( ! empty( $categories ) ):
            foreach ( $categories as $cat ) {
              $category .= $cat->slug . ' ';
            }
          endif; 
        ?>
        
  
          <div class="property <?php echo $category; ?>" style="background-image: url('<?php echo $image[0]; ?>');">

              <div class="property-overlay">
                <h3><a href="<?php the_permalink(); ?>"><?php the_field('property_location') ?></a></h3>
                <a href="<?php the_permalink(); ?>">View More <i class="fas fa-arrow-right"></i></a>
              </div>  

          </div>

        <?php endwhile; 
        wp_reset_postdata(); ?>
      </div>

    </div>
  </div>
</section>