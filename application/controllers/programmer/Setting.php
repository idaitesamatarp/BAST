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
            
            'title'     =>'Profile Programmer',
            'isi'       =>'programmer/account/setting',
            'data_user'  =>$this->model_account->get_all_user($id_user),
            'image' =>$this->model_account->get_image($id_user)


        );

        $this->load->view('programmer/layout/wrapper',$data,FALSE); 
        
    }

    public function edit($id_user)
    {
        $id_user = $this->session->userdata('id_user');

        $data = array(
            'title'     => 'Profile Programmer',
            'isi'       => 'programmer/account/setting',
            'data_user' => $this->model_account->edit($id_user)

        );

        $this->load->view('programmer/layout/wrapper',$data,FALSE); 
    }

    public function update()
    {
        $id['id_user'] = $this->input->post("id_user");
            if(!empty($_FILES["image"]["name"])) {
                $image = $this->_uploadImage();
                //echo "ada"; exit;
            }else{
                $image =$this->input->post("old_image");
                //echo "kosong"; exit;
            }
            if($this->input->post("password")!="")
            {
                $data = array(                 
                    'username'         => $this->input->post("username"),
                    'password'    => md5($this->input->post("password")),
                    'image'    => $image,

                );
                
            }
            else
            {
                $data = array(
                    'username'         => $this->input->post("username"),
                    'image'    => $image,
      
                );
            }

         


        $this->model_account->update_setting($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('programmer/setting');

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
		return "default.jpg";
    }


    

    

}