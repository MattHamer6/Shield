<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<?php // All header content goes below this line ?>
<header class="header">
	<div class="header-wrapper">
		<a class="logo" href="<?php echo get_site_url(); ?>" title="<?php echo get_bloginfo(); ?>">
			<img src="<?php the_field('company_logo', 'option'); ?>" src="<?php echo get_bloginfo(); ?>" />
		</a>
		<div class="header-right">
			<?php include get_theme_file_path( '/templates/includes/social.php' ); ?>
			<div id="open-nav" class="navbar-toggle">
				<span class="hamburger">
					<span></span>
				</span>
			</div>
		</div>
	</div>
	<?php include get_theme_file_path( '/templates/includes/nav.php' ); ?>
</header>

<?php // Don't put content below this line ?>
<main id="main">