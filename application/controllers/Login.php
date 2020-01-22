<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load library form validasi
        $this->load->library('form_validation');
        //load model admin
        $this->load->model('user');
      
        
    }

    public function index()
    {

            if($this->user->is_logged_in())
            {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
                redirect("dashboard");
            
            }else{

                //jika session belum terdaftar

                //set form validation
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $username = $this->input->post("username", TRUE);
                $password = MD5($this->input->post('password', TRUE));

                //checking data via model
                $checking = $this->user->check_login('user', array('username' => $username), array('password' => $password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'id_user'       => $apps->id_user,
                            'username'      => $apps->username,
                            'password'      => $apps->password,
                            'level'         => $apps->level,
                            'id_pelanggan'  =>$apps->id_pelanggan,
                            'id_karyawan'   =>$apps->id_karyawan,
                            'image'         =>$apps->image
                         
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        //redirect berdasarkan level user
                        if($this->session->userdata("level") == "admin"){
                            redirect('admin/dashboard');
                        }elseif($this->session->userdata("level") == "marketing"){
                            redirect('marketing/dashboard');
                        }elseif($this->session->userdata("level") == "programmer"){
                            redirect('programmer/dashboard');
                        }else{
                            redirect('pelanggan/dashboard');
                        }        
                    }
                }else{

                    $data['error'] = '<div class="alert alert-warning" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> Username atau Password Salah!</div></div>';
                    $this->load->view('login', $data);
                }

            }else{

                $this->load->view('login');
            }

        }

    }
}