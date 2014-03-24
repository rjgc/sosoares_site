<?php
class Apoio_Cliente_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	public function get_page($page){
		$query = $this->db->query("select * from paginas where id_pagina='$page'");

		$data = $query->row_array();
		return $data;
	}

	public function get_pages($id_pagina) {
		$query = $this->db->query("select * from paginas where id_pagina='$id_pagina'");

		$data = $query->result_array();
		return $data;
	}
}