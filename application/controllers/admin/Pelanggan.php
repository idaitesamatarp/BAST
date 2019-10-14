<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_pelanggan'); 
    }

    public function index()
    {
        $data=array('title'=>'Admin Dashboard',
                    'isi'=>'admin/pelanggan/data_pelanggan',
                    
                    'data_pelanggan' => $this->model_pelanggan->get_all(),
                );
        $this->load->view('admin/layout/wrapper',$data,FALSE); 
        
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data Pelanggan',
            'isi'=>'admin/pelanggan/tambah_pelanggan',
            'tambah_pelanggan' => $this->model_pelanggan->get_all(),
        );

        $this->load->view('admin/layout/wrapper',$data,FALSE); 
    }

    function simpan() {
        $data = array(

            'nama_pel'       => $this->input->post("nama_pel"),
            'gender' => $this->input->post("gender"),
            'alamat'         => $this->input->post("alamat"),
            'nohp'    => $this->input->post("nohp"),
            

        );
        $this->model_pelanggan->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('admin/pelanggan');
    }

    public function edit($id_pelanggan)
    {
        $id['id_pelanggan'] = $this->input->post("id_pelanggan");

        $data = array(

            'title'     => 'Edit Data Pelanggan',
            'isi'=>'admin/pelanggan/edit_pelanggan',
            'data_pelanggan' => $this->model_pelanggan->edit($id_pelanggan)

        );

        $this->load->view('admin/layout/wrapper',$data,FALSE); 
    }

    public function update()
    {  
            $id['id_pelanggan'] = $this->input->post("id_pelanggan");
            $data = array(

                'nama_pel'       => $this->input->post("nama_pel"),
                'gender' => $this->input->post("gender"),
                'alamat'         => $this->input->post("alamat"),
                'nohp'    => $this->input->post("nohp"),
            );
    


        $this->model_pelanggan->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('admin/pelanggan');

    }

    public function hapus($id_pelanggan)
    {

        $id['id_pelanggan'] = $this->uri->segment(4);

        $this->model_pelanggan->hapus($id);

        //redirect
        redirect('admin/pelanggan');

    }

}