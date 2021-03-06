<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package fairy
 */

get_header(); ?>

<div id="main">
        <?php
		$cat= single_cat_title('', false);
		$day= $_GET['m'];
		$year = substr($day,0,4);
		$month = substr($day,4,6);
		query_posts('cat=' . get_cat_ID($cat) . '&year= '.$year.'&monthnum='.$month.'&posts_per_page=20');
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
<?php get_sidebar(); ?>
<?php get_footer(); ?>
