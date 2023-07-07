<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Cari_symptom extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mcari_symptom');
        if (!$this->session->userdata('iduser')) {
            redirect(base_url('Auth'));
        }
    }


    public function index()
    {

        $this->load->view('member/cari_symptom/page_cari_symptom');
    }

    // --------------------------- Hasil Pencarian --------------------------- //

    function hasil_cari()
    {

        $this->load->model('Mcari_symptom');
        $keyword = $this->input->post('keyword');
        $data = $this->Mcari_symptom->cari_symptom($keyword);
        $data = array(
            'keyword'    => $keyword,
            'data'        => $data
        );
        $data_count = $this->Mcari_symptom->cari_symptom_count($keyword);
        $data_count = array(
            'keyword'    => $keyword,
            'data_count'        => $data_count
        );

        $dt = array_merge($data, $data_count);



        $this->load->view('member/cari_symptom/hasil_cari', $dt);
    }
    // --------------------------- END Hasil Pencarian --------------------------- //
    //
    //
    //
    // --------------------------- Hasil Pencarian --------------------------- //
    function hasil_cari_symptom()
    {
        $user_id = $this->session->userdata('iduser');
        $data['data'] = $this->Mcari_symptom->hasil_cari($user_id);
        $data['data_count'] = $this->Mcari_symptom->hasil_cari_count($user_id);
        $data['keyword'] = $this->input->post('keyword');

        $this->load->view('member/cari_symptom/hasil_cari', $data);
    }
    // --------------------------- Hasil Pencarian --------------------------- //
    //
    //============================================================================================//
    //======================== Dibawah ini adalah Functions dari Tabel Utama ======================//
    //============================================================================================//
    //
    //
    //
    // --------------------------- Frekuensi Makanan ----------------------------------------- //
    function detail_frekuensi()
    {
        $tgl_symptom = $this->input->post('tgl_symptom');
        $keyword = $this->input->post('keyword');
        $dt['tgl'] = $this->Mcari_symptom->detail_makanan($tgl_symptom);
        $symptom = $this->Mcari_symptom->get_symptom($tgl_symptom);
        $user_id = $this->session->userdata('iduser');
        $data['data'] = $this->Mcari_symptom->hasil_fmakanan($user_id);
        $data_merge = array(

            'tgl_symptom' => $tgl_symptom,
            'keyword' => $keyword,
            'dt' => $dt['tgl'],
            'data' => $data['data'],
            'symptom' => $symptom,
            'user_id' => $user_id

        );

        $this->load->view('member/cari_symptom/tb_cari_main/data_frek_makanan', $data_merge);
    }

    // --------------------------- END Frekuensi --------------------------- //
    //
    //
    //
    // --------------------------- Detail Makanan Pertangal----------------------------------------- //
    function detail_makanan_tgl()
    {
        $tgl_symptom = $this->input->post('tgl_symptom');
        $keyword = $this->input->post('keyword');
        $symptom = $this->Mcari_symptom->get_symptom($tgl_symptom);
        $user_id = $this->session->userdata('iduser');
        $data['data'] = $this->Mcari_symptom->hasil_fmakanan_tgl($user_id);

        $data_merge = array(

            'tgl_symptom' => $tgl_symptom,
            'keyword' => $keyword,
            'data' => $data['data'],
            'symptom' => $symptom,
            'user_id' => $user_id

        );

        $this->load->view('member/cari_symptom/tb_cari_main/data_detail_makanan', $data_merge);
    }
    // --------------------------- END Detail Makanan Pertangal --------------------------- //
    //
    //
    //
    // --------------------------- Detail BAB----------------------------------------- //
    function detail_bab()
    {
        $tgl_symptom = $this->input->post('tgl_symptom');
        $keyword = $this->input->post('keyword');
        $dt['tgl'] = $this->Mcari_symptom->detail_makanan($tgl_symptom);
        $symptom = $this->Mcari_symptom->get_symptom($tgl_symptom);
        $user_id = $this->session->userdata('iduser');
        $data['data'] = $this->Mcari_symptom->detail_bab($user_id);

        $data_merge = array(

            'tgl_symptom' => $tgl_symptom,
            'keyword' => $keyword,
            'dt' => $dt['tgl'],
            'data' => $data['data'],
            'symptom' => $symptom,
            'user_id' => $user_id

        );

        $this->load->view('member/cari_symptom/tb_cari_main/data_detail_bab', $data_merge);
    }
    // --------------------------- END Detail BAB --------------------------- //
    //
    //
    //
    // --------------------------- Detail TIDUR----------------------------------------- //
    function detail_tidur()
    {
        $tgl_symptom = $this->input->post('tgl_symptom');
        $keyword = $this->input->post('keyword');
        $dt['tgl'] = $this->Mcari_symptom->detail_makanan($tgl_symptom);
        $symptom = $this->Mcari_symptom->get_symptom($tgl_symptom);
        $user_id = $this->session->userdata('iduser');
        $data['data'] = $this->Mcari_symptom->detail_tidur($user_id);

        $data_merge = array(

            'tgl_symptom' => $tgl_symptom,
            'keyword' => $keyword,
            'dt' => $dt['tgl'],
            'data' => $data['data'],
            'symptom' => $symptom,
            'user_id' => $user_id

        );

        $this->load->view('member/cari_symptom/tb_cari_main/data_detail_tidur', $data_merge);
    }
    // --------------------------- END Detail TIDUR --------------------------- //
    //
    //
    //
    // --------------------------- Detail MOOD----------------------------------------- //
    function detail_mood()
    {
        $tgl_symptom = $this->input->post('tgl_symptom');
        $keyword = $this->input->post('keyword');
        $symptom = $this->Mcari_symptom->get_symptom($tgl_symptom);
        $user_id = $this->session->userdata('iduser');
        $data['data'] = $this->Mcari_symptom->detail_mood($user_id);

        $data_merge = array(

            'tgl_symptom' => $tgl_symptom,
            'keyword' => $keyword,
            'data' => $data['data'],
            'symptom' => $symptom,
            'user_id' => $user_id

        );

        $this->load->view('member/cari_symptom/tb_cari_main/data_detail_mood', $data_merge);
    }
    // --------------------------- END Detail MOOD --------------------------- //
    //
    //
    //
    // --------------------------- Detail CATATAN HARIAN----------------------------------------- //
    function detail_catatan()
    {
        $tgl_symptom = $this->input->post('tgl_symptom');
        $keyword = $this->input->post('keyword');
        $symptom = $this->Mcari_symptom->get_symptom($tgl_symptom);
        $user_id = $this->session->userdata('iduser');
        $data['data'] = $this->Mcari_symptom->detail_catatan($user_id);

        $data_merge = array(

            'tgl_symptom' => $tgl_symptom,
            'keyword' => $keyword,
            'data' => $data['data'],
            'symptom' => $symptom,
            'user_id' => $user_id

        );

        $this->load->view('member/cari_symptom/tb_cari_main/data_detail_catatan', $data_merge);
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
        $tgl_symptom = $this->input->post('tgl_symptom');
        $keyword = $this->input->post('keyword');
        $data['data'] = $this->Mcari_symptom->detail_makanan($tgl_symptom);
        $symptom['symptom'] = $this->Mcari_symptom->get_symptom($tgl_symptom);
        $data_merge = array(

            'tgl_symptom' => $tgl_symptom,
            'keyword' => $keyword,
            'data' => $data['data'],
            'symptom' => $symptom['symptom']
        );

        $this->load->view('member/cari_symptom/tb_cari_date/detail_makanan', $data_merge);
    }
    // --------------------------- END detail makanan pertanggal --------------------------- //
    //
    //
    //
    // --------------------------- Total Makanan ----------------------------------------- //

    function total_makanan()
    {
        $tgl_symptom = $this->input->post('tgl_symptom');
        $keyword = $this->input->post('keyword');
        $data['data'] = $this->Mcari_symptom->total_makanan($tgl_symptom);
        $symptom['symptom'] = $this->Mcari_symptom->get_symptom($tgl_symptom);
        $data_merge = array(

            'tgl_symptom' => $tgl_symptom,
            'keyword' => $keyword,
            'data' => $data['data'],
            'symptom' => $symptom['symptom']
        );

        $this->load->view('member/cari_symptom/tb_cari_date/total_makanan', $data_merge);
    }
    // --------------------------- END total makanan --------------------------- //
    //
    //
    //
    // --------------------------- BAB ----------------------------------------- //

    function bab()
    {
        $tgl_symptom = $this->input->post('tgl_symptom');
        $keyword = $this->input->post('keyword');
        $data['data'] = $this->Mcari_symptom->data_bab($tgl_symptom);
        $symptom['symptom'] = $this->Mcari_symptom->get_symptom($tgl_symptom);
        $data_merge = array(

            'tgl_symptom' => $tgl_symptom,
            'keyword' => $keyword,
            'data' => $data['data'],
            'symptom' => $symptom['symptom']
        );

        $this->load->view('member/cari_symptom/tb_cari_date/data_bab', $data_merge);
    }
    // --------------------------- END BAB --------------------------- //
    //
    //
    //
    // --------------------------- Tidur ----------------------------------------- //

    function tidur()
    {
        $tgl_symptom = $this->input->post('tgl_symptom');
        $keyword = $this->input->post('keyword');
        $data['data'] = $this->Mcari_symptom->data_tidur($tgl_symptom);
        $symptom['symptom'] = $this->Mcari_symptom->get_symptom($tgl_symptom);
        $data_merge = array(

            'tgl_symptom' => $tgl_symptom,
            'keyword' => $keyword,
            'data' => $data['data'],
            'symptom' => $symptom['symptom']
        );

        $this->load->view('member/cari_symptom/tb_cari_date/data_tidur', $data_merge);
    }
    // --------------------------- END tidur --------------------------- //
    //
    //
    //
    // --------------------------- Mood ----------------------------------------- //

    function mood()
    {
        $tgl_symptom = $this->input->post('tgl_symptom');
        $keyword = $this->input->post('keyword');
        $data['data'] = $this->Mcari_symptom->data_mood($tgl_symptom);
        $symptom['symptom'] = $this->Mcari_symptom->get_symptom($tgl_symptom);
        $data_merge = array(

            'tgl_symptom' => $tgl_symptom,
            'keyword' => $keyword,
            'data' => $data['data'],
            'symptom' => $symptom['symptom']
        );

        $this->load->view('member/cari_symptom/tb_cari_date/data_mood', $data_merge);
    }
    // --------------------------- END mood --------------------------- //
    //
    //
    //
    // --------------------------- Detail catatan ----------------------------------------- //

    function catatan()
    {
        $tgl_symptom = $this->input->post('tgl_symptom');
        $keyword = $this->input->post('keyword');
        $data['data'] = $this->Mcari_symptom->Notes($tgl_symptom);
        $symptom['symptom'] = $this->Mcari_symptom->get_symptom($tgl_symptom);
        $data_merge = array(

            'tgl_symptom' => $tgl_symptom,
            'keyword' => $keyword,
            'data' => $data['data'],
            'symptom' => $symptom['symptom']
        );

        $this->load->view('member/cari_symptom/tb_cari_date/data_notes', $data_merge);
    }
    // --------------------------- END detail catatan --------------------------- //
    //
    //
    //

    //


}

/* End of file Cari_symptom.php */
