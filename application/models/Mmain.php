<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Mmain extends CI_Model {

    public function Nmakanan($id) {
        $query = $this->db->query("select count(id_user_makanan) as makanan from user_makanan_minuman where user_iduser = $id");
        $result = $query->row_array();
        return $result['makanan'];
    }

    public function Ngejala($id) {
        $query = $this->db->query("select count(idsymptom) as gejala from symptom where user_iduser = $id");
        $result = $query->row_array();
        return $result['gejala'];
    }

    public function Nmood($id) {
        $query = $this->db->query("select count(id_user_mood) as mood from user_mood where user_iduser = $id");
        $result = $query->row_array();
        return $result['mood'];
    }

    public function Nbab($id) {
        $query = $this->db->query("select count(id_user_bab) as bab from user_bab where user_iduser = $id");
        $result = $query->row_array();
        return $result['bab'];
    }

    public function Ntidur($id) {
        $query = $this->db->query("select count(id_user_tidur) as tidur from user_tidur where user_iduser = $id");
        $result = $query->row_array();
        return $result['tidur'];
    }

    public function Ncatatan($id) {
        $query = $this->db->query("select count(idcatatan_harian) as catatan from catatan_harian where user_iduser = $id");
        $result = $query->row_array();
        return $result['catatan'];
    }

}

/* End of file Mmain.php */
