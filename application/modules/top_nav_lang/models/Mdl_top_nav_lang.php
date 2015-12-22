<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Mdl_top_nav_lang extends CI_Model {
	function __construct() {
		parent::__construct ();
		
		$this->load->model ( 'db_table_translations/Mdl_db_table_translations' );
	}
	function get_translations($lang) {
		$this->input->set_cookie ( 'lang', $lang );
		$this->session->set_userdata ( 'lang', $lang );
		$translations = $this->Mdl_db_table_translations->get_where ( $lang );
		return $translations;
	}
}