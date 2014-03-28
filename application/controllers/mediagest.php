<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

ini_set("max_execution_time", "300");
ini_set("max_input_time", "600");
ini_set("memory_limit", "256M");
ini_set("post_max_size", "512M");
ini_set("upload_max_filesize", "128M");

header('Pragma: no-cache');
header('Cache-Control: private, no-cache');
header('Content-Disposition: inline; filename="files.json"');
header('X-Content-Type-Options: nosniff');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: OPTIONS, HEAD, GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: X-File-Name, X-File-Type, X-File-Size');

class Mediagest extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
		$this->load->library('image_CRUD');
		$this->load->library('session');
	}

	function _admin_output($output = null)
	{

		$this->load->view('mediagest/mediagest',$output);	
	}

	function _example_output($output = null)
	{
		$this->load->view('example.php',$output);	
	}

	function _form_tabs()
	{
$tabs = $this->session->userdata('myproject_film_tabs'); // retrieve arrays from session data

// build the tabs
$html = '
<!-- tabs -->
<ul class="nav nav-tabs" data-toggle="myproject.tabs.fields_box">'. "\n";
	$i = 0;

	foreach ($tabs as $tab) {
		$html .= '<li';
		if ($i == 0){$html .= ' class="active"'; $i = 1;}
		$html .= '><a href="#' . implode(",", array_slice($tab,1)) . '">'. $tab[0] . '</a></li>' . "\n";
	}

	$html .= '</ul>
	<!-- #/tabs -->';
//
	return $html;        
}


// por defeito abre a lista de obras
function index()
{
	try{
		$crud = new grocery_CRUD();

		$crud->set_table('obras');
		$crud->set_subject('Obras');
		$crud->columns('nome_pt','descricao_pt', 'localizacao');
		$crud->add_action('Fotos', 'http://www.indelague.pt/assets/uploads/photo.png', 'mediagest/galeria', 'iframe');

		$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es', 'localizacao');
		$crud->field_type('descricao_pt', 'text')->field_type('descricao_en', 'text')->field_type('descricao_fr', 'text')->field_type('descricao_es', 'text');

		$crud->set_relation_n_n('produtos_aluminio', 'produtos_aluminio_obras', 'produtos_aluminio', 'obra_id', 'produto_aluminio_id', 'nome_pt', 'priority');

		$output = $crud->render();

		$data['titulo'] = 'Obras';
		$data['sub-titulo'] = 'Faça aqui a gestão das Obras Realizadas'; 

		$this->load->view('mediagest/header',  (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

		$this->_admin_output($output);
	}catch(Exception $e){
		show_error($e->getMessage().' --- '.$e->getTraceAsString());
	}
}

function galeria()
{
	$image_crud = new image_CRUD();

	$image_crud->set_table('obras_gallery');
	$image_crud->set_primary_key_field('id');
	$image_crud->set_url_field('url');

	$image_crud->set_relation_field('id_obra')->set_ordering_field('priority')->set_image_path('assets/uploads/obras');

	$output = $image_crud->render();

	$this->_example_output($output);
}

function noticias_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('noticias');
	$crud->set_subject('Noticias');
	$crud->columns('data', 'titulo_pt', 'texto_pt', 'foto');

	$crud->required_fields('data', 'titulo_pt', 'titulo_en', 'titulo_fr', 'titulo_es', 'texto_pt', 'texto_en', 'texto_fr', 'texto_es');	
	$crud->field_type('texto_pt', 'text')->field_type('texto_en', 'text')->field_type('texto_fr', 'text')->field_type('texto_es', 'text');

	$crud->set_field_upload('foto', 'assets/uploads/noticias');
	$crud->display_as('foto', 'Foto');

	$crud->callback_after_upload(array($this,'callback_after_upload_noticia'));

	$output = $crud->render();

	$data['titulo'] = 'Noticias';  
	$data['sub-titulo'] = 'Faça aqui a gestão das Noticias'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function callback_after_upload_noticia($uploader_response, $field_info, $files_to_upload)
{
	$this->load->library('image_moo');

	$file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name; 

 	//thumb
	$this->image_moo->load($file_uploaded)->resize_crop(200, 133)->save_pa($prepend="thumb_", $append="", $overwrite=true);

	//refold
	rename($field_info->upload_path."/"."thumb_".$uploader_response[0]->name, "assets/uploads/produtos/thumb/".$uploader_response[0]->name);

	return true;
}

function paginas_management()
{
	$crud = new grocery_CRUD();

	$crud->unset_delete();
	$crud->unset_add();

	$crud->set_table('paginas');
	$crud->set_subject('Páginas');
	$crud->columns('titulo_pt');
	$crud->order_by('id_pagina', 'asc');

	$crud->display_as('titulo_pt', 'Titulo');
	$crud->set_field_upload('imagem', 'assets/uploads/files');

	$output = $crud->render();

	$data['titulo'] = 'Páginas';  
	$data['sub-titulo'] = 'Faça aqui a gestão das Páginas'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function ensaios_aluminio_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('ensaios_aluminio');
	$crud->set_subject('Ensaios');
	$crud->columns('nome_pt', 'ensaio');
	$crud->order_by('id_ensaio_aluminio','asc');

	$crud->set_field_upload('ensaio', 'assets/uploads/ensaios');

	$output = $crud->render();

	$data['titulo'] = 'Ensaios';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Ensaios'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function ensaios_extrusao_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('ensaios_extrusao');
	$crud->set_subject('Ensaios de Produto Extrusão');
	$crud->columns('nome_pt', 'ensaio');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'ensaio');	
	$crud->set_field_upload('ensaio', 'assets/uploads/ensaios');

	$output = $crud->render();

	$data['titulo'] = 'Ensaios de Produto Extrusão';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Ensaios de Produto Extrusão'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function catalogo_aluminio_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('catalogos_aluminio');
	$crud->set_subject('Catalogos');
	$crud->columns('nome_pt', 'catalogo');
	$crud->order_by('id_catalogo_aluminio','asc');

	$crud->set_field_upload('catalogo', 'assets/uploads/catalogos');

	$output = $crud->render();

	$data['titulo'] = 'Catálogos';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Catálogos'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function pormenores_aluminio_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('pormenores_aluminio');
	$crud->set_subject('Pormenores');
	$crud->columns('nome_pt', 'pormenor');
	$crud->order_by('id_pormenor_aluminio','asc');

	$crud->set_field_upload('pormenor', 'assets/uploads/pormenores');

	$output = $crud->render();

	$data['titulo'] = 'Pormenores';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Pormenores'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function perfis_aluminio_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('perfis_aluminio');
	$crud->set_subject('Perfis');
	$crud->columns('nome_pt', 'perfil');
	$crud->order_by('id_perfil_aluminio','asc');

	$crud->set_field_upload('perfil', 'assets/uploads/perfis');

	$output = $crud->render();

	$data['titulo'] = 'Perfis';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Perfis'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function resumos_aluminio_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('resumos_aluminio');
	$crud->set_subject('Resumos');
	$crud->columns('nome_pt', 'resumo');
	$crud->order_by('id_resumo_aluminio','asc');

	$crud->set_field_upload('resumo', 'assets/uploads/resumos');

	$output = $crud->render();

	$data['titulo'] = 'Resumos';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Resumos'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function instaladores_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('instaladores');
	$crud->set_subject('Instaladores');
	$crud->columns('titulo', 'morada', 'nome', 'telefone', 'email');

	$crud->required_fields('titulo', 'morada', 'nome', 'telefone', 'email');

	$output = $crud->render();

	$data['titulo'] = 'Instaladores';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Instaladores'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function produtos_aluminio_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('produtos_aluminio');
	$crud->set_subject('Produtos Aluminio');
	$crud->columns('nome_pt', 'descricao_pt', 'resultado_pt', 'id_tipo_produto_aluminio', 'id_caracteristica_produto_aluminio');
	$crud->order_by('id_produto_aluminio', 'asc');

	$crud->fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es', 'resultado_pt', 'resultado_en', 'resultado_fr', 'resultado_es', 'id_tipo_produto_aluminio', 'id_caracteristica_produto_aluminio', 'foto_1', 'foto_2', 'foto_3', 'foto_4', 'corte_1', 'corte_2', 'corte_3', 'perfis_aluminio', 'pormenores_aluminio', 'catalogo_tecnico_aluminio', 'ensaios_aluminio', 'resumos_aluminio');
	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es', 'resultado_pt', 'resultado_en', 'resultado_fr', 'resultado_es', 'id_tipo_produto_aluminio');		
	$crud->field_type('descricao_pt', 'text')->field_type('descricao_en', 'text')->field_type('descricao_fr', 'text')->field_type('descricao_es', 'text')->field_type('resultado_pt', 'text')->field_type('resultado_en', 'text')->field_type('resultado_fr', 'text')->field_type('resultado_es', 'text');
	$crud->display_as('id_caracteristica_produto_aluminio', 'Caracteristica')->display_as('id_tipo_produto_aluminio', 'Tipo');

	$crud->set_field_upload('foto_1', 'assets/uploads/produtos')->set_field_upload('foto_2', 'assets/uploads/produtos')->set_field_upload('foto_3', 'assets/uploads/produtos')->set_field_upload('foto_4', 'assets/uploads/produtos');
	$crud->display_as('foto_1', 'Foto 1')->display_as('foto_2', 'Foto 2')->display_as('foto_3', 'Foto 3')->display_as('foto_4', 'Foto 4');

	$crud->callback_after_upload(array($this,'callback_after_upload_produto'));

	$crud->set_field_upload('corte_1','assets/uploads/files')->set_field_upload('corte_2','assets/uploads/files')->set_field_upload('corte_3','assets/uploads/files');
	$crud->set_field_upload('pdf_1','assets/uploads/pdfs')->set_field_upload('pdf_2','assets/uploads/pdfs')->set_field_upload('pdf_3','assets/uploads/pdfs');
	$crud->display_as('corte_1','Corte 1')->display_as('corte_2','Corte 2')->display_as('corte_3','Corte 3');

	$crud->set_relation_n_n('perfis_aluminio', 'perfis_aluminio_produtos', 'perfis_aluminio', 'produto_aluminio_id', 'perfil_aluminio_id', 'nome_pt');
	$crud->set_relation_n_n('pormenores_aluminio', 'pormenores_aluminio_produtos', 'pormenores_aluminio', 'produto_aluminio_id', 'pormenor_aluminio_id', 'nome_pt');
	$crud->set_relation_n_n('catalogo_tecnico_aluminio', 'catalogo_tecnico_aluminio_produtos', 'catalogo_tecnico_aluminio', 'produto_aluminio_id', 'catalogo_aluminio_id', 'nome_pt');
	$crud->set_relation_n_n('ensaios_aluminio', 'ensaios_aluminio_produtos', 'ensaios_aluminio', 'produto_aluminio_id', 'ensaio_aluminio_id', 'nome_pt', 'priority');
	$crud->set_relation_n_n('resumos_aluminio', 'resumos_aluminio_produtos', 'resumos_aluminio', 'produto_aluminio_id', 'resumo_aluminio_id', 'nome_pt');
	$crud->set_relation('id_tipo_produto_aluminio', 'tipos_produto_aluminio', 'nome_pt');
	$crud->set_relation('id_caracteristica_produto_aluminio', 'caracteristicas_produto_aluminio', 'nome_pt');

	$output = $crud->render();

	$data['titulo'] = 'Produtos Aluminio';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Produtos Aluminio'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function produtos_extrusao_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('produtos_extrusao');
	$crud->set_subject('Produtos Extrusão');	
	$crud->columns('nome_pt','descricao_pt','id_tipo_produto_extrusao','id_caracteristica_produto_extrusao','foto_1','foto_2','foto_3','foto_4','corte_1','corte_2','corte_3');

	$crud->required_fields('nome_pt','descricao_pt','id_tipo_produto_extrusao','id_caracteristica_produto_extrusao');
	$crud->field_type('descricao_pt', 'text');
	$crud->display_as('id_tipo_produto_extrusao','Tipo')->display_as('id_caracteristica_produto_extrusao','Caracteristica');

	$crud->set_field_upload('foto_1','assets/uploads/produtos')->set_field_upload('foto_2','assets/uploads/produtos')->set_field_upload('foto_3','assets/uploads/produtos')->set_field_upload('foto_4','assets/uploads/produtos');
	$crud->display_as('foto_1','Foto 1')->display_as('foto_2','Foto 2')->display_as('foto_3','Foto 3')->display_as('foto_4','Foto 4');

	$crud->set_field_upload('corte_1','assets/uploads/files')->set_field_upload('corte_2','assets/uploads/files')->set_field_upload('corte_3','assets/uploads/files');
	$crud->display_as('corte_1','Corte 1')->display_as('corte_2','Corte 2')->display_as('corte_3','Corte 3');	

	$crud->set_relation('id_tipo_produto_extrusao','tipos_produto_extrusao','nome_pt');
	$crud->set_relation('id_caracteristica_produto_extrusao','caracteristicas_produto_extrusao','nome_pt');
	$crud->set_relation_n_n('ensaios_extrusao', 'ensaios_extrusao_produtos', 'ensaios_extrusao', 'produto_extrusao_id', 'ensaio_extrusao_id', 'nome_pt','priority');

	$output = $crud->render();

	$data['titulo'] = 'Produtos Extrusao';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Produtos Extrusão'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function callback_after_upload_produto($uploader_response, $field_info, $files_to_upload)
{
	$this->load->library('image_moo');

	$file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name; 

 	//list - normal - thumb
	$this->image_moo->load($file_uploaded)->resize_crop(256, 230)->save_pa($prepend="list_", $append="", $overwrite=true)->resize_crop(330, 393)->save_pa($prepend="normal_", $append="", $overwrite=true)->resize_crop(80, 80)->save_pa($prepend="thumb_", $append="", $overwrite=true);

	//refold
	rename($field_info->upload_path."/"."list_".$uploader_response[0]->name, "assets/uploads/produtos/list/".$uploader_response[0]->name);
	rename($field_info->upload_path."/"."normal_".$uploader_response[0]->name, "assets/uploads/produtos/normal/".$uploader_response[0]->name);
	rename($field_info->upload_path."/"."thumb_".$uploader_response[0]->name, "assets/uploads/produtos/thumb/".$uploader_response[0]->name);

	return true;
}

// function produtos_vidro_management()
// {
// 	$crud = new grocery_CRUD();

// 	//$crud->set_theme('flexigrid');
// 	$crud->set_table('produtos_vidro');
// 	$crud->set_subject('Produtos Vidro');
// 	$crud->required_fields('nome','descricao');
// 	$crud->columns('nome','descricao','foto_1','foto_2','foto_3','foto_4');
// 	$crud->field_type('descricao', 'text');
// 	$crud->set_field_upload('foto_1','assets/uploads/produtos');
// 	$crud->set_field_upload('foto_2','assets/uploads/produtos');
// 	$crud->set_field_upload('foto_3','assets/uploads/produtos');
// 	$crud->set_field_upload('foto_4','assets/uploads/produtos');
// 	$crud->display_as('foto_1','Foto 1')->display_as('foto_2','Foto 2')->display_as('foto_3','Foto 3')->display_as('foto_4','Foto 4');

// 	$output = $crud->render();

// 	$data['titulo'] = 'Produtos Vidro';  
// 	$data['sub-titulo'] = 'Faça aqui a gestão dos Produtos Vidro'; 

//         	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files() , 'css_files' => $crud->get_css_files()));	

//        	$this->_admin_output($output);

// 	//$this->_example_output($output);
// }

function tipos_produto_aluminio_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('tipos_produto_aluminio');
	$crud->set_subject('Tipos de Produto Aluminio');
	$crud->columns('nome_pt');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es');

	$output = $crud->render();

	$data['titulo'] = 'Tipos de Produto Aluminio';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Tipos de Produto de Aluminio'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function tipos_produto_extrusao_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('tipos_produto_extrusao');
	$crud->set_subject('Tipos de Produto Extrusão');
	$crud->columns('nome_pt');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es');

	$output = $crud->render();

	$data['titulo'] = 'Tipos de Produto Extrusão';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Tipos de Produto Extrusão'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function caracteristicas_produto_aluminio_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('caracteristicas_produto_aluminio');
	$crud->set_subject('Caracteristicas de Produto Aluminio');
	$crud->columns('nome_pt');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es');

	$output = $crud->render();

	$data['titulo'] = 'Caracteristicas de Produto Aluminio';  
	$data['sub-titulo'] = 'Faça aqui a gestão das Caracteristicas de Produto de Aluminio'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function caracteristicas_produto_extrusao_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('caracteristicas_produto_extrusao');
	$crud->set_subject('Caracteristicas de Produto Extrusão');
	$crud->columns('nome_pt');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es');

	$output = $crud->render();

	$data['titulo'] = 'Caracteristicas de Produto Extrusão';  
	$data['sub-titulo'] = 'Faça aqui a gestão das Caracteristicas de Produto Extrusão'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function servicos_extrusao_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('servicos_extrusao');
	$crud->set_subject('Serviços Extrusão');
	$crud->columns('nome_pt', 'descricao_pt');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es');
	$crud->field_type('descricao_pt', 'text');

	$output = $crud->render();

	$data['titulo'] = 'Serviços Extrusão';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Serviços de Extrusão'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function servicos_vidro_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('servicos_vidro');
	$crud->set_subject('Serviços Vidro');
	$crud->columns('nome_pt', 'descricao_pt');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es');
	$crud->field_type('descricao_pt', 'text');	

	$output = $crud->render();

	$data['titulo'] = 'Serviços Vidro';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Serviços de Vidro'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

}