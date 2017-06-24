<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
?>

		</div><!-- #main -->


		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<div class="site-description">
					<?php $site_description = get_bloginfo( 'description' );
					$arr = explode(' ',trim($site_description));
					 ?>
				<p>
					<span id ="tealWord"><?php echo $arr[0]; ?></span>
					<?php echo ltrim($site_description, $arr[0]); ?>
					</p>



				<p>&copy; <?php the_time('Y') ?> <?php bloginfo('title'); ?>, LLC</p>
				</div>

			<nav class="social-media-navigation" role="navigation">




					<a href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
					<a href="http://facebook.com/"><i class="fa fa-facebook"></i></a>
					<a href="http://linkedin.com/"><i class="fa fa-linkedin"></i></a>


				<!--<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>-->
			</nav>


			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>