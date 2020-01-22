<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller 
{
    public function __construct(){

        parent ::__construct();
        $this->load->model('model_account');

    }

    public function index()
    {
        $id_user = $this->session->userdata('id_user');
        $data=array (
            
            'title'     =>'Profile admin',
            'isi'       =>'admin/account/profile',
            'data_admin'  =>$this->model_account->get_all($id_user),

        );

        $this->load->view('admin/layout/wrapper',$data,FALSE); 
        
    }

    public function edit($id_user)
    {
        $id_user = $this->session->userdata('id_user');

        $data = array(
            'title'     => 'Profile admin',
            'isi'       => 'admin/account/profile',
            'data_admin' => $this->model_account->edit($id_user)

        );

        $this->load->view('admin/layout/wrapper',$data,FALSE); 
    }

    public function update()
    {
        $id['id_karyawan'] = $this->input->post("id_karyawan");      
            $data = array(

                'nik'       => $this->input->post("nik"),
                'nama_kar' => $this->input->post("nama_kar"),
                'alamat'         => $this->input->post("alamat"),
                'nohp'    => $this->input->post("nohp"),
            );
    
            //print_r($data);

        $this->model_account->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! Data Berhasil Diupdate Didatabase
                                                </div>');

        //redirect
        redirect('admin/account');

    }

    
   

    

}