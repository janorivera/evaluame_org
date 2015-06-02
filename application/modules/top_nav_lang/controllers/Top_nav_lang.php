<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Top_nav_lang extends MX_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper('cookie');
		$this->load->model ( 'Mdl_top_nav_lang' );
	}
	public function render_template($params) {
	    if ($params == 'es' || $params =='en') 
	    $this->set_lang($params);
		$this->load->module ( 'templates' );
		$this->templates->user_template ();
	}
	public function set_lang($lang = null) {
		if ($lang != null) {
			$this->input->set_cookie ( 'lang', $lang );
			$this->session->set_userdata ( 'lang', $lang );
		}
		
	}
	public function drop_down_lang (){
		
		$this->load->view ( 'view_top_nav_lang' );
	}


}