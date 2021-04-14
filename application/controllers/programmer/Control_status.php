<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_status extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_status'); 
    }

    public function index()
    {
        $id_user = $this->session->userdata('id_user');
        $data=array('title'=>'Tabel Karyawan',
                    'isi'=>'programmer/tabel_status',
                    'data_karyawan' => $this->model_status->get_project_by_programmer($id_user),
                    
                );
        $this->load->view('programmer/layout/wrapper',$data,FALSE); 
        
    }

    public function edit($id_karyawan)
    {
        $id_pengguna = $this->uri->segment(3);

        $data = array(

            'title'         => 'Edit Data Karyawan',
            'isi'           =>'programmer/edit_status',
            'data_karyawan' => $this->model_status->edit($id_karyawan),
            'data_karyawan1'=> $this->model_status->listing()

        );

        $this->load->view('programmer/layout/wrapper',$data,FALSE); 
    }

    public function update()
    {
        $status =  $this->input->post("status");
        $presentase = 100;

        if($status == "New"){
            $presentase = 0;
        }
        if($status == "Analisa"){
            $presentase = 20;
        }
        if($status == "Desain"){
            $presentase = 40;
        }
        if($status == "Implementasi"){
            $presentase = 60;
        }
        if($status == "Testing"){
            $presentase = 80;
        }
        if($status == "Selesai"){
            $presentase = 100;
        }
        

        $id['id_project'] = $this->input->post("id_project");
            $data = array(
                'status'     => $status,
                'presentase' => $presentase,
            );
    
            
        $this->model_status->get_all();
        $this->model_status->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('programmer/control_status');

    }
    
}