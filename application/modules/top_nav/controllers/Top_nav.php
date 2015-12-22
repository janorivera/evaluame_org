<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Top_nav extends MX_Controller {
	public function __construct() {
		parent::__construct ();
	}
	public function display_top_nav($ParentModule = null, $ParentMethod = null, $ParentParams = null) {
		$data ['ParentModule'] = $ParentModule;
		$data ['ParentMethod'] = $ParentMethod;
		$data ['ParentParams'] = $ParentParams;
		
		$this->load->view ( 'view_top_nav', $data );
	}
}