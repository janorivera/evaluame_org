<?php
if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Mb_contact extends MX_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->library ( 'email' );
		$this->load->helper ( 'form' );
		$this->load->helper ( 'html' );
		$this->load->library ( 'form_validation' );
	}
	public function display_contact($data = null) {
		$this->load->view ( 'view_mb_contact', $data );
	}
	public function send_msg() {
		
		// the message
		$msg = $this->input->post ( 'comment' );
		$email = $this->input->post ( 'email' );
		$name = $this->input->post ( 'name' );
		
		$this->email->from ( 'contact_form@evaluame.org', $name );
		$this->email->to ( 'contacto@evaluame.org' );
		// $this->email->cc('another@another-example.com');
		// $this->email->bcc('them@their-example.com');
		
		$this->email->subject ( @email );
		$this->email->message ( '$msg' );
		
		$this->email->send ();
		$data ['mailMsg'] = "EmailSent";
		
		$this->render_template ( $data );
	}
	public function render_template($params = null) {
		$data ['ParentModule'] = 'mb_contact';
		$data ['ParentMethod'] = 'display_contact';
		$data ['ParentParams'] = $params;
		$data ['container'] = 'main_box';
		
		$this->load->module ( 'templates' );
		$this->templates->user_template ( $data );
	}
}