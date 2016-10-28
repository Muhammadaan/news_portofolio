<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dhasboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		login();
		// hak_akses();
		
	}

	public function index()
	{

		$this->template->load('templatedhas','dhasboard');
		
	}

}

/* End of file Dhasboard.php */
/* Location: ./application/modules/backend/controllers/Dhasboard.php */