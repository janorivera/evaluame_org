<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Mdl_mb_search_results extends CI_Model {
	function __construct() {
		parent::__construct ();
		
		$this->load->model ( 'db_view_politician_profile/Mdl_db_view_politician_profile' );
	}
	function search_politician($searchText) {
		$searchResults = $this->Mdl_db_view_politician_profile->search_politician ( $searchText );
		return $searchResults;
	}
}