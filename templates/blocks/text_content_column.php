<?php 
  $img = get_sub_field('image');
  $pos = get_sub_field('image_position');
  $column = get_sub_field('display_columns');
  $title = get_sub_field('section_title');
  $content = get_sub_field('content');
  $btnLink = get_sub_field('button_link');
  $btnText = get_sub_field('button_text');
?>

<section class="text-content-column">
  <div class="text-content-column-wrapper">
    <div class="image <?php echo $pos; ?>" style="background-image:url('<?php echo $img; ?>');"></div>
    <div class="content <?php echo $pos; ?>">
      <h1 class="module"><?php echo $title; ?></h1>
      <aside class="<?php echo $column; ?>"><?php echo $content; ?></aside>

      <?php if( get_sub_field('add_button') == 'yes' ): ?>
        <a href="<?php echo $btnLink; ?>"><?php echo $btnText; ?></a>
      <?php endif; ?>

    </div>
    <div class="section-navigation">
      <ul>
        <li>Land Requirements</li>
        <li>Joint Ventures</li>
        <li>The Environment - Sustainability</li>
      </ul>
    </div>
  </div> 
</section>