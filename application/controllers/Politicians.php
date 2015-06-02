<?php
class Politicians extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Politicians_model');
	}

	public function index()
	{
		$data['politicians'] = $this->Politicians_model->get_politicians();
		$data['title'] = 'Politicians';
		
		$this->load->view('templates/header', $data);
		$this->load->view('politicians/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($politicianId = NULL)
	{
		$data['politician_item'] = $this->Politicians_model->get_politicians($politicianId);
		
		if (empty($data['politician_item']))
		{
			show_404();
		}
		
		$data['title'] = $data['politician_item']['FirstName'];
		
		$this->load->view('templates/header', $data);
		$this->load->view('politicians/view', $data);
		$this->load->view('templates/footer');
	}
}
