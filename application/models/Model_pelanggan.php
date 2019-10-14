<?php
class Model_pelanggan extends CI_Model {
    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('pelanggan')
                 ->order_by('id_pelanggan', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {
        
        $query = $this->db->insert("pelanggan", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function edit($id_pelanggan)
    {

        $query = $this->db->where("id_pelanggan", $id_pelanggan)
                ->get("pelanggan");

        if($query){
            return $query->row();
        }else{
            return false;
        }

    }

    public function update($data, $id)
    {

        $query = $this->db->update("pelanggan", $data, $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

    public function hapus($id)
    {

        $query = $this->db->delete("pelanggan", $id);

        if($query){
            return true;
        }else{
            return false;
        }

    }

}