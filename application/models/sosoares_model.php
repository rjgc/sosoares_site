<?php
class Sosoares_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	//GET USER ID

	public function get_user_id($session_id) {
		$query = $this->db->query("select user_data from cizacl_session where session_id = '$session_id'");

		$data = $query->row_array();
		return $data;
	}

	//GET USER

	public function get_role($user_id) {
		$query = $this->db->query("select cr.cizacl_role_name from cizacl_roles cr inner join users u on u.user_cizacl_role_id = cr.cizacl_role_id where u.user_id = '$user_id'");

		$data = $query->row_array();
		return $data;
	}

	//GET PROFILE

	public function get_profile($user_id) {
		$query = $this->db->query("select * from user_profiles where user_profile_user_id = '$user_id'");

		$data = $query->row_array();
		return $data;
	}

	//GET CATEGORIA FICHEIROS

	public function get_categoria_ficheiros() {
		$query = $this->db->query("select * from categoria_ficheiro");

		$data = $query->result_array();
		return $data;
	}

	//GET FICHEIROS

	public function get_ficheiros() {
		$query = $this->db->query("select * from ficheiros");

		$data = $query->result_array();
		return $data;
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