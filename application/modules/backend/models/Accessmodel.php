<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accessmodel extends CI_Model {

		public function get_all()
		{
			$this->db->select('level_access.*,levels.*');
			$this->db->from('level_access');
			$this->db->join('levels', 'level_access.id_level = levels.id', 'left');
			$query = $this->db->get();
			$data = $query->result();
			return $data;
		}

		public function levels()
		{
			$query = $this->db->get('levels');
			$data = $query->result();
			return $data;
		}

		public function insert()
			{
				$level = $this->input->post('name');
				$hak_access = $this->input->post('hak_access');

				$this->db->set("id_level",$level)
						->set("hak_access",$hak_access)
						->set("created_at",date("Y-m-d H:i:s"))
						->set("created_by",$this->session->userdata('back_userid'))
						->insert("level_access");
				return true;
			}


			public function get_by_id($id)
			{
				$this->db->select("level_access.*,levels.name");
		        $this->db->from("level_access");
		        $this->db->join("levels",'level_access.id_level = levels.id');
		        $this->db->where("level_access.id", $id);
		        $query  = $this->db->get();
		        $data   = array();    
		        if ($query->num_rows() > 0)
		        {
		            foreach (($query->result_array()) as $row) $data[] = $row;
		            return $data;
		        }
			}


				



			public function cek_akses($id_level)
		    {   
		        $this->db->where('id_level', $id_level);
		        $this->db->limit(1);
		        $query = $this->db->get("level_access");
		        $akses = $query->result();

		        return $akses[0]->hak_akses;
		    }


		    public function edit($id)
		    {
		    	$akses = $this->input->post('hak_access');
		    	$id = $this->input->post('name');

		    	$this->db->where('id', $id)
		    			->set('id_level',$id)
		    			->set('hak_akses',$akses)
		    			->set('modified_at', date("Y-m-d H:i:s"))
		    			->set('modified_by', $this->session->userdata('back_userid'))
		    			->update("level_access");

		    	return true;
		    }
		

}

/* End of file Accessmodel.php */
/* Location: ./application/modules/backend/models/Accessmodel.php */