<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cari_mood extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mcari_mood');
        if(!$this->session->userdata('iduser')) {
            redirect(base_url('Auth'));
        }
        
    }
    
    public function index(){
        $this->tampil_mood();
    }
    
    public function tampil_mood(){
    $data['ket'] = $this->Mcari_mood->data_options();
    $this->load->view('member/cari_mood/page_cari_mood', $data);
    }

    function hasil_cari(){
    $user_id = $this->session->userdata('iduser');
    $data['data'] = $this->Mcari_mood->hasil_cari($user_id);
    $data['keyword'] = $this->input->post('keyword');
    $data['ket'] = $this->Mcari_mood->data_options();
    
    $this->load->view('member/cari_mood/hasil_cari', $data);
    
    }

    function detail_frekuensi(){
        $user_id = $this->session->userdata('iduser');
        $data['data'] = $this->Mcari_mood->hasil_fmakanan($user_id);
        // var_dump($data);
        // die;
        $this->load->view('member/cari_mood/makanan_detail',$data);
        
    }
}

/* End of file Cari_gejala.php */
