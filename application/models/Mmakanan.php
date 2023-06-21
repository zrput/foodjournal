<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Mmakanan extends CI_Model {

    public function get_makanan($user_id){
        
        $query = $this->db->query("select * from user_makanan_minuman 
        inner join makanan_minuman on user_makanan_minuman.id_makanan_minuman = makanan_minuman.id_makanan
        where user_iduser = $user_id
        order by id_user_makanan desc;");
        return $query->result_array();
    }

    public function get_bahan($id){
        $query = $this->db->query("select idbahan, id_makanan_minuman, GROUP_CONCAT(bahan.nama_bahan SEPARATOR ', ') AS bahan from makanan_minuman
        inner join bahan on makanan_minuman.id_makanan = bahan.id_makanan_minuman
        where id_makanan_minuman = $id;");
        return $query->result_array();
    }

    public function searchdata($keyword, $iduser) {
        $query = $this->db->query("select nama_makanan from user_makanan_minuman 
        inner join makanan_minuman on user_makanan_minuman.id_makanan_minuman = makanan_minuman.id_makanan
        where user_iduser = $iduser and nama_makanan like '%$keyword%';");
    
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
    }


    

}

/* End of file Mmakanan.php */
