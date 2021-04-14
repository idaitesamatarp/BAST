<?php
class Model_chat extends CI_Model {
    
    public function get_chat_mar()
    {
        $query = $this->db->select("id_user,nama_kar,level");
        $query = $this->db->from("user");
        $query = $this->db->join("karyawan","karyawan.id_karyawan=user.id_karyawan","inner");
        $query = $this->db->where("level", 'marketing' )
        ->get();
        return $query->result();
        
    }

    public function get_chat_mar_by_project($id_user) {
            $query=$this ->db ->select('project.*,karyawan.nama_kar,');
            $query=$this->db->from("project");
            $query=$this->db->join('karyawan','karyawan.id_karyawan = project.id_project','left');
            $query=$this->db->where("id_marketing",$id_user)
            ->get();
            return $query->result();
    }

    public function get_chat_prog()
    {
        $query = $this->db->select("id_user,nama_kar,level");
        $query = $this->db->from("user");
        $query = $this->db->join("karyawan","karyawan.id_karyawan=user.id_karyawan","inner");
        $query = $this->db->where("level", 'programmer' )
        ->get();
        return $query->result();
        
    }

    public function get_chat_admin()
    {
        $query = $this->db->select("id_user,nama_kar,level");
        $query = $this->db->from("user");
        $query = $this->db->join("karyawan","karyawan.id_karyawan=user.id_karyawan","inner");
        $query = $this->db->where("level", 'admin' )
        ->get();
        return $query->result();
    }

    public function get_chat_pelanggan()
    {
        $query = $this->db->select("id_user,nama_pel,level");
        $query = $this->db->from("user");
        $query = $this->db->join("pelanggan","pelanggan.id_pelanggan=user.id_user","inner");
        $query = $this->db->where("level", 'pelanggan' )
        ->get();
        // echo $this->db->last_query();
        return $query->result();
    }

}