<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Duran_Duran_Networks
 * @since Duran Duran Networks 1.0
 */

namespace VigilantMedia\WordPress\Themes\DuranDuranNetworks;

?>
<?php get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php if ( comments_open() || get_comments_number() ) : ?>
					<?php comments_template(); ?>
				<?php endif; ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php get_sidebar( 'ddn' ); ?>
<?php get_footer();
