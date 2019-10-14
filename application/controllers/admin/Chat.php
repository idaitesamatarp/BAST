<?php

class Chat extends CI_Controller
{
    public $user;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->load->helper(array('url', 'form'));
        $this->load->library('user_agent');

        if (!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] === false) {
            redirect('welcome');
        }

        $this->user = $this->db->get_where('user', array('id_user' => $this->session->userdata['id_user']), 1)->row();
    }

    public function index()
    {
        $teman = $this->db->select("id_user,nama_kar,level");
        $teman = $this->db->from("user");
        $teman = $this->db->join("karyawan","karyawan.id_karyawan=user.id_karyawan","inner");
        $teman = $this->db->where("level", 'marketing')
        ->get();

        $data=array('title'=>'Admin Dashboard',
                    'isi'=>'admin/chat/chat_dashboard',
                    
                    'teman' => $teman
                );
        $this->load->view('admin/layout/wrapper',$data,FALSE); 
    }

    public function getChats()
    {
        header('Content-Type: application/json');
        if ($this->input->is_ajax_request()) {
            // Find friend
            $friend = $this->db->get_where('user', array('id_user' => $this->input->post('chatWith')), 1)->row();

            // Get Chats
            $chats = $this->db
                ->select('chat.*, user.name')
                ->from('chat')
                ->join('user', 'chat.send_by = user.id_user')
                ->where('(send_by = '. $this->user->id_user .' AND send_to = '. $friend->id_user .')')
                ->or_where('(send_to = '. $this->user->id_user .' AND send_by = '. $friend->id_user .')')
                ->order_by('chat.time', 'desc')
                ->limit(100)
                ->get()
                ->result();

            $result = array(
                'name' => $friend->name,
                'chats' => $chats
            );
            echo json_encode($result);
        }
    }

    public function sendMessage()
    {
        $this->db->insert('chat', array(
            'message' => htmlentities($this->input->post('message', true)),
            'send_to' => $this->input->post('chatWith'),
            'send_by' => $this->user->id_user
        ));
    }
}