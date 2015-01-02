<?php
/**
 * Created by PhpStorm.
 * User: gregbueno
 * Date: 10/14/14
 * Time: 11:16 PM
 */

namespace VigilantMedia\WordPress\Themes\DuranDuranNetworks\Widgets;

use VigilantMedia\WordPress\Themes\DuranDuranNetworks;

class YearlyArchive extends \WP_Widget {

	public function __construct() {
		parent::__construct( 'widget_ddn_yearly_archive', __( 'Archives (Yearly)', WP_TEXT_DOMAIN ), array(
			'classname'   => 'widget_ddn_yearly_archive',
			'description' => __( 'A yearly archive of your site\'s Posts.', WP_TEXT_DOMAIN ),
		) );
	}

	public function widget( $args, $instance ) {
		$title = !empty( $instance['title'] ) ? $instance['title'] : translate( 'Calendar', WP_TEXT_DOMAIN );
		echo $args['before_widget'];
		?>
		<h3><?php echo $title; ?></h3>
		<ul>
			<?php wp_get_archives(array('type' => 'yearly')); ?>
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