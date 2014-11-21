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
class GantryGizmoStyleDeclaration extends GantryGizmo {

	var $_name = 'styledeclaration';
	
	function isEnabled(){
		global $gantry;
		$menu_enabled = $this->get('enabled');

		if (1 == (int)$menu_enabled) return true;
		return false;
	}

	function query_parsed_init() {
		global $gantry;
		$browser = $gantry->browser;

		// Logo
		$css = $this->buildLogo();

		// Section Background Images
		$lessVariables = array(
			'header-background'             => $gantry->get('header-background',                '#EDEDED'),
			'header-bg-position'            => $gantry->get('header-bg-position',               '50% 50%'),
			'header-overlay'                => $gantry->get('header-overlay',                   '#E3D3D6'),
			'main-body-style'               => $gantry->get('main-body-style',                  'light'),
			'main-body-type'                => $gantry->get('main-body-type',                   'full-bg'),
			'main-backgroundtop'            => $gantry->get('main-backgroundtop',               '#8AA6B1'),
			'main-backgroundmiddle'         => $gantry->get('main-backgroundmiddle',            '#B7EAFB'),
			'main-backgroundbottom'         => $gantry->get('main-backgroundbottom',            '##8AA6B1'),
			'main-accent'                   => $gantry->get('main-accent',                      '#1B7DFC'),
			'main-accent2'                  => $gantry->get('main-accent2',                     '#E42C46'),
			'footer-overlay'                => $gantry->get('footer-overlay',                   'dark'),
			'footer-background'             => $gantry->get('footer-background',                '#000000'),
			'footer-bg-position'            => $gantry->get('footer-bg-position',               '50% 50%'),
			'comingsoondate'                => $gantry->get('comingsoondate',                   '2020,10,1')
		);

		$positions = array('header-customheader', 'footer-customfooter');
		$source = "";

		foreach ($positions as $position) {
			$data = $gantry->get($position . '-image', false) ? json_decode(str_replace("'", '"', $gantry->get($position . '-image'))) : false; 
			if ($data) $source = $data->path;
			$lessVariables[$position . '-image'] = $data ? 'url(' . $source . ')' : 'none';
		}   

		$gantry->addLess('global.less', 'master.css', 8, $lessVariables);

		$this->_disableRokBoxForiPhone();

		$gantry->addInlineStyle($css);
		if ($gantry->get('layout-mode')=="responsive") $gantry->addLess('mediaqueries.less');
		if ($gantry->get('layout-mode')=="960fixed") $gantry->addLess('960fixed.less');
		if ($gantry->get('layout-mode')=="1200fixed") $gantry->addLess('1200fixed.less');

		// RTL
		if ( $gantry->get( 'rtl-enabled' ) && is_rtl() ) {
			$gantry->addBodyClass( 'rtl' );
			$gantry->addLess( 'rtl.less' );
		}

		// Demo Styling
		if ($gantry->get('demo')) $gantry->addLess('demo.less', 'demo.css', 9, $lessVariables);

		// Chart Script
		if ($gantry->get('chart-enabled')) $gantry->addScript('chart.js');

		// Add inline css from the Custom CSS field
		$gantry->addInlineStyle($gantry->get('customcss'));

	}

	function buildLogo(){
		global $gantry;

		if ($gantry->get('logo-type')!="custom") return "";

		$source = $width = $height = "";

		$logo = str_replace("&quot;", '"', str_replace("'", '"', $gantry->get('logo-custom-image')));
		$data = json_decode($logo);

		if (!$data){
			if (strlen($logo)) $source = $logo;
			else return "";
		} else {
			$source = $data->path;
		}

		$baseUrl = trailingslashit(get_bloginfo('wpurl'));

		if (substr($baseUrl, 0, strlen($baseUrl)) == substr($source, 0, strlen($baseUrl))){
			$file = trailingslashit(ABSPATH) . substr($source, strlen($baseUrl));
		} else {
			$file = trailingslashit(ABSPATH) . $source;
		}

		if (isset($data->width) && isset($data->height)){
			$width = $data->width;
			$height = $data->height;
		} else {
			$size = @getimagesize($file);
			$width = $size[0];
			$height = $size[1];
		}

		$source = str_replace(' ', '%20', $source);

		$output = "";
		$output .= "#rt-logo {background: url(".$source.") 50% 0 no-repeat !important;}"."\n";
		$output .= "#rt-logo {width: ".$width."px;height: ".$height."px;}"."\n";

		$file = preg_replace('/\//i', DIRECTORY_SEPARATOR, $file);

		return (file_exists($file)) ? $output : '';
	}

	function _disableRokBoxForiPhone() {
		global $gantry;

		if ($gantry->browser->platform == 'iphone' || $gantry->browser->platform == 'android') {
			$gantry->addInlineScript("window.addEvent('domready', function() {\$\$('a[rel^=rokbox]').removeEvents('click');});");
		}
	}
}