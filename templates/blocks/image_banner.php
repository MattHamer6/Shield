<?php 
  $img = get_sub_field('background_image');
  $title = get_sub_field('section_title');
  $content = get_sub_field('section_content');
  $btnText = get_sub_field('button_text');
  $btnLink = get_sub_field('button_link');
?>

<section class="image-banner" style="background-image:url('<?php echo $img; ?>');">
  <div class="container large-container h-100">
    <div class="image-banner-wrapper">

      <div class="content">
        <h2 class="module"><?php echo $title; ?></h2>
        <aside class="module"><?php echo $content; ?></aside>

        <?php if( get_sub_field('add_button') == 'yes' ): ?>
          <div class="button-wrapper module">
            <a href="<?php echo $btnLink; ?>"><?php echo $btnText; ?></a>
          </div>
        <?php endif; ?>
      </div>

    </div>
  </div>
  <div class="overlay"></div>
</section>