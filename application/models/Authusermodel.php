<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authusermodel extends CI_Model {


	public function check_email($email)
	{
		$this->db->select("count(0) as cnt");
        $this->db->from("auth_user");
        $this->db->where("email", $email);
        $qry = $this->db->get()->result();
        return $qry ? $qry[0]->cnt:0;
		
	}

	public function register()
	{
	
	}
	

}

/* End of file Authusermodel.php */
/* Location: ./application/models/Authusermodel.php */