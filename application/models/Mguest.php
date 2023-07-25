<?php

class Mguest extends CI_Model
{
	public function get_data($idartikel)
	{

		// $idartikel = $this->input->post('idartikel');
		$this->db->where('idartikel', $idartikel);
		$query = $this->db->get('artikel');

		return $query->result_array();
	}
}
