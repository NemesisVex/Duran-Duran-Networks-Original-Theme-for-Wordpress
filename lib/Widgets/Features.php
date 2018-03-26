<?php
/**
 * Created by PhpStorm.
 * User: gbueno
 * Date: 12/31/2014
 * Time: 1:32 PM
 */

namespace VigilantMedia\WordPress\Themes\DuranDuranNetworks\Widgets;


class Features extends \WP_Widget {

	public function __construct() {
		parent::__construct( 'widget_ddn_features', __( 'Features', \VigilantMedia\WordPress\Themes\DuranDuranNetworks\WP_TEXT_DOMAIN ), array(
			'classname'   => 'widget_ddn_features',
			'description' => __( 'Links to the Laravel-driven features of the site.', \VigilantMedia\WordPress\Themes\DuranDuranNetworks\WP_TEXT_DOMAIN ),
		) );
	}

	public function widget( $args, $instance ) {
		$title = !empty( $instance['title'] ) ? $instance['title'] : translate( 'Features', \VigilantMedia\WordPress\Themes\DuranDuranNetworks\WP_TEXT_DOMAIN );
		echo $args['before_widget'];
		?>
		<h3><?php echo $title; ?></h3>
		<ul>
			<li><a href="/tour/">Tour History Map</a></li>
		<?php if (ENVIRONMENT != 'production'): ?>
			<li><a href="/album/">Social Network Discography</a></li>
		<?php endif; ?>
		</ul>
		<?php
		echo $args['after_widget'];

	}

	public function update( $new_instance, $instance ) {
		$instance['title']  = strip_tags( $new_instance['title'] );

		return $instance;
	}

	public 	function form( $instance ) {
		$title  = empty( $instance['title'] ) ? '' : esc_attr( $instance['title'] );
		?>
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:', 'musicwhore2014' ); ?></label>
			<input id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" class="widefat" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>"></p>

	<?php
	}

}