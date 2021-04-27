<?php $loc = get_field('property_address'); ?>

<section class="projects-slider">
  <div class="projects-slider-slides">
    <?php while( have_rows('slides') ): the_row(); 
      $img = get_sub_field('slide_image');
    ?>

      <div class="slide" style="background-image: url('<?php echo $img; ?>');">
        <div class="container large-container h-100">
          <div class="slide-wrapper">
            <div class="content">
              <h1>Built By Shield</h1>
              <h2><?php echo $loc; ?></h2>
            </div>
          </div>
        </div>
        <div class="overlay"></div>
      </div>

    <?php endwhile; ?>
  </div>
  <div class="slider-dots">
    <div class="container large-container">
      <div class="slider-dots-wrapper">
      </div>
    </div>
  </div>
</section>