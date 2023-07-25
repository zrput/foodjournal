<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Mcatatan extends CI_Model
{

    public function getcatatan($user_id)
    {
        $this->db->where('user_iduser', $user_id);
        $this->db->order_by('waktu', 'desc');
        $query = $this->db->get('catatan_harian');
        return $query->result_array();
    }

    public function insert_catatan($user_id)
    {
        $tambah = array(
            'catatan' => $this->input->post('catatan'),
            'waktu' => $this->input->post('waktu'),
            'user_iduser' => $user_id

        );
        $result = $this->db->insert('catatan_harian', $tambah);
        return $result;
    }

    public function getdetail($id)
    {
        $this->db->where('idcatatan_harian', $id);
        return $this->db->get('catatan_harian');
    }

    public function update_catatan($user_id)
    {
        $edit = array(
            'catatan' => $this->input->post('catatan'),
            'waktu' => $this->input->post('waktu'),
            'user_iduser' => $user_id
        );
        $this->db->where('idcatatan_harian', $this->input->post('id'));
        $result = $this->db->update('catatan_harian', $edit);
        return $result;
    }

    public function delete_catatan($id)
    {
        $this->db->where('idcatatan_harian', $id);
        $result = $this->db->delete('catatan_harian');
        return $result;
    }
}

/* End of fils Member.php */
