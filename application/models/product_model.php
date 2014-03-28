<?php
class Product_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}

	//PAGINAS INTERMEDIAS PRODUTOS

	public function get_tipos_produtos_aluminio(){
		$query = $this->db->query("select * from tipos_produto_aluminio");

		$data = $query->result_array();
		return $data;
	}

	public function get_tipo_produtos_aluminio($id_tipo_produto_aluminio){
		$query = $this->db->query("select * from tipos_produto_aluminio where id_tipo_produto_aluminio='$id_tipo_produto_aluminio'");

		$data = $query->row_array();
		return $data;
	}

	public function get_caracteristicas_produtos_aluminio($id_tipo_produto_aluminio){
		$query = $this->db->query("select distinct cpa.* from caracteristicas_produto_aluminio cpa inner join (select * from produtos_aluminio where id_tipo_produto_aluminio='$id_tipo_produto_aluminio') pa on cpa.id_caracteristica_produto_aluminio = pa.id_caracteristica_produto_aluminio order by cpa.id_caracteristica_produto_aluminio");

		$data = $query->result_array();
		return $data;
	}

	public function get_caracteristicas_produto_aluminio($id_tipo_produto_aluminio){
		$query = $this->db->query("select cpa.* from caracteristicas_produto_aluminio cpa inner join (select * from produtos_aluminio where id_produto_aluminio='$id_tipo_produto_aluminio') pa on cpa.id_caracteristica_produto_aluminio = pa.id_caracteristica_produto_aluminio");

		$data = $query->row_array();
		return $data;
	}

	public function get_produtos_aluminio($id_tipo_produto_aluminio, $id_caracteristica_produto_aluminio){
		$query = $this->db->query("select * from produtos_aluminio where id_tipo_produto_aluminio = '$id_tipo_produto_aluminio' and id_caracteristica_produto_aluminio = '$id_caracteristica_produto_aluminio'");

		$data = $query->result_array();
		return $data;
	}

	public function get_produtos_aluminio_tipo($id_tipo_produto_aluminio){
		$query = $this->db->query("select * from produtos_aluminio where id_tipo_produto_aluminio = '$id_tipo_produto_aluminio'");

		$data = $query->result_array();
		return $data;
	}

	//MENU PRODUTOS

	public function get_batentes_com_corte($lang){
		$query = $this->db->query("select pa.nome_".$lang.", pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and pa.id_caracteristica_produto_aluminio = cpa.id_caracteristica_produto_aluminio and tpa.nome_pt = 'Batente' and cpa.nome_pt = 'Com Corte Térmico'");

		$data = $query->result_array();
		return $data;
	}

	public function get_batentes_sem_corte($lang){
		$query = $this->db->query("select pa.nome_".$lang.", pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and pa.id_caracteristica_produto_aluminio = cpa.id_caracteristica_produto_aluminio and tpa.nome_pt = 'Batente' and cpa.nome_pt = 'Sem Corte Térmico'");

		$data = $query->result_array();
		return $data;
	}

	public function get_aluminios_madeira($lang){
		$query = $this->db->query("select pa.nome_".$lang.", pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome_pt = 'Aluminio Madeira'");

		$data = $query->result_array();
		return $data;
	}

	public function get_correres_com_corte($lang){
		$query = $this->db->query("select pa.nome_".$lang.", pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and pa.id_caracteristica_produto_aluminio = cpa.id_caracteristica_produto_aluminio and tpa.nome_pt = 'Correr' and cpa.nome_pt = 'Com Corte Térmico'");

		$data = $query->result_array();
		return $data;
	}

	public function get_correres_sem_corte($lang){
		$query = $this->db->query("select pa.nome_".$lang.", pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa inner join caracteristicas_produto_aluminio cpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and pa.id_caracteristica_produto_aluminio = cpa.id_caracteristica_produto_aluminio and tpa.nome_pt = 'Correr' and cpa.nome_pt = 'Sem Corte Térmico'");

		$data = $query->result_array();
		return $data;
	}

	public function get_gradeamentos($lang){
		$query = $this->db->query("select pa.nome_".$lang.", pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome_pt = 'Gradeamentos'");

		$data = $query->result_array();
		return $data;
	}

	public function get_fachadas($lang){
		$query = $this->db->query("select pa.nome_".$lang.", pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome_pt = 'Fachada/Quebra-Sol'");

		$data = $query->result_array();
		return $data;
	}

	public function get_portadas($lang){
		$query = $this->db->query("select pa.nome_".$lang.", pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome_pt = 'Portadas'");

		$data = $query->result_array();
		return $data;
	}

	public function get_portoes($lang){
		$query = $this->db->query("select pa.nome_".$lang.", pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome_pt = 'Portões'");

		$data = $query->result_array();
		return $data;
	}

	public function get_standards($lang){
		$query = $this->db->query("select pa.nome_".$lang.", pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome_pt = 'Standards'");

		$data = $query->result_array();
		return $data;
	}

	public function get_guilhotinas($lang){
		$query = $this->db->query("select pa.nome_".$lang.", pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome_pt = 'Guilhotina'");

		$data = $query->result_array();
		return $data;
	}

	public function get_resguardos($lang){
		$query = $this->db->query("select pa.nome_".$lang.", pa.id_produto_aluminio, pa.foto_1 from produtos_aluminio pa inner join tipos_produto_aluminio tpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio and tpa.nome_pt = 'Resguardos Banheira'");

		$data = $query->result_array();
		return $data;
	}

	//PAGINA PRODUTO

	public function get_produto_aluminio_com_caracteristica($id, $lang){
		$query = $this->db->query("select pa.*, tpa.nome_".$lang." as tipo, cpa.nome_".$lang." as caracteristica from produtos_aluminio pa inner join tipos_produto_aluminio tpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio inner join caracteristicas_produto_aluminio cpa on pa.id_caracteristica_produto_aluminio = cpa.id_caracteristica_produto_aluminio where pa.id_produto_aluminio='$id'");	

		$data = $query->row_array();
		return $data;
	}

	public function get_produto_aluminio_sem_caracteristica($id, $lang){
		$query = $this->db->query("select pa.*, tpa.nome_".$lang." as tipo from produtos_aluminio pa inner join tipos_produto_aluminio tpa on pa.id_tipo_produto_aluminio = tpa.id_tipo_produto_aluminio where pa.id_produto_aluminio='$id''$id'");

		$data = $query->row_array();
		return $data;
	}

	public function get_perfis($id, $lang){
		$query = $this->db->query("select pa.* from perfis_aluminio pa inner join perfis_aluminio_produtos eap on pa.id_perfil_aluminio = eap.perfil_aluminio_id inner join produtos_aluminio pa_ on pa_.id_produto_aluminio = eap.produto_aluminio_id where pa_.id_produto_aluminio='$id'");

		$data = $query->result_array();
		return $data;
	}

	public function get_ensaios($id, $lang){
		$query = $this->db->query("select ea.* from ensaios_aluminio ea inner join ensaios_aluminio_produtos eap on ea.id_ensaio_aluminio = eap.ensaio_aluminio_id inner join produtos_aluminio pa on pa.id_produto_aluminio = eap.produto_aluminio_id where pa.id_produto_aluminio='$id'");

		$data = $query->result_array();
		return $data;
	}

	public function get_obras($id, $lang){
		$query = $this->db->query("select o.nome_pt as nome_".$lang.", o.id_obra as id, og.url as url from obras o inner join (SELECT id_obra, MIN(id), url, priority FROM obras_gallery GROUP BY id_obra) og on o.id_obra=og.id_obra inner join produtos_aluminio_obras pao inner join produtos_aluminio pa where pa.id_produto_aluminio=pao.produto_aluminio_id and og.id_obra=pao.obra_id and pa.id_produto_aluminio='$id'");

		$data = $query->result_array();
		return $data;
	}
}