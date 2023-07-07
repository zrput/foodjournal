<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cari_mood extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mcari_mood');
        if (!$this->session->userdata('iduser')) {
            redirect(base_url('Auth'));
        }
    }

    public function index()
    {
        $this->tampil_mood();
    }

    // FORM PENCARIAN //
    public function tampil_mood()
    {
        $data['ket'] = $this->Mcari_mood->data_options();
        $this->load->view('member/cari_mood/page_cari_mood', $data);
    }
    // END FORM PENCARIAN //
    //
    //
    // HASIL PENCARIAN MOOD //
    function hasil_cari()
    {
        $user_id = $this->session->userdata('iduser');
        $data['data'] = $this->Mcari_mood->hasil_cari($user_id);
        $data['data_count'] = $this->Mcari_mood->hasil_cari_count($user_id);
        $data['keyword'] = $this->input->post('keyword');
        $data['ket'] = $this->Mcari_mood->data_options();

        $this->load->view('member/cari_mood/hasil_cari', $data);
    }
    // END HASIL PENCARIAN MOOD //
    //
    //
    //============================================================================================//
    //======================== Dibawah ini adalah Functions dari Tabel Utama ======================//
    //============================================================================================//
    //
    //
    // --------------------------- Detail Frekuensi Makanan ----------------------------------------- //
    function detail_frekuensi()
    {
        $tgl_mood = $this->input->post('tgl_mood');
        $keyword = $this->input->post('keyword');
        $dt['tgl'] = $this->Mcari_mood->detail_makanan($tgl_mood);
        $mood = $this->Mcari_mood->get_mood($tgl_mood);
        $user_id = $this->session->userdata('iduser');
        $data['data'] = $this->Mcari_mood->get_tgl_mood($user_id);
        $data_merge = array(

            'tgl_mood' => $tgl_mood,
            'keyword' => $keyword,
            'dt' => $dt['tgl'],
            'data' => $data['data'],
            'mood' => $mood,
            'user_id' => $user_id

        );
        $this->load->view('member/cari_mood/tb_cari_main/data_frek_makanan', $data_merge);
    }
    // --------------------------- END Detail Frekuensi Makanan ----------------------------------------- //
    // --------------------------- Detail Makanan Pertangal----------------------------------------- //
    function detail_makanan_tgl()
    {

        $tgl_mood = $this->input->post('tgl_mood');
        $keyword = $this->input->post('keyword');
        $tgl = $this->Mcari_mood->detail_makanan($tgl_mood);
        $mood = $this->Mcari_mood->get_mood($tgl_mood);
        $user_id = $this->session->userdata('iduser');
        $data = $this->Mcari_mood->get_tgl_mood($user_id);

        $data_merge = array(

            'tgl_mood' => $tgl_mood,
            'keyword' => $keyword,
            'tgl' => $tgl,
            'data' => $data,
            'mood' => $mood,
            'user_id' => $user_id

        );

        $this->load->view('member/cari_mood/tb_cari_main/data_detail_makanan', $data_merge);
    }
    // --------------------------- END Detail Makanan Pertangal --------------------------- //
    //
    //
    //
    // --------------------------- Detail BAB----------------------------------------- //
    function detail_bab()
    {
        $tgl_mood = $this->input->post('tgl_mood');
        $keyword = $this->input->post('keyword');
        $mood = $this->Mcari_mood->get_mood($tgl_mood);
        $user_id = $this->session->userdata('iduser');
        $data = $this->Mcari_mood->get_tgl_mood($user_id);

        $data_merge = array(

            'tgl_mood' => $tgl_mood,
            'keyword' => $keyword,
            'data' => $data,
            'mood' => $mood,
            'user_id' => $user_id

        );

        $this->load->view('member/cari_mood/tb_cari_main/data_detail_bab', $data_merge);
    }
    // --------------------------- END Detail BAB --------------------------- //
    //
    //
    //
    // --------------------------- Detail TIDUR----------------------------------------- //
    function detail_tidur()
    {
        $tgl_mood = $this->input->post('tgl_mood');
        $keyword = $this->input->post('keyword');
        $mood = $this->Mcari_mood->get_mood($tgl_mood);
        $user_id = $this->session->userdata('iduser');
        $data = $this->Mcari_mood->get_tgl_mood($user_id);

        $data_merge = array(

            'tgl_mood' => $tgl_mood,
            'keyword' => $keyword,
            'data' => $data,
            'mood' => $mood,
            'user_id' => $user_id

        );

        $this->load->view('member/cari_mood/tb_cari_main/data_detail_tidur', $data_merge);
    }
    // --------------------------- END Detail TIDUR --------------------------- //
    //
    //
    //
    // --------------------------- Detail MOOD----------------------------------------- //
    function detail_symptom()
    {
        $tgl_mood = $this->input->post('tgl_mood');
        $keyword = $this->input->post('keyword');
        $mood = $this->Mcari_mood->get_mood($tgl_mood);
        $user_id = $this->session->userdata('iduser');
        $data['data'] = $this->Mcari_mood->get_tgl_mood($user_id);

        $data_merge = array(

            'tgl_mood' => $tgl_mood,
            'keyword' => $keyword,
            'data' => $data['data'],
            'mood' => $mood,
            'user_id' => $user_id

        );

        $this->load->view('member/cari_mood/tb_cari_main/data_detail_symptom', $data_merge);
    }
    // --------------------------- END Detail MOOD --------------------------- //
    //
    //
    //
    // --------------------------- Detail CATATAN HARIAN----------------------------------------- //
    function detail_catatan()
    {
        $tgl_mood = $this->input->post('tgl_mood');
        $keyword = $this->input->post('keyword');
        $mood = $this->Mcari_mood->get_mood($tgl_mood);
        $user_id = $this->session->userdata('iduser');
        $data = $this->Mcari_mood->get_tgl_mood($user_id);

        $data_merge = array(

            'tgl_mood' => $tgl_mood,
            'keyword' => $keyword,
            'data' => $data,
            'mood' => $mood,
            'user_id' => $user_id

        );

        $this->load->view('member/cari_mood/tb_cari_main/data_detail_catatan', $data_merge);
    }
    // --------------------------- END Detail CATATAN HARIAN --------------------------- //
    //
    //
    //
    //============================================================================================//
    //======================== Dibawah ini adalah Functions dari Tabel Kedua ======================//
    //============================================================================================//
    //
    //
    // --------------------------- Detail Makanan pertanggal(Tracking) -------------------------//

    function detail_makanan()
    {
        $tgl_mood = $this->input->post('tgl_mood');
        $keyword = $this->input->post('keyword');
        $data = $this->Mcari_mood->detail_makanan($tgl_mood);
        $mood = $this->Mcari_mood->get_mood($tgl_mood);
        $data_merge = array(

            'tgl_mood' => $tgl_mood,
            'keyword' => $keyword,
            'data' => $data,
            'mood' => $mood
        );

        $this->load->view('member/cari_mood/tb_cari_date/detail_makanan', $data_merge);
    }
    // --------------------------- END detail makanan pertanggal --------------------------- //
    //
    //
    //
    // --------------------------- Total Makanan ----------------------------------------- //

    function frekuensi_mkn()
    {
        $tgl_mood = $this->input->post('tgl_mood');
        $keyword = $this->input->post('keyword');
        $mood = $this->Mcari_mood->get_mood($tgl_mood);
        $user_id = $this->session->userdata('iduser');
        $data = $this->Mcari_mood->frekuensi_mkn($tgl_mood);

        $data_merge = array(

            'tgl_mood' => $tgl_mood,
            'keyword' => $keyword,
            'data' => $data,
            'mood' => $mood,
            'user_id' => $user_id

        );


        $this->load->view('member/cari_mood/tb_cari_date/total_makanan', $data_merge);
    }
    // --------------------------- END total makanan --------------------------- //
    //
    //
    //
    // --------------------------- BAB ----------------------------------------- //

    function bab()
    {
        $tgl_mood = $this->input->post('tgl_mood');
        $keyword = $this->input->post('keyword');
        $mood = $this->Mcari_mood->get_mood($tgl_mood);
        $user_id = $this->session->userdata('iduser');
        $data = $this->Mcari_mood->data_bab($tgl_mood);

        $data_merge = array(

            'tgl_mood' => $tgl_mood,
            'keyword' => $keyword,
            'data' => $data,
            'mood' => $mood,
            'user_id' => $user_id

        );

        $this->load->view('member/cari_mood/tb_cari_date/data_bab', $data_merge);
    }
    // --------------------------- END BAB --------------------------- //
    //
    //
    //
    // --------------------------- Tidur ----------------------------------------- //

    function tidur()
    {
        $tgl_mood = $this->input->post('tgl_mood');
        $keyword = $this->input->post('keyword');
        $mood = $this->Mcari_mood->get_mood($tgl_mood);
        $user_id = $this->session->userdata('iduser');
        $data = $this->Mcari_mood->data_tidur($tgl_mood);

        $data_merge = array(

            'tgl_mood' => $tgl_mood,
            'keyword' => $keyword,
            'data' => $data,
            'mood' => $mood,
            'user_id' => $user_id

        );

        $this->load->view('member/cari_mood/tb_cari_date/data_tidur', $data_merge);
    }
    // --------------------------- END tidur --------------------------- //
    //
    //
    //
    // --------------------------- Mood ----------------------------------------- //

    function symptom()
    {
        $tgl_mood = $this->input->post('tgl_mood');
        $keyword = $this->input->post('keyword');
        $mood = $this->Mcari_mood->get_mood($tgl_mood);
        $user_id = $this->session->userdata('iduser');
        $data = $this->Mcari_mood->data_symptom($tgl_mood);

        $data_merge = array(

            'tgl_mood' => $tgl_mood,
            'keyword' => $keyword,
            'data' => $data,
            'mood' => $mood,
            'user_id' => $user_id

        );
        $this->load->view('member/cari_mood/tb_cari_date/data_symptom', $data_merge);
    }
    // --------------------------- END mood --------------------------- //
    //
    //
    //
    // --------------------------- Detail catatan ----------------------------------------- //

    function catatan()
    {
        $tgl_mood = $this->input->post('tgl_mood');
        $keyword = $this->input->post('keyword');
        $mood = $this->Mcari_mood->get_mood($tgl_mood);
        $user_id = $this->session->userdata('iduser');
        $data = $this->Mcari_mood->data_catatan($tgl_mood);

        $data_merge = array(

            'tgl_mood' => $tgl_mood,
            'keyword' => $keyword,
            'data' => $data,
            'mood' => $mood,
            'user_id' => $user_id

        );

        $this->load->view('member/cari_mood/tb_cari_date/data_notes', $data_merge);
    }
    // --------------------------- END detail catatan --------------------------- //

}

/* End of file Cari_mood.php */
