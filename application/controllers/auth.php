<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
        
    }
    
    public function index()
    {
        $this->form_validation->set_rules('email', 'email', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('password', 'password', 'required|trim', array('required' => '%s tidak boleh kosong'));
        if($this->form_validation->run() == FALSE){
            $data = array('title' => "Login");
            $this->load->view('Auth/login', $data);
        }else {
            $this->verifikasi();
        }
    }

    public function signup(){
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]|max_length[12]', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('name', 'name', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('date', 'date', 'required', array('required' => '%s tidak boleh kosong'));
        $this->form_validation->set_rules('gen', 'gen', 'required', array('required' => '%s tidak boleh kosong'));
        if($this->form_validation->run() == FALSE){
            $data = array('title' => "Sign up");
            $this->load->view('Auth/signup', $data);
        }else {
            $this->tambahdata();
        }
        
    }

    public function tambahdata(){
        $this->user->tambahdata();
        redirect(base_url('Auth'));
    }


    public function verifikasi(){
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $response = $this->db->get_where('user',array('email' => $email , 'password' => $password))->row_array();
        if(count($response) > 1){
            $data = array(
                'name' => $response['name'],
                'email' => $response['email'],
                'gender' => $response['gender'],
                'umur' => $response['umur'],
                'role' => $response['role']
            );
            // var_dump($data);
            // die;
            $this->session->set_userdata($data);
            redirect('Guest/home');
        }
        

    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('Auth'));
    }
}

/* End of file Controllername.php */
