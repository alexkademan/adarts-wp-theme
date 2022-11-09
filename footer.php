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

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'adarts' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'adarts' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'adarts' ), 'adarts', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>

			<span class="sep"> | </span>
			this is my footer ??? 
			
			<?php
				if(in_array('nfl-picks/nfl.php', apply_filters('active_plugins', get_option('active_plugins')))){ 
					//plugin is activated
					nfl();

					
					if (current_user_can( 'edit_post', 36 )) {
						echo '<a href="' . get_post_permalink(36) . '">NFL</a>';
					}
				}
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- .nav-bg-layout -->
</div><!-- .below-header -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
