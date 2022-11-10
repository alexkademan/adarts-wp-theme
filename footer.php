<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AdArts
 */

?>
</span><!-- .content -->
	<footer id="colophon" class="site-footer">
		
		<div class="site-info page-width">
			<div class="address">
				<hgroup>
					<h2><?php echo get_bloginfo('name') ?></h2>
					<h4><?php echo get_bloginfo('description') ?></h4>
				</hgroup>
				
				<p>
					4120 North Calhoun Rd. Ste 200<br />
					Brookfield, Wisconsin 53005
				</p>

				<p><a href= “tel:+2624399708">262-439-9708</a></p>
			</div>

			<nav class="footer-nav">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_id'        => 'footer-menu',
						)
					);
				?>
			</nav>

			<button 
				type="submit"
				onclick="window.location.href='https://paylink.paytrace.com?m=eyJhbGciOiJBMjU2S1ciLCJlbmMiOiJBMTI4R0NNIn0.gjiQaYN36pYKKounMJymDYgUUy7fxGBq.A-ZCqgRGNO8-hSoo.o84B5H5KxQVZzcczZ5TmWteWhCIYdpVRxd1KNnEV123EvfChvMQYzQ0CytoP-RYJdPnsf63ntOQbko7nR8Rivkk0E1tiagK9Q98FbLydgRJExz5sTrvPhTjWY0388Z_7xqxdhIFqXq8D679APFckHtvdhWxBFYv2Olpy4zeP3Iw3BVAhJhTz0aIzEXgPwrIPblOOnp37DzByYqe7cWA19lVK_51ya0WJqH2xCd3qHTOCTgfpubOwd1lrtPL49HRzGDIfGu1W5RR9D4cWGv451EtE5BEDkYuXiR9j9Lg.n5uiICYoCra8y96Z1xyg9w&amp;amount=&amp;invoice='"
			>Submit Payment</button>

			style="
			border: 0px;
			border-radius: 7px;
			height: 38px;
			width: 160px;
			color: white;
			font-weight: bold;
			background-color:#4696CA;

			<?php
				if(in_array('nfl-picks/nfl.php', apply_filters('active_plugins', get_option('active_plugins')))){ 
					//plugin is activated
					// nfl();

					
					if (current_user_can( 'edit_post', 36 )) {
						// echo '<a href="' . get_post_permalink(36) . '">NFL</a>';
					}
				}
			?>
		</div><!-- .site-info -->
		<div class="copyright">
			<p class="page-width">Copyright &copy; <?php echo date("Y") ?> <?php echo get_bloginfo('name') ?></p>
		</div>
	</footer><!-- #colophon -->
	
</div><!-- .nav-bg-layout -->
</div><!-- .below-header -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
