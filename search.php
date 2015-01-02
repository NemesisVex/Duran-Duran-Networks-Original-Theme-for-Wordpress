<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Duran_Duran_Networks
 * @since Duran Duran Networks 1.0
 */

namespace VigilantMedia\WordPress\Themes\DuranDuranNetworks;
?>
<?php get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'ddn' ), get_search_query() ); ?></h2>
			</header><!-- .page-header -->

				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
				<?php TemplateTags::paging_nav(); ?>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer();
