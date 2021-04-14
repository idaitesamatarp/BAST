<?php

class Model_account extends CI_Model 
{
    public function get_all($id_user)
    {
        $query = $this->db->select("*")
                 ->from('karyawan')
                 ->where('id_karyawan',$id_user)
                 ->order_by('id_karyawan', 'DESC')
                 ->get();
        return $query->result();
    }

    public function get_all_user($id_user)
    {
        $query = $this->db->select("*")
                 ->from('user')
                 ->where('id_user',$id_user)
                 ->get();
                //echo $this->db->last_query();
        return $query->result();
    }

    public function get_image($id_user) {
        $query= $this->db->select('image')
                ->from('user')
                ->where('id_karyawan',$id_user)
                ->get();
                //echo $this->db->last_query();
        return $query->result();
    }

    public function get_image_pel($id_user) {
        $query= $this->db->select('image')
                ->from('user')
                ->where('id_pelanggan',$id_user)
                ->get();
                //echo $this->db->last_query();
        return $query->result();
    }

    public function get_all_pel($id_user)
    {
        $query = $this->db->select('pelanggan.*,id_user')
                 ->from('pelanggan')
                 ->join('user', 'user.id_user=pelanggan.id_pelanggan','inner')
                 ->where('id_user',$id_user)
                 ->order_by('id_pelanggan', 'DESC')
                 ->get();
                // echo $this->db->last_query();
        return $query->result();
    }


    public function edit($id_user)
    {

        $query = $this->db->where("id_karyawan", $id_user)
                ->get("karyawan");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function edit_pel($id_user)
    {

        $query = $this->db->where("id_pelanggan", $id_user)
                ->get("pelanggan");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("karyawan", $data, $id);
        
        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function update_setting($data, $id)
    {

        $query = $this->db->update("user", $data, $id);
        
        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function update_image($data,$id)
    {

        $query = $this->db->update("user",$data, $id);
       

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function update_pel($data, $id)
    {

        $query = $this->db->update("pelanggan", $data, $id);
        // echo $this->db->last_query();
        if($query){
            return true;
        }else{
            return false;
        }

    }
    
    
}    