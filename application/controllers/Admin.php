<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
        if (!$this->session->userdata('iduser')) {
            redirect(base_url('Auth'));
        }
    }

    public function index()
    {
        $user_id = $this->session->userdata('iduser');
        $data = array(
            'artikel' => $this->Madmin->Nartikel($user_id),
            'admin_bab' => $this->Madmin->Nadmin_bab(),
            'admin_mood' => $this->Madmin->Nadmin_mood(),
            'info_umum' => $this->Madmin->Ninfo_umum($user_id)

        );
        $this->load->view('admin/a_dashboard', $data);
    }
}

/* End of file Admin.php */
