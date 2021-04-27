<?php 
  $title = get_sub_field('section_title');
  $content = get_sub_field('section_content');
  $btnLink = get_sub_field('button_link');
  $btnText = get_sub_field('button_text');
  $img = get_sub_field('image');
?>

<section class="two-column-text-image">
  <div class="two-column-text-image-wrapper">
    <div class="text">
      <div class="container large-container">
        <div class="text-wrapper">
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
    <div class="image" style="background-image:url('<?php echo $img; ?>');"></div>
  </div>
</section>