<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mcari_mood extends CI_Model {

    function data_options() {
        return $this->db->get('mood')->result_array();
    }
    
    function hasil_cari($user_id){
        $keyword = $this->input->post('keyword');
        $query = $this->db->query("select * , count(id_user_mood) as banyak_mood from user_mood 
        where user_iduser = $user_id and nama_mood = '$keyword'");
        return $query->result_array();
    }

    function hasil_fmakanan($user_id){
        $keyword = $this->input->post('keyword');
        $query = $this->db->query("select waktu from user_mood
        where user_iduser = $user_id and nama_mood = '$keyword'");


        return $query->result_array();
    }

    function test1($waktu) {
        $string = implode(", ", $waktu);

        $query = $this->db->query("select nama_makanan, count(id_makanan_minuman) as frekuensi from makanan_minuman
        inner join user_makanan_minuman on makanan_minuman.id_makanan = user_makanan_minuman.id_makanan_minuman
        where waktu  between  DATE_SUB('$string', INTERVAL 3 DAY) and '$string'
        group by nama_makanan
        order by count(id_makanan_minuman) desc");
        return $query->result_array();
        
    }

}

/* End of file Mcari_mood.php */
