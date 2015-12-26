<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Mdl_sb_comments extends CI_Model {
	function __construct() {
		$this->load->model ( 'db_table_comments/Mdl_db_table_comments' );
		parent::__construct ();
	}
	public function insert_comment($name, $email, $comment, $profilePicture, $date, $conversationId) {
		$user_comment ['Name'] = $name;
		$user_comment ['Email'] = $email;
		$user_comment ['Comment'] = $comment;
		$user_comment ['ProfilePictureUrl'] = $profilePicture;
		$user_comment ['Date'] = $date;
		$user_comment ['ConversationId'] = $conversationId;
		$this->Mdl_db_table_comments->insert ( $user_comment );
	}
	
	// retrive comments
	public function get_comments($conversationId) {
		$comments = $this->Mdl_db_table_comments->get_where_custom ( 'ConversationId', $conversationId );
		
		return $comments;
	}
}