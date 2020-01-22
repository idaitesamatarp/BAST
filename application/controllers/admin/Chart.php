<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('Model_status'); 
    }

    public function index()
    {
        $data=array('title'=>'Chart Admin Management',
                    'isi'=>'admin/chart/data_chart',
                    'chart'                         => $this->Model_status->get_data_chart(),
                    'presentase'                    => $this->Model_status->getpresentase(),
                    'jml_user'                      => $this->Model_status->jml_user(),
                    'jml_prog'                      => $this->Model_status->jml_programmer(),
                    'jml_mar'                       => $this->Model_status->jml_marketing(),
                    'jml_pel'                       => $this->Model_status->jml_pelanggan(),
                    'status'                        => $this->Model_status->status(),
                    'new'                           =>$this->Model_status->new(),
                    'analisa'                       => $this->Model_status->analisa(),
                    'desain'                        => $this->Model_status->desain(),
                    'implementasi'                  => $this->Model_status->implementasi(),
                    'testing'                       => $this->Model_status->testing(),
                    'selesai'                       => $this->Model_status->selesai(),
                    'semua'         =>$this->Model_status->semua(),

                );
        $this->load->view('admin/layout/wrapper',$data,FALSE); 
        

    }

    

}