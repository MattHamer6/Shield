<?php 
  $title = get_sub_field('section_title');
  $text = get_sub_field('content');
  $btnText = get_sub_field('button_text');
  $btnLink = get_sub_field('button_link');
?>

<section class="small-property-filter">
  <div class="small-property-filter-wrapper">
    <?php // Text ?>
    <div class="text">
      <div class="text-wrapper">
        <h2><?php echo $title; ?></h2>
        <p><?php echo $text; ?></p>
        <div class="button-wrapper">
          <a href="<?php echo $btnLink; ?>"><?php echo $btnText; ?></a>
        </div>
      </div>
    </div>
    <?php // View Properties ?>
    <div class="filter-properties">
      <?php // Filters ?>
      <div class="filter-buttons module">
        <ul class="filters">
          <li class="filter active" data-filter=".properties"><span>Show All</span></li>
          <li class="filter" data-filter=".available-now"><span>Available Now</span></li>
          <li class="filter" data-filter=".historic-projects"><span>Future Projects</span></li>
          <li class="filter" data-filter=".future-projects"><span>Historic Projects</span></li>
        </ul>
      </div>

      <?php // Filter Output ?>
      <div class="view-properties" id="small-properties">
        <div class="view-properties-wrapper">
          <?php
          $loop = new WP_Query(
              array(
                  'post_type' => 'projects',
                  'posts_per_page' => 5 
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
              <div class="property-sold">
                <h3>SOLD</h3>
              </div>  
            </div>

          <?php endwhile; 
          wp_reset_postdata(); ?>
        </div>
      </div>
    </div>

  </div>
</section>