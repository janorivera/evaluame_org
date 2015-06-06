<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Mdl_mb_politician_info extends CI_Model {
	function __construct() {
		parent::__construct ();
		$this->load->model('db_view_politician_profile/Mdl_db_view_politician_profile');
		$this->load->model('db_view_politician_ranking/Mdl_db_view_politician_ranking');
		$this->load->model('db_view_politician_scores_gbti/Mdl_db_view_politician_scores_gbti');
		$this->load->model('db_view_politician_scores_gbg/Mdl_db_view_politician_scores_gbg');
		$this->load->model('db_table_politician_scores/Mdl_db_table_politician_scores');
		$this->load->model('db_table_politician_history/Mdl_db_table_politician_history');
	}
	
	function get_politician_profile($politicianId) {
	 
		$politicianProfile = $this-> Mdl_db_view_politician_profile->get_where ($politicianId);
		
		return $politicianProfile;
	}
	
	function get_politician_score($userId,$politicianId){
		
		$politicianScore=$this->Mdl_db_table_politician_scores->get_current_user_score ($userId,$politicianId);
		
		return $politicianScore;
		
	}
	function get_politician_historic_score_user($userId,$politicianId){
		
		$politicianHistoricScoreUser= $this->Mdl_db_table_politician_scores->get_historic_user_score($userId,$politicianId);
		return $politicianHistoricScoreUser;
	}
	function get_politician_historic_score_avg ($politicianId){
		
	  $politicianHistoricScoreAvg=$this->Mdl_db_table_politician_history-> get_score_avg($politicianId);
	  return $politicianHistoricScoreAvg;
		
	}
	
	function get_politician_summary ($politicianId)
	{
		$politicianSummary['ranking']= $this-> Mdl_db_view_politician_ranking->get_where ($politicianId);
		/*Group by time interval: decades*/
		$politicianSummary['gbti']= $this-> Mdl_db_view_politician_scores_gbti->get_where ($politicianId);
		/*Group by gender*/
		$politicianSummary['gbg']= $this-> Mdl_db_view_politician_scores_gbg->get_where ($politicianId);
		$politicianSummary['maxScore']= $this->Mdl_db_table_politician_history-> get_score_max($politicianId);
		$politicianSummary['minScore']= $this->Mdl_db_table_politician_history-> get_score_min($politicianId);
		return $politicianSummary;
	}
	function insert_politician_score ($userId,$politicianId,$score){
		$data['UserId']=$userId;
		$data['PoliticianId']=$politicianId;
		$data['Score']=$score/100;
		$data['Current']=true;
		$data['TimeStamp']=date('Y-m-d');
		
		$where = ['UserId'=> $userId,'PoliticianId'=>$politicianId, 'TimeStamp'=> date('Y-m-d') ];
		
		$row= $this->Mdl_db_table_politician_scores->get_where_custom($where);
		$this->Mdl_db_table_politician_scores->update_where_custom(['Current'=> 0], ['UserId'=> $userId,'PoliticianId'=>$politicianId, 'Current'=> 1]);
		if ($row==null)$this->Mdl_db_table_politician_scores->insert($data);
		else $this->Mdl_db_table_politician_scores->update_where_custom(['Score'=> ($score/100),'Current'=>1], $where);
		
		
	}

}