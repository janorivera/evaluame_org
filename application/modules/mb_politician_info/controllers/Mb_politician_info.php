<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Mb_politician_info extends MX_Controller {
	public function __construct() {
		parent::__construct ();
		
		$this->load->helper ( 'form' );
		$this->load->helper ( 'html' );
		$this->load->library ( 'form_validation' );
		$this->load->model ( 'Mdl_mb_politician_info' );
		
		if (ENVIRONMENT == 'development' && $this->session->userId == null) {
			
			$this->session->userId = 10;
		}
	}
	public function render_template($politicianId = 0) {
		$data ['ParentModule'] = 'mb_politician_info';
		$data ['ParentMethod'] = 'get_politician_info';
		$data ['ParentParams'] = [ 
				'politicianId' => $politicianId 
		];
		$data ['container'] = 'main_box';
		$this->session->politicianId = $politicianId;
		$this->load->module ( 'templates' );
		$this->templates->user_template ( $data );
	}
	public function get_politician_info($params) {
		$data ['politicianProfile'] = $this->Mdl_mb_politician_info->get_politician_profile ( $params ['politicianId'] );
		$data ['politicianScore'] = $this->Mdl_mb_politician_info->get_politician_score ( $this->session->userId, $params ['politicianId'] );
		$data ['politicianHistoricScoreAvg'] = $this->Mdl_mb_politician_info->get_politician_historic_score_avg ( $params ['politicianId'] );
		$data ['politicianHistoricScoreUser'] = $this->Mdl_mb_politician_info->get_politician_historic_score_user ( $this->session->userId, $params ['politicianId'] );
		$data ['politicianSummary'] = $this->Mdl_mb_politician_info->get_politician_summary ( $params ['politicianId'] );
		
		/*
		 * The following sections need internet to get the news and tweets
		 * Set ONLINE to false to work offline
		 */
		
		define ( 'ONLINE', true );
		if (ENVIRONMENT == 'production')
			define ( 'ONLINE', true );
		if (ONLINE == true) {
			// the strtok will get the first word since the format for the lastname is "lastname1 lastname2"
			$this->google_news->setSearchQuery ( '"' . $data ['politicianProfile'] ['FirstName'] . ' ' . strtok ( $data ['politicianProfile'] ['LastName'], " " ) . '" ' . $data ['politicianProfile'] ['TypeName'] );
			$this->google_news->setNumberOfNews ( '10' );
			$data ['news'] = $this->google_news->getNews ();
			
			/* twitter */
			if ($data ['politicianProfile'] ['Twitter'] != '') {
				$getTweets = '?q=@' . $data ['politicianProfile'] ['Twitter'] . '&result_type=recent&count=20&lang=es';
				$this->twitter = new TwitterAPIExchange ( $this->config->item ( 'settings', 'twitter' ) );
				try {
					$response = $this->twitter->setGetfield ( $getTweets )->buildOauth ( URL_TWEETS, 'GET' )->performRequest ();
					$data ['tweets'] = json_decode ( $response, true );
				} catch ( Exception $e ) {
					$response = null;
				}
				
				$getUserTweets = '?screen_name=' . $data ['politicianProfile'] ['Twitter'] . '&count=20';
				try {
					$response = $this->twitter->setGetfield ( $getUserTweets )->buildOauth ( URL_USER_TWEETS, 'GET' )->performRequest ();
					$data ['userTweets'] = json_decode ( $response, true );
				} catch ( Exception $e ) {
					$response = null;
				}
			}
		}
		
		$this->load->view ( 'view_mb_politician_info', $data );
	}
	public function summary_test() {
		$data ['politicianSummary'] = $this->Mdl_mb_politician_info->get_politician_summary ( 5 );
		
		echo var_dump ( $data ['politicianSummary'] );
	}
	public function submit_score($params = 0) {
		$this->Mdl_mb_politician_info->insert_politician_score ( $this->session->userId, $this->session->politicianId, $this->input->post ( 'userrating' ) );
		$this->render_template ( $this->session->politicianId );
	}
}