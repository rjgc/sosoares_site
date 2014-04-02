<?php
class Tratamento_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	//BANNERS

	public function get_banners(){
		$query = $this->db->query("select * from banners_tratamento");

		$data = $query->result_array();
		return $data;
	}
}