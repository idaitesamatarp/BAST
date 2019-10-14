<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Track extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_project'); 
    }

    public function index()
    {
        $data=array('title'=>'Dashboard Pelanggan',
                    'track_project' => $this->model_project->get_all(),
                );
        $this->load->view('pelanggan/project_track/track_project',$data); 
        
    }

    public function lihat($id_project) {
        $data = array(

            'title'     => 'Lihat Data Project',
            'track_project' => $this->model_project->lihat($id_project),
            //'get_category1'=> $this->model_project->get_pelanggan('nama_pel'),
        );
        //print_r($data);
        $this->load->view('pelanggan/project_track/detail_project',$data);
    }

}