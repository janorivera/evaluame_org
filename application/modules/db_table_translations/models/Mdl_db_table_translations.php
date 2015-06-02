<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Mdl_db_table_translations extends CI_Model {
	function __construct() {
		parent::__construct ();
		$this->load->database ();
	}
	function get_table() {
		$table = "Translations";
		return $table;
	}
	function get($order_by) {
		$table = $this->get_table ();
		$this->db->order_by ( $order_by );
		$query = $this->db->get ( $table );
		return $query->result_array ();
	}
	function get_where($lang) {
		$table = $this->get_table ();
		$query = $this->db->get_where ( $table, array (
				'Lang' => $lang
		) );
		return $query->result_array ();
	}

}