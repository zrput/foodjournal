<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mmain');
        if(!$this->session->userdata('iduser')) {
            redirect(base_url('Auth'));
        }
    }
    
    public function index()
    {
        $user_id = $this->session->userdata('iduser');
        $data = array(
            'makanan' => $this->Mmain->Nmakanan($user_id),
            'gejala' => $this->Mmain->Ngejala($user_id),
            'mood' => $this->Mmain->Nmood($user_id),
            'bab' => $this->Mmain->Nbab($user_id),
            'tidur' => $this->Mmain->Ntidur($user_id),
            'catatan' => $this->Mmain->Ncatatan($user_id)
        );
        $data['ket'] = $this->Mmain->detail_cmood();

        
        $this->load->view('member/dashboard', $data);
        
    }

    public function view_gejala(){
        $this->load->view('member/pencarian_gejala');
        
    }


}

/* End of file Main.php */
