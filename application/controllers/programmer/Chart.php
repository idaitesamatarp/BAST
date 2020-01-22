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
        $data=array('title'=>'Tabel Karyawan',
                    'isi'=>'programmer/chart',
                    'chart'                         => $this->Model_status->get_data_chart(),
                    'presentase'                    => $this->Model_status->getpresentase(),
                    'harga'                         => $this->Model_status->getharga(),
                    'sharga'                        => $this->Model_status->getSharga(),
                    'stahun'                        => $this->Model_status->gettahun(),
                    'belum_selesai'                 => $this->Model_status->belum_selesai(),
                    'status'                        => $this->Model_status->status(),
                    'new'                           =>$this->Model_status->new(),
                    'analisa'                       => $this->Model_status->analisa(),
                    'desain'                        => $this->Model_status->desain(),
                    'implementasi'                  => $this->Model_status->implementasi(),
                    'testing'                       => $this->Model_status->testing(),
                    'selesai'                       => $this->Model_status->selesai(),

                );
        $this->load->view('programmer/layout/wrapper',$data,FALSE); 
        

    }

    

}