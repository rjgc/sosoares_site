<?php
class Product_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	public function get_batentes_com_corte(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and pa.id_caracteristica_produto_aluminio = cpa.id_caracteristica_produto_aluminio and tpa.nome = 'Batente' and cpa.nome = 'Com Corte Térmico'");

        $data = $query->result_array();
        return $data;
	}

	public function get_batentes_sem_corte(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and pa.id_caracteristica_produto_aluminio = cpa.id_caracteristica_produto_aluminio and tpa.nome = 'Batente' and cpa.nome = 'Sem Corte Térmico'");

        $data = $query->result_array();
        return $data;
	}

	public function get_aluminios_madeira(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome = 'Aluminio Madeira'");

        $data = $query->result_array();
        return $data;
	}

	public function get_correres_com_corte(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and pa.id_caracteristica_produto_aluminio = cpa.id_caracteristica_produto_aluminio and tpa.nome = 'Correr' and cpa.nome = 'Com Corte Térmico'");

        $data = $query->result_array();
        return $data;
	}

	public function get_correres_sem_corte(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and pa.id_caracteristica_produto_aluminio = cpa.id_caracteristica_produto_aluminio and tpa.nome = 'Correr' and cpa.nome = 'Sem Corte Térmico'");

        $data = $query->result_array();
        return $data;
	}

	public function get_gradeamentos(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome = 'Gradeamentos'");

        $data = $query->result_array();
        return $data;
	}

	public function get_fachadas(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome = 'Fachada/Quebra-Sol'");

        $data = $query->result_array();
        return $data;
	}

	public function get_portadas(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome = 'Portadas'");

        $data = $query->result_array();
        return $data;
	}

	public function get_portoes(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome = 'Portões'");

        $data = $query->result_array();
        return $data;
	}

	public function get_standards(){
		$query = $this->db->query("select pa.nome, pa.id_produto_aluminio from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome = 'Standards'");

        $data = $query->result_array();
        return $data;
	}

	public function get_produto($id){
		$query = $this->db->query("select distinct pa.*, tpa.nome as tipo, cpa.nome as caracteristica, ea.nome as ensaio from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa inner join ensaios_aluminio ea inner join ensaios_aluminio_produtos eap where pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and pa.id_caracteristica_produto_aluminio = cpa.id_caracteristica_produto_aluminio and ea.id_ensaio_aluminio=eap.ensaio_aluminio_id and eap.produto_aluminio_id=pa.id_produto_aluminio and pa.id_produto_aluminio='$id'");

		$data = $query->row_array();
		return $data;
	}

	public function get_obras($id){
		$query = $this->db->query("select og.url as url, og.id_obra as id, o.nome as nome from obras_gallery og inner join produtos_aluminio_obras pao inner join produtos_aluminio pa inner join obras o where pa.id_produto_aluminio=pao.produto_aluminio_id and og.id_obra=pao.obra_id and o.id_obra=og.id_obra and og.priority='1' and pa.id_produto_aluminio='$id'");

		$data = $query->result_array();
		return $data;
	}
}