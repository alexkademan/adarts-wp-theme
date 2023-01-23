<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AdArts
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&family=Questrial&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo get_site_url() ?>/favicon.png">
</head>

<body <?php body_class(); ?>>
<h1 class="hid"><?php echo get_bloginfo('name') ?></h1>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'adarts' ); ?></a>

	<header id="masthead" class="site-header rainbow">
		<div class="site-logo">
			<?php the_custom_logo(); ?>
		</div><!-- .site-branding -->

		<button class="toggle-button" aria-controls="primary-menu" aria-expanded="false">
			<span>Primary Menu</span>
			<div class="hamburger-menu">
				<div class="bar-top"></div>
				<div class="bar-middle"></div>
				<div class="bar-bottom"></div>
			</div>
		</button>


		<nav id="site-navigation" class="main-navigation">
			<h1 class="hid">Site Navigation</h1>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div class="site-header-shader">
		<div id="site-header-shader" class="shade"></div>
	</div>
<div id="below-header" class="below-header">
<div id="nav-bg-layout" class="nav-bg-layout">
