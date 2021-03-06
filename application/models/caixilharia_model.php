<?php
class Caixilharia_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	//ORDEM OBRAS

	public function change_order($event, $clickEl, $el) {
		$posClickEl = $this->db->query("select ordem from obras where id_obra = $clickEl");
		$posClickEl = $posClickEl->result_array();
		$posClickEl = $posClickEl[0]['ordem'];

		$posEl = $this->db->query("select ordem from obras where id_obra = $el");
		$posEl = $posEl->result_array();
		$posEl = $posEl[0]['ordem'];

		$resClick = false;
		$resEl = false;

		$this->db->where('id_obra', $clickEl);              
		if ($this->db->update('obras', array('ordem' =>  $posEl)))
			$resClick = true;
		else
			$resClick = false;

		$this->db->where('id_obra', $el);              
		if ($this->db->update('obras', array('ordem' =>  $posClickEl)))
			$resEl = true;
		else
			$resEl = false;

		if($resClick && $resEl)
			return true;
		else
			return false;
	}

	//ORDEM PRODUTOS

	public function change_order_aluminio($event, $clickEl, $el) {
		$posClickEl = $this->db->query("select ordem from produtos_aluminio where id_produto_aluminio = $clickEl");
		$posClickEl = $posClickEl->result_array();
		$posClickEl = $posClickEl[0]['ordem'];

		$posEl = $this->db->query("select ordem from produtos_aluminio where id_produto_aluminio = $el");
		$posEl = $posEl->result_array();
		$posEl = $posEl[0]['ordem'];

		$resClick = false;
		$resEl = false;

		$this->db->where('id_produto_aluminio', $clickEl);              
		if ($this->db->update('produtos_aluminio', array('ordem' =>  $posEl)))
			$resClick = true;
		else
			$resClick = false;

		$this->db->where('id_produto_aluminio', $el);              
		if ($this->db->update('produtos_aluminio', array('ordem' =>  $posClickEl)))
			$resEl = true;
		else
			$resEl = false;

		if($resClick && $resEl)
			return true;
		else
			return false;
	}

	//ORDEM TIPO PRODUTOS

	public function change_order_tipo_produto_aluminio($event, $clickEl, $el) {
		$posClickEl = $this->db->query("select ordem from tipos_produto_aluminio where id_tipo_produto_aluminio = $clickEl");
		$posClickEl = $posClickEl->result_array();
		$posClickEl = $posClickEl[0]['ordem'];

		$posEl = $this->db->query("select ordem from tipos_produto_aluminio where id_tipo_produto_aluminio = $el");
		$posEl = $posEl->result_array();
		$posEl = $posEl[0]['ordem'];

		$resClick = false;
		$resEl = false;

		$this->db->where('id_tipo_produto_aluminio', $clickEl);              
		if ($this->db->update('tipos_produto_aluminio', array('ordem' =>  $posEl)))
			$resClick = true;
		else
			$resClick = false;

		$this->db->where('id_tipo_produto_aluminio', $el);              
		if ($this->db->update('tipos_produto_aluminio', array('ordem' =>  $posClickEl)))
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
		$query = $this->db->query("select max(ordem) as ordem from obras");

		$ordem = $query->row_array();

		return $ordem['ordem'] + 1;
	}

	public function set_ordem_produto() {
		$query = $this->db->query("select max(ordem) as ordem from produtos_aluminio");

		$ordem = $query->row_array();

		return $ordem['ordem'] + 1;
	}

	public function set_ordem_tipo_produto() {
		$query = $this->db->query("select max(ordem) as ordem from tipos_produto_aluminio");

		$ordem = $query->row_array();

		return $ordem['ordem'] + 1;
	}

	//PAGINAS INTERMEDIAS PRODUTOS CAIXILHARIA

	public function get_tipo_produtos($id_tipo_produto_aluminio) {
		$query = $this->db->query("select * from tipos_produto_aluminio where id_tipo_produto_aluminio='$id_tipo_produto_aluminio' order by ordem asc");

		$data = $query->row_array();
		return $data;
	}

	public function get_tipos_produtos() {
		$query = $this->db->query("select * from tipos_produto_aluminio order by ordem asc");

		$data = $query->result_array();
		return $data;
	}

	public function get_caracteristicas_produto($id_tipo_produto_aluminio) {
		$query = $this->db->query("select cpa.* from caracteristicas_produto_aluminio cpa inner join (select * from produtos_aluminio where id_produto_aluminio='$id_tipo_produto_aluminio') pa on cpa.id_caracteristica_produto_aluminio = pa.id_caracteristica_produto_aluminio");

		$data = $query->row_array();
		return $data;
	}

	public function get_caracteristicas_produtos($id_tipo_produto_aluminio) {
		$query = $this->db->query("select distinct cpa.* from caracteristicas_produto_aluminio cpa inner join (select * from produtos_aluminio where id_tipo_produto_aluminio='$id_tipo_produto_aluminio') pa on cpa.id_caracteristica_produto_aluminio = pa.id_caracteristica_produto_aluminio order by cpa.id_caracteristica_produto_aluminio");

		$data = $query->result_array();
		return $data;
	}

	public function get_produtos($id_tipo_produto_aluminio, $id_caracteristica_produto_aluminio) {
		$query = $this->db->query("select * from produtos_aluminio where id_tipo_produto_aluminio = '$id_tipo_produto_aluminio' and id_caracteristica_produto_aluminio = '$id_caracteristica_produto_aluminio' order by ordem asc");

		$data = $query->result_array();
		return $data;
	}

	public function get_produtos_tipo($id_tipo_produto_aluminio) {
		$query = $this->db->query("select * from produtos_aluminio where id_tipo_produto_aluminio = '$id_tipo_produto_aluminio' order by ordem asc");

		$data = $query->result_array();
		return $data;
	}

	//PAGINA PRODUTO CAIXILHARIA

	public function get_produto_com_caracteristica($id, $lang) {
		$query = $this->db->query("select pa.*, tpa.nome_".$lang." as tipo, cpa.nome_".$lang." as caracteristica from produtos_aluminio pa inner join tipos_produto_aluminio tpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio inner join caracteristicas_produto_aluminio cpa on pa.id_caracteristica_produto_aluminio = cpa.id_caracteristica_produto_aluminio where pa.id_produto_aluminio='$id' order by pa.ordem asc");	

		$data = $query->row_array();
		return $data;
	}

	public function get_produto_sem_caracteristica($id, $lang) {
		$query = $this->db->query("select pa.*, tpa.nome_".$lang." as tipo from produtos_aluminio pa inner join tipos_produto_aluminio tpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio where pa.id_produto_aluminio='$id' order by pa.ordem asc");

		$data = $query->row_array();
		return $data;
	}

	public function get_perfis($id, $lang) {
		$query = $this->db->query("select f.* from ficheiros f inner join perfis_aluminio_produto pap on f.id_ficheiro = pap.perfil_aluminio_id inner join produtos_aluminio pa on pa.id_produto_aluminio = pap.produto_aluminio_id where pa.id_produto_aluminio='$id'");

		$data = $query->result_array();
		return $data;
	}

	public function get_pormenores($id, $lang) {
		$query = $this->db->query("select f.* from ficheiros f inner join pormenores_aluminio_produto pap on f.id_ficheiro = pap.pormenor_aluminio_id inner join produtos_aluminio pa on pa.id_produto_aluminio = pap.produto_aluminio_id where pa.id_produto_aluminio='$id'");

		$data = $query->result_array();
		return $data;
	}

	public function get_catalogos($id, $lang) {
		$query = $this->db->query("select f.* from ficheiros f inner join catalogos_aluminio_produto cap on f.id_ficheiro = cap.catalogo_aluminio_id inner join produtos_aluminio pa on pa.id_produto_aluminio = cap.produto_aluminio_id where pa.id_produto_aluminio='$id'");

		$data = $query->result_array();
		return $data;
	}

	public function get_ensaios($id, $lang) {
		$query = $this->db->query("select f.* from ficheiros f inner join ensaios_aluminio_produto eap on f.id_ficheiro = eap.ensaio_aluminio_id inner join produtos_aluminio pa on pa.id_produto_aluminio = eap.produto_aluminio_id where pa.id_produto_aluminio='$id'");

		$data = $query->result_array();
		return $data;
	}

	public function get_folheto_promocional($id, $lang) {
		$query = $this->db->query("select f.* from ficheiros f inner join folheto_promocional_produto fpp on f.id_ficheiro = fpp.folheto_promocional_aluminio_id inner join produtos_aluminio pa on pa.id_produto_aluminio = fpp.produto_aluminio_id where pa.id_produto_aluminio='$id'");

		$data = $query->result_array();
		return $data;
	}

	public function get_obras_produto($id, $lang) {
		$query = $this->db->query("select o.nome_pt as nome_".$lang.", o.id_obra as id, og.url as url from obras o inner join (SELECT id_obra, MIN(id), url, priority FROM obras_gallery GROUP BY id_obra) og on o.id_obra=og.id_obra inner join produtos_aluminio_obras pao inner join produtos_aluminio pa where pa.id_produto_aluminio=pao.produto_aluminio_id and og.id_obra=pao.obra_id and pa.id_produto_aluminio='$id' order by o.ordem asc");

		$data = $query->result_array();
		return $data;
	}

	//OBRAS

	public function get_obra($id) {
		$query = $this->db->query("select * from obras where id_obra='$id' order by ordem asc");

		$data = $query->row_array();
		return $data;
	}

	public function get_obras() {
		$query = $this->db->query("select * from obras o inner join (SELECT id_obra, MIN(id), url, priority FROM obras_gallery GROUP BY id_obra) og on o.id_obra=og.id_obra order by o.ordem asc");

		$data = $query->result_array();
		return $data;
	}

	public function get_galeria_obra($id) {
		$query = $this->db->query("select * from obras_gallery where id_obra='$id' order by priority");

		$data = $query->result_array();
		return $data;
	}

	public function get_galeria_obras() {
		$query = $this->db->query("select * from obras_gallery");

		$data = $query->result_array();
		return $data;
	}

	public function get_produtos_obra($id, $lang) {
		$query = $this->db->query("select pab.*, pa.foto_1 as url, pa.nome_".$lang." as nome, pa.id_produto_aluminio as id from produtos_aluminio_obras pab inner join produtos_aluminio pa on pab.produto_aluminio_id=pa.id_produto_aluminio where obra_id='$id' order by pa.ordem asc");

		$data = $query->result_array();
		return $data;
	}

	public function get_produto_obra($id) {
		$query = $this->db->query("select * from produtos_aluminio where id_produto_aluminio='$id' order by ordem asc");

		$data = $query->result_array();
		return $data;
	}

    //SERVICOS

	public function get_servico($servico) {
		$query = $this->db->query("select * from servicos_aluminio where id_servico_aluminio ='$servico'");

		$data = $query->row_array();
		return $data;
	}

	public function get_servicos() {
		$query = $this->db->query("select * from servicos_aluminio");

		$data = $query->result_array();
		return $data;
	}
	
}