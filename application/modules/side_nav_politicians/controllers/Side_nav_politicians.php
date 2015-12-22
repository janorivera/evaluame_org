<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Side_nav_politicians extends MX_Controller {
	private $_modelRegions;
	private $_modelPoliticianTypes;
	private $_modelPoliticians;
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'Mdl_side_nav_politicians' );
	}
	public function list_unsorted_data() {
		$data = $this->Mdl_side_nav_politicians->list_unsorted_data ();
	}
	public function display_side_nav_politicians() {
		$data = $this->Mdl_side_nav_politicians->list_sorted_data ();
		
		$this->load->view ( 'view_side_nav_politicians', $data );
	}
}
