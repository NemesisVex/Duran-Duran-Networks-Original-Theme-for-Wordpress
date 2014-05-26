<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Duran_Duran_Networks
 * @since Duran Duran Networks 1.0
 */
?>

		</div>

		
		<footer id="colophon" class="site-footer row" role="contentinfo">
			<div class="col-md-12">
				<?php get_sidebar( 'footer' ); ?>

				<div class="site-info">
					<?php do_action( 'ddn_credits' ); ?>
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'ddn' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'ddn' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</div>
		</footer><!-- #colophon -->

	<?php wp_footer(); ?>
 		
	</div><!-- #page -->
	
</body>
</html>