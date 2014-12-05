<!-- Mini Blog -->
        <div id="blog-wrapper" class="clearfix">

            <div class="section-title one-fourth">
                <h4>随笔</h4>
                <p>那支笔，在心尖写下点滴，回忆，留下悲欢离合.</p>
                <p><a href="./blog.html">阅读</a></p>
                <div class="carousel-nav">
                    <a id="blog-prev" class="jcarousel-prev" href="./index.html"></a>
                    <a id="blog-next" class="jcarousel-next" href="./index.html"></a>
					
                </div>
            </div>
            
            <ul class="blog-carousel">
		<?php query_posts('posts_per_page=6');	?>
		<?php while ( have_posts() ) : the_post(); ?>
		<li>
			<a href="<?php the_permalink(); ?>"><h4><?php get_the_title() ? the_title() : the_ID(); ?></h4>
			<span class="date"><?php echo get_the_date(); ?></span>
			<p class="note"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0,240,"...");	 ?></p>
			</a>
		</li>
		<?php endwhile; wp_reset_query(); ?>		
           </ul>
        </div>
        <!-- /Mini Blog -->
