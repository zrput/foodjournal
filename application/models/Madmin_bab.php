<?php

	class Madmin_bab extends CI_Model{
		public function get_bristol()
		{
			// $this->db->where('user_iduser', $user_id);
			$query = $this->db->query("select * from bab
			order by skala_bristol desc;");
			return $query->result_array();
		}
	
		public function insert_bristol()
		{
		    $tambah = array(
		        'skala_bristol' => $this->input->post('skala_bristol'),
				'foto' => $this->input->post('foto'),
		        'ket' => $this->input->post('keterangan')
		    );
		
		    // Upload Photo and Store File Path
		    if (!empty($_FILES['foto']['name'])) {
		        $config['upload_path'] = './asset/upload';
		        $config['allowed_types'] = 'jpg|jpeg|png|gif';
		        $config['max_size'] = 2048; // Maximum file size (in kilobytes)
		        $config['file_name'] = time() . '_' . $_FILES['foto']['name']; // Rename the file to avoid conflicts
			
		        $this->load->library('upload', $config);
			
		        if ($this->upload->do_upload('foto')) { // Changed 'userfile' to 'foto' to match the form field name
		            $upload_data = $this->upload->data();
		            $tambah['photo_path'] = $config['upload_path'] . '/' . $upload_data['file_name']; // Added a forward slash (/) between the path and the filename
		        } else {
		            echo "Foto gagal diunggah!";
		        }
		    }
		
		    $result = $this->db->insert('bab', $tambah);
		    return $result;
		}
	
		public function data_bristol()
		{
			return $this->db->get('bab')->result_array();
		}
	
	
		public function getdetail($id)
		{
			$query = $this->db->query("select * from bab
			where idbab = $id;");
	
			return $query;
		}
	
		public function update_bristol()
		{
			$edit = array(
				'skala_bristol' => $this->input->post('skala_bristol'),
				'foto' => $this->input->post('foto'),
				'ket' => $this->input->post('keterangan')
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
			
			$this->db->where('idbab', $this->input->post('id'));
			$result = $this->db->update('bab', $edit);
			return $result;
		}
	
		public function delete_bristol($id)
		{
    		$this->db->where('idbab', $id);
    		$result = $this->db->delete('bab');
    		return $result;
		}
		
		
		


		
	}

?>