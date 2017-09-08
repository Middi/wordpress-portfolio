<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<meta name="google-site-verification" content="NOocQr42J5FZ3eg69boUdEGpcWyK4--saSqF9VCSAGw" />
		<meta name="description" content="Richard Middleton, Web Developer from Leeds, UK."/>
		<meta property="og:description" content="Richard Middleton, Web Developer from Leeds, UK." />
		<meta property="og:image" content="https://richardmiddleton.me/wp-content/themes/portfolio/images/meta.jpg" />

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'portfolio' ); ?></a>
