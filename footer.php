<?php wp_footer(); ?>
</main>
<?php // All footer content goes below this line 
  $logo = get_field('company_logo', 'option');
  $address = get_field('company_address', 'option');
  $phone = get_field('phone_number', 'option');
  $email = get_field('email_address', 'option');
?>
<footer class="footer">
  <div class="container large-container">
    <div class="footer-wrapper">
      <div class="logo">
        <img src="<?php echo $logo; ?>" alt="<?php echo get_bloginfo(); ?>" />
      </div>
      <aside class="footer-nav">
        <b>Navigation</b>
        <?php wp_nav_menu(array('theme_location' => 'footer', 'container' => false)); ?>
      </aside>
      <aside class="address">
        <b>Shield Homes</b>
        <p><?php echo $address; ?></p>
      </aside>
      <aside class="details">
        <b>Phone</b>
        <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
        
        <b>Email</b>
        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
        
        <div>
          <b>Follow Us</b>
          <?php include get_theme_file_path( '/templates/includes/social.php' ); ?>
        </div>
      </aside>
    </div>
    <?php // Extra Links ?>
    <div class="footer-extra">
      <?php while( have_rows('footer_links', 'option') ): the_row(); 
        $name = get_sub_field('page_name');
        $link = get_sub_field('page_link');
      ?>
        <a href="<?php echo $link; ?>"><?php echo $name; ?></a>
      <?php endwhile; ?>
    </div>
    <?php // Copyright ?>
    <div class="copyright">
      <p>Copyright &copy; <?php echo date("Y"); ?></p>
      <p><a href="https://www.visionsdesign.co.uk" rel="nofollow">Website Designed & Developed</a> by Visions Design.</p>
    </div>
  </div>
</footer>

<?php // End of footer ?>
</body>
</html>

