<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Top_nav_fb_login extends MX_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'Mdl_top_nav_fb_login' );
	}
	public function render_template($action) {
		$data ['ParentModule'] = 'top_nav_fb_login';
		$data ['ParentMethod'] = 'fb_login';
		$data ['ParentParams'] = $action;
		$data ['container'] = 'top_nav';
		$this->load->module ( 'templates' );
		$this->templates->user_template ( $data );
	}
	public function fb_login($action) {
		if ($action == 'fbLogout') {
			$this->session->sess_destroy ();
			redirect ( $this->facebook->logout_url ( $this->facebook->session, base_url ( 'top_nav_fb_login/render_template/logout' ) ) );
		} 

		else if ((($user = $this->facebook->get_user ()) == false) || $action == 'logout') {
			
			if ($this->session->lang != null) {
				
				$lang = $this->session->lang;
			} else if ($this->input->cookie ( 'lang' ) != null) {
				$lang = $this->input->cookie ( 'lang' );
			} else {
				$lang = 'es';
			}
			
			if ($lang == 'en') {
				$user ['Name'] = 'Guest';
				$user ['FirstName'] = 'Guest';
			} else if ($lang == 'es') {
				$user ['Name'] = 'Invitado';
				$user ['FirstName'] = 'Invitado';
			}
			$user['profilePicture']="http://www.gravatar.com/avatar/?d=mm&s=35";
			$data ['user'] = $user;
			$data ['fbLoginUrl'] = $this->facebook->login_url ();
		} else if ((($fbUser = $this->facebook->get_user ()) != false) && $action == 'login') {
			$user['profilePicture'] = $this->facebook->get_user_profile_picture($fbUser);
			if (($user = $this->Mdl_top_nav_fb_login->get_fb_user ( $fbUser ['id'] )) == NULL) {
				$this->Mdl_top_nav_fb_login->insert_fb_user ( $fbUser );
				$user = $this->Mdl_top_nav_fb_login->get_fb_user ( $fbUser ['id'] );
			} else {
				$this->Mdl_top_nav_fb_login->update_fb_user ( $fbUser );
				$user = $this->Mdl_top_nav_fb_login->get_fb_user ( $fbUser ['id'] );
			}
			$this->session->firstName = $user ['FirstName'];
			$this->session->lastName = $user ['LastName'];
			$this->session->userId = $user ['UserId'];
			$this->session->profilePicture = $user['profilePicture'];
			$data ['user'] = $user;
			$data ['fbUser'] = $fbUser;
			$data ['profilePicture'] = $user['profilePicture'];
		}
		/*
		 * if ($action=='test'){
		 *
		 * $fb_user['id']= 123;
		 * $fb_user['first_name']='Antonio';
		 * $fb_user['last_name']= 'Vera';
		 * $userId =123;
		 *
		 * if (($user= $this->Mdl_top_nav_fb_login->get_user($userId))==NULL){
		 *
		 * $this->Mdl_top_nav_fb_login->insert_user($fb_user);
		 * } else {
		 * $this->Mdl_top_nav_fb_login->update_user($fb_user);
		 * $user= $this->Mdl_top_nav_fb_login->get_user($userId);
		 * Echo 'Hola '. $user['FirstName'];
		 *
		 * }
		 *
		 * echo var_dump($user);
		 * }
		 */
		
		$this->load->view ( 'view_top_nav_fb_login', $data );
	}
}