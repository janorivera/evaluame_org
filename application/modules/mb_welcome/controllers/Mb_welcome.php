<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Mb_welcome extends MX_Controller {
	public function __construct() {
		parent::__construct ();
	}
	
	public function display_welcome()
	{
		
		$this->load->view ('view_mb_welcome');
		
	}
	
}