<?php
/**
 * @version   1.0 February 18, 2014
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

defined( 'GANTRY_VERSION' ) or die();

gantry_import( 'core.gantrygizmo' );

/**
 * @package     gantry
 * @subpackage  features
 */
class GantryGizmoHelper extends GantryGizmo {

	var $_name = 'helper';

	function isEnabled() {
		return true;
	}

	function admin_init() {
		global $gantry;

		/**
		 * Gantry is fully supporting the WordPress menu system via the Gantry Menu widget or Custom Menu widget
		 */
		
		add_theme_support( 'menus' );

		// unregister Gantry deprecated widgets
		add_action( 'widgets_init', array( &$this, 'unregister_deprecated_widgets' ) );
	}

	function query_parsed_init() {
		global $gantry;
		// add extra CSS classes to get_calendar
		add_filter( 'get_calendar', array( &$this, 'get_calendar_styling' ) );

		// add extra CSS classes to the comments navigation
		add_filter( 'next_comments_link_attributes', array( &$this, 'add_comments_navigation_classes' ) );
		add_filter( 'previous_comments_link_attributes', array( &$this, 'add_comments_navigation_classes' ) );

		// add extra CSS classes to the comments 'Reply' button
		add_filter( 'comment_reply_link', array( &$this, 'add_comments_reply_link_classes' ) );

		// style changes for the password protected posts
		add_filter( 'the_password_form', array( &$this, 'password_form_styling' ) );

		// allow html in widget title
		add_filter('widget_title', array( &$this, 'html_widget_title' ) );

		// gantry breadcrumbs widget back button
		add_action('gantry_breakcrumbs_after_items', array( &$this, 'breadcrumbs_back_button' ) );
	}

	/* Unregister Gantry deprecated widgets */
	function unregister_deprecated_widgets() {
		unregister_widget( 'GantryWidgetiPhoneMenu' );
		unregister_widget( 'GantryWidgetViewSwitcher' );
		unregister_widget( 'GantryWidgetLinks' );
	}

	/* Add extra CSS classes to getcalendar() */
	function get_calendar_styling( $calendar_output ) {
		$calendar_output = str_replace( 'wp-calendar"', 'wp-calendar" class="table table-bordered"', $calendar_output );
		return $calendar_output;
	}

	/* Add extra CSS classes to the comments navigation */
	function add_comments_navigation_classes() {
		$classes = 'class="btn btn-small"';
		return $classes;
	}

	/* Add extra CSS classes to the comments 'Reply' button */
	function add_comments_reply_link_classes( $link ) {
		$link = str_replace( "class='", "class='button ", $link);
		return $link;
	}

	/* style changes for the password protected posts */
	function password_form_styling($output) {
		$output = str_replace( '<input type="submit"', '<input type="submit" class="button"', $output );
		return $output;
	}

	/* allow html in widget title */
	function html_widget_title($title) {
		//convert square brackets to angle brackets
		$title = str_replace( '[', '<', $title );
		$title = str_replace( ']', '>', $title );
		$title = str_replace( '&quot;', '"', $title );

		//strip tags other than the allowed set
		$title = strip_tags( $title, '<span>' );
		return $title;
	}

	function breadcrumbs_back_button() {
		echo '<div class="rt-back-button">
				<a class="readon" onclick="history.back()">' . _r( 'Back' ) . '</a>
			</div>
			<div class="clear"></div>';
	}

}