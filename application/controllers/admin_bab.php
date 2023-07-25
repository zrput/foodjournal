<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Bab extends CI_Controller {

  public function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin_bab');
		if (!$this->session->userdata('iduser')) {
			redirect(base_url('Auth'));
		}
	}

    public function index()
    {
	
        $this->data_bristol();
        
    }

    public function data_bristol() 
    {
        $data['bab'] = $this->Madmin_bab->get_bristol();
        // var_dump($data['bab']);
        // die;
        $this->load->view('admin/admin_bab/main_bab', $data);
        
    }

	public function tambah_bristol()
    {
        $this->Madmin_bab->insert_bristol();

        redirect(base_url('Admin_Bab'));
    }

    public function edit_bristol() 
    {
        $this->Madmin_bab->update_bristol();
        redirect(base_url('Admin_Bab'));
    }

    public function hapus_bristol($id)
    {
        $this->Madmin_bab->delete_bristol($id);
        redirect(base_url('Admin_Bab'));
    }
}

/* End of file A_bab.php */
