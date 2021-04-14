<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('user');
        $this->load->model('model_status');
        //cek session dan level programmer
        if($this->user->is_role() != "programmer"){
            redirect("login");
        }
    }

    public function index()
    {
        $new            =$this->model_status->new();
        $analisa        = $this->model_status->analisa();
        $desain         = $this->model_status->desain();
        $implementasi   = $this->model_status->implementasi();
        $testing        = $this->model_status->testing();
        $selesai        = $this->model_status->selesai();
        $belum_selesai  = $this->model_status->belum_selesai();
        $status         = $this->model_status->status();
        $sharga         = $this->model_status->getSharga();
        $stahun         = $this->model_status->gettahun();
        $chart          = $this->model_status->get_data_chart();

        $data           =array(
            'title'         =>'Dashboard Programmer',
            'isi'           =>'programmer/dashboard',
            'chart'         => $this->model_status->get_data_chart(),
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
            'nama_project'  =>$this->model_status->namaproject(),
            'persentase'    =>$this->model_status->persentase(),
            'semua'         =>$this->model_status->semua(),
            
        );
        $this->load->view('programmer/layout/wrapper',$data,FALSE);            

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}