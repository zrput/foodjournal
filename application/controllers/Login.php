<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('login');
    }

    public function signup(){
        $this->load->view('signup');
        
    }

}

/* End of file Controllername.php */
