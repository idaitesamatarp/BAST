<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller 
{
    public function __construct(){

        parent ::__construct();
        $this->load->model('model_account');
    }

    public function index()
    {
        $id_user = $this->session->userdata('id_user');
        $data=array (
            
            'title'     =>'Profile Pelanggan',
            'isi'       =>'pelanggan/account/setting',
            'data_pel'  =>$this->model_account->get_all_pel($id_user)

        );

        $this->load->view('pelanggan/layout/wrapper', $data, FALSE); 
        
    }

    public function edit_pel($id_user)
    {
        $id_user = $this->session->userdata('id_user');

        $data = array(

            'title'     => 'Profile Pelanggan',
            'isi'       =>'pelanggan/account/setting',
            'data_pel' => $this->model_account->edit_pel($id_user)

        );

        $this->load->view('pelanggan/layout/wrapper',$data,FALSE); 
    }

    public function update_pel()
    {  
            $id['id_pelanggan'] = $this->input->post("id_pelanggan");
            if(!empty($_FILES["image"]["name"])) {
                $image = $this->_uploadImage();
                //echo "ada"; exit;
            }else{
                $image = $post["old_image"];
                //echo "kosong"; exit;
            }

            $data = array(

                'nama_pel'  => $this->input->post("nama_pel"),
                'gender'    => $this->input->post("gender"),
                'alamat'    => $this->input->post("alamat"),
                'nohp'      => $this->input->post("nohp"),
            );
    
        $this->model_account->update_pel($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('pelanggan/setting');

    }

    private function _uploadImage()
	{
		$config['upload_path']          = './upload/user/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('image')) {
			return $this->upload->data("file_name");
		}
		print_r($this->upload->display_errors()); exit;
		return "user.png";
    }
}