<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorymodel extends CI_Model {

	

	public function get_all($status)
	{
		$this->db->select('*');
		if (count($status) > 0) {
			$i = 1;
				foreach ($status as $st) {
					if ($i == 1) {
						$this->db->where('status', $st);

					} else {
						$this->db->or_where('status', $st);
						
					}
					$i++;
					
				}
		}
		$query = $this->db->get('category');
		$data = $query->result();
		return $data;		
	}


	public function input()
	{
		$name = $this->input->post('name');
		$status =($this->input->post('status') == 'on') ? 'active' : 'non-active';

		$this->db->set("name",$name)
					->set("status",$status)
					->set("created_at",date("Y-m-d H:i:s"))
					->insert("category");
		return true;

	}

	public function delate($id)
	{
		$this->db->where('id',$id)
				->set("status","delated")
				->update("category");
		return true;

	}

	public function get_by_id($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('category');
		$data = array();
			if ($query->num_rows() > 0) {
				foreach( ($query->result_array()) as $row );
					$data[] = $row;
					return $data;
			}
	}

	public function edit($id)
	{	
		$status = ($this->input->post('status')=='on') ? 'active' : 'non-active';
		$name = $this->input->post('name');

		$this->db->set("name",$name)
				->set("status",$status)
				->where("id",$id)
				->update("category");
		return true;
	}

}

/* End of file categorymodel.php */
/* Location: ./application/modules/backend/models/categorymodel.php */