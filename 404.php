<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Duran_Duran_Networks
 * @since Duran Duran Networks 1.0
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h2 class="page-title"><?php _e( 'Not Found', 'ddn' ); ?></h2>
			</header>

			<div class="page-content">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'ddn' ); ?></p>

				<?php get_search_form(); ?>
			</div><!-- .page-content -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar( 'ddn' );
get_footer();
