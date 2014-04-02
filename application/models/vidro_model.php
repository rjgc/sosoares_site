<?php
class Vidro_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	//BANNERS

	public function get_banners(){
		$query = $this->db->query("select * from banners_vidro");

		$data = $query->result_array();
		return $data;
	}

	//PRODUTOS VIDRO

	public function get_categoria_produtos() {
		$query = $this->db->query("select * from tipos_produto_vidro");

		$data = $query->result_array();
		return $data;
	}

	public function get_produto($id, $lang) {
		$query = $this->db->query("select * from produtos_vidro where id_produto_vidro='$id'");

		$data = $query->row_array();
		return $data;
	}

	public function get_produtos() {
		$query = $this->db->query("select * from produtos_vidro");

		$data = $query->result_array();
		return $data;
	}
}