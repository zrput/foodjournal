<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bab extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mbab');
        if(!$this->session->userdata('iduser')) {
            redirect(base_url('Auth'));
        }
        
    }
    public function index()
    {
        $this->data_bab();
    }

    public function data_bab(){
        $user_id = $this->session->userdata('iduser');
        $data['bab'] = $this->Mbab->get_bab($user_id);

        // untuk menampilkan data ke tambah data
        $data['ket'] = $this->Mbab->data_bab();

        // untuk menampilkan data yang update
        $data['v2'] = $this->Mbab->data_bab();
        $this->load->view('member/bab/main_bab', $data);
    }

    // public  function tambah_bab(){
    //     $data['ket'] = $this->Mbab->data_bab();
    //     $this->load->view('member/bab/form_bab', $data);
        
    // }

    public function add_bab(){
        $user_id = $this->session->userdata('iduser');
        $this->Mbab->insert_bab($user_id);
        
        redirect(base_url('Bab'));
    }

    // public function ubah_bab($id){
    //     $data = $this->Mbab->getdetail($id)->row_array();
    //     $data1 = $this->Mbab->data_bab();
       
    //     $data2 = array(
    //         'v1' => $data,
    //         'v2' => $data1
            
    //     );
    //     // var_dump($data2);
    //     // die;
    //     $this->load->view('member/bab/edit_bab', $data2);
    // }

    public function edit_bab(){
        $user_id = $this->session->userdata('iduser');
        $this->Mbab->update_bab($user_id);
        redirect(base_url('Bab'));
    }

    public function hapus_bab($id){
        $this->Mbab->delete_bab($id);
        redirect(base_url('Bab'));
    }

}

/* End of file Bab.php */
