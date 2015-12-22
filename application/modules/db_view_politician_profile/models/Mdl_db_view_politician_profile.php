<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Mdl_db_view_politician_profile extends CI_Model {
	function __construct() {
		parent::__construct ();
	}
	function get_table() {
		$table = "PoliticianProfiles";
		return $table;
	}
	function get($order_by) {
		$table = $this->get_table ();
		$this->db->order_by ( $order_by );
		$query = $this->db->get ( $table );
		return $query;
	}
	function search_politician ($searchText) {
		$table = $this->get_table ();
		$this->db->where("(`FirstName` LIKE '%$searchText%'");
		$this->db->or_where("`LastName` LIKE '%$searchText%'");
		$this->db->or_where("`RegionName` LIKE '%$searchText%'");
		$this->db->or_where("`PartyName` LIKE '%$searchText%')");
		$query = $this->db->get ( $table );
		return $query->result_array();
		
	}
	function get_where($politicianId) {
		$table = $this->get_table ();
		$query = $this->db->get_where ( $table, array (
				'PoliticianId' => $politicianId 
		) );
		return $query->row_array ();
	}
}