<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mdl_db_table_politician_history extends CI_Model {

function __construct() {
parent::__construct();
}

function get_table() {
	$table = "PoliticianHistory";
	return $table;
}
function get_score_avg($politicianId) {
	$table = $this->get_table ();
	$this->db->select('ScoreAvg,Date');
	$this->db->where('PoliticianId',$politicianId);
	$this->db->order_by ( 'Date');
	$query = $this->db->get ($table );
	return $query->result_array ();
}



function get_score_max($politicianId){
	$startDate =date('Y-m-d', strtotime('-30 day'));
	$endDate =date('Y-m-d', strtotime('+1 day'));
	$table = $this->get_table ();
	$this->db->select('ScoreAvg,Date,NrVoters');
	$this->db->where('PoliticianId',$politicianId);
	$this->db->where('Date >=', $startDate);
	$this->db->where('Date <=', $endDate);
	$this->db->order_by ( 'ScoreAvg','DESC');
	$this->db->order_by ( 'Date', 'DESC');
	$query = $this->db->get ($table );
	return $query->row_array ();
}


function get_score_min($politicianId){
	$startDate =date('Y-m-d', strtotime('-30 day'));
	$endDate =date('Y-m-d', strtotime('+1 day'));
	$table = $this->get_table ();
	$this->db->select('ScoreAvg,Date,NrVoters');
	$this->db->where('PoliticianId',$politicianId);
	$this->db->where('Date >=', $startDate);
	$this->db->where('Date <=', $endDate);
	$this->db->order_by ( 'ScoreAvg','ASC');
	$this->db->order_by ( 'Date', 'DESC');
	$query = $this->db->get ($table );
	return $query->row_array ();
}



}