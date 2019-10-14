<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('user');
        //cek session dan level marketing
        if($this->user->is_role() != "marketing"){
            redirect("login");
        }
    }

    public function index()
    {

        $data=array('title'=>'Marketing Dashboard',
        'isi'=>'marketing/dashboard');
        $this->load->view('marketing/layout/wrapper',$data,FALSE);             

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}