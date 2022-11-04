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
</head>

<body <?php body_class(); ?>>
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
			
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>


			<!-- <div id="primary-menu" class="menu">
				<ul class="nav-menu">
					<li class="page_item page-item-2"><a href="http://192.168.0.100/new/aas2022/about/">About</a></li>
					<li class="page_item page-item-3"><a href="http://192.168.0.100/new/aas2022/packaging/">Packaging</a></li>
					<li class="page_item page-item-23"><a href="http://192.168.0.100/new/aas2022/print/">Print</a></li>
					<li class="page_item page-item-25"><a href="http://192.168.0.100/new/aas2022/prepress/">Prepress</a></li>
					<li class="page_item page-item-27"><a href="http://192.168.0.100/new/aas2022/our-forte/">Our Forte</a></li>
					<li class="page_item page-item-29"><a href="http://192.168.0.100/new/aas2022/tradeshows/">Tradeshows</a></li>
					<li class="page_item page-item-31"><a href="http://192.168.0.100/new/aas2022/3d-work/">3D Work</a></li>
					<li class="page_item page-item-33"><a href="http://192.168.0.100/new/aas2022/contact-us/">Contact Us</a></li>
				</ul>
			</div> -->

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div class="site-header-shader">
		<div id="site-header-shader" class="shade"></div>
	</div>
<?php

// $pages = get_pages( array('sort_column' => 'menu_order') );

// foreach($pages as $key => $page) {
// 	// print_r($page);
// 	// echo "<br />";
// 	print_r($key);
// 	echo "<br />";
// 	print_r($page->menu_order);
// 	echo "<br />";
// 	print_r($page->post_title);
// 	echo "<br />";
// 	print_r($page->guid);
// 	echo "<br />";
// 	print_r(get_permalink($page->ID));
// 	echo "<br />~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br /><br />";
// }

