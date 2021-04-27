<nav class="nav">
  <div class="nav-wrapper">
    <div class="nav-content">
      <b>Menu</b>
      <div class="main-nav">
        <div class="main-nav-wrapper">
          <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false)); ?>
        </div>
      </div>
      <footer>
        <div class="alt-nav">
          <?php while( have_rows('footer_links', 'option') ): the_row(); ?>
            <a href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('page_name'); ?></a>
          <?php endwhile; ?>
        </div>
        <?php include get_theme_file_path( '/templates/includes/social.php' ); ?>
      </footer>
    </div>
    <div id="close-nav" class="navbar-toggle">
      <span class="hamburger">
        <span></span>
      </span>
    </div>
  </div>
</nav>