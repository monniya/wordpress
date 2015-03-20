<?php
/**
 * The template for displaying search results pages.
 *
 * @package fairy
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( '搜索： %s', 'fairy' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php 
				query_posts('s='. get_search_query() . '&posts_per_page=20');
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
			<?php endwhile; ?>

			<?php fairy_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
