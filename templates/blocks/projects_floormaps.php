<section class="projects-floor-maps">
  <div class="container large-container">
    <div class="projects-floor-maps-wrapper">
      <h3>Floor Plans</h3>
      <?php while( have_rows('floormaps') ): the_row(); 
        $img = get_sub_field('map');
        $name = get_sub_field('map_name');
      ?>

        <div class="floormap module">
          <b><?php echo $name; ?></b>
          <a href="<?php echo $img; ?>" data-fancybox="images" data-caption="<?php echo $name; ?>">
            <img src="<?php echo $img; ?>" alt="<?php echo $name; ?>" />
          </a>
        </div>
        <div class="floormap-mobile">
          <a href="<?php echo $img; ?>" data-fancybox="images" data-caption="<?php echo $name; ?>">
            <b><?php echo $name; ?></b>
          </a>
        </div>

      <?php endwhile; ?>

    </div>
  </div>
</section>