<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('user');
        $this->load->model('Model_status');
        
        //load model projects
        $this->load->model('model_project'); 
        
        //cek session dan level pelanggan
        if($this->user->is_role() != "pelanggan"){
            redirect("login");
        }
    }

    public function index()
    {
        $id_user=$this->session->userdata('id_user');
        $data=array
        (   
            'title'    =>'BAST Pelanggan Dashboard',
            'isi'      =>'pelanggan/dashboard',
            'project'  =>$this->Model_status->get_by_pelanggan($id_user),
            'data_project' => $this->model_project->get_by_pelanggan($id_user),
        );
        
        $this->load->view('pelanggan/layout/wrapper', $data, FALSE);        

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function lihat($id_project) 
    {

        $data = array(

            'title'         => 'Lihat Data Project',
            'isi'           => 'pelanggan/project/lihat_project',
            'data_project' => $this->model_project->lihat_project($id_project),

        );
        //print_r($data);
        $this->load->view('pelanggan/layout/wrapper',$data, FALSE);
    }

}