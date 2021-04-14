<?php
class Model_project extends CI_Model {
    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('project')
                 ->order_by('id_project', 'DESC')
                 ->get();
        return $query->result();
    }

    public function get_marketing()
    {
        $query=$this->db->select("id_user,nama_kar,level");
        $query=$this->db->from("user");
        $query=$this->db->join("karyawan","karyawan.id_karyawan=user.id_karyawan","inner")	 
        ->where("level", 'marketing')
        ->order_by("id_user", "DESC")
        ->get();
        return $query->result();
        
    }

    public function get_programmer()
    {
        $query=$this->db->select("id_user,nama_kar,level");
        $query=$this->db->from("user");
        $query=$this->db->join("karyawan","karyawan.id_karyawan=user.id_karyawan","inner")	 
        ->where("level", 'programmer')
        ->order_by("id_user", "DESC")
        ->get();
        return $query->result();
        
    }

    public function get_pelanggan()
    {
        $query=$this->db->select("id_user,nama_pel,level");
        $query=$this->db->from("user");
        $query=$this->db->join("pelanggan","pelanggan.id_pelanggan=user.id_user","inner")	 
        ->where("level", 'pelanggan')
        ->order_by("id_user", "DESC")
        ->get();
        return $query->result();
        
    }

    public function lihat($id_project)
    {
        
        $query=$this->db->select("id_project,id_user,nama_pel,nama_project,no_po,tanggal_po,status,harga, a.nama_kar nama_marketing, b.nama_kar nama_programmer");
        $query=$this->db->from("project");
        $query=$this->db->join("user","user.id_user=project.id_pelanggan",
                                      "user.id_user=project.id_marketing",
                                     "user.id_user=project.id_programmer","inner");
        $query=$this->db->join("pelanggan","pelanggan.id_pelanggan=project.id_pelanggan","inner");
        $query=$this->db->join("karyawan a","a.id_karyawan=project.id_marketing","inner");
        $query=$this->db->join("karyawan b","b.id_karyawan=project.id_programmer","inner");
        $query = $this->db->where("id_project", $id_project)
                          ->get();
        //echo $this->db->last_query();                 
        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function lihat_project($id_project)
    {
        
        $query=$this->db->select("id_project,id_user,nama_pel,nama_project,no_po,tanggal_po,status,harga, a.nama_kar nama_marketing, b.nama_kar nama_programmer");
        $query=$this->db->from("project");
        $query=$this->db->join("user","user.id_user=project.id_pelanggan",
                                      "user.id_user=project.id_marketing",
                                     "user.id_user=project.id_programmer","inner");
        $query=$this->db->join("pelanggan","pelanggan.id_pelanggan=project.id_pelanggan","inner");
        $query=$this->db->join("karyawan a","a.id_karyawan=project.id_marketing","inner");
        $query=$this->db->join("karyawan b","b.id_karyawan=project.id_programmer","inner");
        $query = $this->db->where("id_project", $id_project)
                          ->get();
        // echo $this->db->last_query();                 
        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function buat($id_project)
    {
        $query=$this->db->select("project.*,pelanggan.nama_pel, pelanggan.jabatan, pelanggan.perusahaan, a.nama_kar nama_marketing");
        $query=$this->db->from("project");
        $query=$this->db->join("user","user.id_user=project.id_pelanggan",
                                      "user.id_user=project.id_marketing","inner");
        $query=$this->db->join("pelanggan","pelanggan.id_pelanggan=project.id_pelanggan","inner");
        $query=$this->db->join("karyawan a","a.id_karyawan=project.id_marketing","inner");
        $query = $this->db->where("id_project", $id_project)
                          ->get();
        //echo $this->db->last_query();                 
        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function get_by_marketing($id_user)
    {
        $query = $this->db->select("*")
            ->from('project')
            ->where('id_marketing', $id_user)
            ->order_by('id_project', 'ASC')
            ->get();
        return $query->result();
    }

    public function get_by_pelanggan($id_user)
    {
        $query = $this->db->select("*")
                 ->from('project')
                 ->where("id_pelanggan", $id_user)
                 ->order_by('id_project', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {
        $query = $this->db->insert("project", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("project", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function save_sign($image, $id)
    {
        $data=array(			
            'tgl_bast'  => $tgl_bast,
            'sign_marketing'=>$image,
        );
        $this->db->update('project', $data, array('id_project'=>$id));
        
    }

    public function lihat_form($id_project)
    {
        
        $query = $this->db->select("project.*,pelanggan.nama_pel,pelanggan.jabatan,pelanggan.perusahaan, a.nama_kar nama_marketing");
        $query=$this->db->from("project");
        $query=$this->db->join("user","user.id_user=project.id_pelanggan",
                                      "user.id_user=project.id_marketing","inner");
        $query=$this->db->join("pelanggan","pelanggan.id_pelanggan=user.id_pelanggan","inner");
        $query=$this->db->join("karyawan a","a.id_karyawan=project.id_marketing","inner");
        $query = $this->db->where("id_project", $id_project)
                          ->get();
        //echo $this->db->last_query();
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return false;
        }
    }

}