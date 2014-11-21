<?php
/**
 * @version   1.0 February 18, 2014
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */
// no direct access
defined('ABSPATH') or die('Restricted access');

global $gantry;

// get the current preset
$gpreset = str_replace(' ','',strtolower($gantry->get('name')));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $gantry->language; ?>" lang="<?php echo $gantry->language; ?>" dir="<?php echo $gantry->direction; ?>">
	<head>
		<?php if ($gantry->get('layout-mode') == '960fixed') : ?>
		<meta name="viewport" content="width=960px">
		<?php elseif ($gantry->get('layout-mode') == '1200fixed') : ?>
		<meta name="viewport" content="width=1200px">
		<?php else : ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php endif; ?>

		<?php
		$gantry->displayHead();

		$gantry->addStyle('grid-responsive.css', 5);
		$gantry->addLess('bootstrap.less', 'bootstrap.css', 6);
		$gantry->addLess('error.less', 'error.css', 7);

		if ($gantry->browser->name == 'ie') {
		        	if ($gantry->browser->shortversion == 9){
		        		$gantry->addInlineScript("if (typeof RokMediaQueries !== 'undefined') window.addEvent('domready', function(){ RokMediaQueries._fireEvent(RokMediaQueries.getQuery()); });");
		        	}
			if ($gantry->browser->shortversion == 8) {
				$gantry->addScript('html5shim.js');
			}
		}
		$gantry->addScript('rokmediaqueries.js');
		?>
	</head>
	<body <?php echo $gantry->displayBodyTag(); ?>>
		<div id="rt-page-surround">
			<header id="rt-header-surround">
				<div class="rt-header-overlay-all"></div>
				<div class="rt-center">
					<div class="rt-logo-block rt-error-logo">
					    <a id="rt-logo" href="<?php echo $gantry->baseUrl; ?>"></a>
					</div>				
					<div class="rt-block rt-error-code">
						<h1 class="rt-error-title">404</h1>
						<h3 class="rt-error-msg"><?php _re('Page not found'); ?></h3>
					</div>				
					<div class="rt-block rt-error-details">
						<h3 class="largemarginbottom largepaddingbottom"><?php _re('You may not be able to visit this page because of:'); ?></h3>
						<ul>
							<li><?php _re('an <strong>out-of-date bookmark/favourite</strong>'); ?></li>
							<li><?php _re('a search engine that has an <strong>out-of-date listing for this site</strong>'); ?></li>
							<li><?php _re('a <strong>mistyped address</strong>'); ?></li>
							<li><?php _re('you have <strong>no access</strong> to this page'); ?></li>
							<li><?php _re('The requested resource was not found.'); ?></li>
							<li><?php _re('An error has occurred while processing your request.'); ?></li>							
						</ul>
						<p><a href="<?php echo home_url(); ?>" class="readon rt-error-home"><span><span class="icon-circle-arrow-left"></span> <?php _re('Home'); ?></span></a></p>
					</div>
				</div>
				<div class="clear"></div>			
			</header>
		</div>
		<?php $gantry->displayFooter(); ?>	
	</body>
</html>
<?php
$gantry->finalize();
?>