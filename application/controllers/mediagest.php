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

// load language file
//$this->lang->load('indelague');
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
// $crud->display_as('products','Produtos Utilizados no Projecto');
// $crud->set_relation_n_n('products', 'product_related_case_studies', 'product', 'case_studies', 'product_id', 'name', 'priority');

		$output = $crud->render();

		$data['titulo'] = 'Obras';
		$data['sub-titulo'] = 'Faça aqui a gestão das Obras Realizadas'; 

		$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

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

//$crud->set_theme('flexigrid');
	$crud->set_table('noticias');
	$crud->set_subject('Noticias');
	$crud->required_fields('data', 'titulo_pt', 'titulo_en', 'titulo_fr', 'titulo_es', 'texto_pt', 'texto_en', 'texto_fr', 'texto_es');
	$crud->columns('data', 'titulo_pt', 'texto_pt', 'foto');
	$crud->field_type('texto_pt', 'text');
	$crud->field_type('texto_en', 'text');
	$crud->field_type('texto_fr', 'text');
	$crud->field_type('texto_es', 'text');
	$crud->set_field_upload('foto', 'assets/uploads/noticias');
	$crud->display_as('foto', 'Foto');

	$output = $crud->render();

	$data['titulo'] = 'Noticias';  
	$data['sub-titulo'] = 'Faça aqui a gestão das Noticias'; 
	$this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);

//$this->_example_output($output);
}

function paginas_management(){
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

	$this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function ficheiros_management(){
	$crud = new grocery_CRUD();

	$crud->set_table('ficheiros');
	$crud->set_subject('Ficheiros');
	$crud->columns('nome_ficheiro', 'id_categoria_ficheiro', 'ficheiro');
	$crud->order_by('id_ficheiro','asc');
	
	$crud->display_as('ficheiro', 'Ficheiro')->display_as('id_categoria_ficheiro', 'Categoria')->display_as('nome_ficheiro', 'Nome');
	$crud->set_field_upload('ficheiro', 'assets/uploads/files');

	$crud->set_relation('id_categoria_ficheiro', 'categoria_ficheiro', 'nome_categoria_ficheiro');

	$output = $crud->render();

	$data['titulo'] = 'Ficheiros';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Ficheiros'; 

	$this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);
}

function instaladores_management()
{
	$crud = new grocery_CRUD();

//$crud->set_theme('flexigrid');
	$crud->set_table('instaladores');
	$crud->set_subject('Instaladores');
	$crud->columns('titulo', 'morada', 'nome', 'telefone', 'email');

	$crud->required_fields('titulo', 'morada', 'nome', 'telefone', 'email');

	$output = $crud->render();

	$data['titulo'] = 'Instaladores';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Instaladores'; 

	$this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);

//$this->_example_output($output);
}

function produtos_aluminio_management()
{
	$crud = new grocery_CRUD();

//$crud->set_theme('flexigrid');
	$crud->set_table('produtos_aluminio');
	$crud->set_subject('Produtos Aluminio');
	$crud->columns('nome_pt', 'descricao_pt', 'resultado_pt', 'id_tipo_produto_aluminio', 'id_caracteristica_produto_aluminio');
	$crud->order_by('id_produto_aluminio', 'asc');

	$crud->fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es', 'resultado_pt', 'resultado_en', 'resultado_fr', 'resultado_es', 'id_tipo_produto_aluminio', 'id_caracteristica_produto_aluminio', 'foto_1', 'foto_2', 'foto_3', 'foto_4', 'corte_1', 'corte_2', 'corte_3', 'ensaios_aluminio');
	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es', 'resultado_pt', 'resultado_en', 'resultado_fr', 'resultado_es', 'id_tipo_produto_aluminio');		
	$crud->field_type('descricao_pt', 'text')->field_type('descricao_en', 'text')->field_type('descricao_fr', 'text')->field_type('descricao_es', 'text')->field_type('resultado_pt', 'text')->field_type('resultado_en', 'text')->field_type('resultado_fr', 'text')->field_type('resultado_es', 'text');
	$crud->display_as('id_caracteristica_produto_aluminio', 'Caracteristica')->display_as('id_tipo_produto_aluminio', 'Tipo');
	//$crud->display_as('batente_oscilo_batente', 'Batente e oscilo-batente')->display_as('oscilo_paralela_projectante', 'Oscilo-paralela | Projectante')->display_as('pivotante_horizontal_harmonio', 'Pivotante Horizontal | Harmónio');

	$crud->set_field_upload('foto_1', 'assets/uploads/produtos')->set_field_upload('foto_2', 'assets/uploads/produtos')->set_field_upload('foto_3', 'assets/uploads/produtos')->set_field_upload('foto_4', 'assets/uploads/produtos');
	$crud->display_as('foto_1', 'Foto 1')->display_as('foto_2', 'Foto 2')->display_as('foto_3', 'Foto 3')->display_as('foto_4', 'Foto 4');

	$crud->set_field_upload('corte_1','assets/uploads/files')->set_field_upload('corte_2','assets/uploads/files')->set_field_upload('corte_3','assets/uploads/files');
	$crud->set_field_upload('pdf_1','assets/uploads/pdfs')->set_field_upload('pdf_2','assets/uploads/pdfs')->set_field_upload('pdf_3','assets/uploads/pdfs');
	$crud->display_as('corte_1','Corte 1')->display_as('corte_2','Corte 2')->display_as('corte_3','Corte 3');

	$crud->set_relation_n_n('ensaios_aluminio', 'ensaios_aluminio_produtos', 'ensaios_aluminio', 'produto_aluminio_id', 'ensaio_aluminio_id', 'nome_pt', 'priority');
	$crud->set_relation('id_tipo_produto_aluminio', 'tipos_produto_aluminio', 'nome_pt');
	$crud->set_relation('id_caracteristica_produto_aluminio', 'caracteristicas_produto_aluminio', 'nome_pt');

//$crud->change_field_type('tipo','enum', array('batente','aluminio madeira','correr','gradeamentos','fachada/quebra-sol','portadas','portões','standarts'));

	$output = $crud->render();

	$data['titulo'] = 'Produtos Aluminio';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Produtos Aluminio'; 

	$this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);

//$this->_example_output($output);

}

function produtos_extrusao_management()
{
	$crud = new grocery_CRUD();

//$crud->set_theme('flexigrid');
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

//$crud->change_field_type('tipo','enum', array('caixilharia','standards','correr','estores','diversos'));

	$crud->set_relation('id_tipo_produto_extrusao','tipos_produto_extrusao','nome_pt');
	$crud->set_relation('id_caracteristica_produto_extrusao','caracteristicas_produto_extrusao','nome_pt');
	$crud->set_relation_n_n('ensaios_extrusao', 'ensaios_extrusao_produtos', 'ensaios_extrusao', 'produto_extrusao_id', 'ensaio_extrusao_id', 'nome_pt','priority');

	$output = $crud->render();

	$data['titulo'] = 'Produtos Extrusao';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Produtos Extrusão'; 

	$this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);

//$this->_example_output($output);
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

//         	$this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files() , 'css_files' => $crud->get_css_files()));	

//        	$this->_admin_output($output);

// 	//$this->_example_output($output);
// }

function tipos_produto_aluminio_management()
{
	$crud = new grocery_CRUD();

//$crud->set_theme('flexigrid');
	$crud->set_table('tipos_produto_aluminio');
	$crud->set_subject('Tipos de Produto Aluminio');
	$crud->columns('nome_pt');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es');

	$output = $crud->render();

	$data['titulo'] = 'Tipos de Produto Aluminio';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Tipos de Produto de Aluminio'; 

	$this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);

//$this->_example_output($output);
}

function tipos_produto_extrusao_management()
{
	$crud = new grocery_CRUD();

//$crud->set_theme('flexigrid');
	$crud->set_table('tipos_produto_extrusao');
	$crud->set_subject('Tipos de Produto Extrusão');
	$crud->columns('nome_pt');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es');

	$output = $crud->render();

	$data['titulo'] = 'Tipos de Produto Extrusão';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Tipos de Produto Extrusão'; 

	$this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);

//$this->_example_output($output);
}

function caracteristicas_produto_aluminio_management()
{
	$crud = new grocery_CRUD();

//$crud->set_theme('flexigrid');
	$crud->set_table('caracteristicas_produto_aluminio');
	$crud->set_subject('Caracteristicas de Produto Aluminio');
	$crud->columns('nome_pt');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es');

	$output = $crud->render();

	$data['titulo'] = 'Caracteristicas de Produto Aluminio';  
	$data['sub-titulo'] = 'Faça aqui a gestão das Caracteristicas de Produto de Aluminio'; 

	$this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);

//$this->_example_output($output);
}

function caracteristicas_produto_extrusao_management()
{
	$crud = new grocery_CRUD();

//$crud->set_theme('flexigrid');
	$crud->set_table('caracteristicas_produto_extrusao');
	$crud->set_subject('Caracteristicas de Produto Extrusão');
	$crud->columns('nome_pt');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es');

	$output = $crud->render();

	$data['titulo'] = 'Caracteristicas de Produto Extrusão';  
	$data['sub-titulo'] = 'Faça aqui a gestão das Caracteristicas de Produto Extrusão'; 

	$this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);

//$this->_example_output($output);
}

function ensaios_aluminio_management()
{
	$crud = new grocery_CRUD();

//$crud->set_theme('flexigrid');
	$crud->set_table('ensaios_aluminio');
	$crud->set_subject('Ensaios de Produto Aluminio');
	$crud->columns('nome_pt', 'ensaio');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'ensaio');	
	$crud->set_field_upload('ensaio', 'assets/uploads/ensaios');

	$output = $crud->render();

	$data['titulo'] = 'Ensaios de Produto Aluminio';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Ensaios de Produto de Aluminio'; 

	$this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);

//$this->_example_output($output);
}

function ensaios_extrusao_management()
{
	$crud = new grocery_CRUD();

//$crud->set_theme('flexigrid');
	$crud->set_table('ensaios_extrusao');
	$crud->set_subject('Ensaios de Produto Extrusão');
	$crud->columns('nome_pt', 'ensaio');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'ensaio');	
	$crud->set_field_upload('ensaio', 'assets/uploads/ensaios');

	$output = $crud->render();

	$data['titulo'] = 'Ensaios de Produto Extrusão';  
	$data['sub-titulo'] = 'Faça aqui a gestão dos Ensaios de Produto Extrusão'; 

	$this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

	$this->_admin_output($output);

//$this->_example_output($output);
}

function servicos_extrusao_management()
{
	$crud = new grocery_CRUD();

//$crud->set_theme('flexigrid');
	$crud->set_table('servicos_extrusao');
	$crud->set_subject('Serviços Extrusão');
	$crud->columns('nome_pt', 'descricao_pt');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es');
	$crud->field_type('descricao_pt', 'text');	

/*$crud->set_field_upload('foto_1','assets/uploads/produtos');
$crud->set_field_upload('foto_2','assets/uploads/produtos');
$crud->set_field_upload('foto_3','assets/uploads/produtos');
$crud->set_field_upload('foto_4','assets/uploads/produtos');
$crud->display_as('foto_1','Foto 1')->display_as('foto_2','Foto 2')->display_as('foto_3','Foto 3')->display_as('foto_4','Foto 4');
*/

$output = $crud->render();

$data['titulo'] = 'Serviços Extrusão';  
$data['sub-titulo'] = 'Faça aqui a gestão dos Serviços de Extrusão'; 

$this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

$this->_admin_output($output);

//$this->_example_output($output);
}

function servicos_vidro_management()
{
	$crud = new grocery_CRUD();

//$crud->set_theme('flexigrid');
	$crud->set_table('servicos_vidro');
	$crud->set_subject('Serviços Vidro');
	$crud->columns('nome_pt', 'descricao_pt');

	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es');
	$crud->field_type('descricao_pt', 'text');	

/*$crud->set_field_upload('foto_1','assets/uploads/produtos');
$crud->set_field_upload('foto_2','assets/uploads/produtos');
$crud->set_field_upload('foto_3','assets/uploads/produtos');
$crud->set_field_upload('foto_4','assets/uploads/produtos');
$crud->display_as('foto_1','Foto 1')->display_as('foto_2','Foto 2')->display_as('foto_3','Foto 3')->display_as('foto_4','Foto 4');
*/

$output = $crud->render();

$data['titulo'] = 'Serviços Vidro';  
$data['sub-titulo'] = 'Faça aqui a gestão dos Serviços de Vidro'; 

$this->load->view('mediagest/header',(object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));	

$this->_admin_output($output);

//$this->_example_output($output);
}













/*public function employees_management()
{
$crud = new grocery_CRUD();

$crud->set_theme('datatables');
$crud->set_table('employees');
$crud->set_relation('officeCode','offices','city');
$crud->display_as('officeCode','Office City');
$crud->set_subject('Employee');

$crud->required_fields('lastName');

$crud->set_field_upload('file_url','assets/uploads/files');

$output = $crud->render();

$this->_example_output($output);
}

public function customers_management()
{
$crud = new grocery_CRUD();

$crud->set_table('customers');
$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
$crud->display_as('salesRepEmployeeNumber','from Employeer')
->display_as('customerName','Name')
->display_as('contactLastName','Last Name');
$crud->set_subject('Customer');
$crud->set_relation('salesRepEmployeeNumber','employees','lastName');

$output = $crud->render();

$this->_example_output($output);
}

public function orders_management()
{
$crud = new grocery_CRUD();

$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
$crud->display_as('customerNumber','Customer');
$crud->set_table('orders');
$crud->set_subject('Order');
$crud->unset_add();
$crud->unset_delete();

$output = $crud->render();

$this->_example_output($output);
}

public function products_management()
{
$crud = new grocery_CRUD();

$crud->set_table('products');
$crud->set_subject('Product');
$crud->unset_columns('productDescription');
$crud->callback_column('buyPrice',array($this,'valueToEuro'));

$output = $crud->render();

$this->_example_output($output);
}

public function valueToEuro($value, $row)
{
return $value.' &euro;';
}

public function film_management()
{
$crud = new grocery_CRUD();

$crud->set_table('film');
$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
$crud->unset_columns('special_features','description','actors');

$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

$output = $crud->render();

$this->_example_output($output);
}

public function film_management_twitter_bootstrap()
{
try{
$crud = new grocery_CRUD();

$crud->set_theme('twitter-bootstrap');
$crud->set_table('film');
$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
$crud->unset_columns('special_features','description','actors');

$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

$output = $crud->render();
$this->_example_output($output);

}catch(Exception $e){
show_error($e->getMessage().' --- '.$e->getTraceAsString());
}
}

function multigrids()
{
$this->config->load('grocery_crud');
$this->config->set_item('grocery_crud_dialog_forms',true);
$this->config->set_item('grocery_crud_default_per_page',10);

$output1 = $this->offices_management2();

$output2 = $this->employees_management2();

$output3 = $this->customers_management2();

$js_files = $output1->js_files + $output2->js_files + $output3->js_files;
$css_files = $output1->css_files + $output2->css_files + $output3->css_files;
$output = "<h1>List 1</h1>".$output1->output."<h1>List 2</h1>".$output2->output."<h1>List 3</h1>".$output3->output;

$this->_example_output((object)array(
'js_files' => $js_files,
'css_files' => $css_files,
'output'	=> $output
));
}

public function offices_management2()
{
$crud = new grocery_CRUD();
$crud->set_table('offices');
$crud->set_subject('Office');

$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

$output = $crud->render();

if($crud->getState() != 'list') {
$this->_example_output($output);
} else {
return $output;
}
}

public function employees_management2()
{
$crud = new grocery_CRUD();

$crud->set_theme('datatables');
$crud->set_table('employees');
$crud->set_relation('officeCode','offices','city');
$crud->display_as('officeCode','Office City');
$crud->set_subject('Employee');

$crud->required_fields('lastName');

$crud->set_field_upload('file_url','assets/uploads/files');

$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

$output = $crud->render();

if($crud->getState() != 'list') {
$this->_example_output($output);
} else {
return $output;
}
}

public function customers_management2()
{

$crud = new grocery_CRUD();

$crud->set_table('customers');
$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
$crud->display_as('salesRepEmployeeNumber','from Employeer')
->display_as('customerName','Name')
->display_as('contactLastName','Last Name');
$crud->set_subject('Customer');
$crud->set_relation('salesRepEmployeeNumber','employees','lastName');

$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

$output = $crud->render();

if($crud->getState() != 'list') {
$this->_example_output($output);
} else {
return $output;
}
}*/


}