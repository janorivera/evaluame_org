<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Mdl_db_table_regions extends CI_Model {
	function __construct() {
		parent::__construct ();
		$this->load->database ();
	}
	function get_table() {
		$table = "Regions";
		return $table;
	}
	function get($order_by) {
		$table = $this->get_table ();
		$this->db->order_by ( $order_by );
		$query = $this->db->get ( $table );
		return $query->result_array ();
	}
}

