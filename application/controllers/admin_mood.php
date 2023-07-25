<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Mood extends CI_Controller {

  public function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin_mood');
		if (!$this->session->userdata('iduser')) {
			redirect(base_url('Auth'));
		}
	}

    public function index()
    {
	
        $this->data_mood();
        
    }

    public function data_mood() 
    {
        $data['mood'] = $this->Madmin_mood->get_mood();
        // var_dump($data['mood']);
        // die;
        $this->load->view('admin/admin_mood/main_mood', $data);
        
    }

	public function tambah_mood()
    {
        $this->Madmin_mood->insert_mood();

        redirect(base_url('Admin_Mood'));
    }

    public function edit_mood() 
    {
        $this->Madmin_mood->update_mood();
        redirect(base_url('Admin_Mood'));
    }

    public function hapus_mood($id)
    {
        $this->Madmin_mood->delete_mood($id);
        redirect(base_url('Admin_Mood'));
    }

}

/* End of file Controllername.php */
