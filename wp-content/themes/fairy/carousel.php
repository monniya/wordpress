<!-- Project Carousel -->
        <div id="project-wrapper" class="clearfix">

            <div class="section-title one-fourth">
                <h4>瞬间</h4>
                <p>陪你等候那些遇见，与流年失散的美好，珍惜属于你我的最最美妙。</p>
                <p><a href="./portfolio_4_col.html">查看更多</a></p>
                <div class="carousel-nav">
                    <a id="project-prev" class="jcarousel-prev" href="./index.html"></a>
                    <a id="project-next" class="jcarousel-next" href="./index.html"></a>
                </div>
            </div>

            <ul class="project-carousel">
		<?php
                	query_posts('cat=6&posts_per_page=6');
		        while ( have_posts() ) : the_post(); ?>
                  	  <li>
                      		 <a href="<?php the_permalink(); ?>" class="project-item">
                           	 <img src="<?php echo catch_that_image();  ?>" />
                           	 <div class="overlay">
                                	 <h5><?php get_the_title() ? the_title() : the_ID(); ?></h5>
                           	 </div>
                       		 </a>
                   	 </li>
                <?php endwhile; wp_reset_query(); ?>

                <li>
                    <a href="./portfolio_details.html" class="project-item">
		    <img src="<?php bloginfo('template_url'); ?>/images/content/project_4_05.jpg" alt="" />
                        <div class="overlay">
                            <h5>日出</h5>
                            <p>摄影</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /Project Carousel -->
