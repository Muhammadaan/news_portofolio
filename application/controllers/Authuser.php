<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authuser extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('authusermodel','model');
		
	}


	public function index()
	{
		$data['success_message'] = $this->session->flashdata('success_message');
		$this->template->load("template","authuser/Successsendemail",$data);

			
	}

	public function register()
	{
		
		$this->form_validation->set_rules('name', 'Name', 'trim|required');	
		$this->form_validation->set_rules('email', 'Email', 'trim|required');	
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		$recaptcha = $this->input->post('g-recaptcha-response');
        $response = $this->recaptcha->verifyResponse($recaptcha);

        if ($this->form_validation->run() == FALSE || !isset($response['success']) || $response['success'] <> true ) {
        		
        		$data['error_message'] = ( validation_errors()) ? validation_errors(): $this->session->flashdata('error_message');
        		$data['success_message'] = $this->session->flashdata('success_message');
        		$data['success_message'] = $this->session->flashdata('success_message');

        		$data = array(
		           'captcha' => $this->recaptcha->getWidget(), // menampilkan recaptcha
		           'script_captcha' => $this->recaptcha->getScriptTag(), // javascript recaptcha ditaruh di head
		    );
        		$this->template->load('template','authuser/Register',$data);




        	} else if( $this->form_validation->run() == true) {

        	 $id = $this->model->register();

        	 $encrypted_id = md5($id);
			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "ssl://smtp.gmail.com";
			$config['smtp_port']= "465";
			$config['smtp_timeout']= "400";
			$config['smtp_user']= "portalberita3@gmail.com"; 
			$config['smtp_pass']= "portalberita2016";
			$config['crlf']="\r\n"; 
			$config['newline']="\r\n"; 
			$config['wordwrap'] = TRUE;
			$email = $this->input->post("email");
			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user']);		
			$this->email->to($email);
			$this->email->subject("Verifikasi Akun");
			$this->email->message(
				"<table align=center cellpadding=0 cellspacing=0>
					<tbody><tr>			
						<td style=padding-bottom:20px>
							<table cellpadding=0 cellspacing=0>
								<tbody><tr>
									<td style='background:#fff;'>
										<table cellspacing=0 cellpadding=0>
											<tbody><tr>
												<td width=640 align=center>
													<img src=https://t3.ftcdn.net/jpg/00/90/04/66/240_F_90046622_ndUsvkHoQF56Jjs1zwqSCNJIqQ0eV7g8.jpg  width=640 alt= style=display:block;border:0;max-width:100%;min-height:auto class=CToWUd>
												</td>
											</tr>
											<tr>
												<td align=center style='padding:32px 30px 45px'>
													<table cellpadding=0 cellspacing=0>
														<tbody><tr>
															<td width=640 align=center style=background:'#fff'>
																<table cellspacing=0 cellpadding=0>
																	<tbody><tr>
																		<td width=500 align=center style='font-family:Geneva,Tahoma,Verdana,sans-serif;font-size:22px;color:#464646'>
																			Untuk Mengaktifkan Akun anda silahkan Klik Button dibawah ini
																		</td>
																	</tr>
																</tbody></table>
															</td>
														</tr>
														<tr>
										        			<td width=640 align=center style='font-family:Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;font-size:16px;padding-top:26px'>
										        				<a href=".site_url("authuser/verification/$encrypted_id")." style='background:#0c99d5;color:#fff;text-decoration:none;border:14px solid #0c99d5;border-left-width:50px;border-right-width:50px;text-transform:uppercase;display:inline-block target=_blank'>
										        					Activation
										        				</a>
															</td>
										        		</tr>
													</tbody></table>
												</td>
											</tr>
										</tbody></table>
									</td>
								</tr>
							</tbody></table>
						</td>
					</tr>
				</tbody></table>"
			);
		
			if($this->email->send())
			{
				$this->session->set_flashdata('success_message',"Check Your Email For Activation");
				redirect("authuser", 'refresh');



			}else
			{
				$this->session->set_flashdata('error_message', "Berhasil melakukan registrasi, namun gagal mengirim verifikasi email");
				redirect("authuser", 'refresh');
			}
		



        	}	
	


	}


	public function verification($key)
	{
		$this->model->verification($key);
		$this->session->set_flashdata('success_message', 'Verication Success');
		redirect('authuser/login','refresh');
		
	}

	public function checkemail()
	{
		$data 	= array();
		$email 	=  $this->input->post('email');
		$valid 	=  $this->model->check_email($email);
		if($valid > 0){
			$data['status'] 	= FALSE;
			$data['message'] 	= "Email already use, please change the email";
		}else{
			$data['status']		= TRUE;
			$data['message']	= "Email Can Use";
		}
		echo json_encode($data);
	}




	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');


			if ($this->form_validation->run() == TRUE ) {
				$user = $this->model->get_login(
					$this->input->post('email'),
					$this->input->post('password')
					);


				if (is_array($user)) {
					$this->session->set_userdata('back_email', $user[0]->email);
					$this->session->set_userdata('back_name', $user[0]->name);
					$this->session->set_userdata('back_userid', $user[0]->id);
					$this->session->set_userdata('back_level', $user[0]->id_level);

						$access = $this->session->userdata('back_level');

							if ($access == 2) {
								redirect('home','refresh');
							} 
							

				} else {
					$data['error_message'] = $user;
					$data['success_message'] = $this->session->flashdata('success_message');
					$this->template->load('template','authuser/Login',$data);
				}

			} else {
				$data ['error_message'] = ( validation_errors()) ? validation_errors() : $this->session->flashdata('error_message');
				$data ['success_message'] = $this->session->flashdata('success_message');
				$this->template->load("template","authuser/Login",$data);
			}
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home','refresh');
	}

	public function forgot()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required');

		if ($this->form_validation->run() == TRUE ) {
			
			$email = $this->input->post('email');

			$id = $this->model->get_by_email($email);

			$encrypted_id =  md5($id);
			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "ssl://smtp.gmail.com";
			$config['smtp_port']= "465";
			$config['smtp_timeout']= "400";
			$config['smtp_user']= "portalberita3@gmail.com"; 
			$config['smtp_pass']= "portalberita2016";
			$config['crlf']="\r\n"; 
			$config['newline']="\r\n"; 
			$config['wordwrap'] = TRUE;		
			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user']);
			$this->email->to($email);
			$this->email->subject("Reset Password");
			$this->email->message(
				"<table align=center cellpadding=0 cellspacing=0>
					<tbody><tr>			
						<td style=padding-bottom:20px>
							<table cellpadding=0 cellspacing=0>
								<tbody><tr>
									<td style='background:#fff;'>
										<table cellspacing=0 cellpadding=0>
											<tbody><tr>
												<td width=640 align=center>
													<img src=http://www.clipartbest.com/cliparts/dir/eLp/direLpoeT.png width=640 alt= style=display:block;border:0;max-width:100%;min-height:auto class=CToWUd>
												</td>
											</tr>
											<tr>
												<td align=center style='padding:32px 30px 45px'>
													<table cellpadding=0 cellspacing=0>
														<tbody><tr>
															<td width=640 align=center style=background:'#fff'>
																<table cellspacing=0 cellpadding=0>
																	<tbody><tr>
																		<td width=500 align=center style='font-family:Geneva,Tahoma,Verdana,sans-serif;font-size:22px;color:#464646'>
																			Untuk Mengaktifkan Akun anda silahkan Klik Button dibawah ini
																		</td>
																	</tr>
																</tbody></table>
															</td>
														</tr>
														<tr>
										        			<td width=640 align=center style='font-family:Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;font-size:16px;padding-top:26px'>
										        				<a href=".site_url("authuser/changepassword/$encrypted_id")." style='background:#0c99d5;color:#fff;text-decoration:none;border:14px solid #0c99d5;border-left-width:50px;border-right-width:50px;text-transform:uppercase;display:inline-block target=_blank'>
										        					Reset Password
										        				</a>
															</td>
										        		</tr>
													</tbody></table>
												</td>
											</tr>
										</tbody></table>
									</td>
								</tr>
							</tbody></table>
						</td>
					</tr>
				</tbody></table>"
			);


				if ( $this->email->send()) {
					
					$this->session->set_flashdata('success_message',"Untuk Mereset Password Silakan Cek email");
					redirect('authuser','refresh');

				} else {
					$this->session->set_flashdata('error_message',"Gagal mengirim email");
					redirect('authuser','refresh');
				}
				
		} else {
			$data['error_message'] = ( validation_errors()) ? validation_errors(): $this->session->flashdata('error_message');
			$this->template->load('template','authuser/Forgot',$data);
			
		}
		
	}



	public function changepassword($id)
	{
		$this->form_validation->set_rules('password', 'password', 'trim|required');

		if ($this->form_validation->run() == TRUE ) {
			
			$this->model->changepassword($id);
			$this->session->set_flashdata('success_message','Change Password Success');
			redirect('authuser/login','refresh');

		} else {
			$data['error_message'] = (validation_errors()) ? validation_errors():$this->session->flashdata('error_message');
			$single  = $this->model->get_by_id($id);
			$data['single'] = $single[0];
			$this->template->load('template','authuser/Change',$data);
		}

		
	}

}

/* End of file Authuser.php */
/* Location: ./application/controllers/Authuser.php */