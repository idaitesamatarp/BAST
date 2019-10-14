<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

    public function __construct(){

        parent ::__construct();
    }

    public function index()
    {
        $data=array (
            
            'title' =>'Dashboard Pelanggan',

        );

        $this->load->view('pelanggan/formbast', $data); 
        
    }

}