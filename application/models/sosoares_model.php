<?php
class Sosoares_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	//BACKGROUND IMAGE

	public function get_background_image() {
		$query = $this->db->query("select * from background_image");

		$data = $query->row_array();
		return $data;
	}

	//BANNERS


    public function get_banners($id_categoria_banner) {
        $query = $this->db->query("select * from banners where id_categoria_banner = '$id_categoria_banner'");

        $data = $query->result_array();
        return $data;
    }


	/*public function get_banners($id_categoria_banner) {
		$query = $this->db->query("select b.*, bo.id_obra as id_obra from banners b inner join banners_obras bo on b.id_banner = bo.id_banner where id_categoria_banner = '$id_categoria_banner'");

		$data = $query->result_array();
		return $data;
	}*/

	//DESTINATARIOS

	public function get_destinatario($id_categoria) {
		$query = $this->db->query("select * from destinatarios where id_categoria = '$id_categoria'");

		$data = $query->row_array();
		return $data;
	}

	//PAGINAS

	public function get_page($id_pagina) {
		$query = $this->db->query("select * from paginas where id_pagina = '$id_pagina'");

		$data = $query->row_array();
		return $data;
	}

	public function get_pages($id_pagina) {
		$query = $this->db->query("select * from paginas where id_pagina = '$id_pagina'");

		$data = $query->result_array();
		return $data;
	}

	//AREAS COMERCIAIS

	public function get_areas_comerciais() {
		$query = $this->db->query("select * from areas_comerciais");

		$data = $query->result_array();
		return $data;
	}

	//NOTICIAS

	public function get_destaque() {
		$query = $this->db->query("select * from noticias order by data_noticia desc limit 1");

		$data = $query->row_array();
		return $data;
	}

	public function get_noticia($noticia) {
		$query = $this->db->query("select * from noticias where id_noticia = '$noticia'");

		$data = $query->row_array();
		return $data;
	}

    public function get_noticias() {
        $query = $this->db->query("select * from noticias order by data_noticia desc");

        $data = $query->result_array();
        return $data;
    }

    //APOIO CLIENTE

    public function get_apoio($id_pagina) {
		$query = $this->db->query("select * from apoio_cliente where id_pagina = '$id_pagina'");

		$data = $query->row_array();
		return $data;
	}

	public function get_apoios($id_pagina) {
		$query = $this->db->query("select * from apoio_cliente where id_pagina = '$id_pagina'");

		$data = $query->result_array();
		return $data;
	}

    //CONTACTOS

    public function get_contactos($id_categoria) {
        $query = $this->db->query("select * from contactos where id_categoria= '$id_categoria'");

        $data = $query->result_array();
        return $data;
    }
}