<?php

class fairy_option_class {
	var $options;
	var $pageinfo;
	var $database_options;
	var $saved_options;
	var $saved_optionname;

	function fairy_option_class($options, $pageinfo) {
		$this->optons = $options;
		$this->pageinfo = $pageinfo;
		$this->make_data_available();

		add_action( 'admin_menu', array(&$this, 'add_admin_menu'));


	}
}
?>

