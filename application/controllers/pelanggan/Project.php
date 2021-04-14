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
        $id_user=$this->session->userdata('id_user');
        $data=array
        (
            'title'         =>'BAST Pelanggan Dashboard',
            'isi'           =>'pelanggan/project/data_project',
            'data_project' => $this->model_project->get_by_pelanggan($id_user),
           
        );
        $this->load->view('pelanggan/layout/wrapper',$data, FALSE); 
        
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