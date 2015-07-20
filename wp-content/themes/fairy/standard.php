<div id="main">
        <?php
                $current_year = date('Y');
                query_posts('posts_per_page=20&cat=-67');
                while ( have_posts() ) : the_post(); ?>
                        <div class="post clearfix ">
                                <header class="post-header">
                                 <?php the_title( sprintf( '<h1 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
                               <?php if ( 'post' == get_post_type() ) : ?>
                                        <div class="post-meta">
                                        <?php fairy_posted_on(); ?>
                                        </div><!-- .entry-meta -->
                                <?php endif; ?>
                                </header><!-- .entry-header -->

                        <p class="note"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0,240,"...");    ?>  
                        </div>  
                <?php endwhile; wp_reset_query(); ?>
    
		</div>
