<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package fairy
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'fairy' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'fairy' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'fairy' ), 'fairy', '<a href="http://underscores.me/" rel="designer">monniya</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<div class="" id="return-top" style="position: fixed; right: 5px; bottom: 5px; text-align: center; cursor: pointer;">
</div>

<?php wp_footer(); ?>

</body>
</html>
