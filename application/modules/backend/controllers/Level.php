<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('levelmodel','model');
		login();
		hak_akses();
		
	}


	public function index()
	{
		$data['success_message'] = $this->session->flashdata('success_message');
		$data['level'] = $this->model->get_all();
		// $level = $this->model->get_all();
		
		// $list = array();

		// foreach ($level as $lv) {
		// 	if($lv['parent_id'] == 0){
		// 		// $list[$lv['id']] = $lv;
		// 		$list[$lv['id']] = $lv  ;
		// 	}else{
				
		// 			// $list[$lv['parent_id']]['child'] = $lv;

				
				
		// 	}
		// }
		// echo "<pre>";
		// var_dump($list);
		// exit();
		// echo "<pre>";
		// var_dump($data['level']);
		// exit();
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
			$data['perent'] = $this->model->get_perent();
			// var_dump($d);
			// exit();
			$this->template->load('templatedhas','level/add',$data);
		}




	}

	public function delate($id)
	{
		$query =$this->model->delate(to_Decrypt($id));

		if ($query) {
			$this->session->set_flashdata('success_message', 'Delate article Success');
			redirect('backend/level','refresh');
		} else {
			$this->session->set_flashdata('error_message', 'Delate Article Error');
			redirect('backend/level','refresh');
		}
		
	}


}

/* End of file Level.php */
/* Location: ./application/modules/backend/controllers/Level.php */