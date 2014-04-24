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

	//ORDEM TIPO PRODUTOS

	public function change_order_tipo_produto_vidro($event, $clickEl, $el) {
		$posClickEl = $this->db->query("select ordem from tipos_produto_vidro where id_tipo_produto_vidro = $clickEl");
		$posClickEl = $posClickEl->result_array();
		$posClickEl = $posClickEl[0]['ordem'];

		$posEl = $this->db->query("select ordem from tipos_produto_vidro where id_tipo_produto_vidro = $el");
		$posEl = $posEl->result_array();
		$posEl = $posEl[0]['ordem'];

		$resClick = false;
		$resEl = false;

		$this->db->where('id_tipo_produto_vidro', $clickEl);              
		if ($this->db->update('tipos_produto_vidro', array('ordem' =>  $posEl)))
			$resClick = true;
		else
			$resClick = false;

		$this->db->where('id_tipo_produto_vidro', $el);              
		if ($this->db->update('tipos_produto_vidro', array('ordem' =>  $posClickEl)))
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

	public function set_ordem_tipo_produto() {
		$query = $this->db->query("select max(ordem) as ordem from tipos_produto_vidro");

		$ordem = $query->row_array();

		return $ordem['ordem'] + 1;
	}

	//PRODUTOS VIDRO

	public function get_tipo_produtos($id_tipo_produto_vidro) {
		$query = $this->db->query("select * from tipos_produto_vidro where id_tipo_produto_vidro='$id_tipo_produto_vidro' order by ordem asc");

		$data = $query->row_array();
		return $data;
	}

	public function get_tipos_produtos() {
		$query = $this->db->query("select * from tipos_produto_vidro order by ordem asc");

		$data = $query->result_array();
		return $data;
	}

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

	public function get_produtos_tipo($id_tipo_produto_vidro) {
		$query = $this->db->query("select * from produtos_vidro where id_tipo_produto_vidro = '$id_tipo_produto_vidro' order by ordem asc");

		$data = $query->result_array();
		return $data;
	}

	//SERVICOS

	public function get_servico(){
		$query = $this->db->query("select * from servicos_vidro where id_servico_vidro = 1");

		$data = $query->row_array();
		return $data;
	}
}