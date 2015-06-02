<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class Templates extends MX_Controller {
	
	function __construct() {
		parent::__construct ();
		$this->load->model('db_table_translations/Mdl_db_table_translations');
	}
	
	public function user_template ($data=array()) {
		
		if($this->session->lang != null)
		{
			
			$lang =$this->session->lang;
		}
		else if($this->input->cookie('lang')!= null)
		{
			$lang = $this->input->cookie('lang');
		}
		else
		{
			$lang = 'en';
		}
		$translations= $this->Mdl_db_table_translations->get_where($lang);
		foreach ( $translations as $translation){
			
			$data['translations'][$translation['KeyText']]= $translation['Text'];
		}
		$this->load->view ('user_template', $data);
	}
}
