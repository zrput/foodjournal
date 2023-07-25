<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mcari_mood extends CI_Model
{
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////// MODEL PAGE PENCARIAN MOOD ///////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //
    // KEYWORD DROP DOWN //
    function data_options()
    {
        return $this->db->get('mood')->result_array();
    }
    // KEYWORD DROP DOWN //

    function hasil_cari($user_id)
    {
        $keyword = $this->input->post('keyword');
        $query = $this->db->query("select *  from user_mood 
        inner join mood on user_mood.mood_idmood = mood.idmood
        where user_iduser = $user_id and mood.nama_mood = '$keyword'
        order by waktu");
        return $query->result_array();
    }



    function hasil_cari_count($user_id)
    {
        $keyword = $this->input->post('keyword');
        $query = $this->db->query("select * , count(id_user_mood) as banyak_mood from user_mood 
        inner join mood on user_mood.mood_idmood = mood.idmood
        where user_iduser = $user_id and mood.nama_mood = '$keyword'");
        return $query->result_array();
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////// END MODEL PAGE PENCARIAN MOOD ///////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //
    //
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////// MODEL PAGE PENCARIAN MOOD ///////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //
    //
    // GET MOOD //
    public function get_mood($tgl_mood)
    {
        $query = $this->db->query("select * from user_mood 
                                    inner join mood on user_mood.mood_idmood = mood.idmood
                                    where waktu = '$tgl_mood' ");

        return $query->result_array();
    }
    // END GET MOOD //
    //
    //
    //
    // GET TGL MOOD //

    function get_tgl_mood($user_id)
    {
        $keyword = $this->input->post('keyword');
        $query = $this->db->query("select waktu from user_mood 
        where user_iduser = $user_id and nama_mood = '$keyword'");


        return $query->result_array();
    }
    // END GET TGL MOOD //
    //
    //
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////// DIBAWAH INI ADALAH MODEL FUNCTIONS HASIL PENCARIAN MOOD UNTUK TABEL UTAMA //////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //
    //
    // Frekuensi makanan //
    function merge_frek_makanan($waktu)
    {
        $string = implode(", ", $waktu);

        $query = $this->db->query("select nama_makanan, count(id_makanan_minuman) as frekuensi from makanan_minuman
        inner join user_makanan_minuman on makanan_minuman.id_makanan = user_makanan_minuman.id_makanan_minuman
        where waktu  between  DATE_SUB('$string', INTERVAL 3 DAY) and '$string'
        group by nama_makanan
        order by count(id_makanan_minuman) desc");
        return $query->result_array();
    }
    // Frekuensi makanan //
    //
    //
    //
    // Detail makanan //

    function merge_detail_mkn($waktu)
    {
        $string = implode(", ", $waktu);

        $query = $this->db->query("select * from makanan_minuman
        inner join user_makanan_minuman on makanan_minuman.id_makanan = user_makanan_minuman.id_makanan_minuman
        where waktu  between  DATE_SUB('$string', INTERVAL 3 DAY) and '$string'
        group by waktu desc
        ");
        return $query->result_array();
    }

    // Detail makanan //
    //
    //
    //
    // DETAIL BAB //

    function merge_bab($waktu)
    {
        $string = implode(", ", $waktu);

        $query = $this->db->query("select * from user_bab 
        inner join bab on user_bab.bab_idbab = bab.idbab
        where waktu  between  DATE_SUB('$string', INTERVAL 10 DAY) and '$string'
        order by waktu asc
        ");
        return $query->result_array();
    }

    // END DETAIL BAB //
    //
    //
    //
    // DETAIL TIDUR //

    function merge_tidur($waktu)
    {
        $string = implode(", ", $waktu);

        $query = $this->db->query("select * from user_tidur 
          inner join tidur on user_tidur.tidur_idtidur = tidur.idtidur
          where waktu_mulai  between  DATE_SUB('$string', INTERVAL 3 DAY) and '$string'
          order by waktu_mulai desc
          ");
        return $query->result_array();
    }

    // END DETAIL TIDUR //
    //
    //
    //
    // DETAIL SYMPTOM//

    function merge_symptom($waktu)
    {
        $string = implode(", ", $waktu);

        $query = $this->db->query("select * from symptom
                where waktu  between  DATE_SUB('$string', INTERVAL 3 DAY) and '$string'
                order by waktu desc
                ");
        return $query->result_array();
    }

    // END DETAIL SYMPTOM //
    //
    //
    //
    // DETAIL CATATAN HARIAN //

    function merge_catatan($waktu)
    {
        $string = implode(", ", $waktu);

        $query = $this->db->query("select * from catatan_harian
              where waktu  between  DATE_SUB('$string', INTERVAL 3 DAY) and '$string'
              order by waktu desc
              ");
        return $query->result_array();
    }
    // END DETAIL CATATAN HARIAN //
    //
    //
    //
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////// END TABEL UTAMA ///////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //
    //
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////// DIBAWAH INI ADALAH MODEL FUNCTIONS HASIL PENCARIAN MOOD UNTUK TABEL KEDUA //////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //
    // CATATAN HARIAN //
    function frekuensi_mkn($tgl_mood)
    {

        $query = $this->db->query("select *, count(nama_makanan) as jumlah  from user_makanan_minuman 
    inner join makanan_minuman on user_makanan_minuman.id_makanan_minuman = makanan_minuman.id_makanan
    where waktu  between  DATE_SUB('$tgl_mood', INTERVAL 3 DAY) and '$tgl_mood'
    group by nama_makanan
    order by jumlah desc;  ");

        return $query->result_array();;
    }
    // END DETAIL CATATAN HARIAN //
    //
    //
    //
    // Model Detail Makanan //

    public function detail_makanan($tgl_mood)
    {

        $query = $this->db->query("select *  from user_makanan_minuman 
             inner join makanan_minuman on user_makanan_minuman.id_makanan_minuman = makanan_minuman.id_makanan
             where waktu  between  DATE_SUB('$tgl_mood', INTERVAL 3 DAY) and '$tgl_mood'
             order by waktu desc
             ;  ");

        return $query->result_array();
    }

    // END Detail Makanan //
    //
    //
    //
    // Model Data BAB //
    public function data_bab($tgl_mood)
    {

        $query = $this->db->query("select * from user_bab 
            inner join bab on user_bab.bab_idbab = bab.idbab
            where waktu  between  DATE_SUB('$tgl_mood', INTERVAL 3 DAY) and '$tgl_mood'
            order by skala_bristol desc;");
        return $query->result_array();
    }
    // END Model Data BAB //
    //
    //
    //
    // Model Data Tidur //
    public function data_tidur($tgl_mood)
    {

        $query = $this->db->query("select * from user_tidur 
            inner join tidur on user_tidur.tidur_idtidur = tidur.idtidur
            where  waktu_mulai  between  DATE_SUB('$tgl_mood', INTERVAL 3 DAY) and '$tgl_mood'
            order by waktu_mulai desc;");
        return $query->result_array();
    }
    // END Model Data Tidur //
    //
    //
    //
    // Model Data Symptom //
    public function data_symptom($tgl_mood)
    {

        $query = $this->db->query("select * from symptom
                                    where waktu between DATE_SUB('$tgl_mood', INTERVAL 3 DAY) and '$tgl_mood' 
                                    order by waktu");
        return $query->result_array();
    }
    // END Model Data Symptom //
    //
    //
    //
    // Model Catatan Harian //
    public function data_catatan($tgl_mood)
    {
        $query = $this->db->query("select * from catatan_harian
                                        where waktu between DATE_SUB('$tgl_mood', INTERVAL 3 DAY) and '$tgl_mood'
                                        order by waktu desc;");
        return $query->result_array();
    }
    // END Catatan Harian//
    //
    //
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////// END TABEL KEDUA ///////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}

/* End of file Mcari_mood.php */
