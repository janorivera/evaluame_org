<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Mb_search_results extends MX_Controller {
	function __construct() {
		parent::__construct ();
		$this->load->model ( 'Mdl_mb_search_results' );
	}
	
	function search($params = 0){
		#$this->Mdl_mb_politician_info->insert_politician_score ( $this->session->userId, $this->session->politicianId, $this->input->post ( 'userrating' ) );
		$results='test';
		log_message('error', 'im here');
		log_message('error', $params);
		$searchText=$this->session->flashdata('search_text');
		$data ['searchResults'] = $this->Mdl_mb_search_results->search_politician ($searchText);
		$this->render_template ($data );
	}
	
	
	public function render_template($params = null) {
		log_message('error', 'render_template');
		$data ['ParentModule'] = 'mb_search_results';
		$data ['ParentMethod'] = 'display_search_results';
		$data ['ParentParams'] = $params;
		$data ['container'] = 'main_box';
		log_message('error',serialize($data));

		$this->load->module ( 'templates' );
		$this->templates->user_template ( $data );
	}
	
	public function display_search_results($data = null) {
		log_message('error', 'display');
		log_message('error',serialize($data));
		
		$this->load->view ( 'view_mb_search_results', $data );
	}
	
}