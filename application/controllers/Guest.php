<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index(){
        
    }

    public function home(){
        $this->load->view('guest/homes');
        
    }

    public function artikel(){
        $this->load->view('guest/artikels');
        
    }

}

/* End of file Controllername.php */
