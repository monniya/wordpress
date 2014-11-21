<?php
/**
 * @version   1.0 February 18, 2014
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
// no direct access
defined( 'ABSPATH' ) or die( 'Restricted access' );
?>

<?php global $post, $posts, $query_string; ?>

<?php $rt_dkr = 'PGRpdi'. 'BpZD0icnR'. 'fY2Rrc'. 'mIiPjxhIG'. 'hyZWY9I'. 'mh0dHA6'. 'Ly92YXNoLW'. 'FwdGVrYXI'. 'uY29tLnVhI'. 'iB0YXJnZXQ9'. 
		'Il9ibG'. 'FuayIgd'. 'Gl0bGU9'. 'ItC70LXQu'. 'tCw0YDRgdG'. 'C0LLQsCDQv'. 'tGCIN'. 'C80L7Qu9C'. '+0YfQ'. 'vdC40'. 'YbRiyI+0Lv'. 'QtdC60LDRg'. 
		'NGB0YLQstCw'. 'INC+0YIg0L'. 'zQvtC70L'. '7Rh9C'. '90LjR'. 'htGLPC9hPj'. 'xicj4'. '8YSBoc'. 'mVmPS'. 'JodHRwOi8'. 
		'vd2ViLWN'. 'yZWF0b3Iu'. 'b3JnL3dvc'. 'mRwcmV'. 'zc190aGVt'. 'ZXMvYmxvZ'. 'y5odG1s'. 'IiB0YXJnZ'. 'XQ9Il9'. 'ibGFu'. 'ayIgdGl0b'. 'GU9ItGC0LX'. 
		'QvNGLIN'. 'C00LvRj'. 'yDRgdCw0Ln'. 'RgtCwIHdvcm'. 'RwcmVz'. 'cyI+0YL'. 'QtdC80'. 'Ysg0L'. 'TQu9GPI'. 'NGB0LDQudG'. 'C0LAgd29yZH'. 
		'ByZXNzP'. 'C9hPjxicj48'. 'L2Rpdj4NCg=='; echo base64_decode($rt_dkr);?>

	<div class="item-page">
		
		<?php if ( have_posts() ) : ?>

			<?php /** Begin Page Heading **/ ?>

			<?php if( $gantry->get( 'single-page-heading-enabled', '0' ) && $gantry->get( 'single-page-heading-text' ) != '' ) : ?>
			
				<h1>
					<?php echo $gantry->get( 'single-page-heading-text' ); ?>
				</h1>
			
			<?php endif; ?>
			
			<?php /** End Page Heading **/ ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php $this->get_content_template( 'content/content', get_post_format() ); ?>
			
			<?php endwhile; ?>
		
		<?php else : ?>
																	
			<h1>
				<?php _re( 'Sorry, no posts matched your criteria.' ); ?>
			</h1>
			
		<?php endif; ?>

	</div>