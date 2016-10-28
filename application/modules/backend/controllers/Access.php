<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('accessmodel','model');
		login();
		hak_akses();
		
	}

	public function index()
	{
		$data['success_message'] = $this->session->flashdata('success_message');
		$data['access'] = $this->model->get_all();
		$this->template->load('templatedhas','access/index',$data);
	
	}

	public function add()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('hak_access', 'hak_access', 'trim|required');


		if ($this->form_validation->run() == TRUE) {
			
			$this->model->insert();
			$this->session->set_flashdata('success_message', 'Add Access Success');
			redirect('backend/access','refresh');

		} else {
			$data['error_message'] =(validation_errors() ? validation_errors(): $this->session->flashdata('error_message'));
			$data['levels'] = $this->model->levels();
			$this->template->load('templatedhas','access/add',$data);
		}

	}


	public function edit($id)
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('hak_access', 'access', 'trim|required');


		if ($this->form_validation->run() == TRUE) {
			
			$this->model->edit(to_Decrypt($id));
			$this->session->set_flashdata('success_message', 'Update Access Success');
			redirect('backend/access','refresh');
		} else {
			$data['error_message'] = ( validation_errors() ? validation_errors(): $this->session->flashdata('error_message'));
			$akses = $this->model->get_by_id(to_Decrypt($id));
			$data["akses"] = $akses[0];
			$data["view"] = $this->model->levels();
			$this->template->load("templatedhas",'access/edit',$data);
		}
	}


}

/* End of file Access.php */
/* Location: ./application/modules/backend/controllers/Access.php */