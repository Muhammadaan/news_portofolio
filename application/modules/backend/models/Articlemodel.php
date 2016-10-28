<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articlemodel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}


	public function get_all($status)
	{
		$this->db->select("article.*,category.name as namecategory");
			if(count($status) > 0)
		        {
		            $i = 1;
		            foreach ($status as $st) 
		            {
		                if($i == 1){
		                    $this->db->where("article.status", $st);
		                    $this->db->where("type","blog");
		                }else{
		                    $this->db->or_where("article.status", $st);
		                    $this->db->where("type","blog");
		                }
		                $i++;
		            }
		        }
		$this->db->from('article');
		$this->db->join('category', 'article.category_id = category.id', 'left');
		// $this->db->join('Table', 'table.column = table.column', 'left');
		$query = $this->db->get('');
		$data = $query->result();
		return $data;

	}

	public function get_category()
	{
		$this->db->where('status', 'active');
		$query = $this->db->get('category');
		$data =$query->result();
		return $data;
		
	}

	public function input($pic)
	{
		$status 	= ( $this->input->post('status') == 'on') ? 'active' : 'non-active';
		$title 		= $this->input->post('title');
		$write_by 	= $this->input->post('write_by');
		$description= $this->input->post('description');
		$tag 		= $this->input->post('tags');
		$category 	= $this->input->post('category');
		$vidio_url  = $this->input->post('vidio_url');

		$this->db->set("status",$status)
				->set("title",$title)
				->set("write_by",$write_by)
				->set("description",$description)
				->set("tags",$tag)
				->set("type",'blog')
				->set("category_id",$category)
				->set("vidio_url",$vidio_url)
				->set("created_at", date("Y-m-d H:i:s"))
				->set("created_by", $this->session->userdata('back_userid'))
				->insert("article");


		$id = $this->db->insert_id();
		$slug =strtolower($title.' '.$id);
		$slug =trim( preg_replace('/[^A-Za-z0-9-]+/','-',$slug));
		$this->db->where('id', $id);
		$this->db->set('slug', $slug );
		$this->db->update('article');


		  foreach ($pic['status'] as $key => $value) {
            if(!empty($id) && $value == 'success')  
            {
                $this->db->set("name", $title );
                $this->db->set("image", 'uploads/article/'.$pic['data'][$key]['file_name'] );
                $this->db->set("parent_id", $id);
                $this->db->set("type", 'blog');
                $this->db->set("created_at", date("Y-m-d H:i:s"));
                $this->db->set("created_by", $this->session->userdata('back_userid'));
                $this->db->insert("images");
               
            }
        }

        return true;

	}


	public function delate($id)
	{
		$this->db->where('id', $id)
					->set("status","delated")
					->update("article");
		return true;
	}


	public function edit($id)
	{
		
	}

	public function get_by_id($id)
	{
		// $this->db->select("article.*,images.name as name_img,images.image,images.id as id_detail");
  //       $this->db->from("article");
  //       $this->db->join('images', 'article.id = images.parent_id','left');
  //       $this->db->where("article.id", $id);
  //       $query  = $this->db->get();
  //       $data   = array();    
  //       if ($query->num_rows() > 0)
  //       {
  //           foreach (($query->result_array()) as $row) $data[] = $row;
  //           return $data;
  //       }



        $this->db->where('id',$id);
		$query =$this->db->get('article');
		$data = array();
			if ( $query->num_rows() > 0 ) {
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

	

}

/* End of file Articlemodel.php */
/* Location: ./application/modules/backend/models/Articlemodel.php */

