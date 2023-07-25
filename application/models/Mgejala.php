<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mgejala extends CI_Model
{

    public function getgejala($user_id)
    {
        $this->db->where('user_iduser', $user_id);
        $this->db->order_by('waktu', 'desc');
        $query = $this->db->get('symptom');

        return $query->result_array();
    }

    public function insert_gejala($user_id)
    {
        $tambah = array(
            'nama_symptom' => $this->input->post('nama'),
            'waktu' => $this->input->post('waktu'),
            'ket_tambahan' => $this->input->post('ket_tambahan'),
            'user_iduser' => $user_id

        );
        $result = $this->db->insert('symptom', $tambah);
        return $result;
    }

    public function getdetail($id)
    {
        $this->db->where('idsymptom', $id);
        return $this->db->get('symptom');
    }

    public function update_gejala($user_id)
    {
        $edit = array(
            'nama_symptom' => $this->input->post('nama'),
            'waktu' => $this->input->post('waktu'),
            'ket_tambahan' => $this->input->post('ket_tambahan'),
            'user_iduser' => $user_id
        );
        $this->db->where('idsymptom', $this->input->post('id'));
        $result = $this->db->update('symptom', $edit);
        return $result;
    }

    public function delete_gejala($id)
    {
        $this->db->where('idsymptom', $id);
        $result = $this->db->delete('symptom');
        return $result;
    }
}

/* End of file Mgejala.php */
