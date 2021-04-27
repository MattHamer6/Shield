<?php 
  $title = get_sub_field('section_title');
  $contentLeft = get_sub_field('left_content');
  $contentRight = get_sub_field('right_content');
?>

<section class="projects-content">
  <div class="container large-container">
    <div class="projects-content-wrapper">
      <h2 class="module"><?php echo $title; ?></h2>
      <div class="content">
        <div class="content-left module">
          <?php echo $contentLeft; ?>
        </div>
        <div class="content-right">
          <div class="content-right-wrapper module">
            <?php echo $contentRight; ?>
          </div>
          <div class="details module">
            <div class="details-wrapper">
              <?php if( have_rows('property_information') ): ?>
                <ul>
                  <?php while( have_rows('property_information') ): the_row(); ?>
                    <li><?php the_sub_field('info_point'); ?></li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>
            </div>
            <div class="downloads">
              <a target="_blank" href="<?php the_field('brochure_download'); ?>">Download Brochure <i class="fas fa-download"></i></a>
              <a target="_blank" href="<?php the_field('plans_download'); ?>">Download Plans <i class="fas fa-download"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>