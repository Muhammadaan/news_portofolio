<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('articlemodel','model');

	}

	public function index()
	{
		$this->template->load('templatedhas','article/index');
		
	}

	public function add()
	{
		$this->template->load('templatedhas','article/add');
	}

	public function delate($id)
	{
		
	}
	public function edit($id)
	{
		$this->template->load('');
	}

}

/* End of file Article.php */
/* Location: ./application/modules/backend/controllers/Article.php */