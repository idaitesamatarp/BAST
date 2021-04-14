<?php

class Chatpel extends CI_Controller
{
    public $usr;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->load->helper(array('url', 'form'));
        $this->load->library('user_agent');
        $this->load->model('model_chat'); 

        $this->usr = $this->db->get_where('user', 
                                array('id_user' => $this->session->userdata['id_user']), 1)
                                ->row();
    }

    public function index()
    {

        $data=array('title'=>'Marketing Dashboard',
                    'isi'=>'marketing/chat/chat_pel',
                    
                    'pelanggan'=> $this->model_chat->get_chat_pelanggan('nama_pel'),
                );
        $this->load->view('marketing/layout/wrapper',$data,FALSE); 
    }

    public function getChats()
    {
        header('Content-Type: application/json');
        if ($this->input->is_ajax_request()) {
            // Find friend
            $friend = $this->db
            ->select('user.id_user, pelanggan.nama_pel')
            ->join('pelanggan','pelanggan.id_pelanggan = user.id_user')
            ->get_where('user', array('id_user' => $this->input->post('chatWith')), 1)->row();
            
            // Get Chats
            $chats = $this->db
                ->select('chat.*,user.id_user,pelanggan.nama_pel,user.image')
                ->from('chat')
                ->join('user', 'chat.send_by = user.id_user')
                ->join('pelanggan', 'pelanggan.id_pelanggan=user.id_user')
                ->where('(send_by = '. $this->usr->id_user .' AND send_to = '. $friend->id_user .')')
                ->or_where('(send_to = '. $this->usr->id_user .' AND send_by = '. $friend->id_user .')')
                ->order_by('chat.time', 'desc')
                ->limit(100)
                ->get()
                ->result();
              
            $result = array(
                'nama_pel' => $friend->nama_pel,
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
            'send_by' => $this->usr->id_user
        ));
    }
}