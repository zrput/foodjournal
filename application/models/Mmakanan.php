<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Mmakanan extends CI_Model
{

    public function get_makanan($user_id)
    {

        $query = $this->db->query("select * from user_makanan_minuman 
        inner join makanan_minuman on user_makanan_minuman.id_makanan_minuman = makanan_minuman.id_makanan
        where user_iduser = $user_id
        order by waktu desc;");
        return $query->result_array();
    }

    public function get_bahan($id)
    {
        $query = $this->db->query("select idbahan, id_makanan_minuman, GROUP_CONCAT(bahan.nama_bahan SEPARATOR ', ') AS bahan from makanan_minuman
        inner join bahan on makanan_minuman.id_makanan = bahan.id_makanan_minuman
        where id_makanan_minuman = $id;");
        return $query->result_array();
    }



    //-------------------------------------------------------------------------

    public function insert_makanan($id)
    {

        $nama = array(
            'nama_makanan' => $this->input->post('nama_makanan')

        );
        $this->db->insert('makanan_minuman', $nama);

        $idnama = $this->input->post('nama_makanan');
        $query = $this->db->query("select id_makanan from makanan_minuman 
        where nama_makanan = '$idnama' 
        order by id_makanan DESC
        LIMIT 1; ");
        $result = $query->row(); // Mengambil baris hasil query
        $data = array(
            'user_iduser' => $id,
            'id_makanan_minuman' => $result->id_makanan,
            'waktu' => $this->input->post('waktu'),
            'jumlah' => $this->input->post('jumlah'),
            'satuan' => $this->input->post('satuan'),
            'Kalori' => $this->input->post('kalori'),
            'ket_tambahan' => $this->input->post('ket_tambahan')

        );
        $this->db->insert('user_makanan_minuman', $data);

        $bahan = $this->input->post('inputText[]');

        foreach ($bahan as $input) {
            $datas = array(
                'nama_bahan' => $input,
                'id_makanan_minuman' => $result->id_makanan
            );

            $this->db->insert('bahan', $datas);
        }
    }



    //----------------------------------------------------------------------
    public function getdetail($id)
    {
        $query = $this->db->query("select * from user_makanan_minuman 
        inner join makanan_minuman on user_makanan_minuman.id_makanan_minuman = makanan_minuman.id_makanan
        where id_user_makanan = $id;");
        return $query;
    }

    public function get_ubahan($id)
    {
        $query = $this->db->query("select id_makanan_minuman from user_makanan_minuman 
        inner join makanan_minuman on user_makanan_minuman.id_makanan_minuman = makanan_minuman.id_makanan
        where id_user_makanan = $id;");

        $result = $query->row();

        $id_makanan_minuman = $result->id_makanan_minuman;

        $query1 = $this->db->query("select * from makanan_minuman 
        inner join bahan on makanan_minuman.id_makanan = bahan.id_makanan_minuman
        where id_makanan_minuman = $id_makanan_minuman;");
        return $query1->result_array();
    }

    public function update_makanan($user_id)
    {
        // $nama = array(
        //     'nama_makanan' => $this->input->post('nama_makanan')

        // );
        // $this->db->where('id_makanan', $this->input->post('id'));
        // $this->db->update('makanan_minuman', $nama);

        $data = array(
            'user_iduser' => $user_id,
            'id_makanan_minuman' => $this->input->post('idmkn'),
            'waktu' => $this->input->post('waktu'),
            'jumlah' => $this->input->post('jumlah'),
            'satuan' => $this->input->post('satuan'),
            'Kalori' => $this->input->post('kalori'),
            'ket_tambahan' => $this->input->post('ket_tambahan')

        );
        $this->db->where('id_user_makanan', $this->input->post('id'));
        $this->db->update('user_makanan_minuman', $data);


        // $bahan = $this->input->post('inputText[]');
        // $idb = $this->input->post('idb[]');

        // // Mendapatkan daftar idbahan yang ada dalam database
        // $this->db->select('idbahan');
        // $this->db->where('id_makanan_minuman', $this->input->post('id'));
        // $Idbahan = $this->db->get('bahan')->result_array();

        // // mengambil semua nilai 'idbahan' dari hasil query dan menyimpannya dalam $Idbahan sebagai array satu dimensi
        // $Idbahan = array_column($Idbahan, 'idbahan');

        // // Membandingkan bahan yang ada dengan bahan yang diterima dari form
        // $deletedBahan = array_diff($Idbahan, $idb);

        // // Menghapus bahan yang tidak ada di dalam form
        // if (!empty($deletedBahan)) {
        // $this->db->where('id_makanan_minuman', $this->input->post('id'));
        // $this->db->where_in('idbahan', $deletedBahan);
        // $this->db->delete('bahan');
        // }

        // foreach ($bahan as $key => $input) {
        //     if (empty($idb[$key])) {
        //         // Jika idb[$key] kosong, artinya bahan baru, lakukan insert
        //         $baru = array(
        //             'nama_bahan' => $input,
        //             'id_makanan_minuman' => $this->input->post('id')
        //         );
        //         $this->db->insert('bahan', $baru);
        //     } else {
        //         $datas = array(
        //             'nama_bahan' => $input
        //         );
        //         // Jika idb[$key] terisi, artinya perubahan pada nama_bahan, lakukan update
        //         $this->db->where('id_makanan_minuman', $this->input->post('id'));
        //         $this->db->where('idbahan', $idb[$key]);
        //         $this->db->update('bahan', $datas);
        //     }

        // }
    }


    // delete data from database ---------------------------------------------------------
    public function delete_makanan($id)
    {
        $this->db->where('id_user_makanan', $id);
        $result = $this->db->delete('user_makanan_minuman');
        return $result;
    }




    //----------------------------------------------------------------

    public function get_nama($keyword)
    {
        $query = $this->db->query("select id_makanan, nama_makanan from makanan_minuman
        where nama_makanan like '%$keyword%'
        group by nama_makanan");
        return $query->result_array();
    }
    public function get_sbahan($keyword)
    {
        $query = $this->db->query("select bahan.id_makanan_minuman, bahan.nama_bahan from makanan_minuman
        inner join bahan on makanan_minuman.id_makanan = bahan.id_makanan_minuman
        where nama_makanan like '%$keyword%'
        group by nama_bahan");
        return $query->result_array();
    }

    public function getNamaById($id_mkn)
    {

        // Lakukan operasi database untuk mendapatkan informasi makanan berdasarkan id_makanan
        $query = $this->db->query("select * from makanan_minuman 
        where id_makanan = $id_mkn");
        return $query->result_array();
    }

    public function getBahanById($id_mkn)
    {
        $query = $this->db->query("select * from bahan
        where id_makanan_minuman = $id_mkn");
        return $query->result_array();
    }

    public function insert_guna_makanan($id)
    {
        $data = array(
            'user_iduser' => $id,
            'id_makanan_minuman' => $this->input->post('idmkn'),
            'waktu' => $this->input->post('waktu'),
            'jumlah' => $this->input->post('jumlah'),
            'satuan' => $this->input->post('satuan'),
            'Kalori' => $this->input->post('kalori'),
            'ket_tambahan' => $this->input->post('ket_tambahan')

        );
        $this->db->insert('user_makanan_minuman', $data);
    }
}

/* End of file Mmakanan.php */
