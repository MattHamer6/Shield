<?php get_header(); ?>

<section class="error-page py-5 text-center">
	<div class="container">
		<div class="row">
			<div class="col-7 mx-auto">
				<div class="error-page-content">
					<h1><?php esc_html_e( 'Oops!' ); ?></h1>
					<h2><?php esc_html_e( 'Unfortunately, the page you were looking for no longer exists.' ); ?></h2>
					<p class="mb-5">To return to the homepage please <a href="<?php echo get_site_url(); ?>">Click Here</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
