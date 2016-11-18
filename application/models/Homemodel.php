<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homemodel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	 public function get_category($name)
    {
        $this->db->select("id as cnt");
        $this->db->from("category");
        $this->db->where("name", $name);
        $qry = $this->db->get()->result();
       
        return $qry ? $qry[0]->cnt:0;
    
    }

	public function get_slider()
	{
		 // $category_id            = $this->get_category('agama');

		 // var_dump($category_id);
		 // exit();
		
		$this->db->where("article.status", "active");
        $this->db->where("article.type","blog");
        // $this->db->where("article.category_id",$category_id);		
		$this->db->select('article.*,category.name as namecategory');
		$this->db->join('category','article.category_id = category.id');
		$query = $this->db->get('article');
		$data  =  $query->result();
		return $data;
	}

	

	public function get_fone()
	{
		$category_id		= $this->get_category('f1');
		
		
		$this->db->select('article.*,category.name as namecategory');
		$this->db->where('article.status', "active");
		$this->db->where('article.type', "blog");
		$this->db->where('category_id', $category_id);
		$this->db->join('category', 'article.category_id = category.id', 'left');
		$this->db->order_by('article.id', 'asc');
		$query = $this->db->get('article',4);
		$data = $query->result();
		return $data;

	}

	public function get_populer()
	{
		$this->db->select('article.*,category.name as namecategory');
		$this->db->where('article.status', "active");
		$this->db->where('article.type', "blog");
		$this->db->join('category', 'article.category_id = category.id', 'left');
		$this->db->order_by('article.count_read', 'desc');
		$query = $this->db->get('article',3);
		$data = $query->result();
		return $data;
		
	}

	public function get_gp()
	{
		$category_id		= $this->get_category('motogp');
		$this->db->select('article.*,category.name as namecategory');
		$this->db->where('article.status', "active");
		$this->db->where('article.type', "blog");
		$this->db->where('category_id', $category_id);
		$this->db->join('category', 'article.category_id = category.id', 'left');
		$this->db->order_by('article.id', 'asc');
		$query = $this->db->get('article',4);
		$data = $query->result();
		return $data;
		
	}
	public function get_basket()
	{
		$category_id		= $this->get_category('basket');
		$this->db->select('article.*,category.name as namecategory');
		$this->db->where('article.status', "active");
		$this->db->where('article.type', "blog");
		$this->db->where('category_id', $category_id);
		$this->db->join('category', 'article.category_id = category.id', 'left');
		$this->db->order_by('article.id', 'asc');
		$query = $this->db->get('article',4);
		$data = $query->result();
		return $data;
		
	}


	public function get_sepakbola()
	{
		$category_id	= $this->get_category('sepakbola');

		$this->db->select('article.*,category.name as namecategory');
		$this->db->where('article.status','active');
		$this->db->where('article.type','blog');
		$this->db->where('article.category_id',$category_id);
		$this->db->join('category', 'article.category_id = category.id', 'left');
		$this->db->order_by('article.id', 'desc');
		$query = $this->db->get('article',4);
		$data = $query->result();
		return $data;		
	}

	public function get_bulutangkis()
	{
		$category_id = $this->get_category('bulutangkis');
		$this->db->select('article.*,category.name as namecategory');
		$this->db->where('article.status', 'active');
		$this->db->where('article.type', 'blog');
		$this->db->where('article.category_id', $category_id);
		$this->db->join('category', 'article.category_id = category.id', 'left');
		$this->db->order_by('article.id', 'desc');
		$query = $this->db->get('article',4);
		$data = $query->result();
		return $data;

	}



	public function get_latest()
	{

	$this->db->select('article.*,category.name as namecategory');
		$this->db->where('article.status', "active");
		$this->db->where('article.type', "blog");
		$this->db->from('article');
		$this->db->join('category', 'article.category_id = category.id', 'left');
		$this->db->order_by('article.id', 'desc');
		$this->db->limit(8);
		$query = $this->db->get('');
		$data = $query->result();
		return $data;	
	}

}

/* End of file Homemodel.php */
/* Location: ./application/models/Homemodel.php */