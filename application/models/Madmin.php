<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Madmin extends CI_Model
{

    public function Nartikel($user_id)
    {
        $query = $this->db->query("select count(idartikel) as artikel from artikel where user_iduser = $user_id");
        $result = $query->row_array();
        return $result['artikel'];
    }

    public function Ninfo_umum($user_id)
    {
        $query = $this->db->query("select count(idmakanan_umum) as info_umum from makanan_umum where user_iduser = $user_id");
        $result = $query->row_array();
        return $result['info_umum'];
    }
    public function Nadmin_bab()
    {
        $query = $this->db->query("select count(idbab) as admin_bab from bab ");
        $result = $query->row_array();
        return $result['admin_bab'];
    }
    public function Nadmin_mood()
    {
        $query = $this->db->query("select count(idmood) as admin_mood from mood");
        $result = $query->row_array();
        return $result['admin_mood'];
    }
}

/* End of file Mmain.php */
