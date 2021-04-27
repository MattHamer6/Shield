<?php get_header(); ?>

<h1>index.php</h1>

<section class="blog-archive">
  <div class="container">
    <div class="blog-archive-wrapper">
    
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'loop-templates/content', get_post_format() ); ?>

        <?php endwhile; ?>
        <?php else : ?>
          <?php get_template_part( 'loop-templates/content', 'none' ); ?>
      <?php endif; ?>

      <?php understrap_pagination(); ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>
