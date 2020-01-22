<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Bast extends CI_Controller
{
    public function __construct(){

        parent ::__construct();
        $this->load->model('model_form');
    }

    public function index()
    {
        $id_user=$this->session->userdata('id_user');
        $data=array (

            'title'         =>'BAST Pelanggan Dashboard',
            'isi'           =>'pelanggan/bast/formbast',
            'data_form'     =>$this->model_form->lihat_form($id_user),
            'id'            => $id_user
             
        );

        $this->load->view('pelanggan/layout/wrapper', $data, FALSE); 
        
    }

    public function download()
    {
        $id_user=$this->session->userdata('id_user');
        $data=array (

            'title'         =>'BAST Pelanggan Dashboard',
            'isi'           =>'pelanggan/bast/download_bast',
            'data_form'     =>$this->model_form->lihat_form($id_user),
            'id'            => $id_user
             
        );

        $this->load->view('pelanggan/layout/wrapper', $data, FALSE); 
    }

    public function save_sign($id)
    { 
        $result = array();
	    $imagedata = base64_decode($_POST['img_data']);
	    $filename = md5(date("dmYhisA"));
	    //Location to where you want to created sign image
	    $file_name = './doc_signs/'.$filename.'.png';
	    file_put_contents($file_name,$imagedata);
	    $result['status'] = 1;
	    $result['file_name'] = $file_name;
        echo json_encode($result);
        $this->model_form->save_sign($filename, $id);
    }

    public function laporan_pdf()
    {    
        $id_user=$this->session->userdata('id_user');
        $data = array(
            'title'         =>'BAST Pelanggan Dashboard',
            'isi'           =>'pelanggan/bast/download_bast',
            'data_form'     =>$this->model_form->lihat_form($id_user),
            'id'            =>$id_user
        );
        //$this->load->view('pelanggan/layout/wrapper', $data, FALSE); 

    $this->load->library('pdf');
    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "laporan-bast.pdf";
    $this->pdf->load_view('pelanggan/bast/download_bast', $data);
    }
    
}