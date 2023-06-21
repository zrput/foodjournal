<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tidur extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mtidur');
        if(!$this->session->userdata('iduser')) {
            redirect(base_url('Auth'));
        }
        
    }
    
    public function index()
    {
        $this->data_tidur();
    }

    public function data_tidur(){
        $user_id = $this->session->userdata('iduser');
        $data['tdr'] = $this->Mtidur->get_tidur($user_id);

        // data untuk tambah data
        $data['ket'] = $this->Mtidur->data_tidur();

        // data untuk update data
        $data['v2'] = $this->Mtidur->data_tidur();
        
        $this->load->view('member/tidur/main_tidur', $data);
    }

    // public  function tambah_tidur(){
    //     $data['ket'] = $this->Mtidur->data_tidur();
    //     $this->load->view('member/tidur/form_tidur', $data);
        
    // }

    public function add_tidur(){
        $user_id = $this->session->userdata('iduser');
        $this->Mtidur->insert_tidur($user_id);
        
        redirect(base_url('Tidur'));
    }

    // public function ubah_tidur($id){
    //     $data = $this->Mtidur->getdetail($id)->row_array();
    //     $data1 = $this->Mtidur->data_tidur();
       
    //     $data2 = array(
    //         'v1' => $data,
    //         'v2' => $data1
            
    //     );
    //     // var_dump($data2);
    //     // die;
    //     $this->load->view('member/tidur/edit_tidur', $data2);
    // }

    public function edit_tidur(){
        $user_id = $this->session->userdata('iduser');
        $this->Mtidur->update_tidur($user_id);
        redirect(base_url('Tidur'));
    }

    public function hapus_tidur($id){
        $this->Mtidur->delete_tidur($id);
        redirect(base_url('Tidur'));
    }


}

/* End of file Controllername.php */
