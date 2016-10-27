<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Levelmodel extends CI_Model {



	public function get_all()
	{	

		$query = $this->db->get('levels');
		$data = $query->result();
		return $data;
	}

	public function input()
	{
		$name=$this->input->post('name');
		$this->db->set('name',$name)
				->insert('levels');
		return true;
	}
}

/* End of file Levelmodel.php */
/* Location: ./application/modules/backend/models/Levelmodel.php */