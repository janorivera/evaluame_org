<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Mb_statistics extends MX_Controller {
	public function __construct() {
		parent::__construct ();
	}
	public function render_template($userId = 0) {
		$data ['ParentModule'] = 'mb_statistics';
		$data ['ParentMethod'] = 'display_statistics';
		$data ['ParentParams'] = [
				'userId' => $userId
		];
		$data ['container'] = 'main_box';
		$this->load->module ( 'templates' );
		$this->templates->user_template ( $data );
	}
	public function display_statistics($params)
	{
		
		$this->load->view ('view_mb_statistics');
		
	}
	
}