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

	public function get_level_id($name)
	{
		 $this->db->select("id as cnt");
        $this->db->from("levels");
        $this->db->where("name", $name);
        $qry = $this->db->get()->result();
       
        return $qry ? $qry[0]->cnt:0;
		
	}

	public function register()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->encrypt->encode($this->input->post('password'));
		$levelid = $this->get_level_id('member'); 

		$this->db->set("name",$name)
				->set("email",$email)
				->set("password",$password)
				->set("status","non-active")
				->set("created_at", date("Y-m-d H:i:s"))
				->set("id_level", $levelid)
				->insert("auth_user");
		$db = $this->db->insert_id();
		return $db;

	}

	public function verification($key)
	{

		$this->db->where('md5(id)', $key)
				->set("status","active")
				->update("auth_user");
		return true;
		
	}

	public function get_password($email)
	{

		$this->db->where("email ='".$email."'");
		$password = false;
		$password = $this->db->get('auth_user', 1);
		$password = $password->result();
		return $password;
	}

	public function get_login($email,$password)
	{
		$pwd = $this->get_password($email);
		if ( $pwd == true) {
			
			$pass = $this->encrypt->decode($pwd[0]->password);

				if ($password != $pass) {
					$pwd = "Wrong Password";
				} elseif( $pwd[0]->status == 'non-active') {
					$pwd = "Account is Not Active";
				} elseif( $pwd[0]->status == 'delated')
				{
					$pwd = "Account Is Delated";
				}

		} else {
			$pwd = "Email Not Found";
		}
		
		return $pwd;
		
	}

	public function get_by_email($email)
	{
		$this->db->select('id');
		$this->db->where('email', $email);
		$query = $this->db->get('auth_user');
		return $query->row()->id;
	}

	public function changepassword($id)
	{
		
		$password = $this->encrypt->encode($this->input->post('password'));

		$this->db->where('md5(id)', $id)
				->set("password",$password)
				->set("modified_at", date("Y-m-d H:i:s"))
				->update("auth_user");

		return true;
	}
	
	public function get_by_id($id)
	{
		
		$this->db->where('md5(id)', $id);
		$query = $this->db->get('auth_user');
		$data = array();
			if ( $query->num_rows() > 0 ) {
				 foreach (($query->result_array()) as $row) $data[] = $row;
            		return $data;
			} 
			
	}

}

/* End of file Authusermodel.php */
/* Location: ./application/models/Authusermodel.php */