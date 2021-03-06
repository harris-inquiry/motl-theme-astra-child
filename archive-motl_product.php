<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<!-- ?php astra_archive_header(); ? -->

		<!-- ?php astra_content_loop(); ? -->

		<div id="main" class="site-main">
			<div id="masonry-grid" class="ast-row">
			<?php  
			    /* $motl_archive_query = new WP_Query( 
				array('post_type' => 'motl_product')); */
			if ( have_posts() ):
				while (have_posts()): the_post(); ?>

				<?php get_template_part( 'build/php/archive_info' ); ?>

				<?php endwhile; else: ?>
					<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			</div>
		</div>
		

		<?php astra_pagination(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary - archive -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
