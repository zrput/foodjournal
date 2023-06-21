<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mood extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mmood');
        if(!$this->session->userdata('iduser')) {
            redirect(base_url('Auth'));
        }
        
    }
    
    public function index()
    {
        $this->data_mood();

    }

    public function data_mood(){
        $user_id = $this->session->userdata('iduser');
        $data['mood'] = $this->Mmood->get_mood($user_id);

        // untuk insert data
        $data['ket'] = $this->Mmood->data_mood();

        // untuk update data
        $data['v2'] = $this->Mmood->data_mood();

        $this->load->view('member/mood/main_mood', $data);
    }

    // public  function tambah_mood(){
    //     $data['ket'] = $this->Mmood->data_mood();
    //     $this->load->view('member/mood/form_mood', $data);
        
    // }

    public function add_mood(){
        $user_id = $this->session->userdata('iduser');
        $this->Mmood->insert_mood($user_id);
        
        redirect(base_url('Mood'));
    }

    // public function ubah_mood($id){
    //     $user_id = $this->session->userdata('iduser');
    //     $data['v1'] = $this->Mmood->getdetail($id)->row_array();
    //     $data['v2'] = $this->Mmood->data_mood();
       
    //     // $data2 = array(
    //     //     'v1' => $data,
    //     //     'v2' => $data1
            
    //     // );
    //     // var_dump($data2);
    //     // die;
    //     $this->load->view('member/mood/mood', $data);
    // }

    public function edit_mood(){
        $user_id = $this->session->userdata('iduser');
        $this->Mmood->update_Mood($user_id);
        redirect(base_url('Mood'));
    }

    public function hapus_mood($id){
        $this->Mmood->delete_mood($id);
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file Mood.php */
