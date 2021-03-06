<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Mdl_db_table_users extends CI_Model {
	function __construct() {
		parent::__construct ();
		$this->load->database ();
	}
	function get_table() {
		$table = "Users";
		return $table;
	}
	function get($order_by) {
		$table = $this->get_table ();
		$this->db->order_by ( $order_by );
		$query = $this->db->get ( $table );
		return $query->result_array ();
	}
	function get_where($userId) {
		$table = $this->get_table ();
		$query = $this->db->get_where ( $table, array (
				'UserId' => $userId 
		) );
		return $query->row_array ();
	}
	function get_where_custom($custom, $value) {
		$table = $this->get_table ();
		$query = $this->db->get_where ( $table, array (
				$custom => $value 
		) );
		return $query->row_array ();
	}
	function insert($data) {
		$table = $this->get_table ();
		$this->db->insert ( $table, $data );
	}
	function update_where($id, $data) {
		$table = $this->get_table ();
		$this->db->where ( 'UserId', $id );
		$this->db->update ( $table, $data );
	}
	function update_where_custom($custom, $value, $data) {
		$table = $this->get_table ();
		$this->db->where ( $custom, $value );
		$this->db->update ( $table, $data );
	}
}