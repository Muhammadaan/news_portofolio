<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('articlemodel','model');
		$this->load->library('pagination');
	}

	public function index()
	{
		$this->template->load('template','article/detail');
		
	}

	public function detail($slug)
	{
		$article 	 			=$this->model->get_detail($slug);
		$data['article']  	 	=$article[0];
		$this->template->load('template','article/detail',$data);

		
	}

	public function category($cat, $offset=0)
	{	

		 $jml      = $this->model->get_count($cat); 
	     $config['base_url']  			= base_url().'article/category/'.$cat;
	     $config['total_rows'] 		 	= $jml;
	     $config['per_page']  			= 3; 
	     $config['full_tag_open']  		= "<ul class='pagination pagination-sm' style='position:relative; top:-25px;'>";
	   	 $config['full_tag_close'] 	 	="</ul>";
	     $config['num_tag_open']  		= '<li>';
	     $config['num_tag_close']  		= '</li>';
	     $config['cur_tag_open']  		= "<li class='disabled'><li class='active'><a href='#'>";
	     $config['cur_tag_close']  		= "<span class='sr-only'></span></a></li>";
	     $config['next_tag_open']  		= "<li>";
	     $config['next_tag_close']  	= "</li>";
	     $config['prev_tag_open']  		= "<li>";
	     $config['prev_tag_close']  	= "</li>";
	     $config['first_tag_open']  	= "<li>";
	     $config['first_tag_close'] 	= "</li>";
	     $config['last_tag_open']  		= "<li>";
	     $config['last_tag_close']  	= "</li>";
	     $num = $config['per_page'];

	    $this->pagination->initialize($config);
	    $data['halaman']   				=$this->pagination->create_links();
		$data['category']				=$this->model->get_category($cat,$num,$offset);
	
		$this->template->load('template','article/category',$data);
		
	}

	public function search($offset=0)
	{
		
		$cari = $this->input->post('cari');
	
		 $jml      = $this->model->get_countserach($cari); 
	     $config['base_url']  			= base_url().'article/category/'.$cari;
	     $config['total_rows'] 		 	= $jml;
	     $config['per_page']  			= 3; 
	     $config['full_tag_open']  		= "<ul class='pagination pagination-sm' style='position:relative; top:-25px;'>";
	   	 $config['full_tag_close'] 	 	="</ul>";
	     $config['num_tag_open']  		= '<li>';
	     $config['num_tag_close']  		= '</li>';
	     $config['cur_tag_open']  		= "<li class='disabled'><li class='active'><a href='#'>";
	     $config['cur_tag_close']  		= "<span class='sr-only'></span></a></li>";
	     $config['next_tag_open']  		= "<li>";
	     $config['next_tag_close']  	= "</li>";
	     $config['prev_tag_open']  		= "<li>";
	     $config['prev_tag_close']  	= "</li>";
	     $config['first_tag_open']  	= "<li>";
	     $config['first_tag_close'] 	= "</li>";
	     $config['last_tag_open']  		= "<li>";
	     $config['last_tag_close']  	= "</li>";
	     $num = $config['per_page'];

	    $this->pagination->initialize($config);
	    $data['halaman']   				=$this->pagination->create_links();
	    $data['search'] = $this->model->search($cari,$num , $offset );


		// echo "<pre>";
		// var_dump($data['search']);
		// exit();
		$this->template->load('template','article/search',$data);

		
	}

}
