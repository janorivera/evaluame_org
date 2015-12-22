<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Mdl_top_nav_fb_login extends CI_Model {
	function __construct() {
		parent::__construct ();
		$this->load->model ( 'db_table_users/Mdl_db_table_users' );
	}
	function get_fb_user($fbId) {
		$user = $this->Mdl_db_table_users->get_where_custom ( 'FbId', $fbId );
		return $user;
	}
	function insert_fb_user($fbUser) {
		$user ['FbId'] = $fbUser ['id'];
		$user ['FirstName'] = $fbUser ['first_name'];
		$user ['LastName'] = $fbUser ['last_name'];
		if (array_key_exists ( 'email', $fbUser ))
			$user ['Email'] = $fbUser ['email'];
		if (array_key_exists ( 'gender', $fbUser ))
			$user ['Gender'] = $fbUser ['gender'];
		if (array_key_exists ( 'birthday', $fbUser )) {
			$user ['Birthday'] = new DateTime ();
			$user ['Birthday']->setTimestamp ( strtotime ( $fbUser ['birthday'] ) );
			$user ['Birthday'] = $user ['Birthday']->format ( 'Y-m-d' );
		}
		if (array_key_exists ( 'location', $fbUser ))
			$user ['Location'] = $fbUser ['location']->name;
		$user ['State'] = true;
		$this->Mdl_db_table_users->insert ( $user );
	}
	function update_fb_user($fbUser) {
		$user ['FirstName'] = $fbUser ['first_name'];
		$user ['LastName'] = $fbUser ['last_name'];
		if (array_key_exists ( 'email', $fbUser ))
			$user ['Email'] = $fbUser ['email'];
		if (array_key_exists ( 'gender', $fbUser ))
			$user ['Gender'] = $fbUser ['gender'];
		if (array_key_exists ( 'birthday', $fbUser )) {
			$user ['Birthday'] = new DateTime ();
			$user ['Birthday']->setTimestamp ( strtotime ( $fbUser ['birthday'] ) );
			$user ['Birthday'] = $user ['Birthday']->format ( 'Y-m-d' );
		}
		
		if (array_key_exists ( 'location', $fbUser ))
			$user ['Location'] = $fbUser ['location']->name;
		$user ['State'] = true;
		
		$this->Mdl_db_table_users->update_where_custom ( 'FbId', $fbUser ['id'], $user );
	}
	function inactivate_fb_user($fbUser) {
		$user ['State'] = false;
		$this->Mdl_db_table_users->update_where_custom ( 'FbId', $fbUser ['id'], $user );
	}
	function reactivate_fb_user($fbUser) {
		$user ['State'] = true;
		$this->Mdl_db_table_users->update_where_custom ( 'FbId', $fbUser ['id'], $user );
	}
}