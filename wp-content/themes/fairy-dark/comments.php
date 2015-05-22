<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package fairy
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h4 class="comments-title">
			<?php
				printf( _nx( '评论 (%1$s)', '评论 (%1$s)', get_comments_number(), 'comments title', 'fairy' ),
					number_format_i18n( get_comments_number() ), '<span>'  . '</span>' );
			?>
		</h4>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'fairy' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'fairy' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'fairy' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<ol class="comment-list">
			<?php
				/** use callback function by monniya
	 			 wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
				**/
				wp_list_comments('type=comment&callback=mytheme_comment');
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'fairy' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'fairy' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'fairy' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'fairy' ); ?></p>
	<?php endif; ?>

	<?php 
		$fields =  array(
		    'author' => '<p class="comment-form-author">'.
		    	'<input id="author" name="author" type="text" value="昵称" onfocus="if (value ==\'昵称\'){value =\'\'}" onblur="if (value ==\'\'){value=\'昵称\'}" size="30"' . $aria_req . ' /></p>',
		    'email'  => '<p class="comment-form-email">'.
		    	'<input id="email" name="email" type="text" value="邮箱" onfocus="if (value ==\'邮箱\'){value =\'\'}" onblur="if (value ==\'\'){value=\'邮箱\'}" size="30"' . $aria_req . ' /></p>',
							);
	$comments_args = array(
		'fields' =>  $fields,
		'comment_notes_before' => "",
		 'class_submit' => 'submit red',
		 'comment_notes_after'  => '',
		 'title_reply' =>'',
		 'comment_field'=> '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" placeholder="说点什么" onfocus="if (value ==\'说点什么\'){value =\'\'}" onblur="if (value ==\'\'){value=\'说点什么\'}" aria-describedby="form-allowed-tags" aria-required="true"></textarea></p>'
   	 );
	comment_form($comments_args);

?>

</div><!-- #comments -->
