<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Mdl_db_table_politician_scores extends CI_Model {
	function __construct() {
		parent::__construct ();
	}
	function get_table() {
		$table = "PoliticianScores";
		return $table;
	}
	function get($order_by) {
		$table = $this->get_table ();
		$this->db->order_by ( $order_by );
		$query = $this->db->get ( $table );
		return $query->result_array ();
	}
	function get_where($politicianScoreId) {
		$table = $this->get_table ();
		$query = $this->db->get_where ( $table, array (
				'PoliticianScoreId' => $politicianScoreId 
		) );
		return $query->row_array ();
	}
	function get_current_user_score($userId = 0, $politicianId) {
		$table = $this->get_table ();
		$query = $this->db->get_where ( $table, array (
				'PoliticianId' => $politicianId,
				'UserId' => $userId,
				'Current' => true 
		) );
		return $query->row_array ();
	}
	function get_historic_user_score($userId = 0, $politicianId) {
		$table = $this->get_table ();
		$this->db->select ( 'Score,TimeStamp' );
		$this->db->where ( 'PoliticianId', $politicianId );
		$this->db->where ( 'UserId', $userId );
		$this->db->order_by ( 'TimeStamp' );
		$query = $this->db->get ( $table );
		return $query->result_array ();
	}
	function get_where_custom($custom) {
		$table = $this->get_table ();
		$query = $this->db->get_where ( $table, $custom );
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
	function update_where_custom($data, $custom) {
		$table = $this->get_table ();
		$this->db->update ( $table, $data, $custom );
	}
}