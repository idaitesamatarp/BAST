<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('user');
        //cek session dan level pelanggan
        if($this->user->is_role() != "pelanggan"){
            redirect("login");
        }
    }

    public function index()
    {
        $data=array
        (   
            'title' =>'Dashboard Pelanggan',
        );
        
        $this->load->view('pelanggan/dashboard', $data);        

    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

}