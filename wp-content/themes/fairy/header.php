<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package fairy
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.7.2.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jQuery.BlackAndWhite.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.easing-1.3.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.isotope.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.jcarousel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.touchSwipe.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/selectnav.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
<?php wp_head(); ?>
<script>
var _hmt = _hmt || [];
(function() {
	  var hm = document.createElement("script");
	  hm.src = "//hm.baidu.com/hm.js?9cdad07c755fa23f6aced510c6760e87";
	    var s = document.getElementsByTagName("script")[0]; 
	      s.parentNode.insertBefore(hm, s);
})();
</script>

</head>


<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
<div id="body-wrapper">
	<!-- Header  -->
    <div id="header" class="container clearfix">

	<?php if (isset($option_setting['logo']['url'])) : ?>
		<?php if( $option_setting['logo']['url'] != "" ) : ?>
			<div id="site-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($option_setting['logo']['url']) ?>"></a>
			</div>
		<?php else : ?>	
<!--			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-hover="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
-->
			<h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>
		<?php endif; ?>	
	<?php else : ?>	
		<h1 class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-hover="FAIRY TALE" rel="home">FAIRY </a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="tale" data-hover="FAIRY TALE" rel="home">TALE</a>
</h1>
	<h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>
<!--	<div class="search-header"><?php get_search_form(); ?> </div>-->
 <div id="site-logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/fairy/images/logo.png"></a>
        </div> 
	<?php endif; ?>	

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'fairy' ); ?></a>
       	        <nav id="site-navigation" class="main-navigation" role="navigation">
     		        <?php wp_nav_menu( array( 'theme_location' => 'primary','menu_id' => 'navigation' ) ); ?>
       		 </nav>       
   	 </div>

<!--	<div id="content" class="site-content"> -->
<div id="content" class="container clearfix essay">
