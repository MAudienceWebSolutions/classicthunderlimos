<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
</div><!-- #page -->

<footer id="colophon" role="contentinfo">
	<div class="site-info">
		<div id="footer-contact-info" class="footer-contact-info">
		Contact Us:<br/>
		<a href="mailto:info@classicthunderlimos.com">info@classicthunderlimos.com</a>
		</div>
		<div id="footer-social-menu" class="footer-social-menu">
		FOLLOW US:<br/>
		<?php wp_nav_menu( array( 'container_class' => 'social-media-navigation', 'theme_location' => 'social-media-navigation' ) ); ?>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); 

/*
<h4>A LowerMedia Site - &copy;<?php echo date("Y"); ?></h4>
<?php do_action( 'twentytwelve_credits' ); ?>
		<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>

*/
?>
</body>
</html>