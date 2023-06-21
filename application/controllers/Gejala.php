<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mgejala');
        if(!$this->session->userdata('iduser')) {
            redirect(base_url('Auth'));
        }
    }

    public function index()
    {
        $this->data_gejala();
    }

    public function data_gejala(){
        $user_id = $this->session->userdata('iduser');
        $data['gjl'] = $this->Mgejala->getgejala($user_id);

        $this->load->view('member/gejala/main_gejala', $data);
        
    }

    // public function tambah_gejala(){
    //     $this->load->view('member/gejala/form_gejala');
        
    // }

    public function add_gejala(){
        $user_id = $this->session->userdata('iduser');
        $this->Mgejala->insert_gejala($user_id);
        
        redirect(base_url('Gejala'));
        
    }

    // public function ubah_gejala($id){
    //     $data['gejala'] = $this->Mgejala->getdetail($id)->row_array();
    //     $this->load->view('member/gejala/edit_gejala', $data);
        
    // }

    public function edit_gejala(){
        $user_id = $this->session->userdata('iduser');
        $this->Mgejala->update_gejala($user_id);
        redirect(base_url('Gejala'));
    }

    public function hapus_gejala($id){
        $this->Mgejala->delete_gejala($id);
        redirect(base_url('Gejala'));
    }
}

/* End of file Gejala.php */
