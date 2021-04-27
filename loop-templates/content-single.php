<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="article-wrapper">
		<?php the_content(); ?>
	</div>
</artile>

</article><!-- #post-## -->
