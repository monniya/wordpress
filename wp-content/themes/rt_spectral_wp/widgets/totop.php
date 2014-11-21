<?php
/**
 * @version   1.0 February 18, 2014
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
defined('GANTRY_VERSION') or die();


gantry_import('core.gantrywidget');

/**
 * @package     gantry
 * @subpackage  features
 */
add_action('widgets_init', array("GantryWidgetToTop", "init"));


class GantryWidgetToTop extends GantryWidget
{
	var $short_name = 'totop';
	var $wp_name = 'gantry_totop';
	var $long_name = 'Gantry To Top';
	var $description = 'Gantry To Top Widget';
	var $css_classname = 'widget_gantry_totop';
	var $width = 200;
	var $height = 400;

	function init() {
		register_widget("GantryWidgetToTop");
	}

	function render_widget_open($args, $instance) {
    }
    
    function render_widget_close($args, $instance) {
    }
    
    function pre_render($args, $instance) {
    }
    
    function post_render($args, $instance) {
    }
    
    function render_title($args, $instance) {
    }

	function render($args, $instance) {
		/** @global $gantry Gantry */
		global $gantry;

		$gantry->addScript('mootools.js');
		$gantry->addScript('gantry-totop.js');

		ob_start();
		?>
		<div class="clear"></div>
		<div id="<?php echo $this->id; ?>" class="rt-block <?php echo $this->css_classname; ?> widget">
			<a href="#" id="gantry-totop" rel="nofollow">
				<span class="icon-angle-up"></span>
			</a>
		</div>
		<?php
		echo ob_get_clean();
	}
}