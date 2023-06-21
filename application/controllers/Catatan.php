<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Catatan extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mcatatan');
        if(!$this->session->userdata('iduser')) {
            redirect(base_url('Auth'));
        }
    }
    

    public function index() {
        $this->data_catatan();
        
    }

    public function data_catatan(){
        $user_id = $this->session->userdata('iduser');
        $data['ctn'] = $this->Mcatatan->getcatatan($user_id);

        $this->load->view('member/catatan/main_catatan', $data);
        
    }

    // public function tambah_catatan(){
    //     $this->load->view('member/catatan/form_catatan');
        
    // }

    public function add_catatan(){
        $user_id = $this->session->userdata('iduser');
        $this->Mcatatan->insert_catatan($user_id);
        
        redirect(base_url('Catatan'));
        
    }

    // public function ubah_catatan($id){
    //     $data['catatan'] = $this->Mcatatan->getdetail($id)->row_array();
    //     $this->load->view('member/catatan/edit_catatan', $data);
        
    // }

    public function edit_catatan(){
        $user_id = $this->session->userdata('iduser');
        $this->Mcatatan->update_catatan($user_id);
        redirect(base_url('Catatan'));
    }

    public function hapus_catatan($id){
        $this->Mcatatan->delete_catatan($id);
        redirect(base_url('Catatan'));
    }


}

/* End of file Controllername.php */
