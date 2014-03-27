<?php
class Noticias_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	public function get_noticia($noticia){
		$query = $this->db->query("select * from noticias where id_noticia='$noticia'");

		$data = $query->row_array();
		return $data;
	}
}