<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_user'); 
    }

    public function index()
    {
        $data=array('title'=>'Admin Dashboard',
                    'isi'=>'admin/users/data_user',

                    'data_user' => $this->model_user->get_karyawan(),
                    'data_user1' => $this->model_user->get_pelanggan(),
                );
        $this->load->view('admin/layout/wrapper',$data,FALSE); 
        
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data User',
            'isi'=>'admin/users/tambah_user',
            'tambah_user' => $this->model_user->getNama('nama_kar'),
            'get_category'=> $this->model_user->getNama('nama_kar'),
         
        );

        $this->load->view('admin/layout/wrapper',$data,FALSE); 
    }

    public function tambah1()
    {
        $data = array(

            'title'     => 'Tambah Data User',
            'isi'=>'admin/users/tambah_user1',

            'tambah_user1' => $this->model_user->getNamaPel('nama_pel'),
    
            'get_category1' => $this->model_user->getNamaPel('nama_pel')
        );

        $this->load->view('admin/layout/wrapper',$data,FALSE); 
    }

    function get_id_kar(){
        $id_karyawan=$this->input->post('id_karyawan');
        $data=$this->model_user->get_nama_kar($id_karyawan);
        echo json_encode($data);
    }



    function simpan() {
        $data = array(
            'id_karyawan' => $this->input->post("id_karyawan"),
            'username'       => $this->input->post("username"),
            'password' => md5($this->input->post("password")),
            'level'         => $this->input->post("level"),
        );
        $this->model_user->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('admin/users');
    }

    function simpan1() {
        $data = array(
            'id_pelanggan' => $this->input->post("id_pelanggan"),
            'username'       => $this->input->post("username"),
            'password' => md5($this->input->post("password")),
            'level'         => $this->input->post("level"),
        );
        $this->model_user->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('admin/users');
    }


    public function lihat($id_user) {
        $data = array(

            'title'     => 'Lihat Data User',
            'isi'=>'admin/users/lihat_user',
            'data_user' => $this->model_user->lihat($id_user),
        );
        //print_r($data);
        $this->load->view('admin/layout/wrapper',$data,FALSE);
    }

    public function lihat2($id_user) {
        $data = array(

            'title'     => 'Lihat Data User',
            'isi'=>'admin/users/lihat_user2',
            'data_user' => $this->model_user->lihat2($id_user),
        );
        //print_r($data);
        $this->load->view('admin/layout/wrapper',$data,FALSE);
    }

    public function edit($id_user)
    {

        $data = array(

            'title'     => 'Edit Data User',
            'isi'=>'admin/users/edit_user',
            'data_user' => $this->model_user->edit($id_user)
            

        );
        //print_r($data);
        $this->load->view('admin/layout/wrapper',$data,FALSE); 
    }

    public function edit2($id_user)
    {

        $data = array(

            'title'     => 'Edit Data User',
            'isi'=>'admin/users/edit_user2',
            'data_user' => $this->model_user->edit($id_user)
            

        );
        //print_r($data);
        $this->load->view('admin/layout/wrapper',$data,FALSE); 
    }

    public function update()
    {  
            $id['id_user'] = $this->input->post("id_user");
            if($this->input->post("password")!="")
            {
                $data = array(                 
                    'username'         => $this->input->post("username"),
                    'password'    => md5($this->input->post("password")),
                    'level'         => $this->input->post("level"),
                );
                
            }
            else
            {
                $data = array(
                    'username'         => $this->input->post("username"),
                    'level'         => $this->input->post("level"),       
                );
            }

         


        $this->model_user->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('admin/users');

    }

    public function hapus($id_user)
    {

        $id['id_user'] = $this->uri->segment(4);

        $this->model_user->hapus($id);

        //redirect
        redirect('admin/users');

    }
}