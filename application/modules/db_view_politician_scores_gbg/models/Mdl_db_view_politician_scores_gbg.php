<?php
/*
 * | -------------------------------------------------------------------
 * | Public View PoliticianScoresGroupByGender [GPG]
 * | -------------------------------------------------------------------
 * |
 * |
 * |
 */
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Mdl_db_view_politician_scores_gbg extends CI_Model {
	function __construct() {
		parent::__construct ();
	}
	function get_table() {
		$table = "PoliticianScoresGroupByGender";
		return $table;
	}
	function get($order_by) {
		$table = $this->get_table ();
		$this->db->order_by ( $order_by );
		$query = $this->db->get ( $table );
		return $query;
	}
	function get_where($politicianId) {
		$table = $this->get_table ();
		$query = $this->db->get_where ( $table, array (
				'PoliticianId' => $politicianId 
		) );
		return $query->result_array ();
	}
}