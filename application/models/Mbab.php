<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mbab extends CI_Model
{

    public function get_bab($user_id)
    {
        // $this->db->where('user_iduser', $user_id);
        $query = $this->db->query("select * from user_bab 
        inner join bab on user_bab.bab_idbab = bab.idbab
        where user_iduser = $user_id
        order by waktu desc;");
        return $query->result_array();
    }

    public function insert_bab($user_id)
    {
        $tambah = array(
            'bab_idbab' => $this->input->post('bab'),
            'waktu' => $this->input->post('waktu'),
            'warna' => $this->input->post('warna'),
            'ket_tambahan' => $this->input->post('ket_tambahan'),
            'user_iduser' => $user_id

        );
        $result = $this->db->insert('user_bab', $tambah);
        return $result;
    }

    public function data_bab()
    {
        return $this->db->get('bab')->result_array();
    }


    public function getdetail($id)
    {
        $query = $this->db->query("select * from user_bab 
        inner join bab on user_bab.bab_idbab = bab.idbab
        where id_user_bab = $id;");

        return $query;
    }

    public function update_bab($user_id)
    {
        $edit = array(
            'bab_idbab' => $this->input->post('bab'),
            'waktu' => $this->input->post('waktu'),
            'warna' => $this->input->post('warna'),
            'ket_tambahan' => $this->input->post('ket_tambahan'),
            'user_iduser' => $user_id
        );
        // var_dump($edit);
        // die;
        $this->db->where('id_user_bab', $this->input->post('id'));
        $result = $this->db->update('user_bab', $edit);
        return $result;
    }

    public function delete_bab($id)
    {
        $this->db->where('id_user_bab', $id);
        $result = $this->db->delete('user_bab');
        return $result;
    }
}

/* End of file Mbab.php */
