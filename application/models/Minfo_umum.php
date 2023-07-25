<?php

	class Minfo_umum extends CI_Model{
		public function get_data($table){
			return $this->db->get($table);
		}

		public function get_where($where, $table){
			return $this->db->get_where($table, $where);
		}

		public function insert_data($data, $table){
			$this->db->insert($table, $data);
		}

		public function update_data($table, $data, $where){
			$this->db->update($table, $data, $where);
		}		

		public function delete_data($where, $table){
			$this->db->where($where);
			$this->db->delete($table);
		}
		
		public function get_data_limit($table, $limit, $offset)
		{
    		return $this->db->get($table, $limit, $offset);
		}


		
		
		


		
	}

?>