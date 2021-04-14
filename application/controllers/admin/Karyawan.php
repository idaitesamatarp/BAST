<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_karyawan'); 
    }

    public function index()
    {
        $data=array('title'=>'Admin Dashboard',
                    'isi'=>'admin/karyawan/data_karyawan',
                    
                    'data_karyawan' => $this->model_karyawan->get_all(),
                );
        $this->load->view('admin/layout/wrapper',$data,FALSE); 
        
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data Karyawan',
            'isi'=>'admin/karyawan/tambah_karyawan',
            'tambah_karyawan' => $this->model_karyawan->get_all(),
        );

        $this->load->view('admin/layout/wrapper',$data,FALSE); 
    }

    function simpan() {
        $data = array(

            'nik'       => $this->input->post("nik"),
            'nama_kar' => $this->input->post("nama_kar"),
            'alamat'         => $this->input->post("alamat"),
            'nohp'    => $this->input->post("nohp"),
            'foto' => $this->_uploadImage(),
            

        );
        $this->model_karyawan->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('admin/karyawan');
    }

    public function edit($id_karyawan)
    {
        
        $id['id_karyawan'] = $this->input->post("id_karyawan");

        $data = array(
            'title'     => 'Edit Data Karyawan',
            'isi'=>'admin/karyawan/edit_karyawan',
            'data_karyawan' => $this->model_karyawan->edit($id_karyawan)

        );

        $this->load->view('admin/layout/wrapper',$data,FALSE); 
    }

    public function update()
    {
        $id['id_karyawan'] = $this->input->post("id_karyawan");
        ///print_r($_FILES); exit;
        if(!empty($_FILES["foto"]["name"])) {
            $foto = $this->_uploadImage();
            //echo "ada"; exit;
        }else{
            $foto =$this->input->post["old_image"];
            //echo "kosong"; exit;
        }
       
            $data = array(

                'nik'       => $this->input->post("nik"),
                'nama_kar' => $this->input->post("nama_kar"),
                'alamat'         => $this->input->post("alamat"),
                'nohp'    => $this->input->post("nohp"),
            );
    


        $this->model_karyawan->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('admin/karyawan');

    }

    public function hapus($id_karyawan)
    {
        
        $id['id_karyawan'] = $this->uri->segment(4);

        $this->model_karyawan->hapus($id);

        //redirect
        redirect('admin/karyawan');

    }


    private function _uploadImage()
	{
		$config['upload_path']          = './upload/karyawan/';
		$config['allowed_types']        = 'gif|jpg|png';
		
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('foto')) {
			return $this->upload->data("file_name");
		}
		print_r($this->upload->display_errors()); exit;
		return "default.jpg";
    }
}