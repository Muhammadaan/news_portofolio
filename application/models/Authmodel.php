<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authmodel extends CI_Model {

	public function get_login($email,$password)
	{
		$pwd = $this->get_password($email);
		
		if ( $pwd == true ) {
			$pass = $this->encrypt->decode($pwd[0]->password);
			// $pass = $pwd[0]->password;
				
				if ($password != $pass ) {
					$pwd = 'Wrong Password';
				} elseif($pwd[0]->status == 'non-active')  {
					$pwd = 'Account Is Not Active';
				} elseif ($pwd[0]->status == 'delated') {
					$pwd = 'Your Account Is Delated';
				}
				
		} else {
			$pwd = 'User / Email Not Found';
		}
		return $pwd;

	}

	public function get_password($email)
	{
		$this->db->where("email ='".$email."'");
		$password = false;
		$password = $this->db->get('auth',1);
		$password = $password->result();
		return $password;
	}
	



}
// End models


/* End of file Authmodel.php */
/* Location: ./application/models/Authmodel.php */