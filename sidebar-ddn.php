<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Duran_Duran_Networks
 * @since Duran Duran Networks 1.0
 */
?>

			</div>

			<div id="frame-2" class="prepend-1 span-6 last">
				<h3>Features</h3>

				<ul>
					<li><a href="/tour/">Tour History Map</a></li>
					<?php if (ENVIRONMENT != 'production'): ?>
					<li><a href="/album/">Social Network Discography</a></li>
					<?php endif; ?>
				</ul>

				<h3>About this site</h3>

				<p>My name is Greg, and I am a lapsed Duranie. Up until about 2000, I was a devoted Duran Duran fan. That fandom has cooled considerably since then, and for a long time, I've owned this domain but did nothing with it.</p>

				<p>In an effort to train myself in new web development techniques, I've decided to use Duran Duran as a focus for my experimentation.</p>
				
				<h3>Calendar</h3>
				
				<ul>
				<?php wp_get_archives( array( 'type' => 'yearly' ) ); ?>
				</ul>


				<?php the_widget('WP_Widget_Meta', array( 'title' => __( 'Meta' )), array('before_title' => '<h3>', 'after_title' => '</h3>') ); ?>
				
				
			</div>
