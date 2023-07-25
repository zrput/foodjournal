<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Makanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mmakanan');
        if (!$this->session->userdata('iduser')) {
            redirect(base_url('Auth'));
        }
    }

    public function index()
    {
        $user_id = $this->session->userdata('iduser');
        $data['mkn'] = $this->Mmakanan->get_makanan($user_id);

        $this->load->view('member/makanan/main_makanan', $data);
    }

    public function data_makanan()
    {
        $user_id = $this->session->userdata('iduser');
        $data['mkn'] = $this->Mmakanan->get_makanan($user_id);

        $this->load->view('member/makanan/main_makanan', $data);
    }

    public function tambah_makanan()
    {
        $this->load->view('member/makanan/tambah_makanan');
    }


    public function add_makanan()
    {
        $user_id = $this->session->userdata('iduser');
        $b = $this->input->post('inputText[]');
        $this->Mmakanan->insert_makanan($user_id);

        redirect(base_url('Makanan'));
    }

    public function ubah_makanan($id)
    {
        $user_id = $this->session->userdata('iduser');
        $data['v1'] = $this->Mmakanan->getdetail($id)->row_array();
        $data['v2'] = $this->Mmakanan->get_ubahan($id);

        $this->load->view('member/makanan/edit_makanan', $data);
    }

    public function edit_makanan()
    {
        $user_id = $this->session->userdata('iduser');
        $this->Mmakanan->update_Makanan($user_id);
        redirect(base_url('Makanan'));
    }

    public function hapus_makanan($id)
    {
        $this->Mmakanan->delete_makanan($id);

        redirect(base_url('Makanan'));
    }


    //----------------------------------------------------------------

    function search_nama()
    {
        // $id =  $this->session->userdata('iduser');
        $keyword = $this->input->post('keyword');
        $data['d1'] = $this->Mmakanan->get_nama($keyword);
        $data['d2'] = $this->Mmakanan->get_sbahan($keyword);

        header('Content-Type: application/json');
        echo json_encode($data);
    }

    public function getMakananById()
    {
        $id_makanan = $this->input->get('id_makanan_minuman');
        $data['d1'] = $this->Mmakanan->getNamaById($id_makanan);
        $data['d2'] = $this->Mmakanan->getBahanById($id_makanan);
        $this->load->view('member/makanan/guna_makanan', $data);
    }


    public function guna_makanan()
    {
        $user_id = $this->session->userdata('iduser');
        $this->Mmakanan->insert_guna_makanan($user_id);

        redirect(base_url('Makanan'));
    }

    public function cek_nama()
    {
        // Mendapatkan nilai inputan dari form
        $nama_makanan = $this->input->post('nama_makanan');
        $query = $this->db->query("select * from makanan_minuman where nama_makanan like '$nama_makanan'");
        // Mengecek apakah data makanan sudah ada di dalam database
        // $this->db->where('nama_makanan', $nama_makanan);
        // $query = $this->db->get('makanan_minunman');

        $data_makanan_ada = ($query->num_rows() > 0);


        // Mengembalikan pesan sebagai respons JSON
        echo json_encode($data_makanan_ada);
    }
}

/* End of fils Makanan.php */
