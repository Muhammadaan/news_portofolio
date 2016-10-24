<?php

if (! defined ( 'BASEPATH' ))
	exit ( 'No direct script access allowed' );
class Template {
	var $template_data = array ();
	function set($name, $value) {
		$this->template_data [$name] = $value;
	}
	
	function load($template = '', $view = '', $view_data = array(), $return = FALSE) {
		$this->CI = & get_instance ();
		$this->set ( 'contents', $this->CI->load->view ( $view, $view_data, TRUE ) );
		return $this->CI->load->view ( $template, $this->template_data, $return );
	}
	
	function load_in_sequence($master_template, $arr_views = array(), $data, $return = FALSE)
	{
		$this->CI = & get_instance();
		$this->template_data['email'] 		= $this->CI->session->userdata("email");
		$this->template_data['logged_in'] 	= $this->CI->session->userdata("logged_in");
		$this->template_data['logged_type'] = $this->CI->session->userdata("type");

		foreach($arr_views as $v)
		{
			$new_content = $this->CI->load->view($v, $data, TRUE);
			$data['content'] = $new_content;
		}

		$this->set('contents', $data['content']);
		return $this->CI->load->view($master_template, $this->template_data, $return );
	}
	
}


