<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminsmodel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	/*select all start*/

	public function get_all($status)
	{
		$admin = $this->get_level_id('admin');
		$this->db->select('*');
		if (count($status) > 0) {
			$i = 1;
				foreach ($status as $st) {
					if ($i == 1) {
						$this->db->where('status', $st);
						$this->db->where('id_level', $admin);
					} else {
						$this->db->or_where('status', $st);
						$this->db->where('id_level', $admin);
					}
					$i++;
					
				}
		}

		$this->db->from('auth');
		$query = $this->db->get();
		$data  = $query->result();
		return $data;
	}



	public function get_level_id($name)
	{
		$this->db->select("id as cnt");
        $this->db->from("levels");
        $this->db->where("name", $name);
        $qry = $this->db->get()->result();
       
        return $qry ? $qry[0]->cnt:0;
	}

	/*Select All finish*/

	/*Insert*/

	public function input()
	{
		$status		=($this->input->post('status') == 'on') ? 'active': 'non-active';
		$name		=$this->input->post('name');
		$email		=$this->input->post('email');
		$password	= $this->encrypt->encode( $this->input->post('pwd'));
		$levelid 	= $this->get_level_id('admin');

		$this->db->set("name",$name)
				 ->set("email",$email)
				 ->set("password",$password)
				 ->set("id_level",$levelid)
				 ->set("status",$status)
				 ->set("created_at", date("Y-m-d H:i:s"))
				 ->insert('auth');
		return true;
	}

	public function delate($id)
	{
		$this->db->where('id', $id);
		$this->db->set('status', "delated");
		$this->db->update('auth');
		return true;
	}








	public function check_email($email)
	{
		$this->db->select("count(0) as cnt");
        $this->db->from("auth");
        $this->db->where("email", $email);
        $qry = $this->db->get()->result();
        return $qry ? $qry[0]->cnt:0;
	}


	public function get_by_id($id)
	{
		$this->db->where('id',$id);
		$query =$this->db->get('auth');
		$data = array();
			if ( $query->num_rows() > 0 ) {
				  foreach (($query->result_array()) as $row) $data[] = $row;
            	  return $data;
			}
	}



	public function edit($id)
	{
		$status		=($this->input->post('status') == 'on') ? 'active': 'non-active';
		$name		=$this->input->post('name');
		$email		=$this->input->post('email');
		$password	=$this->input->post('pwd');

		if (!empty($password)) {
			
			$this->$this->db->where("id", $id)
							->set("name",$name)
							->set("email",$email)
							->set("status",$status)
							->set("name",$name)
							->set("password",$this->encrypt->encode($password))
							->set("modified_at", date("Y-m-d H:i:s"))
							->set("modified_by", $this->session->userdata('back_userid'))
							->update("auth");
		} else {
			$this->db->where("id", $id)
							->set("name",$name)
							->set("email",$email)
							->set("status",$status)
							->set("name",$name)
							->set("modified_at", date("Y-m-d H:i:s"))
							->set("modified_by", $this->session->userdata('back_userid'))
							->update("auth");
		}	
		return true;
	}





}

/* End of file adminsmodel.php */
/* Location: ./application/modules/backend/models/adminsmodel.php */