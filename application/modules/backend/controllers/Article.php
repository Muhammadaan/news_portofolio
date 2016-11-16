<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('articlemodel','model');
		login();
		hak_akses();

	}

	public function index()
	{
		$status = array('active','non-active');
		$data['success_message'] = $this->session->flashdata('success_message');
		$data['article'] = $this->model->get_all($status);
		$this->template->load('templatedhas','article/index',$data);
		
	}

	public function add()
	{
		$this->form_validation->set_rules('title', 'title', 'trim|required');
		$this->form_validation->set_rules('write_by', 'Write by', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');


		if ($this->form_validation->run() == true) {

			$this->model->insert();
			
			$this->session->set_flashdata('success_message', 'Add Article Success');
			redirect('backend/article','refresh');

			
		} else {
			$data['message_error'] = ( validation_errors() ? validation_errors():  $this->session->flashdata('message_error'));
			$data['categorys'] = $this->model->get_category();
			$this->template->load('templatedhas','article/add',$data);
		}

		
	}

	public function delate($id)
	{
		$query =$this->model->delate(to_Decrypt($id));

		if ($query) {
			$this->session->set_flashdata('success_message', 'Delate article Success');
			redirect('backend/article','refresh');
		} else {
			$this->session->set_flashdata('error_message', 'Delate Article Error');
			redirect('backend/article','refresh');
		}
		
		
	}
	public function edit($id)
	{

		$this->form_validation->set_rules('title', 'title', 'trim|required');
		$this->form_validation->set_rules('write_by', 'Write by', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');


		if ($this->form_validation->run() == TRUE) {

			if (!empty($_FILES['image']['size'])) {

				$picdata = do_upload_multiple( $attachName = 'image', $path ='./uploads/article/');
			} else {
				$picdata = '';
			}
			$this->model->update(to_Decrypt($id),$picdata);
			$this->session->set_flashdata('success_message', 'Update Succes');
			redirect('backend/article','refresh');
			
		} else {
			$data['message_error'] = ( validation_errors() ? validation_errors():  $this->session->flashdata('message_error'));
			
			$article 				= $this->model->get_by_id(to_Decrypt($id));
			$data['article'] 		= $article[0];
			$data['categorys'] = $this->model->get_category();

			$this->template->load('templatedhas','article/edit',$data);
		}
		
	}

}

/* End of file Article.php */
/* Location: ./application/modules/backend/controllers/Article.php */