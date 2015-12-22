<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Mdl_db_table_politicians extends CI_Model {
	function __construct() {
		parent::__construct ();
		$this->load->database ();
	}
	/*
	 * public function get($politicianId = FALSE)
	 * {
	 * if ( $politicianId=== FALSE)
	 * {
	 * $query = $this->db->get('Politicians');
	 * return $query->result_array();
	 * }
	 * $query = $this->db->get_where('Politicians', array('PoliticianId' => $politicianId));
	 * return $query->row_array();
	 * }
	 *
	 *
	 */
	function get_table() {
		$table = "Politicians";
		return $table;
	}
	function get($order_by) {
		$table = $this->get_table ();
		$this->db->order_by ( $order_by );
		$query = $this->db->get ( $table );
		return $query->result_array ();
	}
}

