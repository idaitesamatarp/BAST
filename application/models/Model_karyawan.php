<?php
class Model_karyawan extends CI_Model {
    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('karyawan')
                 ->order_by('id_karyawan', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {
        
        $query = $this->db->insert("karyawan", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_karyawan)
    {

        $query = $this->db->where("id_karyawan", $id_karyawan)
                ->get("karyawan");

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

    public function hapus($id)
    {

        $query = $this->db->delete("karyawan", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    
}