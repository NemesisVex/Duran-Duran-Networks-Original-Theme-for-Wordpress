<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Duran_Duran_Networks
 * @since Duran Duran Networks 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo VIGILANTMEDIA_CDN_BASE_URI . '/web/css/blueprint/screen.css'; ?>" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo VIGILANTMEDIA_CDN_BASE_URI . '/web/css/blueprint/print.css'; ?>" media="print">
	<!--[if lt IE 9]>
	<link type="text/css" href="<?php echo VIGILANTMEDIA_CDN_BASE_URI . '/web/css/blueprint/ie.css'; ?>" media="screen, projection">
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="/css/typography.css" media="all" />
	<link rel="stylesheet" type="text/css" href="/css/layout.css" media="screen, projection" />
</head>

<body <?php body_class(); ?>>
		
	<div id="container" class="container">

		<div id="masthead" class="span-22 prepend-1 append-1 append-bottom">
			<h1 id="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( ! empty ( $description ) ) :
		?>
			<h2><?php echo esc_html( $description ); ?></h2>
		<?php endif; ?>
		</div>

		<div id="content" class="span-22 prepend-1 append-1">

			<div id="frame-1" class="span-15">
