<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('homemodel','model');
	}

	public function index()
	{

		$data['slider']		= $this->model->get_slider();
		$data['f1']			= $this->model->get_fone();
		$data['motogp']		= $this->model->get_gp();
		$data['basket']		= $this->model->get_basket();
		$data['sepakbola']	= $this->model->get_sepakbola();
		$data['bulutangkis']= $this->model->get_bulutangkis();
		$data['populer']	= $this->model->get_populer();

		$data['latest']		= $this->model->get_latest();


		$this->template->load("template",'home/index',$data);
		
	}



}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */