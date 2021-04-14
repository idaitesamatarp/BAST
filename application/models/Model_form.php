<?php

class Model_form extends CI_Model {

    public function lihat_form($id_user)
    {
        
        $query = $this->db->select("project.*,pelanggan.nama_pel,pelanggan.jabatan,pelanggan.perusahaan, a.nama_kar nama_marketing");
        $query=$this->db->from("project");
        $query=$this->db->join("user","user.id_user=project.id_pelanggan",
                                      "user.id_user=project.id_marketing","inner");
        $query=$this->db->join("pelanggan","pelanggan.id_pelanggan=user.id_user","inner");
        $query=$this->db->join("karyawan a","a.id_karyawan=project.id_marketing","inner");
        $query = $this->db->where("id_user", $id_user)
                          ->get();
        // echo $this->db->last_query();
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

    public function save_sign($image, $id)
    {
        $data=array(			
            'sign_pelanggan'=>$image,
        );
        $this->db->update('project', $data, array('id_pelanggan'=>$id));
    }
    
}