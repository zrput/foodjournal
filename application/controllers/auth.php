<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Muser');
        
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
        $this->form_validation->set_rules('password', 'password', 'trim|required|max_length[12]', array('required' => '%s tidak boleh kosong'));
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
        $this->Muser->tambahdata();
        redirect(base_url('Auth'));
    }


    private function verifikasi(){
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        // konversi supaya password selalu huruf kecil
        $password = md5(strtolower($pass));
        $response = $this->db->get_where('user',array('email' => $email , 'password' => $password))->row_array();
        if($response !== null && count($response) > 1){
            $data = array(
                'iduser' => $response['iduser'],
                'name' => $response['name'],
                'email' => $response['email'],
                'gender' => $response['gender'],
                'umur' => $response['umur'],
                'role' => $response['role']
            );
            // var_dump($data);
            // die;
            $this->session->set_userdata($data);
            if($response['role'] == 'member'){
                redirect(base_url('Main'));
            } else {
                redirect(base_url('Admin'));
            }
            
        }else {
            // Peringatan jika email atau password salah
            $this->session->set_flashdata('error', 'Email atau password salah!!');
            redirect(base_url('auth/index'));
        }
    }

    
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('Auth'));
    }
}

/* End of file Controllername.php */
