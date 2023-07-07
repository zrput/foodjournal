<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {

    public function tambahdata(){
        
        $pass = $this->input->post('password');
        // konversi supaya password selalu huruf kecil
        $pass1 = strtolower($pass);
        $password = md5($pass1);

        $tambah = array(
            'name' => $this->input->post('name'),
            'umur' => $this->input->post('date'),
            'email' => $this->input->post('email'),
            'password' => $password,
            'gender' => $this->input->post('gen'),
            'role' => 'member'
        );
        $result = $this->db->insert('user', $tambah);
        return $result;
    }

}

/* End of file user.php */
