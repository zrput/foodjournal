<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Makanan extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mmakanan');
        if(!$this->session->userdata('iduser')) {
            redirect(base_url('Auth'));
        }
    }
    
    public function index()
    {
        $this->data_makanan();
    }

    public function data_makanan(){
        $user_id = $this->session->userdata('iduser');
        $data['mkn'] = $this->Mmakanan->get_makanan($user_id);

        $this->load->view('member/makanan/main_makanan', $data);
    }

    public function search() {
        $user_id = $this->session->userdata('iduser');
        $keyword = $this->input->post('keyword');
        $data = $this->Mmakanan->searchdata($keyword, $user_id);
        // var_dump($data);
        
        json_encode($data);
        // die;
        // $this->load->view('search_results', $data);
      }

}

/* End of fils Makanan.php */
