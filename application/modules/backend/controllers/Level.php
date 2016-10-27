<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('levelmodel','model');
		
	}


	public function index()
	{
		$data['success_message'] = $this->session->flashdata('success_message');
		$data['level'] = $this->model->get_all();
		$this->template->load('templatedhas','level/index', $data);
		
	}

	public function add()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');

		if ($this->form_validation->run() ==  TRUE) {
			$this->model->input();
			$this->session->set_flashdata('success_message', "Add Level Success");
			redirect('backend/level','refresh');
		} else {
			$data['message_error'] = (validation_errors()  ? validation_errors() : $this->session->flashdata('message_error'));
			$this->template->load('templatedhas','level/add',$data);
		}



	}


}

/* End of file Level.php */
/* Location: ./application/modules/backend/controllers/Level.php */