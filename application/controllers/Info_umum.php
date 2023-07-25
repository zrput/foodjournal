<?php


class Info_umum extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mmakanan_umum');
		if (!$this->session->userdata('iduser')) {
			redirect(base_url('Auth'));
		}
	}

	public function index()
	{
		$user_id = $this->session->userdata('iduser');
		// $data['makanan_umum']= $this->Mmakanan_umum->get_data('makanan_umum')->result();
		$data['makanan_umum'] = $this->db->query("SELECT * FROM `makanan_umum` WHERE user_iduser='$user_id' order by nama_makanan desc")->result();
		$data['nama_makanan'] = "Table Informasi Umum Makanan/Minuman";
		$this->load->view('admin/info_umum/main_info', $data);
	}


	public function tambah_infoumum()
	{
		$this->Mmakanan_umum->admin_login();
		$this->load->view('admin/info_umum/main_info', $data);
		$this->load->view('admin/info_umum/table_info', $data);
		$this->load->view('admin/userinfo');
		$this->load->view('admin/sidebar');
	}

	public function tambah_infoumum_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {

			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data Gagal Ditambahkan
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('Info_umum');
		} else {
			$user_id = $this->session->userdata('iduser');
			$idmakanan_umum			= $this->input->post('idmakanan_umum');
			$nama_makanan			= $this->input->post('nama_makanan');
			$kalori					= $this->input->post('kalori');
			$protein				= $this->input->post('protein');
			$lemak					= $this->input->post('lemak');
			$vit_mineral			= $this->input->post('vit_mineral');
			$foto					= $_FILES['foto']['name'];

			if (empty($foto)) {
			} else {
				$config['upload_path'] = './asset/upload';
				$config['allowed_types'] = 'jpg|jpeg|png|JPEG';
				$config['max_size'] = '2048';
				$this->load->library('upload', $config);




				if (!$this->upload->do_upload('foto')) {
					echo "Foto gagal diunggah!";
				} else {

					$foto = $this->upload->data('file_name');
				}
			}


			$data = array(
				'nama_makanan'	=> $nama_makanan,
				'kalori'		=> $kalori,
				'protein'		=> $protein,
				'lemak'			=> $lemak,
				'vit_mineral'   => $vit_mineral,
				'foto'			=> $foto,
				'user_iduser'	=> $user_id



			);

			$this->Mmakanan_umum->insert_data($data, 'makanan_umum');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Berhasil Ditambahkan
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('Info_umum');
		}
	}


	public function update_infoumum($idmakanan_umum)
	{
		$this->Mmakanan_umum->admin_login();
		$where = array('idmakanan_umum' => $idmakanan_umum);
		$data['makanan_umum'] = $this->db->query("SELECT * FROM makanan_umum WHERE idmakanan_umum = '$idmakanan_umum'")->result();

		$this->load->view('admin/info_umum/main_info', $data);
		$this->load->view('admin/info_umum/table_info', $data);
		$this->load->view('admin/userinfo');
		$this->load->view('admin/sidebar');
	}




	public function update_infoumum_aksi()
	{

		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data  Gagal Ditambahkan
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('Info_umum');
		} else {
			$idmakanan_umum = $this->input->post('idmakanan_umum');
			$nama_makanan 	= $this->input->post('nama_makanan');
			$kalori = $this->input->post('kalori');
			$protein = $this->input->post('protein');
			$lemak = $this->input->post('lemak');
			$vit_mineral = $this->input->post('vit_mineral');
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

				'nama_makanan' => $nama_makanan,
				'kalori' => $kalori,
				'protein' => $protein,
				'lemak' => $lemak,
				'vit_mineral' => $vit_mineral,


			);
			if (!empty($foto)) {
				$data['foto'] = $foto;
			}

			$where = array(
				'idmakanan_umum' => $this->input->post('idmakanan_umum')
			);

			$this->Mmakanan_umum->update_data('makanan_umum', $data, $where);

			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data  Berhasil Diupdate
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');

			redirect('Info_umum');
		}
	}





	public function _rules()
	{


		$this->form_validation->set_rules('nama_makanan', 'nama_makanan', 'required');
		$this->form_validation->set_rules('kalori', 'kalori', 'required');
		$this->form_validation->set_rules('protein', 'protein', 'required');
		$this->form_validation->set_rules('lemak', 'lemak', 'required');
		$this->form_validation->set_rules('vit_mineral', 'vit_mineral', 'required');
	}

	public function delete_infoumum($idmakanan_umum)
	{

		$where = array('idmakanan_umum' => $idmakanan_umum);
		$this->Mmakanan_umum->delete_data($where, 'makanan_umum');

		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data Berhasil Dihapus
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
		redirect('Info_umum');
	}
}
