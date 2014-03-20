<?php
class Product_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	//PAGINAS INTERMEDIAS PRODUTOS

	public function get_tipos(){
		$query = $this->db->query("select * from tipos_produto_aluminio");

		$data = $query->result_array();
		return $data;
	}

	public function get_tipo($id){
		$query = $this->db->query("select * from tipos_produto_aluminio where id_tipo_produto_aluminio='$id'");

		$data = $query->row_array();
		return $data;
	}

	public function get_caracteristicas($id){
		$query = $this->db->query("select cpa.* from caracteristicas_produto_aluminio cpa inner join (select * from produtos_aluminio where id_tipo_produto_aluminio='$id') pa");

		$data = $query->result_array();
		return $data;
	}

	public function get_produtos($id_tipo_produto_aluminio, $id_caracteristica_produto_aluminio){
		$query = $this->db->query("select * from produtos_aluminio where id_tipo_produto_aluminio = '$id_tipo_produto_aluminio' and id_caracteristica_produto_aluminio = '$id_caracteristica_produto_aluminio'");

		$data = $query->result_array();
		return $data;
	}

	public function get_produtos_($id_tipo_produto_aluminio){
		$query = $this->db->query("select * from produtos_aluminio where id_tipo_produto_aluminio = '$id_tipo_produto_aluminio'");

		$data = $query->result_array();
		return $data;
	}

	//MENU PRODUTOS

	public function get_batentes_com_corte(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and pa.id_caracteristica_produto_aluminio = cpa.id_caracteristica_produto_aluminio and tpa.nome = 'Batente' and cpa.nome = 'Com Corte Térmico'");

		$data = $query->result_array();
		return $data;
	}

	public function get_batentes_sem_corte(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and pa.id_caracteristica_produto_aluminio = cpa.id_caracteristica_produto_aluminio and tpa.nome = 'Batente' and cpa.nome = 'Sem Corte Térmico'");

		$data = $query->result_array();
		return $data;
	}

	public function get_aluminios_madeira(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome = 'Aluminio Madeira'");

		$data = $query->result_array();
		return $data;
	}

	public function get_correres_com_corte(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and pa.id_caracteristica_produto_aluminio = cpa.id_caracteristica_produto_aluminio and tpa.nome = 'Correr' and cpa.nome = 'Com Corte Térmico'");

		$data = $query->result_array();
		return $data;
	}

	public function get_correres_sem_corte(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and pa.id_caracteristica_produto_aluminio = cpa.id_caracteristica_produto_aluminio and tpa.nome = 'Correr' and cpa.nome = 'Sem Corte Térmico'");

		$data = $query->result_array();
		return $data;
	}

	public function get_gradeamentos(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome = 'Gradeamentos'");

		$data = $query->result_array();
		return $data;
	}

	public function get_fachadas(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome = 'Fachada/Quebra-Sol'");

		$data = $query->result_array();
		return $data;
	}

	public function get_portadas(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome = 'Portadas'");

		$data = $query->result_array();
		return $data;
	}

	public function get_portoes(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome = 'Portões'");

		$data = $query->result_array();
		return $data;
	}

	public function get_standards(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome = 'Standards'");

		$data = $query->result_array();
		return $data;
	}

	//PAGINA PRODUTO

	public function get_produto($id){
		$query = $this->db->query("select distinct pa.*, tpa.nome as tipo, cpa.nome as caracteristica, ea.nome as ensaio from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa inner join ensaios_aluminio ea inner join ensaios_aluminio_produtos eap where pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and pa.id_caracteristica_produto_aluminio = cpa.id_caracteristica_produto_aluminio and ea.id_ensaio_aluminio=eap.ensaio_aluminio_id and eap.produto_aluminio_id=pa.id_produto_aluminio and pa.id_produto_aluminio='$id'");

		$data = $query->row_array();
		return $data;
	}

	public function get_obras($id){
		$query = $this->db->query("select o.nome as nome, o.id_obra as id, og.url as url from obras o inner join (SELECT id_obra, MIN(id), url, priority FROM obras_gallery GROUP BY id_obra) og on o.id_obra=og.id_obra inner join produtos_aluminio_obras pao inner join produtos_aluminio pa where pa.id_produto_aluminio=pao.produto_aluminio_id and og.id_obra=pao.obra_id and pa.id_produto_aluminio='$id'");

		$data = $query->result_array();
		return $data;
	}
}