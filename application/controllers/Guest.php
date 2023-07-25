 <?php

    defined('BASEPATH') or exit('No direct script access allowed');

    class Guest extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Martikel');
            $this->load->model('Mmakanan_umum');
        }

        public function index()
        {
            $this->home();
        }

        public function home()
        {
            $this->load->view('guest/homes');
        }

        ///////////////////////////////////////////////////////
        ////////////////////// ARTIKEL ////////////////////////
        ///////////////////////////////////////////////////////
        // TAMPILAN AWAL ARTIKEL, DITAMPILKAN JUDUL ARTIKEL //
        function landing_artikel()
        {
            $data = $this->Martikel->all_artikel();
            $keyword = $this->input->post('keyword');
            $data = array(
                'keyword'    => $keyword,
                'data'        => $data
            );

            $this->load->view('guest/artikel/artikels', $data);
        }

        // END TAMPILAN AWAL ARTIKEL
        //
        //
        // PENCARIAN ARTIKEL, DITAMPILKAN JUDUL ARTIKEL //
        function cari_artikel()
        {
            $keyword = $this->input->post('keyword');
            $data = $this->Martikel->cari_artikel($keyword);
            $data = array(
                'keyword'    => $keyword,
                'data'        => $data
            );

            $this->load->view('guest/artikel/artikels', $data);
        }

        // END PENCARIAN ARTIKEL
        //
        //
        //
        // LIHAT ISI ARTIKEL //
        function detail_artikel()
        {
            $idartikel = $this->input->post('idartikel');
            $keyword = $this->input->post('keyword');
            $artikel = $this->Martikel->get_artikel($idartikel);
            $all_artikel = $this->Martikel->all_artikel();

            // var_dump($idartikel);
            // die;
            $data_merge = array(

                'idartikel' => $idartikel,
                'keyword' => $keyword,
                'artikel' => $artikel,
                'all_artikel' => $all_artikel

            );

            $this->load->view('guest/artikel/detail_artikels', $data_merge);
        }
        // END LIHAT ISI ARTIKEL //
        //
        //
        ///////////////////////////////////////////////////////
        ////////////////// END ARTIKEL ////////////////////////
        ///////////////////////////////////////////////////////
        //
        //
        //
        ///////////////////////////////////////////////////////
        ///////////////// MAKANAN UMUM ////////////////////////
        ///////////////////////////////////////////////////////
        // TAMPILAN AWAL MAKANAN UMUM //
        function landing_makanan_umum()
        {

            $data = $this->Mmakanan_umum->all_makanan_umum();
            $keyword = $this->input->post('keyword');
            $data = array(
                'keyword'    => $keyword,
                'data'        => $data
            );

            $this->load->view('guest/makanan_umum/makanan_umum', $data);
        }

        // END TAMPILAN AWAL MAKANAN UMUM
        //
        //
        // PENCARIAN MAKANAN UMUM, DITAMPILKAN MAKANAN UMUM //
        function cari_makanan_umum()
        {
            $keyword = $this->input->post('keyword');
            $data = $this->Mmakanan_umum->cari_makanan_umum($keyword);
            $data = array(
                'keyword'    => $keyword,
                'data'        => $data
            );

            $this->load->view('guest/makanan_umum/makanan_umum', $data);
        }
        //
        //
        ///////////////////////////////////////////////////////
        ///////////// END MAKANAN UMUM ////////////////////////
        ///////////////////////////////////////////////////////
    }

/* End of file Controllername.php */
