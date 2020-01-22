<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('user');
        $this->load->model('Model_status');
        //cek session dan level marketing
        if($this->user->is_role() != "marketing"){
            redirect("login");
        }
    }

    public function index()
    {
        $new            =$this->Model_status->new();
        $analisa        = $this->Model_status->analisa();
        $desain         = $this->Model_status->desain();
        $implementasi   = $this->Model_status->implementasi();
        $testing        = $this->Model_status->testing();
        $selesai        = $this->Model_status->selesai();
        $belum_selesai  = $this->Model_status->belum_selesai();
        $status         = $this->Model_status->status();
        $sharga         = $this->Model_status->getSharga();
        $stahun         = $this->Model_status->gettahun();
        $chart          = $this->Model_status->get_data_chart();

        $data           =array(
            'title'         =>'Dashboard Marketing',
            'isi'           =>'marketing/dashboard',
            'chart'         => $this->Model_status->get_data_chart(),
            'sharga'        =>$sharga,
            'stahun'        =>$stahun,
            'status'        =>$status,
            'belum_selesai' =>$belum_selesai,
            'new'           =>$new,
            'analisa'       =>$analisa,
            'desain'        =>$desain,
            'implementasi'  =>$implementasi,
            'testing'       =>$testing,
            'selesai'       =>$selesai,
            'nama_project'  =>$this->Model_status->namaproject(),
            'persentase'    =>$this->Model_status->persentase(),
            'semua'         =>$this->Model_status->semua(),
            
        );
        $this->load->view('marketing/layout/wrapper',$data,FALSE); 
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}