<?php
get_header(); ?>
<link rel="stylesheet" href="wp-content/themes/fairy/css/font-awesome.min.css">
<link rel="stylesheet" href="wp-content/themes/fairy/css/draw_style.css">    
<link rel="stylesheet" href="wp-content/themes/fairy/css/bootstrap.min.css">
<script src="wp-content/themes/fairy/js/jquery-1.7.2.min.js"></script>	
<script src="wp-content/themes/fairy/js/jquery.lightbox.js"></script>	
<div class="project-feed clearfix isotope" >
<?php
query_posts('cat=67&posts_per_page=20');
while ( have_posts() ) : the_post();
$myPics=catch_images();
 ?>
<div class="draw-item">				
<?php echo $myPics[0]; ?>
	<div class="overlay">
		<a href="<?php echo catch_src($myPics[0])?>" data-rel="lightbox" class="fa fa-expand"></a>
	</div>
	<div class="content-draw">
	<h3><?php get_the_title() ? the_title() : the_ID(); ?></h3>
        <p class="date"><?php echo get_the_date(); ?></p>
	</div>
</div> 				
<?php endwhile; wp_reset_query(); ?>
</div>
<div id="lightbox" style="display:none;">
	<a href="#" class="lightbox-close lightbox-button"></a>
	<div class="lightbox-nav">
		<a href="#" class="lightbox-previous lightbox-button"></a>
		<a href="#" class="lightbox-next lightbox-button"></a>
	</div>
	<div href="#" class="lightbox-caption lightbox-close"><p></p></div>
</div>		
					
	
<?php get_footer(); ?>
	
<script>

$(".overlay").hide();

$('.draw-item').hover(
	function() {
		$(this).find('.overlay').addClass('animated fadeIn').show();
	},
	function() {
		$(this).find('.overlay').removeClass('animated fadeIn').hide();
	}
);



$(function(){
	$('[data-rel="lightbox"]').lightbox();
});


$("a.menu-toggle-btn").click(function() {
	$(".responsive_menu").stop(true,true).slideToggle();
	return false;
});

$(".responsive_menu a").click(function(){
	$('.responsive_menu').hide();
});

</script>


