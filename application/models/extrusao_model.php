<?php
class Extrusao_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	//ORDEM PRODUTOS

	public function change_order_extrusao($event, $clickEl, $el){
		$posClickEl = $this->db->query("select ordem from produtos_extrusao where id_produto_extrusao = $clickEl");
		$posClickEl = $posClickEl->result_array();
		$posClickEl = $posClickEl[0]['ordem'];

		$posEl = $this->db->query("select ordem from produtos_extrusao where id_produto_extrusao = $el");
		$posEl = $posEl->result_array();
		$posEl = $posEl[0]['ordem'];

		$resClick = false;
		$resEl = false;

		$this->db->where('id_produto_extrusao', $clickEl);              
		if ($this->db->update('produtos_extrusao', array('ordem' =>  $posEl)))
			$resClick = true;
		else
			$resClick = false;

		$this->db->where('id_produto_extrusao', $el);              
		if ($this->db->update('produtos_extrusao', array('ordem' =>  $posClickEl)))
			$resEl = true;
		else
			$resEl = false;

		if($resClick && $resEl)
			return true;
		else
			return false;
	}

	//ORDEM TIPO PRODUTOS

	public function change_order_tipo_produto_extrusao($event, $clickEl, $el) {
		$posClickEl = $this->db->query("select ordem from tipos_produto_extrusao where id_tipo_produto_extrusao = $clickEl");
		$posClickEl = $posClickEl->result_array();
		$posClickEl = $posClickEl[0]['ordem'];

		$posEl = $this->db->query("select ordem from tipos_produto_extrusao where id_tipo_produto_extrusao = $el");
		$posEl = $posEl->result_array();
		$posEl = $posEl[0]['ordem'];

		$resClick = false;
		$resEl = false;

		$this->db->where('id_tipo_produto_extrusao', $clickEl);              
		if ($this->db->update('tipos_produto_extrusao', array('ordem' =>  $posEl)))
			$resClick = true;
		else
			$resClick = false;

		$this->db->where('id_tipo_produto_extrusao', $el);              
		if ($this->db->update('tipos_produto_extrusao', array('ordem' =>  $posClickEl)))
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
		$query = $this->db->query("select max(ordem) as ordem from produtos_extrusao");

		$ordem = $query->row_array();

		return $ordem['ordem'] + 1;
	}

	public function set_ordem_tipo_produto() {
		$query = $this->db->query("select max(ordem) as ordem from tipos_produto_extrusao");

		$ordem = $query->row_array();

		return $ordem['ordem'] + 1;
	}

	//PAGINAS INTERMEDIAS PRODUTOS EXTRUSAO

	public function get_tipo_produtos($id_tipo_produto_extrusao){
		$query = $this->db->query("select * from tipos_produto_extrusao where id_tipo_produto_extrusao='$id_tipo_produto_extrusao' order by ordem asc");

		$data = $query->row_array();
		return $data;
	}

	public function get_tipos_produtos(){
		$query = $this->db->query("select * from tipos_produto_extrusao order by ordem asc");

		$data = $query->result_array();
		return $data;
	}

	public function get_caracteristicas_produto($id_tipo_produto_extrusao){
		$query = $this->db->query("select cpe.* from caracteristicas_produto_extrusao cpe inner join (select * from produtos_extrusao where id_produto_extrusao='$id_tipo_produto_extrusao') pe on cpe.id_caracteristica_produto_extrusao = pe.id_caracteristica_produto_extrusao");

		$data = $query->row_array();
		return $data;
	}

	public function get_caracteristicas_produtos($id_tipo_produto_extrusao){
		$query = $this->db->query("select distinct cpe.* from caracteristicas_produto_extrusao cpe inner join (select * from produtos_extrusao where id_produto_extrusao='$id_tipo_produto_extrusao') pe on cpe.id_caracteristica_produto_extrusao = pe.id_caracteristica_produto_extrusao order by cpe.id_caracteristica_produto_extrusao");

		$data = $query->result_array();
		return $data;
	}

	public function get_produtos($id_tipo_produto_extrusao, $id_caracteristica_produto_extrusao){
		$query = $this->db->query("select * from produtos_extrusao where id_tipo_produto_extrusao = '$id_tipo_produto_extrusao' and id_caracteristica_produto_extrusao = '$id_caracteristica_produto_extrusao' order by ordem asc");

		$data = $query->result_array();
		return $data;
	}

	public function get_produtos_tipo($id_tipo_produto_extrusao){
		$query = $this->db->query("select * from produtos_extrusao where id_tipo_produto_extrusao = '$id_tipo_produto_extrusao' order by ordem asc");

		$data = $query->result_array();
		return $data;
	}

	//PAGINA PRODUTO EXTRUSAO

	public function get_produto_com_caracteristica($id, $lang){
		$query = $this->db->query("select pe.*, tpe.nome_".$lang." as tipo, cpe.nome_".$lang." as caracteristica from produtos_extrusao pe inner join tipos_produto_extrusao tpe on pe.id_tipo_produto_extrusao = tpe.id_tipo_produto_extrusao inner join caracteristicas_produto_extrusao cpe on pe.id_caracteristica_produto_extrusao = cpe.id_caracteristica_produto_extrusao where pe.id_produto_extrusao='$id' order by pe.ordem asc");	

		$data = $query->row_array();
		return $data;
	}

	public function get_produto_sem_caracteristica($id, $lang){
		$query = $this->db->query("select pe.*, tpe.nome_".$lang." as tipo from produtos_extrusao pe inner join tipos_produto_extrusao tpe on pe.id_tipo_produto_extrusao = tpe.id_tipo_produto_extrusao where pe.id_produto_extrusao='$id' order by pe.ordem asc");

		$data = $query->row_array();
		return $data;
	}

	public function get_catalogos($id, $lang) {
		$query = $this->db->query("select f.* from ficheiros f inner join catalogos_extrusao_produto cap on f.id_ficheiro = cap.catalogo_extrusao_id inner join produtos_extrusao pa on pa.id_produto_extrusao = cap.produto_extrusao_id where pa.id_produto_extrusao='$id'");

		$data = $query->result_array();
		return $data;
	}

	//SERVICOS

	public function get_servico(){
		$query = $this->db->query("select * from servicos_extrusao where id_servico_extrusao = 1");

		$data = $query->row_array();
		return $data;
	}
}