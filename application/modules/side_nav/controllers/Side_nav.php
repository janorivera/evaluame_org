<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Side_nav extends MX_Controller {
	public function __construct() {
		$this->load->helper ( 'form' );
		$this->load->helper('url');
		parent::__construct ();
	}
	public function search() {
		$params=$this->input->post('usersearch');
		log_message('error', $params);
		$this->session->set_flashdata('search_text', $params);
		redirect('/mb_search_results/search/');
		
		
	}
	public function display_side_nav() {
		$this->load->view ( 'view_side_nav' );
	}
}