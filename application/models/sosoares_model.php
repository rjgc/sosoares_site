<?php
class Sosoares_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	//RECUPERAR PASSWORD

	public function recuperar_password($email)
	{
		$query = $this->db->query("select u.user_username, u.user_password from users u inner join user_profiles up on u.user_id = up.user_profile_user_id where up.user_profile_email = '$email'");

		$data = $query->row_array();
		return $data;
	}

	//PESQUISA

	public function pesquisa_tipos_aluminio($pesquisa) {
		$query = $this->db->query("select * from tipos_produto_aluminio where nome_pt like '%$pesquisa%' or nome_en like '%$pesquisa%' or nome_fr like '%$pesquisa%' or nome_es like '%$pesquisa%'");

		$data = $query->result_array();
		return $data;
	}

	public function pesquisa_tipos_extrusao($pesquisa) {
		$query = $this->db->query("select * from tipos_produto_extrusao where nome_pt like '%$pesquisa%' or nome_en like '%$pesquisa%' or nome_fr like '%$pesquisa%' or nome_es like '%$pesquisa%'");

		$data = $query->result_array();
		return $data;
	}

	public function pesquisa_produtos_aluminio($pesquisa) {
		$query = $this->db->query("select * from produtos_aluminio where nome_pt like '%$pesquisa%' or nome_en like '%$pesquisa%' or nome_fr like '%$pesquisa%' or nome_es like '%$pesquisa%'");

		$data = $query->result_array();
		return $data;
	}

	public function pesquisa_produtos_vidro($pesquisa) {
		$query = $this->db->query("select * from produtos_vidro where nome_pt like '%$pesquisa%' or nome_en like '%$pesquisa%' or nome_fr like '%$pesquisa%' or nome_es like '%$pesquisa%'");

		$data = $query->result_array();
		return $data;
	}

	public function pesquisa_produtos_extrusao($pesquisa) {
		$query = $this->db->query("select * from produtos_extrusao where nome_pt like '%$pesquisa%' or nome_en like '%$pesquisa%' or nome_fr like '%$pesquisa%' or nome_es like '%$pesquisa%'");

		$data = $query->result_array();
		return $data;
	}

	public function pesquisa_obras($pesquisa) {
		$query = $this->db->query("select o.*, og.url as foto from obras o inner join obras_gallery og on o.id_obra = og.id_obra where o.nome_pt like '%$pesquisa%' or o.nome_en like '%$pesquisa%' or o.nome_fr like '%$pesquisa%' or o.nome_es like '%$pesquisa%' or o.localizacao like '%$pesquisa%' limit 1");

		$data = $query->result_array();
		return $data;
	}

	//ORDEM GRUPO SOSOARES

	public function change_order($event, $clickEl, $el) {
		$posClickEl = $this->db->query("select ordem from grupo_sosoares where id_pagina = $clickEl");
		$posClickEl = $posClickEl->result_array();
		$posClickEl = $posClickEl[0]['ordem'];

		$posEl = $this->db->query("select ordem from grupo_sosoares where id_pagina = $el");
		$posEl = $posEl->result_array();
		$posEl = $posEl[0]['ordem'];

		$resClick = false;
		$resEl = false;

		$this->db->where('id_pagina', $clickEl);              
		if ($this->db->update('grupo_sosoares', array('ordem' =>  $posEl)))
			$resClick = true;
		else
			$resClick = false;

		$this->db->where('id_pagina', $el);              
		if ($this->db->update('grupo_sosoares', array('ordem' =>  $posClickEl)))
			$resEl = true;
		else
			$resEl = false;

		if($resClick && $resEl)
			return true;
		else
			return false;
	}

	//ORDEM APOIOS CLIENTE

	public function change_order_apoio_cliente($event, $clickEl, $el) {
		$posClickEl = $this->db->query("select ordem from apoio_cliente where id_pagina = $clickEl");
		$posClickEl = $posClickEl->result_array();
		$posClickEl = $posClickEl[0]['ordem'];

		$posEl = $this->db->query("select ordem from apoio_cliente where id_pagina = $el");
		$posEl = $posEl->result_array();
		$posEl = $posEl[0]['ordem'];

		$resClick = false;
		$resEl = false;

		$this->db->where('id_pagina', $clickEl);              
		if ($this->db->update('apoio_cliente', array('ordem' =>  $posEl)))
			$resClick = true;
		else
			$resClick = false;

		$this->db->where('id_pagina', $el);              
		if ($this->db->update('apoio_cliente', array('ordem' =>  $posClickEl)))
			$resEl = true;
		else
			$resEl = false;

		if($resClick && $resEl)
			return true;
		else
			return false;
	}

	//SET ORDEM

	public function set_ordem() {
		$query = $this->db->query("select max(ordem) as ordem from apoio_cliente");

		$ordem = $query->row_array();

		return $ordem['ordem'] + 1;
	}

	public function set_ordem_grupo_sosoares() {
		$query = $this->db->query("select max(ordem) as ordem from grupo_sosoares");

		$ordem = $query->row_array();

		return $ordem['ordem'] + 1;
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
		$query = $this->db->query("select * from banners where id_categoria_banner = '$id_categoria_banner' || id_categoria_banner = 5");

		$data = $query->result_array();
		return $data;
	}

	//DESTINATARIOS

	public function get_destinatario($id_categoria) {
		$query = $this->db->query("select * from destinatarios where id_categoria = '$id_categoria'");

		$data = $query->row_array();
		return $data;
	}

	//GRUPO SOSOARES

	public function get_grupos_sosoares() {
		$query = $this->db->query("select * from grupo_sosoares where visivel = '1' order by ordem");

		$data = $query->result_array();
		return $data;
	}

	public function get_grupo_sosoares($id_pagina) {
		$query = $this->db->query("select * from grupo_sosoares where id_pagina = '$id_pagina'");

		$data = $query->row_array();
		return $data;
	}

	//PAGINAS

	public function get_page($id_pagina) {
		$query = $this->db->query("select * from paginas where id_pagina = '$id_pagina' and visivel = '1'");

		$data = $query->row_array();
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

	public function get_apoio($id_categoria, $id_pagina) {
		$query = $this->db->query("select * from apoio_cliente where id_categoria = '$id_categoria' and id_pagina = '$id_pagina' order by ordem asc");

		$data = $query->row_array();
		return $data;
	}

	public function get_apoios($id_categoria) {
		$query = $this->db->query("select * from apoio_cliente where id_categoria = '$id_categoria' and visivel = '1' order by ordem asc");

		$data = $query->result_array();
		return $data;
	}

    //CONTACTOS

	public function get_contactos($id_categoria) {
		$query = $this->db->query("select * from contactos where id_categoria= '$id_categoria'");

		$data = $query->result_array();
		return $data;
	}

	public function get_contactos_mapa() {
		$query = $this->db->query("select * from contactos_mapa");

		$data = $query->result_array();
		return $data;
	}

}