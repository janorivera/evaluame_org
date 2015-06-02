<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Mb_privacy_policy extends MX_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->library('email');
		$this->load->helper ( 'form' );
		$this->load->helper ( 'html' );
		$this->load->library ( 'form_validation' );
	}
	
	public function display_privacy_policy($data = null){
		$this->load->view ('view_mb_privacy_policy',$data);
		
	}
	
	
	public function render_template($params=null) {
		$data ['ParentModule'] = 'mb_privacy_policy';
		$data ['ParentMethod'] = 'display_privacy_policy';
		$data ['ParentParams'] = $params;
		$data ['container'] = 'main_box';
		
		$this->load->module ( 'templates' );
		$this->templates->user_template ( $data );
	}
	
}