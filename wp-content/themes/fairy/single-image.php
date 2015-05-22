<?php
/**
 * the template for image by monniya 
 *
 * @package fairy
 */
get_header(); ?>


<head>
<link  href="wp-content/themes/fairy/css/sliderya.css" type="text/css" media="screen" />
<script src="wp-content/themes/fairy/js/sliderya.js"></script>
</head>
<body class="loading">
<div id="container" class="cf">
<div id="mainya" role="main">
<section class="slider">
<div id="slider" class="flexslider">
<?php while ( have_posts() ) : the_post(); ?>
<ul class="slides">
<?php
	$myPics=catch_images();
	$myWords=catch_words();
	$num=count($myPics);
	for($i=0;$i<$num;$i++){
?>
		<li><?php echo $myPics[$i]; ?>
			<figcaption><?php echo $myWords[$i]; ?></figcaption>
		</li>	
<?php }  ?>    
</ul>
</div>
<?php endwhile; // end of the loop. ?>
<div id="carousel" class="flexslider">
<ul class="slides">
<?php
        $myPics=catch_images();
        foreach($myPics as $temp2){ ?>
            <li><?php echo $temp2; ?></li>
<?php }  ?>
</ul>
</div>
</section>
</div>

</div>
<script type="text/javascript">
$(function(){
	SyntaxHighlighter.all();
});
$(window).load(function(){
	$('#carousel').flexslider({
	animation: "slide",
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		itemWidth: 210,
		itemMargin: 5,
		asNavFor: '#slider'
});

$('#slider').flexslider({
animation: "slide",
	controlNav: false,
	animationLoop: false,
	slideshow: false,
	sync: "#carousel",
	start: function(slider){
		$('body').removeClass('loading');
	}
});
});
</script>
<?php get_footer(); ?>

