<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Bose
 */
?>

	</div><!-- #content -->
</div><!-- #page -->

<?php get_template_part('sidebar', 'footer'); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="site-info col-md-4">
			<?php printf( __( 'Designed by %1$s.', 'monniya' ), '<a href="http://ft.dlinkddns.com" >27days.com</a>' ); ?>
		</div><!-- .site-info -->
		<div class="footer-menu col-md-8">
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
		</div>	
	</div><!--.container-->	
</footer><!-- #colophon -->

<?php wp_footer(); ?>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F07e14688b7b3add2c00e91df811b7df8' type='text/javascript'%3E%3C/script%3E"));
</script>

</body>
</html>
