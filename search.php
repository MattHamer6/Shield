<?php get_header(); ?>

<section class="search-results">
	<div class="container">
		<div class="search-results-wrapper">

			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main>

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1>Search results for: <?php echo get_search_query(); ?></h1>
					</header>

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'search' ); ?>

					<?php endwhile; ?>
					<?php else : ?>

						<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>
			</main>

			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>