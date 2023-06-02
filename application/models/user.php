<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Model {

    public function tambahdata(){
        $tambah = array(
            'name' => $this->input->post('name'),
            'umur' => $this->input->post('date'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'gender' => $this->input->post('gen'),
            'role' => 'member'
        );
        $result = $this->db->insert('user', $tambah);
        return $result;
    }

}

/* End of file user.php */
