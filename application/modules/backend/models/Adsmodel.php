<?php

class Adsmodel extends CI_Model
{   
    public function __construct()
    {
        parent::__construct();
    }

    public function insert()
    {
        $title               = $this->input->post("title");
        $image               = $this->input->post("image");
        $type                = $this->input->post("type");
        $status              = $this->input->post("status");

        if($_FILES['image']['size'] > 0)
        {
            $pic   = do_upload_single('image', './uploads/ads/');
            $this->db->set("image", 'uploads/ads/'.$pic['data']['file_name']);


        }

        $this->db->set("title", $title)
                 ->set("type", $type)
                 ->set("status", $status)
                 ->set("created_at", date("Y-m-d H:i:s"))
                 ->set("created_by", $this->session->userdata('back_userid'))
                 ->insert("ads");
    }




    public function update($id)
    { 
      
        $title               = $this->input->post("title");
        $type                = $this->input->post("type");
        $status              = $this->input->post("status");

        if($_FILES['image']['size'] > 0)
                {
                    $pic   = do_upload_single('image', './uploads/ads/');
                    $this->db->set("image", 'uploads/ads/'.$pic['data']['file_name']);
        }

       $this->db->where("id",$id)
                 ->set("title", $title)
                 ->set("type", $type)
                 ->set("status", $status)
                 ->set("modified_at", date("Y-m-d H:i:s"))
                 ->set("modified_by", $this->session->userdata('back_userid'))
                 ->update("ads");



      
        return true;
    }
    
    public function delete($id)
    {
        $this->db->where("id", $id);
        $this->db->set("status", "deleted");
        $this->db->update("ads");
        return true; 
    }

    public function get_by_id($id)
    {
        $this->db->select("*");
        $this->db->from("ads");
        $this->db->where("id", $id);
        $query  = $this->db->get();
        $data   = array();    
        if ($query->num_rows() > 0)
        {
            foreach (($query->result_array()) as $row) $data[] = $row;
            return $data;
        }
    }

    public function get_all($status)
    {
        $this->db->select("*");
        if(count($status) > 0)
        {
            $i = 1;
            foreach ($status as $st) 
            {
                if($i == 1){
                    $this->db->where("status", $st);
                }else{
                    $this->db->or_where("status", $st);
                }
                $i++;
            }
        }
        $this->db->from("ads");
        $query  = $this->db->get();
        $data   = $query->result();
        return $data;
    }
    public function cek_akses($id_level)
    {   

        $this->db->select('hak_akses');
        $this->db->from('level_access');
        $this->db->where('id_level', $id_level);
        $this->db->limit(1);
        $query = $this->db->get();
        $akses = $query->result();


        return $akses[0]->hak_akses;
    }

   

}   