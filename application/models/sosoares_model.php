<?php
class Sosoares_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	//BACKGROUND IMAGE

	public function get_background_image(){
		$query = $this->db->query("select * from background_image");

		$data = $query->row_array();
		return $data;
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
        $query = $this->db->query("select * from noticias order by data_noticia desc");

        $data = $query->result_array();
        return $data;
    }

    //CONTACTOS

    public function get_contactos($seccao){
        $query = $this->db->query("select * from contactos where id_seccao=".$seccao);

        $data = $query->result_array();
        return $data;
    }
}