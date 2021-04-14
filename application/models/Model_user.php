<?php
class Model_user extends CI_Model {
    public function get_karyawan()
    {
        $query=$this->db->select("id_user,nama_kar,username,level,image");
        $query=$this->db->from("user");
        $query=$this->db->join("karyawan","karyawan.id_karyawan=user.id_karyawan","inner")	 
        ->order_by("id_user", "DESC")
        ->get();
        return $query->result();
        
    }

    function getNama() {
        
        $query=$this->db->select("*");
        $query=$this->db->from("karyawan")
        ->get();
        
        return $query->result();
        
    }

    function getNamaPel() {
        $query=$this->db->select("*");
        $query=$this->db->from("pelanggan")
        ->get();

        return $query->result();
    }
    
    public function get_pelanggan()
    {
        $query=$this->db->select('id_user,nama_pel,username,level,image');
        $query=$this->db->from('user');
        $query=$this->db->join('pelanggan','pelanggan.id_pelanggan=user.id_user','inner')	 
        ->order_by('id_user', 'DESC')
        ->get();
        return $query->result();
    }

    public function simpan($data)
    {
        
        $query = $this->db->insert("user", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function lihat($id_user)
    {
        $query=$this->db->select("id_user,nama_kar,username,password,level");
        $query=$this->db->from("user");
        $query=$this->db->join("karyawan","karyawan.id_karyawan=user.id_karyawan","inner")    ;    

        $query = $this->db->where("id_user", $id_user)
                ->get();
       // echo $this->db->last_query();
        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function lihat2($id_user)
    {
        $query=$this->db->select("id_user,nama_pel,username,password,level");
        $query=$this->db->from("user");
        $query=$this->db->join("pelanggan","pelanggan.id_pelanggan=user.id_pelanggan","inner")    ;    

        $query = $this->db->where("id_user", $id_user)
                ->get();
        //echo $this->db->last_query();
        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function edit($id_user)
    {
        
        $query = $this->db->where("id_user", $id_user)
                ->get("user");
       // echo $this->db->last_query();
        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("user", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("user", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }
}