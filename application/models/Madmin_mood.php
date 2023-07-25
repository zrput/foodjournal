<?php

	class Madmin_mood extends CI_Model{
		
		public function get_mood()
    	{
        	// $this->db->where('user_iduser', $user_id);
        	$query = $this->db->query("select * from mood 
			order by idmood desc;");
        	return $query->result_array();
    	}

		public function insert_mood()
    	{

        	$tambah = array(
        	    'nama_mood' => $this->input->post('nama_mood'),
				'foto' => $this->input->post('foto'),
        	    'ket' => $this->input->post('ket')

        	);

			  // Upload Photo and Store File Path
			  if (!empty($_FILES['foto']['name'])) {
				$config['upload_path'] = './asset/upload';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['max_size'] = 2048; // Maximum file size (in kilobytes)
				$config['file_name'] = time() . '_' . $_FILES['foto']['name']; // Rename the file to avoid conflicts
		
				$this->load->library('upload', $config);
		
				if ($this->upload->do_upload('userfile')) {
					$upload_data = $this->upload->data();
					$tambah['photo_path'] = $config['upload_path'] . $upload_data['file_name'];
				} else {
					echo "Foto gagal diunggah!";
				}
			}

        	$result = $this->db->insert('mood', $tambah);
        	return $result;
    	}

		public function data_mood()
		{
			return $this->db->get('mood')->result_array();
		}

		public function getdetail($id)
		{
			$query = $this->db->query("select * from mood
			where idmood = $id;");
	
			return $query;
		}

		public function update_mood()
		{
			$edit = array(
				'nama_mood' => $this->input->post('nama_mood'),
				'foto' => $this->input->post('foto'),
        	    'ket' => $this->input->post('ket')
			);
			// var_dump($edit);
			// die;
			  // Upload Photo and Store File Path
			  if (!empty($_FILES['foto']['name'])) {
				$config['upload_path'] = './asset/upload';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['max_size'] = 2048; // Maximum file size (in kilobytes)
				$config['file_name'] = time() . '_' . $_FILES['foto']['name']; // Rename the file to avoid conflicts
		
				$this->load->library('upload', $config);
		
				if ($this->upload->do_upload('userfile')) {
					$upload_data = $this->upload->data();
					$tambah['photo_path'] = $config['upload_path'] . $upload_data['file_name'];
				} else {
					echo "Foto gagal diunggah!";
				}
			}
			
			$this->db->where('idmood', $this->input->post('id'));
			$result = $this->db->update('mood', $edit);
			return $result;
		}

		public function delete_mood($id)
		{
			$this->db->where('idmood', $id);
			$result = $this->db->delete('mood');
			return $result;
		}


	}

?>