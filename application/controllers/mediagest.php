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

function banner_aluminio_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('banners_aluminio');
	$crud->set_subject('Banners Alumímio');
	$crud->columns('nome_pt');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'banner');

	$crud->set_field_upload('banner', 'assets/uploads/banners/aluminio');

	$output = $crud->render();

	$data['titulo'] = 'Banners Alumínio';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Banners Alumínio'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function banner_vidro_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('banners_vidro');
	$crud->set_subject('Banners Vidro');
	$crud->columns('nome_pt');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'banner');

	$crud->set_field_upload('banner', 'assets/uploads/banners/vidro');

	$output = $crud->render();

	$data['titulo'] = 'Banners Vidro';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Banners Vidro'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function banner_extrusao_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('banners_extrusao');
	$crud->set_subject('Banners Extrusão');
	$crud->columns('nome_pt');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'banner');

	$crud->set_field_upload('banner', 'assets/uploads/banners/extrusao');

	$output = $crud->render();

	$data['titulo'] = 'Banners Extrusão';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Banners Extrusão'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function banner_tratamento_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('banners_tratamento');
	$crud->set_subject('Banners Tratamento');
	$crud->columns('nome_pt');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'banner');

	$crud->set_field_upload('banner', 'assets/uploads/banners/tratamento');

	$output = $crud->render();

	$data['titulo'] = 'Banners Tratamento';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Banners Tratamento'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function noticias_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('noticias');
	$crud->set_subject('Notícias');
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

function ficheiros_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('ficheiros');
	$crud->set_subject('Ficheiros');
	$crud->columns('nome_pt');
	$crud->order_by('id_ficheiro', 'asc');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'ficheiro', 'id_categoria_ficheiro');
	$crud->set_field_upload('ficheiro', 'assets/uploads/files');

	$crud->set_relation('id_categoria_ficheiro', 'categoria_ficheiro', 'nome');

	$crud->callback_after_insert(array($this, 'callback_after_insert'));

	$output = $crud->render();

	$data['titulo'] = 'Ficheiros';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Ficheiros'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function callback_after_insert($post_array)
{	
	switch ($post_array['id_categoria_ficheiro']) {
		case '1':
			rename("assets/uploads/files/".$post_array['ficheiro'], "assets/uploads/perfis/".$post_array['ficheiro']);
		break;
		case '3':
			rename("assets/uploads/files/".$post_array['ficheiro'], "assets/uploads/pormenores/".$post_array['ficheiro']);
		break;
		case '4':
			rename("assets/uploads/files/".$post_array['ficheiro'], "assets/uploads/catalogos/aluminio/".$post_array['ficheiro']);
		break;
		case '5':
			rename("assets/uploads/files/".$post_array['ficheiro'], "assets/uploads/ensaios/aluminio/".$post_array['ficheiro']);
		break;
		case '6':
			rename("assets/uploads/files/".$post_array['ficheiro'], "assets/uploads/resumos/".$post_array['ficheiro']);
		break;
		case '7':
			rename("assets/uploads/files/".$post_array['ficheiro'], "assets/uploads/catalogos/extrusao/".$post_array['ficheiro']);
		break;
		case '8':
			rename("assets/uploads/files/".$post_array['ficheiro'], "assets/uploads/ensaios/extrusao/".$post_array['ficheiro']);
		break;
		case '9':
			rename("assets/uploads/files/".$post_array['ficheiro'], "assets/uploads/ferragens_vidro/".$post_array['ficheiro']);
		break;
	}

	return true;
}

function instaladores_management()
{
	$crud = new grocery_CRUD();

	$crud->set_table('instaladores');
	$crud->set_subject('Instaladores');
	$crud->columns('titulo', 'morada', 'nome', 'telefone', 'email', 'latitude', 'longitude');

	$crud->required_fields('titulo', 'morada', 'nome', 'telefone', 'email', 'latitude', 'longitude');

	$output = $crud->render();

	$data['titulo'] = 'Áreas Comerciais';
	$data['sub-titulo'] = 'Faça aqui a gestão das Áreas Comerciais';

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function produtos_aluminio_management()
{
	$crud = new grocery_CRUD();

	$this->load->model('product_model');

	$crud->set_table('produtos_aluminio');
	$crud->set_subject('Produtos Aluminio');
	$crud->columns('nome_pt', 'descricao_pt', 'resultado_pt', 'id_tipo_produto_aluminio', 'id_caracteristica_produto_aluminio');
	$crud->order_by('ordem', 'desc');

	$crud->fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es', 'resultado_pt', 'resultado_en', 'resultado_fr', 'resultado_es', 'id_tipo_produto_aluminio', 'id_caracteristica_produto_aluminio', 'foto_1', 'foto_2', 'foto_3', 'foto_4', 'corte_1', 'corte_2', 'corte_3', 'perfis', 'pormenores', 'catalogo', 'ensaios', 'resumos');
	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es', 'resultado_pt', 'resultado_en', 'resultado_fr', 'resultado_es', 'id_tipo_produto_aluminio', 'foto_1');		
	$crud->field_type('descricao_pt', 'text')->field_type('descricao_en', 'text')->field_type('descricao_fr', 'text')->field_type('descricao_es', 'text')->field_type('resultado_pt', 'text')->field_type('resultado_en', 'text')->field_type('resultado_fr', 'text')->field_type('resultado_es', 'text');
	$crud->display_as('id_caracteristica_produto_aluminio', 'Caracteristica')->display_as('id_tipo_produto_aluminio', 'Tipo');

	$crud->set_field_upload('foto_1', 'assets/uploads/produtos')->set_field_upload('foto_2', 'assets/uploads/produtos')->set_field_upload('foto_3', 'assets/uploads/produtos')->set_field_upload('foto_4', 'assets/uploads/produtos');
	$crud->display_as('foto_1', 'Foto 1')->display_as('foto_2', 'Foto 2')->display_as('foto_3', 'Foto 3')->display_as('foto_4', 'Foto 4');

	$crud->callback_after_upload(array($this,'callback_after_upload_produto'));

	$crud->set_field_upload('corte_1', 'assets/uploads/files')->set_field_upload('corte_2', 'assets/uploads/files')->set_field_upload('corte_3', 'assets/uploads/files');
	$crud->set_field_upload('pdf_1', 'assets/uploads/pdfs')->set_field_upload('pdf_2', 'assets/uploads/pdfs')->set_field_upload('pdf_3', 'assets/uploads/pdfs');
	$crud->display_as('corte_1','Corte 1')->display_as('corte_2','Corte 2')->display_as('corte_3','Corte 3');

	$crud->set_relation_n_n('perfis', 'perfis_aluminio_produto', 'ficheiros', 'produto_aluminio_id', 'perfil_aluminio_id', 'nome_pt', 'priority', array('id_categoria_ficheiro'=>1));
	$crud->set_relation_n_n('pormenores', 'pormenores_aluminio_produto', 'ficheiros', 'produto_aluminio_id', 'pormenor_aluminio_id', 'nome_pt', 'priority', array('id_categoria_ficheiro'=>3));
	$crud->set_relation_n_n('catalogo', 'catalogos_aluminio_produto', 'ficheiros', 'produto_aluminio_id', 'catalogo_aluminio_id', 'nome_pt', 'priority', array('id_categoria_ficheiro'=>4));
	$crud->set_relation_n_n('ensaios', 'ensaios_aluminio_produto', 'ficheiros', 'produto_aluminio_id', 'ensaio_aluminio_id', 'nome_pt', 'priority', array('id_categoria_ficheiro'=>5));
	$crud->set_relation_n_n('resumos', 'resumos_aluminio_produto', 'ficheiros', 'produto_aluminio_id', 'resumo_aluminio_id', 'nome_pt', 'priority', array('id_categoria_ficheiro'=>6));
	$crud->set_relation('id_tipo_produto_aluminio', 'tipos_produto_aluminio', 'nome_pt');
	$crud->set_relation('id_caracteristica_produto_aluminio', 'caracteristicas_produto_aluminio', 'nome_pt');

	$crud->add_action('up', 'http://www.indelague.pt/assets/indelague/img/sort_up_green.png', 'mediagest/change_order_aluminio', 'order-position-product-down');
	$crud->add_action('down', 'http://www.indelague.pt/assets/indelague/img/sort_down_green.png', 'mediagest/change_order_aluminio', 'order-position-product-up');

	$output = $crud->render();

	$data['titulo'] = 'Produtos Aluminio';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Produtos Aluminio'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}	

public function change_order_aluminio() {   
	print_r($_POST['eventRow']);
	print_r($_POST['clickEl']);
	print_r($_POST['el']);
	if (isset($_POST['eventRow']) && isset($_POST['clickEl']) && isset($_POST['el'])) {
		$this->load->model('product_model');
		$event = trim($_POST['eventRow']);
		$clickEl = intval($_POST['clickEl']);
		$el = intval($_POST['el']);
		if ($event && $clickEl && $el) {
			if ($this->product_model->change_order_alumnio($event, $clickEl, $el)) {
				exit("success"); 
			} else {
				exit("error1");
			} 
			$this->product_model->change_order_alumnio($event, $clickEl, $el);
		} else {
			exit("error2");
		}
	} else {
		exit("error3");
	}    
}

function produtos_extrusao_management()
{
	$crud = new grocery_CRUD();

	$this->load->model('product_model');

	$crud->set_table('produtos_extrusao');
	$crud->set_subject('Produtos Extrusão');	
	$crud->columns('nome_pt', 'descricao_pt', 'id_tipo_produto_extrusao', 'id_caracteristica_produto_extrusao', 'foto_1', 'foto_2', 'foto_3', 'foto_4', 'corte_1', 'corte_2', 'corte_3');
	$crud->order_by('ordem', 'desc');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es', 'resultado_pt', 'resultado_en', 'resultado_fr', 'resultado_es', 'id_tipo_produto_extrusao', 'foto_1');		
	$crud->field_type('descricao_pt', 'text');
	$crud->display_as('id_tipo_produto_extrusao', 'Tipo')->display_as('id_caracteristica_produto_extrusao', 'Caracteristica');

	$crud->set_field_upload('foto_1', 'assets/uploads/produtos')->set_field_upload('foto_2', 'assets/uploads/produtos')->set_field_upload('foto_3', 'assets/uploads/produtos')->set_field_upload('foto_4', 'assets/uploads/produtos');
	$crud->display_as('foto_1', 'Foto 1')->display_as('foto_2', 'Foto 2')->display_as('foto_3', 'Foto 3')->display_as('foto_4', 'Foto 4');

	$crud->set_field_upload('corte_1','assets/uploads/files')->set_field_upload('corte_2', 'assets/uploads/files')->set_field_upload('corte_3', 'assets/uploads/files');
	$crud->display_as('corte_1', 'Corte 1')->display_as('corte_2', 'Corte 2')->display_as('corte_3', 'Corte 3');	

	$crud->set_relation('id_tipo_produto_extrusao', 'tipos_produto_extrusao', 'nome_pt');
	$crud->set_relation('id_caracteristica_produto_extrusao', 'caracteristicas_produto_extrusao', 'nome_pt');
	$crud->set_relation_n_n('ensaios_extrusao', 'ensaios_extrusao_produtos', 'ensaios_extrusao', 'produto_extrusao_id', 'ensaio_extrusao_id', 'nome_pt', 'priority');

	$crud->add_action('down', 'http://www.indelague.pt/assets/indelague/img/sort_down_green.png', 'mediagest/change_order_extrusao', 'order-position-product-down');
	$crud->add_action('up', 'http://www.indelague.pt/assets/indelague/img/sort_up_green.png', 'mediagest/change_order_extrusao', 'order-position-product-up');

	$output = $crud->render();

	$data['titulo'] = 'Produtos Extrusao';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Produtos Extrusão'; 

	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

<<<<<<< HEAD
function produtos_vidro_management()
{
    $crud = new grocery_CRUD();

    $crud->set_table('produtos_vidro');
    $crud->set_subject('Produtos Vidro');
    $crud->columns('id_produto_vidro', 'nome_pt', 'descricao_pt', 'id_categoria');

    $crud->required_fields('id_produto_vidro', 'nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es', 'categoria_pt', 'categoria_en', 'categoria_fr', 'categoria_es', 'foto_1');
    $crud->field_type('descricao_pt', 'text')->field_type('descricao_en', 'text')->field_type('descricao_fr', 'text')->field_type('descricao_es', 'text');
    $crud->display_as('id_categoria', 'Caracteristica');

    $crud->set_field_upload('foto_1', 'assets/uploads/produtos')->set_field_upload('foto_2', 'assets/uploads/produtos')->set_field_upload('foto_3', 'assets/uploads/produtos')->set_field_upload('foto_4', 'assets/uploads/produtos');
    $crud->display_as('foto_1', 'Foto 1')->display_as('foto_2', 'Foto 2')->display_as('foto_3', 'Foto 3')->display_as('foto_4', 'Foto 4');

    $crud->set_relation('id_categoria', 'produtos_vidro_categorias', 'nome_categoria_pt');

    $output = $crud->render();

    $data['titulo'] = 'Produtos Vidro';
    $data['sub-titulo'] = 'Faça aqui a gestão dos Produtos Vidro';

    $this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    $this->_admin_output($output);
=======
public function change_order_extrusao() {   
	print_r($_POST['eventRow']);
	print_r($_POST['clickEl']);
	print_r($_POST['el']);
	if (isset($_POST['eventRow']) && isset($_POST['clickEl']) && isset($_POST['el'])) {
		$this->load->model('product_model');
		$event = trim($_POST['eventRow']);
		$clickEl = intval($_POST['clickEl']);
		$el = intval($_POST['el']);
		if ($event && $clickEl && $el) {
			if ($this->product_model->change_order_extrusao($event, $clickEl, $el)) {
				exit("success"); 
			} else {
				exit("error1");
			} 
			$this->product_model->change_order_extrusao($event, $clickEl, $el);
		} else {
			exit("error2");
		}
	} else {
		exit("error3");
	}    
>>>>>>> 7da4c0402f7424d90e856db6de22e8d137f6319f
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

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'foto');
	$crud->set_field_upload('foto', 'assets/uploads/paginas');

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

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'foto');
	$crud->set_field_upload('foto', 'assets/uploads/paginas');

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