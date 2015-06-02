<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Side_nav extends MX_Controller
{

public function __construct() {
parent::__construct();
}

public function display_side_nav (){
	$this->load->view('view_side_nav');
	
	
}



}