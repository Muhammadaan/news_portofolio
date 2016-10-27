<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('categorymodel','model');
	}

	public function index()
	{
		$status = array('active','non-active');
		$data['success_message'] = $this->session->flashdata('success_message');
		$data['category'] = $this->model->get_all($status);
		$this->template->load('templatedhas','category/index', $data);
		
	}

	public function add()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');

		if ($this->form_validation->run() == TRUE ) {
			
			$this->model->input();
			$this->session->set_flashdata('success_message', 'success Add category');
			redirect('backend/category','refresh');
		} else {

			$data['message_error'] = (validation_errors() ? validation_errors(): $this->session->flashdata('message_error'));
			$this->template->load('templatedhas','category/add');
		}

		

	}

	public function delate($id)
	{
		$query = $this->model->delate(to_Decrypt($id));

		if ($query) {
			$this->session->set_flashdata('success_message', 'Delate category success');
			redirect('backend/category','refresh');
		} else {
			$this->session->set_flashdata('message_error', 'Delate Category error');
		}
		
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');

		if ($this->form_validation->run() == TRUE ) {
			$this->model->edit(to_Decrypt($id));
			$this->session->set_flashdata('success_message', ' Update Category Success');
			redirect('backend/category','refresh');
		} else {
			$data['message_error'] = ( validation_errors() ? validation_errors :$this->session->flashdata('message_error') );
			$single = $this->model->get_by_id(to_Decrypt($id));
			$data['single'] = $single[0];
			$this->template->load('templatedhas','category/edit',$data);
		}
		
	}

}

/* End of file Category.php */
/* Location: ./application/modules/backend/controllers/Category.php */