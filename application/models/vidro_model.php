<?php
class Vidro_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	//ORDEM PRODUTOS

	public function change_order_vidro($event, $clickEl, $el) {
		$posClickEl = $this->db->query("select ordem from produtos_vidro where id_produto_vidro = $clickEl");
		$posClickEl = $posClickEl->result_array();
		$posClickEl = $posClickEl[0]['ordem'];

		$posEl = $this->db->query("select ordem from produtos_vidro where id_produto_vidro = $el");
		$posEl = $posEl->result_array();
		$posEl = $posEl[0]['ordem'];

		$resClick = false;
		$resEl = false;

		$this->db->where('id_produto_vidro', $clickEl);              
		if ($this->db->update('produtos_vidro', array('ordem' =>  $posEl)))
			$resClick = true;
		else
			$resClick = false;

		$this->db->where('id_produto_vidro', $el);              
		if ($this->db->update('produtos_vidro', array('ordem' =>  $posClickEl)))
			$resEl = true;
		else
			$resEl = false;

		if($resClick && $resEl)
			return true;
		else
			return false;
	}

	//SET ORDEM

	public function set_ordem_produto() {
		$query = $this->db->query("select max(ordem) as ordem from produtos_vidro");

		$ordem = $query->row_array();

		return $ordem['ordem'] + 1;
	}

	//PRODUTOS VIDRO

	public function get_produto($id) {
		$query = $this->db->query("select * from produtos_vidro where id_produto_vidro='$id' order by ordem asc");

		$data = $query->row_array();
		return $data;
	}

	public function get_produtos() {
		$query = $this->db->query("select * from produtos_vidro order by ordem asc");

		$data = $query->result_array();
		return $data;
	}

	//SERVICOS

	public function get_servico($servico) {
		$query = $this->db->query("select * from servicos_vidro where id_servico_vidro ='$servico'");

		$data = $query->row_array();
		return $data;
	}

	public function get_servicos() {
		$query = $this->db->query("select * from servicos_vidro");

		$data = $query->result_array();
		return $data;
	}

	//AREA TECNICA

	public function get_areas_tecnicas(){
		$query = $this->db->query("select * from area_tecnica");

		$data = $query->result_array();
		return $data;
	}

	public function get_area_tecnica($id_pagina){
		$query = $this->db->query("select * from area_tecnica where id_pagina = '$id_pagina'");

		$data = $query->row_array();
		return $data;
	}

}