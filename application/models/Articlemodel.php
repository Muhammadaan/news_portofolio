<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articlemodel extends CI_Model {

	public function get_detail($slug)
	{
		$this->db->select('*');
		$this->db->select('article.*,category.name as namecategory');
		$this->db->where('article.status',"active");
		$this->db->where('article.type',"blog");
		$this->db->where('article.slug',$slug);
		$this->db->from("article");
        $this->db->join('category','article.category_id = category.id');
         $query  = $this->db->get();
        
        $data   = array();    
        if ($query->num_rows() > 0)
        {
            foreach (($query->result_array()) as $row) $data[] = $row;
            return $data;
        }
		
	}


	public function count_read($slug)
	{
		$this->db->where('article.slug', $slug);
		$this->db->set('count_read','count_read +1',FALSE);
		$this->db->update('article');
	}

	public function get_category($cat , $num ,$offset)
	{	

		$this->db->select('article.*,category.name as namecategory');
		$this->db->where('article.status', 'active');
		$this->db->where('article.type', 'blog');
		$this->db->where('category.name', $cat);
		$this->db->join('category', 'article.category_id = category.id');
		$query = $this->db->get('article',$num,$offset);
		$data = $query->result();
		return $data;
		

		
	}
	
	public function get_count($cat)
	{

		$this->db->select('article.*,category.name as namecategory');
		$this->db->where('category.name', $cat);
		$this->db->join('category', 'article.category_id = category.id');
		$data = $this->db->get('article')->num_rows();
		return $data;
		
	}

	public function get_countserach($cari)
	{

		$this->db->select('article.*,category.name as namecategory');
		$this->db->like('category.name', $cari);
		$this->db->or_like('article.title', $cari);
		$this->db->join('category', 'article.category_id = category.id');
		$data = $this->db->get('article')->num_rows();
		return $data;
		
	}

	public function search($cari ,$num ,$offset)
	{
		$this->db->select('article.*,category.name as namecategory');
		$this->db->join('category', 'article.category_id = category.id');
		$this->db->like('article.title',$cari);
		$this->db->or_like('category.name',$cari);
		$query= $this->db->get('article' ,$num ,$offset);
		$data = $query->result();
		return $data;
		
	}

}

/* End of file Articlemodel.php */
/* Location: ./application/models/Articlemodel.php */