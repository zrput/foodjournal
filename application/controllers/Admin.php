<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('iduser')) {
            redirect(base_url('Auth'));
        }
    }
    
    public function index()
    {
        $this->load->view('admin/a_dashboard');
        
    }

}

/* End of file Admin.php */
