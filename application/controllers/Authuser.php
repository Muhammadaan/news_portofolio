<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authuser extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('authusermodel','model');
		
	}


	public function index()
	{
		echo "tes";
			
	}

	public function register()
	{
		
		$data = array(
		           'captcha' => $this->recaptcha->getWidget(), // menampilkan recaptcha
		           'script_captcha' => $this->recaptcha->getScriptTag(), // javascript recaptcha ditaruh di head 
		           );
		$this->template->load("template","authuser/Register",$data);


	}

	public function checkemail()
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

/* End of file Authuser.php */
/* Location: ./application/controllers/Authuser.php */