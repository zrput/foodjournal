<?php

///////////////////////////////////////////
// CONTROLLER ADMIN KELOLA DATA ARTIKEL //
/////////////////////////////////////////
class Artikel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Martikel');
		if (!$this->session->userdata('iduser')) {
			redirect(base_url('Auth'));
		}
	}

	public function index()
	{
		$user_id = $this->session->userdata('iduser');
		// $data['artikel']= $this->Martikel->get_data('artikel')->result(); 
		$data['artikel'] = $this->db->query("SELECT * FROM `artikel` WHERE user_iduser='$user_id' order by waktu desc")->result();
		$data['judul'] = "Table Artikel";
		$this->load->view('admin/artikel/main_artikel', $data);
	}


	public function tambah_artikel()
	{
		$this->Martikel->admin_login();
		$this->load->view('admin/artikel/main_artikel', $data);
		$this->load->view('admin/artikel/table_artikel', $data);
		$this->load->view('admin/userinfo');
		$this->load->view('admin/sidebar');
	}

	public function tambah_artikel_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {

			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data artikel Gagal Ditambahkan
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('Artikel');
		} else {
			$user_id = $this->session->userdata('iduser');
			$idartikel				= $this->input->post('idartikel');
			$judul					= $this->input->post('judul');
			$waktu					= $this->input->post('waktu');
			$penulis				= $this->input->post('penulis');
			$isi					= $this->input->post('isi');
			$foto					= $_FILES['foto']['name'];

			if (empty($foto)) {
			} else {
				$config['upload_path'] = './asset/upload';
				$config['allowed_types'] = 'jpg|jpeg|png|JPEG';
				$config['max_size'] = '2048';
				$this->load->library('upload', $config);




				if (!$this->upload->do_upload('foto')) {
					echo "Foto artikel  gagal diunggah!";
				} else {

					$foto = $this->upload->data('file_name');
				}
			}


			$data = array(
				'judul'			=> $judul,
				'waktu'			=> $waktu,
				'penulis'		=> $penulis,
				'isi'			=> $isi,
				'foto'			=> $foto,
				'user_iduser'	=> $user_id


			);

			$this->Martikel->insert_data($data, 'artikel');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data artikel Berhasil Ditambahkan
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('Artikel');
		}
	}


	public function update_artikel($idartikel)
	{
		$data['idartikel'] = $idartikel;
		$data['artikel'] = $this->Martikel->ambil_artikel($idartikel);
		$this->load->view('admin/artikel/edit_artikel', $data);
	}




	public function update_artikel_aksi()
	{

		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data artikel Gagal Ditambahkan
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('Artikel');
			// $this->update_artikel($this->input->post('idartikel'));
		} else {
			$idartikel = $this->input->post('idartikel');
			$judul 	= $this->input->post('judul');
			$waktu = $this->input->post('waktu');
			$penulis = $this->input->post('penulis');
			$isi = $this->input->post('isi');
			$foto = $_FILES['foto']['name'];


			$config['upload_path'] = './asset/upload';
			$config['allowed_types'] = 'jpg|jpeg|png|JPEG|PNG';
			$config['max_size'] = '2048';

			$this->load->library('upload', $config);

			if (!empty($foto)) {
				if (!$this->upload->do_upload('foto')) {
					echo "Foto gagal diunggah!";
				} else {
					$foto = $this->upload->data('file_name');
					$this->db->set('foto', $foto);
				}
			}


			$data = array(

				'judul' => $judul,
				'waktu' => $waktu,
				'penulis' => $penulis,
				'isi' => $isi,

			);
			if (!empty($foto)) {
				$data['foto'] = $foto;
			}

			$where = array(
				'idartikel' => $this->input->post('idartikel')
			);

			$this->Martikel->update_data('artikel', $data, $where);

			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data artikel Berhasil Diupdate
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');

			redirect('Artikel');
		}
	}





	public function _rules()
	{


		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('waktu', 'Waktu', 'required');
		$this->form_validation->set_rules('penulis', 'Penulis', 'required');
		$this->form_validation->set_rules('isi', 'Isi', 'required');
	}

	public function delete_artikel($idartikel)
	{

		$where = array('idartikel' => $idartikel);
		$this->Martikel->delete_data($where, 'artikel');

		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data artikel Berhasil Dihapus
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('Artikel');
	}
}
