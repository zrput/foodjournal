<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mmood extends CI_Model
{

    public function get_mood($user_id)
    {
        // $this->db->where('user_iduser', $user_id);
        $query = $this->db->query("select * from user_mood 
        inner join mood on user_mood.mood_idmood = mood.idmood
        where user_iduser = $user_id
        order by waktu desc;");
        return $query->result_array();
    }

    public function getNamaMood($id)
    {
        $this->db->select('nama_mood');
        $this->db->where('idmood', $id);
        $query = $this->db->get('mood');
        return $query->row('nama_mood');
    }

    public function insert_mood($user_id)
    {
        $id = $this->input->post('nama');
        $nama = $this->Mmood->getNamaMood($id);
        $tambah = array(
            'nama_mood' => $nama,
            'mood_idmood' => $this->input->post('nama'),
            'waktu' => $this->input->post('waktu'),
            'ket_tambahan' => $this->input->post('ket_tambahan'),
            'user_iduser' => $user_id

        );

        $result = $this->db->insert('user_mood', $tambah);
        return $result;
    }

    public function data_mood()
    {
        return $this->db->get('mood')->result_array();
    }


    public function getdetail($id)
    {
        $query = $this->db->query("select * from user_mood 
        inner join mood on user_mood.mood_idmood = mood.idmood
        where id_user_mood = $id;");

        return $query;
    }

    public function update_mood($user_id)
    {
        $id = $this->input->post('nama');
        $nama = $this->Mmood->getNamaMood($id);
        $edit = array(
            'nama_mood' => $nama,
            'mood_idmood' => $this->input->post('nama'),
            'waktu' => $this->input->post('waktu'),
            'ket_tambahan' => $this->input->post('ket_tambahan'),
            'user_iduser' => $user_id
        );
        // var_dump($edit);
        // die;
        $this->db->where('id_user_mood', $this->input->post('id'));
        $result = $this->db->update('user_mood', $edit);
        return $result;
    }

    public function delete_mood($id)
    {
        $this->db->where('id_user_mood', $id);
        $result = $this->db->delete('user_mood');
        return $result;
    }
}

/* End of file Mmood.php */
