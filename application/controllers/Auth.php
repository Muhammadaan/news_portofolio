<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('authmodel','model');

		$lang = $this->session->userdata("lang") == null ? "jawa" : $this->session->userdata("lang");
        $this->lang->load($lang, $lang);  	
	}
	public function index()
	{	
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');		
		$this->form_validation->set_rules('password', 'Password', 'trim|required');



		$user = $this->model->get_login(
			$this->input->post('email'),
			$this->input->post('password')
			);

		if ($this->form_validation->run() == TRUE ) {
			$user = $this->model->get_login(
			$this->input->post('email'),
			$this->input->post('password')
			);

		
				if (is_array($user)) {
					$this->session->set_userdata('back_email', $user[0]->email);
					$this->session->set_userdata('back_name', $user[0]->name);
					$this->session->set_userdata('back_userid', $user[0]->id);
					$this->session->set_userdata('back_level', $user[0]->id_level);

					$access = $this->session->userdata('back_level');

						if ($access == 1) {
							redirect('backend/dhasboard','refresh');
						} else if($access == 2) {
							redirect('backend/dhasboardcustomer','refresh');
						}
					


				} else {
					$data['message_error'] = $user;
					$data['success_message'] = $this->session->flashdata('success_message');
					$this->template->load('template-auth','auth/login',$data);
				}
		} else {
			$data['message_error'] = ( validation_errors()) ? validation_errors(): $this->session->flashdata('message');
			$data['success_message'] = $this->session->flashdata('success_message');
			$this->template->load('template-auth','auth/login',$data);

			
		}

	}

	public function forgot()
	{
		
	}

	public function changepassword()
	{


	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth','refresh');
	}

	public function languages($get_lang)
	{
		$this->session->set_userdata('lang',$get_lang);
		redirect('auth');		
	}
}
