<?php
get_header(); ?>

		<div class="project-feed clearfix">						
			<?php
				query_posts('cat=6&posts_per_page=20');
				while ( have_posts() ) : the_post(); ?>
					<div class="one-fourth ">
						<a href="<?php the_permalink(); ?>" class="project-item">
							<?php the_post_thumbnail(); ?>
							 <div class="overlay">
								<h5><?php get_the_title() ? the_title() : the_ID(); ?></h5>
								<p class="date"><?php echo get_the_date(); ?></p>
							 </div>
						</a>
					</div>			
			
			<?php endwhile; wp_reset_query(); ?>
		
						
		</div>
<?php get_footer(); ?>
