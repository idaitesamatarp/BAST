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
                    'isi'=>'admin/project/data_project',
                    
                    'data_project' => $this->model_project->get_all(),
                );
        $this->load->view('admin/layout/wrapper',$data,FALSE); 
        
    }

    public function lihat($id_project) {
        $data = array(

            'title'     => 'Lihat Data Project',
            'isi'=>'admin/project/lihat_project',
            'data_project' => $this->model_project->lihat($id_project),

        );
        //print_r($data);
        $this->load->view('admin/layout/wrapper',$data,FALSE);
    }

}