<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminsmodel','model');
		login();
		hak_akses();
	}

	public function index()
	{
		$status = array('active','non-active');
		$data['success_message'] = $this->session->flashdata('success_message');
		$data['admins'] = $this->model->get_all($status);
		$this->template->load('templatedhas','admins/index', $data);
	}

	public function add()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('pwd', 'Password', 'trim|required');

			if ($this->form_validation->run() == TRUE ) {
				$this->model->input();
				$this->session->set_flashdata('success_message', "Add Admins Success");
				redirect("backend/admins",'refresh');
			} else {
				$data['message_error'] = ( validation_errors()  ? validation_errors() : $this->session->flashdata('message_error'));
				$this->template->load('templatedhas','admins/add',$data);
			}
		
	}


	public function delate($id)
	{
		$query = $this->model->delate(to_Decrypt($id));
		if($query){
			$this->session->set_flashdata('success_message', "Delete admins success");
			redirect("backend/admins", 'refresh');
		}else{
			$this->session->set_flashdata('message', "Delete admins error");
			redirect("backend/admins", 'refresh');
		}	
		
		
	}


	public function edit($id)
	{
		$this->form_validation->set_rules('name', 'name', 'trim|required');
		$this->form_validation->set_rules('hak_akses', 'hak_akses', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			$this->model->edit(to_Decrypt($id));
			$this->session->set_flashdata('success_message', "Update admins success");
            redirect("backend/admins", 'refresh');
		} else {
			$data['message_error'] = ( validation_errors()  ? validation_errors() : $this->session->flashdata('message_error'));
			$single = $this->model->get_by_id(to_Decrypt($id));
			$data['single'] = $single[0];
			$this->template->load('templatedhas','admins/edit',$data);
		}

	}

	public function check_email_admins()
	{
		$data 	= array();
		$email 	=  $this->input->post('email');
		$valid 	=  $this->model->check_email($email);
		if($valid > 0){
			$data['status'] 	= FALSE;
			$data['message'] 	= "Email already use, please change the email";
		}else{
			$data['status']		= TRUE;
			$data['message']	= "Email Can Use";
		}
		echo json_encode($data);
	}



}

/* End of file Admins.php */
/* Location: ./application/modules/backend/controllers/Admins.php */