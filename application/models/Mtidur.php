<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Mtidur extends CI_Model {

    public function get_tidur($user_id){
        // $this->db->where('user_iduser', $user_id);
        $query = $this->db->query("select * from user_tidur 
        inner join tidur on user_tidur.tidur_idtidur = tidur.idtidur
        where user_iduser = $user_id
        order by id_user_tidur desc;");
        return $query->result_array();
    }

    public function insert_tidur($user_id){
        $tambah = array(
            'tidur_idtidur' => $this->input->post('kualitas'),
            'waktu_mulai' => $this->input->post('waktu_m'),
            'waktu_selesai' => $this->input->post('waktu_s'),
            'ket_tambahan' => $this->input->post('ket_tambahan'),
            'user_iduser'=> $user_id
            
        );
        $result = $this->db->insert('user_tidur', $tambah);
        return $result;
    }

    public function data_tidur(){
        return $this->db->get('tidur')->result_array();
        
    }


    public function getdetail($id){
        $query = $this->db->query("select * from user_tidur 
        inner join tidur on user_tidur.tidur_idtidur = tidur.idtidur
        where id_user_tidur = $id;");

        return $query;

    }

    public function update_tidur($user_id){
        $edit = array(
            'tidur_idtidur' => $this->input->post('kualitas'),
            'waktu_mulai' => $this->input->post('waktu_m'),
            'waktu_selesai' => $this->input->post('waktu_s'),
            'ket_tambahan' => $this->input->post('ket_tambahan'),
            'user_iduser'=> $user_id
        );
        // var_dump($edit);
        // die;
        $this->db->where('id_user_tidur', $this->input->post('id'));
        $result = $this->db->update('user_tidur', $edit);
        return $result;
    }

    public function delete_tidur($id){
        $this->db->where('id_user_tidur', $id);
        $result = $this->db->delete('user_tidur');
        return $result;
    }

}

/* End of file Mtidur.php */
