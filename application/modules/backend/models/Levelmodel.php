<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Levelmodel extends CI_Model {



	public function get_all()
	{	

		$query = $this->db->get('levels');
		$data = $query->result_array();
		return $data;
	}


	public function input()
	{
		$name=$this->input->post('name');
		$id_p=$this->input->post('perent');

		$this->db->set('name',$name)
				->set('parent_id',$id_p)
				->insert('levels');
		return true;
	}

	public function get_perent()
	{
		
		$query = $this->db->get('levels');
		$data  = $query->result();
		return $data;
		
	}

	public function delate($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('levels');
			return true;
		}


	public function cek_akses($id_level)
		    {   
		        $this->db->where('id_level', $id_level);
		        $this->db->limit(1);
		        $query = $this->db->get("level_access");
		        $akses = $query->result();

		        return $akses[0]->hak_akses;
		    }
}

/* End of file Levelmodel.php */
/* Location: ./application/modules/backend/models/Levelmodel.php */