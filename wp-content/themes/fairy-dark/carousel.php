<!-- Project Carousel -->
        <div id="project-wrapper" class="clearfix">
		<a href="<?php get_bloginfo('template_directory');?>?cat=6">
            <div class="section-title one-fourth">
                <h4>瞬间</h4>
                <p>陪你等候那些遇见，与流年失散的美好，珍惜属于你我的最最美妙。</p>
		<p><a href="<?php get_bloginfo('template_directory');?>?cat=6">查看更多</a></p>
                <div class="carousel-nav">
                    <a id="project-prev" class="jcarousel-prev" href="./index.html"></a>
                    <a id="project-next" class="jcarousel-next" href="./index.html"></a>
		</div>
		</p>
            </div>

            <ul class="project-carousel">
		<?php
                	query_posts('cat=6&posts_per_page=9');
		        while ( have_posts() ) : the_post(); ?>
                  	  <li>
                      		 <a href="<?php the_permalink(); ?>" class="project-item">
				 <?php the_post_thumbnail(); ?>
                           	 <div class="overlay">
                                	 <h5><?php get_the_title() ? the_title() : the_ID(); ?></h5>
                                         <p class="date"><?php echo get_the_date(); ?></p>
                           	 </div>
                       		 </a>
                   	 </li>
                <?php endwhile; wp_reset_query(); ?>

            </ul>
        </div>
        <!-- /Project Carousel -->
