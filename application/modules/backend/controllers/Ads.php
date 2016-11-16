<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ads extends CI_Controller {
	
	public function __construct()
    {
		parent::__construct();
		$this->load->model('Adsmodel', 'model');
		login();
		hak_akses();
    }
	
	public function index()
	{
		$status	= array('active', 'nonactive');
        $data['success_message'] = $this->session->flashdata('success_message');
		$data['ads']		= $this->model->get_all($status);

		$this->template->load('templatedhas', 'ads/index', $data);
	}

	public function add()
	{
		$this->form_validation->set_rules('title', 'Title', 'trim|required');

		if ( $this->form_validation->run() == true){

			$this->model->insert();
            $this->session->set_flashdata('success_message', "Add Ads success");
            redirect("backend/ads/index", 'refresh');

		}else{
			$data['message'] 	= (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
			$data['title']		= 'Add Ads';
			
			
			$this->template->load('templatedhas', 'ads/add', $data);
		}
	}

	public function edit($id)
	{
		$status	= array('active', 'nonactive','deleted');
		$this->form_validation->set_rules('title', 'Title', 'trim|required');

		if ( $this->form_validation->run() == true){

			$this->model->update(to_Decrypt($id));
            $this->session->set_flashdata('success_message', "Update Ads success");
            redirect("backend/ads/index", 'refresh');

		}else{
			$data['message'] 	= (validation_errors() ? validation_errors() : $this->session->flashdata('message'));
			$data['styles'] 	='';
			$data['scripts']	= '<script src="'. base_url().'assets/backend/js/core/demo/DemoFormComponents.js"></script>
							   		<script src="'. base_url().'assets/backend/js/libs/jquery-validation/dist/jquery.validate.min.js"></script>
							   		<script src="'. base_url().'assets/backend/js/libs/jquery-validation/dist/additional-methods.min.js"></script>';
			$single 			= $this->model->get_by_id(to_Decrypt($id));
			$data['single'] 	= $single[0];
			$data['title']		= 'Edit Ads';
			$data['ads']		= $this->model->get_all($status);

			$this->template->load('template', 'ads/edit', $data);
		}
	}

	public function delete($id)
	{
		$query = $this->model->delete(to_Decrypt($id));
		if($query){
			$this->session->set_flashdata('success_message', "Delete Member success");
			redirect("backend/ads/index", 'refresh');
		}else{
			$this->session->set_flashdata('message', "Delete admins error");
			redirect("backend/ads/", 'refresh');
		}
	}

	

}
	