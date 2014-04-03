<?php
class Sosoares_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	//PAGINAS

	public function get_page($page){
		$query = $this->db->query("select * from paginas where id_pagina ='$page'");

		$data = $query->row_array();
		return $data;
	}

	public function get_pages($id_pagina) {
		$query = $this->db->query("select * from paginas where id_pagina ='$id_pagina'");

		$data = $query->result_array();
		return $data;
	}

	//AREAS COMERCIAIS

	public function get_areas_comerciais(){
		$query = $this->db->query("select * from areas_comerciais");

		$data = $query->result_array();
		return $data;
	}

	//NOTICIAS

	public function get_noticia($noticia){
		$query = $this->db->query("select * from noticias where id_noticia ='$noticia'");

		$data = $query->row_array();
		return $data;
	}

    public function get_noticias(){
        $query = $this->db->query("select * from noticias order by id_noticia desc");

        $data = $query->result_array();
        return $data;
    }
}