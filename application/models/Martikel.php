<?php

class Martikel extends CI_Model
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

	/////////////////////////////////////
	// PENCARIAN ARTIKEL

	public function cari_artikel($keyword)
	{

		$this->db->select('*');
		$this->db->from('artikel');
		if (!empty($keyword)) {
			$this->db->like('judul', $keyword);
			// $this->db->or_like('isi', $keyword);
			$this->db->order_by('waktu', 'DESC');
		}
		return $this->db->get()->result_array();
	}

	// END PENCARIAN ARTIKEL
	//
	// PENCARIAN ARTIKEL ALL

	public function get_artikel($idartikel)
	{

		$query = $this->db->query("select * from artikel
        where idartikel = $idartikel
		order by waktu");

		return $query->result_array();
	}
	public function ambil_artikel($idartikel)
	{
		$this->db->where('idartikel', $idartikel);
		$result = $this->db->get('artikel')->result_array();
		return $result[0];
	}

	// END PENCARIAN ARTIKEL

	// PENCARIAN ARTIKEL ALL

	public function all_artikel()
	{

		$query = $this->db->query("select * from artikel
		order by waktu desc");

		return $query->result_array();
	}

	// END PENCARIAN ARTIKEL









}
