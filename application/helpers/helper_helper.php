<?php
	
	function is_login()
	{
		$CI =& get_instance();
	    $is_logged_in = $CI->session->userdata('back_userid');
		if(!isset($is_logged_in)){
			redirect('auth', 'refresh');   
		}
	}

	function crazy_key()
	{
		$key="fjKJIJLKSJKAJSD"; 
		return $key;
	}

	function to_Encrypt($string, $key="", $url_safe=TRUE)
	{
    	if($key==null || $key=="") $key=crazy_key();
    	$CI =& get_instance();
    	$ret = $CI->encrypt->encode($string, $key);
	    if ($url_safe)
	    {
	        $ret = strtr( $ret, array(
				                    '+' => '.',
				                    '=' => '-',
				                    '/' => '~'
				                )
	            		);
	    }
	    return $ret;
	}
	
	function to_Decrypt($string, $key="")
	{
	    if($key==null || $key=="") $key=crazy_key();
	    $CI =& get_instance();
	    $string = strtr( $string, array(
					                '.' => '+',
					                '-' => '=',
					                '~' => '/'
					            )
	        			);
	    return $CI->encrypt->decode($string, $key);
	}

	function do_upload_single($input = 'img', $path='./uploads/')
	{
		$CI =& get_instance();

		$config = array(
            'upload_path' 		=> $path,
            'max_size' 			=> 1024 * 100,
            'allowed_types' 	=> 'gif|jpeg|jpg|png',
            'overwrite' 		=> true,
            'remove_spaces'	 	=> true,
            'encrypt_name' 		=> true
        );

		$CI->load->library('upload', $config);

		if ( ! $CI->upload->do_upload($input))
		{
				$error = array('error' => $CI->upload->display_errors());
				return $error;
		}
		else
		{
				$data = array('data' => $CI->upload->data());
				return $data;
		}
	}

	function do_upload_multiple($attachName='image', $path='./uploads/') 
	{    
        	$CI =& get_instance();

        	$config = array(
                'upload_path' => $path,
                'max_size' => 1024 * 100,
                'allowed_types' => 'gif|jpeg|jpg|png',
                'encrypt_name' => TRUE
            );
            $images = array();
            $CI->load->library('upload');
            $files = $_FILES;
            $count = count($_FILES[$attachName]['name']);
            $data  = array();
            for ($i = 0; $i < $count; $i++) 
            {
                $_FILES[$attachName]['name'] 		= $files[$attachName]['name'][$i];
                $_FILES[$attachName]['type'] 		= $files[$attachName]['type'][$i];
                $_FILES[$attachName]['tmp_name'] 	= $files[$attachName]['tmp_name'][$i];
                $_FILES[$attachName]['error'] 		= $files[$attachName]['error'][$i];
                $_FILES[$attachName]['size'] 		= $files[$attachName]['size'][$i];
                $fileName 							= $_FILES[$attachName]['name'];
                $images[] 							= $fileName;
                $config['file_name'] 				= $fileName;
                $CI->upload->initialize($config);
                if ($CI->upload->do_upload($attachName)) {
                    
                    $data['data'][] 	= $CI->upload->data();
                    $data['status'][] 	= "success";
                   	$data['msg'][] 		= "success upload image";
                } else {
                    $data['status'][] 	= 'danger';
                    $data['msg'][] 		= "error upload image";
                }
            }
            return $data;
    }

	function resize_image($path, $filename, $dir)
    {
    	$CI =& get_instance();
    	$CI->load->library('image_lib');

        $config['image_library'] 	= 'gd2';
        $config['source_image'] 	= $path;
        $config['new_image'] 		= $dir.$filename;
        $config['maintain_ratio'] 	= TRUE;
        $config['width'] 			= 600;
        $config['height'] 			= 320;
        $config['overwrite']		= TRUE;
       
        $CI->image_lib->clear();
       	$CI->image_lib->initialize($config);
       	$CI->image_lib->resize();
    }

    function query_implode($str) {
	    return sprintf("'%s'", $str);
	}


	function get_image_gallery($id, $type)
    {
        $ci = &get_instance();
        $ci->load->model('Gallerymodel', 'gamodel');
        $rs = $ci->gamodel->get_image_by_gallery($id, $type);
        return $rs;
    }

    function hak_akses(){

        $ci =& get_instance();
        $ci->load->model('Authmodel', 'model');
        $url        = $ci->uri->segment(2);
        $d          = $ci->model->cek_akses($ci->session->userdata('kk_level'));
        $array_d    = explode(',', str_replace(" ", "", $d));
        $akses      = 0;
        foreach ($array_d as $key ) {
            if($key == $url) $akses = 1;
        }


        $level = $ci->session->userdata('kk_level');

        if($akses == 0){
            if ($level == 1) {
                    redirect("backend/dashboard");
                }else if ($level == 2) {
                    redirect("costumer/dashboardcostumer");
                }
        }


         
    }
    



         
?>
