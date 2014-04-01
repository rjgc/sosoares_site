<?php
class Banners_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	public function get_banners_aluminio(){
		$query = $this->db->query("select * from banners_aluminio");

		$data = $query->result_array();
		return $data;
	}

	public function get_banners_vidro(){
		$query = $this->db->query("select * from banners_vidro");

		$data = $query->result_array();
		return $data;
	}

	public function get_banners_extrusao(){
		$query = $this->db->query("select * from banners_extrusao");

		$data = $query->result_array();
		return $data;
	}

	public function get_banners_tratamento(){
		$query = $this->db->query("select * from banners_tratamento");

		$data = $query->result_array();
		return $data;
	}
}