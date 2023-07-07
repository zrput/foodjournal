<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mcari_symptom extends CI_Model
{

    // Pencarian Symptom //
    public function cari_symptom($keyword = null)
    {

        $this->db->select('*');
        $this->db->from('symptom');
        if (!empty($keyword)) {
            $this->db->like('nama_symptom', $keyword);
        }
        return $this->db->get()->result_array();
    }

    public function cari_symptom_count($keyword = null)
    {
        $this->db->select('waktu, nama_symptom, count(nama_symptom) as banyak_symptom');
        $this->db->from('symptom');
        $this->db->group_by('nama_symptom');
        if (!empty($keyword)) {
            $this->db->like('nama_symptom', $keyword);
        }
        return $this->db->get()->result_array();
    }
    // END Pencarian Symptom //



    public function ambil_data_total($keyword = null)
    {
        $this->db->select('waktu, nama_symptom, count(nama_symptom) as banyak_symptom');
        $this->db->from('symptom');
        $this->db->group_by('nama_symptom');
        if (!empty($keyword)) {
            $this->db->like('nama_symptom', $keyword);
        }
        return $this->db->get()->result_array();
    }


    // Model Detail Makanan //

    // public function makanan_detail($tgl_symptom)
    // {
    //     $this->db->select('*');
    //     $this->db->where('waktu <', $tgl_symptom);
    //     $query = $this->db->get('user_makanan_minuman');
    //     return $query->result_array();
    // }

    public function detail_makanan($tgl_symptom)
    {

        $query = $this->db->query("select *  from user_makanan_minuman 
         inner join makanan_minuman on user_makanan_minuman.id_makanan_minuman = makanan_minuman.id_makanan
         where waktu  between  DATE_SUB('$tgl_symptom', INTERVAL 3 DAY) and '$tgl_symptom'
         order by waktu desc;  ");

        return $query->result_array();
    }

    // END Detail Makanan //



    // Model Total Makanan //
    public function total_makanan($tgl_symptom)
    {

        $query = $this->db->query("select *, count(nama_makanan) as jumlah  from user_makanan_minuman 
        inner join makanan_minuman on user_makanan_minuman.id_makanan_minuman = makanan_minuman.id_makanan
        where waktu  between  DATE_SUB('$tgl_symptom', INTERVAL 3 DAY) and '$tgl_symptom'
        group by nama_makanan
        order by jumlah desc;  ");

        return $query->result_array();
    }
    // END Model Total Makanan //

    // Model Data BAB //
    public function data_bab($tgl_symptom)
    {

        $query = $this->db->query("select * from user_bab 
        inner join bab on user_bab.bab_idbab = bab.idbab
        where waktu  between  DATE_SUB('$tgl_symptom', INTERVAL 3 DAY) and '$tgl_symptom'
        order by skala_bristol desc;");
        return $query->result_array();
    }
    // END Model Data BAB //

    // Model Data Tidur //
    public function data_tidur($tgl_symptom)
    {

        $query = $this->db->query("select * from user_tidur 
        inner join tidur on user_tidur.tidur_idtidur = tidur.idtidur
        where  waktu_mulai  between  DATE_SUB('$tgl_symptom', INTERVAL 3 DAY) and '$tgl_symptom'
        order by kualitas_tidur desc;");
        return $query->result_array();
    }
    // END Model Data Tidur //

    // Model Data Mood //
    public function data_mood($tgl_symptom)
    {
        $query = $this->db->query("select * from user_mood 
        inner join mood on user_mood.mood_idmood = mood.idmood
        where waktu between DATE_SUB('$tgl_symptom', INTERVAL 3 DAY) and '$tgl_symptom'
        order by waktu desc;");
        return $query->result_array();
    }
    // END Model Data Mood //

    // Model Notes //
    public function Notes($tgl_symptom)
    {
        $query = $this->db->query("select * from catatan_harian
                                    where waktu between DATE_SUB('$tgl_symptom', INTERVAL 3 DAY) and '$tgl_symptom'
                                    order by waktu desc;");
        return $query->result_array();
    }
    // END Model Notes //

    // ======================================================= //
    // ========= Dibawah ini model untuk tabel utama ========= //
    // ======================================================= //

    // Frekuensi Makanan //

    function hasil_cari($user_id)
    {
        $keyword = $this->input->post('keyword');
        $query = $this->db->query("select * from symptom
        where user_iduser = $user_id and nama_symptom = '$keyword'");
        return $query->result_array();
    }
    function hasil_cari_count($user_id)
    {
        $keyword = $this->input->post('keyword');
        $query = $this->db->query("select * , count(idsymptom) as banyak_symptom from symptom
        where user_iduser = $user_id and nama_symptom = '$keyword'");
        return $query->result_array();
    }

    function hasil_fmakanan($user_id)
    {
        $keyword = $this->input->post('keyword');
        $query = $this->db->query("select waktu from symptom
        where user_iduser = $user_id and nama_symptom = '$keyword'");


        return $query->result_array();
    }

    function test1($waktu)
    {
        $string = implode(", ", $waktu);

        $query = $this->db->query("select id_user_makanan, nama_makanan, count(id_makanan_minuman) as frekuensi from makanan_minuman
        inner join user_makanan_minuman on makanan_minuman.id_makanan = user_makanan_minuman.id_makanan_minuman
        where waktu  between  DATE_SUB('$string', INTERVAL 3 DAY) and '$string'
        group by nama_makanan
        order by count(id_makanan_minuman) desc");
        return $query->result_array();
    }

    function hasil_fmakanan_tgl($user_id)
    {
        $keyword = $this->input->post('keyword');
        $query = $this->db->query("select waktu from symptom
        where user_iduser = $user_id and nama_symptom = '$keyword'");


        return $query->result_array();
    }

    function test2($waktu)
    {
        $string = implode(", ", $waktu);

        $query = $this->db->query("select * from makanan_minuman
        inner join user_makanan_minuman on makanan_minuman.id_makanan = user_makanan_minuman.id_makanan_minuman
        where waktu  between  DATE_SUB('$string', INTERVAL 3 DAY) and '$string'
        group by waktu desc
        ");
        return $query->result_array();
    }

    // END Frekuensi Makanan //

    // DETAIL BAB //

    function detail_bab($user_id)
    {
        $keyword = $this->input->post('keyword');
        $query = $this->db->query("select waktu from symptom
        where user_iduser = $user_id and nama_symptom = '$keyword'");


        return $query->result_array();
    }

    function merge_bab($waktu)
    {
        $string = implode(", ", $waktu);

        $query = $this->db->query("select * from user_bab 
        inner join bab on user_bab.bab_idbab = bab.idbab
        where waktu  between  DATE_SUB('$string', INTERVAL 3 DAY) and '$string'
        group by waktu desc
        ");
        return $query->result_array();
    }

    // END DETAIL BAB //


    // DETAIL TIDUR //

    function detail_tidur($user_id)
    {
        $keyword = $this->input->post('keyword');
        $query = $this->db->query("select waktu from symptom
        where user_iduser = $user_id and nama_symptom = '$keyword'");


        return $query->result_array();
    }

    function merge_tidur($waktu)
    {
        $string = implode(", ", $waktu);

        $query = $this->db->query("select * from user_tidur 
        inner join tidur on user_tidur.tidur_idtidur = tidur.idtidur
        where waktu_mulai  between  DATE_SUB('$string', INTERVAL 3 DAY) and '$string'
        ");
        return $query->result_array();
    }

    // END DETAIL TIDUR //

    // DETAIL MOOD //

    function detail_mood($user_id)
    {
        $keyword = $this->input->post('keyword');
        $query = $this->db->query("select waktu from symptom
        where user_iduser = $user_id and nama_symptom = '$keyword'");


        return $query->result_array();
    }

    function merge_mood($waktu)
    {
        $string = implode(", ", $waktu);

        $query = $this->db->query("select * from user_mood 
        inner join mood on user_mood.mood_idmood = mood.idmood
        where waktu  between  DATE_SUB('$string', INTERVAL 3 DAY) and '$string'
        ");
        return $query->result_array();
    }

    // END DETAIL MOOD //

    // DETAIL CATATAN HARIAN //

    function detail_catatan($user_id)
    {
        $keyword = $this->input->post('keyword');
        $query = $this->db->query("select waktu from symptom
        where user_iduser = $user_id and nama_symptom = '$keyword'");


        return $query->result_array();
    }

    function merge_catatan($waktu)
    {
        $string = implode(", ", $waktu);

        $query = $this->db->query("select * from catatan_harian
        where waktu  between  DATE_SUB('$string', INTERVAL 3 DAY) and '$string'
        order by waktu desc
        ");
        return $query->result_array();
    }

    // END CATATAN HARIAN //





    // TEST //
    public function get_symptom($tgl_symptom)
    {
        // concat(ucase(left(nama_symptom,1)),lcase(substring(nama_symptom,2)))
        $query = $this->db->query("select * from symptom
                                   where waktu = '$tgl_symptom' ");

        return $query->result_array();
    }

    public function get_tgl_symptom_count()
    {

        $this->db->select('waktu');
        $this->db->from('symptom');
        $this->db->group_by('nama_symptom');
        if (!empty($keyword)) {
            $this->db->where('nama_symptom', $keyword);
        }
        return $this->db->get()->result_array();
    }

    public function get_data_all($tgl_all)
    {

        $query = $this->db->query("select *  from user_makanan_minuman 
        inner join makanan_minuman on user_makanan_minuman.id_makanan_minuman = makanan_minuman.id_makanan
        where waktu  between  DATE_SUB('$tgl_all', INTERVAL 3 DAY) and '$tgl_all'
        group by id_makanan_minuman
        order by waktu desc;  ");



        return $query->result_array();
    }
    //END TEST//
}

/* End of file Mbab.php */
