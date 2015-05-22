<?php
get_header(); ?>
<?php
	query_posts('cat=3&posts_per_page=20');
	while ( have_posts() ) : the_post(); ?>
	<div class="post-block one-third ">
		<div class="post-entry">
			 <?php the_title( sprintf( '<a href="%s"><h2>', esc_url( get_permalink() ) ),'</h2></a>' ); ?>
			 <p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0,200,"...");    ?></p>		
		</div>
		<a href="<?php the_permalink(); ?>"><div ><?php the_post_thumbnail(essay); ?></div></a>
		<div class="post-meta">
			<a href="<?php the_permalink(); ?>" class="link" >查看更多</a>
		</div>

	</div>	
	<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>
