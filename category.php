<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Duran_Duran_Networks
 * @since Duran Duran Networks 1.0
 */

namespace VigilantMedia\WordPress\Themes\DuranDuranNetworks;


?>
<?php get_header(); ?>

<div id="frame-1" class="main-content col-md-8">
	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

			<header class="archive-header">
				<h2 class="archive-title"><?php printf( __( 'Category Archives: %s', 'ddn' ), single_cat_title( '', false ) ); ?></h2>

				<?php $term_description = term_description(); ?>
				<?php if ( ! empty( $term_description ) ) : ?>
					<?php printf( '<div class="taxonomy-description">%s</div>', $term_description ); ?>
				<?php endif; ?>
			</header><!-- .archive-header -->

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
</div>

<?php get_sidebar(); ?>
<?php get_footer();
