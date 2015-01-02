<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Duran_Duran_Networks
 * @since Duran Duran Networks 1.0
 */

namespace VigilantMedia\WordPress\Themes\DuranDuranNetworks;
?>
<?php get_header(); ?>

<div id="frame-1" class="main-content col-md-8">
	<div id="primary" class="content-area row">
		<div id="content" class="site-content col-md-12" role="main">
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php if ( comments_open() || get_comments_number() ) : ?>
					<?php comments_template(); ?>
				<?php endif; ?>
			<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
</div>

<?php get_sidebar(); ?>
<?php get_footer();
