<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Sb_comments extends MX_Controller {
	function __construct() {
		parent::__construct ();
		$this->load->model('Mdl_sb_comments');
	}
	
	
	
	public function display_comments()
	{
		log_message('error', 'Displaying comments');
		$id_post=1;
		$data['comments'] = $this->Mdl_sb_comments->get_comments(0);
		$data['conversationId']=1;
		$this->load->view ( 'view_sb_comments',$data );
	}
	
	public function submit_comment()
	{
		log_message('error', 'Submiting comment');
		extract($_POST);
		if($_POST['act'] == 'add-com'){
		$name = htmlentities($name);
		$email = htmlentities($email);
		$comment = htmlentities($comment);
		$date=date('Y-m-d H:i');
		$conversationId=1;
		// Connect to the database
		
		
		// Get gravatar Image
		// https://fr.gravatar.com/site/implement/images/php/
		$default = "mm";
		$size = 35;
		if ($this->session->profilePicture!=null){
			$profilePicture = $this->session->profilePicture;
		} else {
			$profilePicture = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . $default . "&s=" . $size;
		}
		
		
		if(strlen($name) <= '1'){ $name = 'Anónimo';}
		$this->Mdl_sb_comments->insert_comment($name,$email,$comment,$profilePicture,$date,$conversationId);
		
		
		//insert the comment in the database
		# mysql_query("INSERT INTO comments (name, email, comment, id_post)VALUES( '$name', '$email', '$comment', '$id_post')");
		#if(!mysql_errno()){
		$data['name']=$name;
		$data['email']=$email;
		$data['comment']=$comment;
		$data['profilePicture']=$profilePicture;
		$this->load->view ( 'view_sb_insert_comment',$data );
		}
	}

	
	
	
	
	
}