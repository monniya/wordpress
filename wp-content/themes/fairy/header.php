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

<?php wp_head(); ?>
<script>
var _hmt = _hmt || [];
(function() {
<script>
var _hmt = _hmt || [];
(function() {
	  var hm = document.createElement("script");
	    hm.src = "//hm.baidu.com/hm.js?07e14688b7b3add2c00e91df811b7df8";
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
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-hover="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>
		<?php endif; ?>	
	<?php else : ?>	
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" data-hover="<?php bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>
	<?php endif; ?>	

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'fairy' ); ?></a>
       	        <nav id="site-navigation" class="main-navigation" role="navigation">
     		        <?php wp_nav_menu( array( 'theme_location' => 'primary','menu_id' => 'navigation' ) ); ?>
       		 </nav>       
   	 </div>

<!--	<div id="content" class="site-content"> -->
<div id="content" class="container clearfix">
