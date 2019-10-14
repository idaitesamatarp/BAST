<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_project'); 
    }

    public function index()
    {
        $data=array('title'=>'Marketing Dashboard',
                    'isi'=>'marketing/project/data_project',
                    
                    'data_project' => $this->model_project->get_all(),
                );
        $this->load->view('marketing/layout/wrapper',$data,FALSE); 
        
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data Project',
            'isi'=>'marketing/project/tambah_project',
            'tambah_project' => $this->model_project->get_all(),
            'get_category'=> $this->model_project->get_marketing('nama_kar'),
            'get_category1'=> $this->model_project->get_pelanggan('nama_pel'),
            'get_category2'=> $this->model_project->get_programmer('nama_kar'),
        );

        $this->load->view('marketing/layout/wrapper',$data,FALSE); 
    }

    function simpan() {
        $data = array(
            
            'nama_project' => $this->input->post("nama_project"),
            'id_marketing'       => $this->input->post("id_marketing"),
            'id_programmer' => $this->input->post("id_programmer"),
            'id_pelanggan'         => $this->input->post("id_pelanggan"),
            'no_po'         => $this->input->post("no_po"),
            'tanggal_po'         => $this->input->post("tanggal_po"),
            'status'         => $this->input->post("status"),
            'harga'         => $this->input->post("harga"),
            
        );
        $this->model_project->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('marketing/project');
    }

    public function lihat($id_project) {
        $data = array(

            'title'     => 'Lihat Data Project',
            'isi'=>'marketing/project/lihat_project',
            'data_project' => $this->model_project->lihat($id_project),
            //'get_category1'=> $this->model_project->get_pelanggan('nama_pel'),
        );
        //print_r($data);
        $this->load->view('marketing/layout/wrapper',$data,FALSE);
    }

    public function hapus($id_project)
    {

        $id['id_project'] = $this->uri->segment(4);

        $this->model_project->hapus($id);

        //redirect
        redirect('marketing/project');

    }
}