<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('user');
        //cek session dan level programmer
        if($this->user->is_role() != "programmer"){
            redirect("login");
        }
    }

    public function index()
    {

        $data=array('title'=>'Pelanggan Dashboard',
        'isi'=>'pelanggan/dashboard');
        $this->load->view('admin/layout/wrapper',$data,FALSE);            

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}