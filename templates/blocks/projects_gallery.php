<?php 
  $count = 1; 
  $rows = count(get_sub_field('gallery'));
?>

<section class="project-gallery">
  <div class="project-gallery-wrapper">
    <?php while( have_rows('gallery') ): the_row(); 
      $img = get_sub_field('gallery_image')
    ?>

        <div class="slide" style="background-image: url('<?php echo $img; ?>');">
          <div class="container large-container h-100">
            <div class="slide-wrapper">
              <div class="content module">
                <h2>The Gallery</h2>
                <div class="property-details">
                  <div>
                    <span><?php echo $count; ?>/<?php echo $rows; ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="overlay"></div>
        </div>

      <?php $count++; ?>
    <?php endwhile; ?>
  </div>
  <div class="slider-dots">
    <div class="container large-container">
      <div class="slider-dots-wrapper-gallery">
      </div>
    </div>
  </div>
</section>