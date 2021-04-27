<?php 
  $img = get_sub_field('background_image');
  $title = get_sub_field('section_title');
  $intro = get_sub_field('section_introduction');
?>

<section class="simple-hero" style="background-image:url('<?php echo $img; ?>');">
  <div class="container large-container h-100">
    <div class="simple-hero-wrapper">
      <div class="content">
        <h1><?php echo $title; ?></h1>
        <p><?php echo $intro; ?></p>
      </div>
    </div>
  </div>
  <div class="overlay"></div>
</section>