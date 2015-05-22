<?php
get_header(); ?>
<div class="wrapper blog-wrapper no-sidebar">
<?php
	query_posts('cat=3&posts_per_page=20');
	while ( have_posts() ) : the_post(); ?>
	<article class="post format-gallery" style="opacity: 1;">
		<span class="pointer visible" style="opacity: 1;"></span>
		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<span class="post-icon"></span>
		</a>
		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<figure class="image-frame">
			<span class="theme-shadow">
			<?php the_post_thumbnail(essay); ?>
			</span>
			</figure>
		</a>
		<div class="post-details">
		<header>
			<?php the_title( sprintf( '<a href="%s"><h2>', esc_url( get_permalink() ) ),'</h2></a>' ); ?>
			<time>July 4, 2012</time>
		</header>
		</div>
	</article>
 	<div class="timeline visible" style="height: 26px; top: 38px; opacity: 0.6;"></div>	
	<script type="text/javascript">
		jQuery('#loop-container article.post:last').css('opacity', 0);
	</script>


	<?php endwhile; wp_reset_query(); ?>
</div>
<?php get_footer(); ?>
