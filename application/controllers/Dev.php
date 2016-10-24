<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dev extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function index()
	{
		$this->template->load('template','dev');
		
	}

}

/* End of file dev.php */
/* Location: ./application/controllers/dev.php */