<?php

class Mmakanan_umum extends CI_Model
{
	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function get_where($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function insert_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function update_data($table, $data, $where)
	{
		$this->db->update($table, $data, $where);
	}

	public function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_data_limit($table, $limit, $offset)
	{
		return $this->db->get($table, $limit, $offset);
	}

	public function cari_makanan_umum($keyword)
	{

		$this->db->select('*');
		$this->db->from('makanan_umum');
		if (!empty($keyword)) {
			$this->db->like('nama_makanan', $keyword);
			// $this->db->or_like('isi', $keyword);
			$this->db->order_by('nama_makanan', 'ASC');
		}
		return $this->db->get()->result_array();
	}

	public function all_makanan_umum()
	{

		$query = $this->db->query("select * from makanan_umum
			order by idmakanan_umum desc");

		return $query->result_array();
	}
}
