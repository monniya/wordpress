<!-- Mini Blog -->
        <div id="blog-wrapper" class="clearfix">
		<a href="<?php get_bloginfo('template_directory');?>?cat=4">
            <div class="section-title one-fourth">
                <h4>随笔</h4>
                <p>那支笔，在心尖写下点滴，回忆，留下悲欢离合.</p>
		<p><a href="<?php get_bloginfo('template_directory');?>?cat=4">阅读</a></p>
                <div class="carousel-nav">
                    <a id="blog-prev" class="jcarousel-prev" href="./index.html"></a>
                    <a id="blog-next" class="jcarousel-next" href="./index.html"></a>
					
		</div>
		</p>
            </div>
            
            <ul class="blog-carousel">
		<?php query_posts('posts_per_page=6&cat=-67');	?>
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
<!-- Logo List -->
        <div class="logo-list">
            <ul>
	    <li><a href="./"><div class="bw-wrapper-mylogo"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/fairy/images/content/logo_list_01.png" alt="" /></div></a></li>
	    <li><a href="./?cat=4"><div class="bw-wrapper-mylogo"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/fairy/images/content/logo_list_02.png" alt="" /></div></a></li>
	    <li><a href="./?cat=6"><div class="bw-wrapper-mylogo"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/fairy/images/content/logo_list_03.png" alt="" /></div></a></li>
		<li><a href="./?cat=3"><div class="bw-wrapper-mylogo"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/fairy/images/content/logo_list_04.png" alt="" /></div></a></li>
		<li><a href="./"><div class="bw-wrapper-mylogo"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/fairy/images/content/logo_list_05.png" alt="" /></div></a></li>
            </ul>
        </div>
        <!-- /Logo List -->
