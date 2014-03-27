<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

/**
* Index Page for this controller.
*
* Maps to the following URL
* 		http://example.com/index.php/welcome
*	- or -  
* 		http://example.com/index.php/welcome/index
*	- or -
* Since this controller is set as the default controller in 
* config/routes.php, it's displayed at http://example.com/
*
* So any other public methods not prefixed with an underscore will
* map to /index.php/welcome/<method_name>
* @see http://codeigniter.com/user_guide/general/urls.html
*/

function __construct()
{
	parent::__construct();

	// you might want to just autoload these two helpers
	$this->load->helper('language');
	$this->load->helper('url');
	$this->load->helper('text');

	$this->lang->load('cizacl');

	$this->load->model('company_model');
	$this->load->model('product_model');
	$this->load->model('apoio_cliente_model');
}

public function get_lang() 
{
	return $this->lang->lang();
}

public function index()
{
	$this->home();        
}

public function home()
{
	//$data['title'] = lang('indelague.home');
	$data['current'] = 'home';

	$this->load->view('templates/carousel_caixilharia', $this->get_lang());
	$this->load->view('pages/caixilharia', $data);
	$this->load->view('templates/footer');
}

public function home_caixilharia()
{
    $data['page_style']= "caixilharia";
	$data['current'] = 'home_caixilharia';
	$data['galeria_obra'] = $this->company_model->get_galeria_obra(3);
	$this->menu_produtos($data);

	$this->load->view('pages/caixilharia', $data);
	$this->load->view('templates/footer');
}

public function home_vidro()
{
    $data['page_style']= "vidro";
	$data['current'] = 'home_vidro';

	$this->load->view('templates/header', $data);
	$this->load->view('templates/carousel_vidro');
	$this->load->view('pages/vidro', $data);
	$this->load->view('templates/footer');
}

public function home_extrusao()
{
    $data['page_style']= "extrusao";
	$data['current'] = 'home_extrusao';

    $this->load->view('templates/header', $data);
	$this->load->view('templates/carousel_extrusao');
	$this->load->view('pages/extrusao', $data);
	$this->load->view('templates/footer');
}

public function home_tratamento()
{
    $data['page_style']= "tratamento";
	$data['current'] = 'home_tratamento';

    $this->load->view('templates/header', $data);
	$this->load->view('templates/carousel_tratamento');
	$this->load->view('pages/tratamento', $data);
	$this->load->view('templates/footer');
}

public function portfolio_caixilharia($id=null)
{
    $data['page_style']= "caixilharia";
	$data['id'] = $id;
	//$data['title'] = lang('indelague.home');
	$data['current'] = 'portfolio_caixilharia';
	$this->menu_produtos($data);

	if($id != null){
		$data['obra'] = $this->company_model->get_obra($id);
		$data['galeria_obra'] = $this->company_model->get_galeria_obra($id);
		$data['produtos_aluminio_obra'] = $this->company_model->get_produtos_aluminio_obra($id);

		$this->load->view('pages/portfolio', $data, $this->get_lang());
	}
	else{
		$data['obras'] = $this->company_model->get_obras();

		$this->load->view('pages/portfolio_list', $data, $this->get_lang());
	}

	$this->load->view('templates/footer');
}

public function produto_caixilharia($id=null)
{
    $data['page_style']= "caixilharia";
	$data['id'] = $id;
	//$data['title'] = lang('indelague.home');
	$data['current'] = 'produto_caixilharia';
	$this->menu_produtos($data);

	if ($id != null) {
		$data['caracteristicas'] = $this->product_model->get_caracteristicas_produto_aluminio($id);

		$produto;

		if (!empty($data['caracteristicas'])) {
			$produto = $this->product_model->get_produto_aluminio_com_caracteristica($id, $this->lang->lang());
		} else {
			$produto = $this->product_model->get_produto_aluminio_sem_caracteristica($id, $this->lang->lang());
		}

		$data['produto'] = $produto;
		$data['ensaios'] = $this->product_model->get_ensaios($id, $this->lang->lang());
		$data['obras'] = $this->product_model->get_obras($id, $this->lang->lang());

		$this->load->view('pages/produto', $data, $this->get_lang());
	} else {
		$this->load->view('pages/produto', $data, $this->get_lang());
	}

	$this->load->view('templates/footer');
}

public function produtos_list($id_tipo_produto_aluminio=null)
{
    $data['page_style']= "caixilharia";
	//$data['title'] = lang('indelague.home');
	$data['current'] = 'produtos_list';
	$this->menu_produtos($data);

	if ($id_tipo_produto_aluminio != null) {
		$data['caracteristicas'] = $this->product_model->get_caracteristicas_produtos_aluminio($id_tipo_produto_aluminio);
		$data['tipo'] = $this->product_model->get_tipo_produtos_aluminio($id_tipo_produto_aluminio);
		
		if (!empty($data['caracteristicas'])) {
			$produtos;

			foreach ($data['caracteristicas'] as $caracteristica) {
				$produtos[$caracteristica['nome_pt']] = $this->product_model->get_produtos_aluminio($id_tipo_produto_aluminio, $caracteristica['id_caracteristica_produto_aluminio']);
			}

			$data['produtos'] = $produtos;

			$this->load->view('pages/produtos_com_caracteristicas', $data, $this->get_lang());
			
		} else {
			$data['produtos'] = $this->product_model->get_produtos_aluminio_tipo($id_tipo_produto_aluminio);			

			$this->load->view('pages/produtos_sem_caracteristicas', $data, $this->get_lang());
		}
	}
	else {
		$data['tipos'] = $this->product_model->get_tipos_produtos_aluminio();

		$this->load->view('pages/produtos_list', $data);
	}

	$this->load->view('templates/footer');
}

public function menu_produtos($data) {
	$data['batentes_com_corte'] = $this->product_model->get_batentes_com_corte($this->get_lang());
	$data['batentes_sem_corte'] = $this->product_model->get_batentes_sem_corte($this->get_lang());
	$data['aluminios_madeira'] = $this->product_model->get_aluminios_madeira($this->get_lang());
	$data['correres_com_corte'] = $this->product_model->get_correres_com_corte($this->get_lang());
	$data['correres_sem_corte'] = $this->product_model->get_correres_sem_corte($this->get_lang());
	$data['gradeamentos'] = $this->product_model->get_gradeamentos($this->get_lang());
	$data['fachadas'] = $this->product_model->get_fachadas($this->get_lang());
	$data['portadas'] = $this->product_model->get_portadas($this->get_lang());
	$data['portoes'] = $this->product_model->get_portoes($this->get_lang());
	$data['standards'] = $this->product_model->get_standards($this->get_lang());
	$data['guilhotinas'] = $this->product_model->get_guilhotinas($this->get_lang());
	$data['resguardos'] = $this->product_model->get_resguardos($this->get_lang());

	$this->load->view('templates/header', $data, $this->get_lang());
}

public function contactos_caixilharia()
{
    $data['page_style']= "caixilharia";
	//$data['title'] = lang('indelague.home');
	$data['current'] = 'contactos_caixilharia';
	$this->menu_produtos($data);

	//$this->load->view('templates/header_caixilharia', $data);
	$this->load->view('pages/contactos');
	$this->load->view('templates/footer');
}

public function apoio_cliente($page=null) 
{
    $data['page_style']= "caixilharia";
	$data['page'] = $page;
	//$data['title'] = lang('indelague.home');
	$data['current'] = 'apoio_cliente';
	$this->menu_produtos($data);

	if ($page != null) {
		$data['page'] = $this->apoio_cliente_model->get_page($page);

		$this->load->view('pages/apoio_cliente', $data);
	} else {
		$this->load->view('pages/apoio_cliente', $data);
	}

	$this->load->view('templates/footer');
}

public function apoio_cliente_list() 
{
    $data['page_style']= "caixilharia";
	//$data['title'] = lang('indelague.home');
	$data['current'] = 'apoio_cliente_list';
	$this->menu_produtos($data);

	$paginas;
	$y=0;

	for ($i=7; $i < 13; $i++) { 
		$paginas[$y] = $this->apoio_cliente_model->get_pages($i);
		$y++;
	}	

	$data['pages'] = $paginas;

	$this->load->view('pages/apoio_cliente_list', $data);
	$this->load->view('templates/footer');
}

public function candidaturas()
{
    $data['page_style']= "caixilharia";
	$data['current'] = 'candidaturas';
	$this->menu_produtos($data);

	$this->load->view('pages/candidatura', $data);
	$this->load->view('templates/footer');
}

public function quem_somos($page=null)
{
    $data['page_style']= "caixilharia";
	$data['page'] = $page;
	//$data['title'] = lang('indelague.home');
	$data['current'] = 'quem_somos';
	$this->menu_produtos($data);

	if ($page != null) {
		$data['page'] = $this->apoio_cliente_model->get_page($page);

		$this->load->view('pages/quem_somos', $data);
	} else {
		$this->load->view('pages/quem_somos', $data);
	}

	$this->load->view('templates/footer');
}

public function instaladores()
{
    $data['page_style']= "caixilharia";
    $data['current'] = 'instaladores';
    $this->menu_produtos($data);

    $this->load->view('pages/instaladores', $data);
    $this->load->view('templates/footer');
}


/* public function empresa($pagina = 'historia')
{
//if(isset($tipo))
$result = $this->company_model->gest_page($pagina);
//else
//	$result = $this->company_model->gest_page($tipo);
$data['news'] = $this->news_model->get_news();

$data['gest_page'] = $result[0];

$data['title'] = lang('gestinfor.company');
$data['current'] = 'company';

$this->load->view('templates/header', $data);
$this->load->view('templates/nav', $data);
$this->load->view('templates/sidebar', $data);
$this->load->view('empresa');
$this->load->view('templates/footer', $data);	
}

public function gestinfor($pagina = 'catalogos')
{
//if(isset($tipo))
$result = $this->company_model->gest_page($pagina);
//else
//	$result = $this->company_model->gest_page($tipo);
$data['news'] = $this->news_model->get_news();

$data['gest_page'] = $result[0];

$data['title'] = lang('gestinfor.company');
$data['current'] = 'company';

$this->load->view('templates/header', $data);
$this->load->view('templates/nav', $data);
$this->load->view('templates/sidebar', $data);
$this->load->view('gestinfor');
$this->load->view('templates/footer', $data);	
}

public function areas_actuacao()
{

$result = $this->company_model->gest_page('2');
$data['news'] = $this->news_model->get_news();

// vai buscar lista de produtos ou detalhe
$data['gest_page'] = $result[0];

$data['title'] = lang('gestinfor.areas-actuacao');
$data['current'] = 'areas-actuacao';

$this->load->view('templates/header', $data);
$this->load->view('templates/nav', $data);
$this->load->view('templates/sidebar', $data);
$this->load->view('generic-page');
$this->load->view('templates/footer', $data);	
}

public function formacao($idForm = FALSE, $idForm_detalhes = FALSE)
{
$result = $this->company_model->gest_page('1');
$data['news'] = $this->news_model->get_news();
if($idForm != FALSE && $idForm_detalhes == FALSE)
$data['formacao'] = $this->formacao_model->get_formacao($idForm,$this->lang->lang());
elseif($idForm_detalhes != FALSE)
$data['detalhe'] = $this->formacao_model->get_detalhes($idForm_detalhes,$this->lang->lang());
else
$data['formacoes'] = $this->home_model->get_formacoes($this->lang->lang());
//$data['gest_page'] = $result[0];

$data['title'] = lang('gestinfor.company');
$data['current'] = 'formacao';

$this->load->view('templates/header', $data);
$this->load->view('templates/nav', $data);
$this->load->view('templates/sidebar', $data);
$this->load->view('formacao');
$this->load->view('templates/footer', $data);	
}

public function emprego()
{
//Form
$this->load->helper(array('form', 'url'));
$this->load->library('form_validation');
$this->form_validation->set_rules('nome', 'Nome', 'required|min_length[5]|max_length[12]');
$this->form_validation->set_rules('telefone', 'Telefone', 'required|is_natural|min_length[6]|max_length[14]');
$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
$this->form_validation->set_rules('cv','Curriculum','required');
//ENDS Form
$result = $this->company_model->gest_page('1');
$data['news'] = $this->news_model->get_news();

// vai buscar lista de produtos ou detalhe
//$data['gest_page'] = $result[0];

$data['title'] = lang('gestinfor.emprego');
$data['current'] = 'emprego';

$this->load->view('templates/header', $data);
$this->load->view('templates/nav', $data);
$this->load->view('templates/sidebar', $data);
$this->load->view('emprego');
$this->load->view('templates/footer', $data);	
}

public function enviar_curriculum()
{
//Form
//$this->load->helper(array('form', 'url'));
//$this->load->library('form_validation');
//$this->form_validation->set_rules('nome', 'Nome', 'required|min_length[5]|max_length[12]');
//$this->form_validation->set_rules('telefone', 'Telefone', 'required|is_natural|min_length[6]|max_length[14]');
//$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
//$this->form_validation->set_rules('cv','Curriculum','required');
//ENDS Form
$result = $this->company_model->gest_page('1');
$data['news'] = $this->news_model->get_news();

// vai buscar lista de produtos ou detalhe
//$data['gest_page'] = $result[0];

$data['title'] = lang('gestinfor.emprego');
$data['current'] = 'emprego';
$data['message'] = '';
$data['reset'] = FALSE;
$this->load->view('templates/header', $data);
$this->load->view('templates/nav', $data);
$this->load->view('templates/sidebar', $data);
$this->load->view('enviar-curriculum',$data);
$this->load->view('templates/footer', $data);	
}

public function send_curriculum()
{
//Form
//$this->load->helper(array('form', 'url'));
$this->load->library('form_validation');
$this->form_validation->set_rules('nome', 'Nome', 'required|min_length[5]|max_length[12]');
$this->form_validation->set_rules('morada', 'Morada', 'max_length[50]');
$this->form_validation->set_rules('pais', 'Pais', 'required');
$this->form_validation->set_rules('data_nasc', 'Data_Nasc', 'max_length[12]');
$this->form_validation->set_rules('sexo', 'Sexo', 'required');
$this->form_validation->set_rules('estado_civil', 'Estado_Civil', 'required');
$this->form_validation->set_rules('telefone', 'Telefone', 'required|is_natural|min_length[6]|max_length[14]');
$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
$this->form_validation->set_rules('fax', 'Fax', 'is_natural|min_length[6]|max_length[14]');
$this->form_validation->set_rules('curso', 'Curso', 'max_length[50]');
$this->form_validation->set_rules('nivel', 'Nivel', 'max_length[50]');
$this->form_validation->set_rules('formacao', 'Formacao', 'max_length[50]');
$this->form_validation->set_rules('experiencia', 'Experiencia', 'max_length[50]');
$this->form_validation->set_rules('profissao', 'Profissao', 'max_length[50]');
$this->form_validation->set_rules('empresa', 'Empresa', 'max_length[50]');
$this->form_validation->set_rules('idiomas', 'Idiomas', 'max_length[50]');
$this->form_validation->set_rules('cv','Curriculum','required');
//ENDS Form
$result = $this->company_model->gest_page('1');
$data['news'] = $this->news_model->get_news();

// vai buscar lista de produtos ou detalhe
//$data['gest_page'] = $result[0];
$data['title'] = lang('gestinfor.emprego');
$data['current'] = 'emprego';
if($this->form_validation->run() == FALSE){
$data['message'] = '';
$data['reset'] = FALSE;
$this->load->view('templates/header', $data);
$this->load->view('templates/nav', $data);
$this->load->view('templates/sidebar', $data);
$this->load->view('enviar-curriculum');
$this->load->view('templates/footer', $data);
}
else{
//$data['message'] = 'O seu Pedido foi enviado com sucesso';
$data['reset'] = TRUE;
// Load the rest client spark
$this->load->spark('restclient/2.1.0');

// Load the library
$this->load->library('rest');

// Set config options (only 'server' is required to work)

$config = array('server'            => 'http://62.28.251.194:8081/api/',
//'api_key'         => 'Setec_Astronomy'
//'api_name'        => 'X-API-KEY'
//'http_user'       => 'username',
//'http_pass'       => 'password',
//'http_auth'       => 'basic',
//'ssl_verify_peer' => TRUE,
//'ssl_cainfo'      => '/certs/cert.pem'
);

// Run some setup
$this->rest->initialize($config);

///// Teste GET //////
/*$valor = $this->rest->get('/Cursos/GetCurso?codcurso=10010000100010');
print_r($valor);*/

///// Teste POST /////

/*$result = $this->rest->post('/PedidosContacto/setNovoPedidoDeContacto', 
array('ClienteNome' => set_value('nome'),
'ClienteEmail' => set_value('email'),
'ClienteTelefone' => set_value('tel'),
'ClienteDataNasc' => set_value('data_nasc'),
'ClienteSexo' => set_value('sexo'),
'CodigosCurso' => $_POST['curso'],
'Descricao' => set_value('descricao') ),
'json');

echo '<pre>';
if(isset($result->Valido) && $result->Valido == true)  
{
print_r($result);
echo $data['message'] ='O seu Curriculum foi enviado com sucesso';  

}     
else  
{
print_r($result);
echo $data['message'] ='Erro';  

} 
echo '</pre>';
// Rest Debug
$this->rest->debug();

$this->load->view('templates/header', $data);
$this->load->view('templates/nav', $data);
$this->load->view('templates/sidebar', $data);
$this->load->view('enviar-curriculum',$data);
$this->load->view('templates/footer', $data);

}

}

public function pedido_informacao()
{
//Form
$this->load->helper(array('form', 'url'));
$this->load->library('form_validation');
$this->form_validation->set_rules('nome', 'Nome', 'required|min_length[5]|max_length[12]');
$this->form_validation->set_rules('telefone', 'Telefone', 'required|is_natural|min_length[6]|max_length[14]');
$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
//ENDS Form
$result = $this->company_model->gest_page('1');
$data['cursos'] = $this->company_model->get_cursos($this->lang->lang());
$data['news'] = $this->news_model->get_news();
// vai buscar lista de produtos ou detalhe
//$data['gest_page'] = $result[0];

$data['title'] = lang('gestinfor.cursos');
$data['current'] = 'cursos';
$data['message'] = '';
$data['reset'] = FALSE;
$this->load->view('templates/header', $data);
$this->load->view('templates/nav', $data);
$this->load->view('templates/sidebar', $data);
$this->load->view('pedido-informacao');
$this->load->view('templates/footer', $data);	
}

public function send_pedido_informacao()
{
//Form
//$this->load->helper(array('form', 'url'));
$this->load->library('form_validation');
$this->form_validation->set_rules('nome', 'Nome', 'required|min_length[5]|max_length[12]');
$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
$this->form_validation->set_rules('tel', 'Telefone', 'required|is_natural|min_length[6]|max_length[14]');
$this->form_validation->set_rules('data_nasc', 'Data de Nascimento', 'required|min_length[5]|max_length[12]');
$this->form_validation->set_rules('sexo', 'Sexo', 'required');
$this->form_validation->set_rules('curso[]', 'Curso', 'required');
$this->form_validation->set_rules('descricao','Descricao','required');
//ENDS Form
$result = $this->company_model->gest_page('1');
$data['cursos'] = $this->company_model->get_cursos($this->lang->lang());
$data['news'] = $this->news_model->get_news();

// vai buscar lista de produtos ou detalhe
//$data['gest_page'] = $result[0];
$data['title'] = lang('gestinfor.emprego');
$data['current'] = 'emprego';
if($this->form_validation->run() == FALSE){
$data['message'] = '';
$data['reset'] = FALSE;
$this->load->view('templates/header', $data);
$this->load->view('templates/nav', $data);
$this->load->view('templates/sidebar', $data);
$this->load->view('pedido-informacao');
$this->load->view('templates/footer', $data);

/*print_r(array('ClienteNome' => set_value('nome'),
'ClienteEmail' => set_value('email'),
'ClienteTelefone' => set_value('tel'),
'ClienteDataNasc' => set_value('data_nasc'),
'ClienteSexo' => set_value('sexo'),
'CodigosCurso' => $_POST['curso'],
'Descricao' => set_value('descricao')));*/
/*	
}
else{
//$data['message'] = 'O seu Pedido foi enviado com sucesso';
$data['reset'] = TRUE;
// Load the rest client spark
$this->load->spark('restclient/2.1.0');

// Load the library
$this->load->library('rest');

// Set config options (only 'server' is required to work)

$config = array('server'            => 'http://62.28.251.194:8081/api/',
//'api_key'         => 'Setec_Astronomy'
//'api_name'        => 'X-API-KEY'
//'http_user'       => 'username',
//'http_pass'       => 'password',
//'http_auth'       => 'basic',
//'ssl_verify_peer' => TRUE,
//'ssl_cainfo'      => '/certs/cert.pem'
);

// Run some setup
$this->rest->initialize($config);

///// Teste GET //////
/*$valor = $this->rest->get('/Cursos/GetCurso?codcurso=10010000100010');
print_r($valor);*/

///// Teste POST /////
/*	
$result = $this->rest->post('/PedidosContacto/setNovoPedidoDeContacto', 
array('ClienteNome' => set_value('nome'),
'ClienteEmail' => set_value('email'),
'ClienteTelefone' => set_value('tel'),
'ClienteDataNasc' => set_value('data_nasc'),
'ClienteSexo' => set_value('sexo'),
'CodigosCurso' => $_POST['curso'],
'Descricao' => set_value('descricao') ),
'json');

echo '<pre>';
if(isset($result->Valido) && $result->Valido == true)  
{
print_r($result);
echo $data['message'] ='O seu Pedido foi enviado com sucesso';  

}     
else  
{
print_r($result);
echo $data['message'] ='Erro';  

} 
echo '</pre>';
// Rest Debug
$this->rest->debug();

$this->load->view('templates/header', $data);
$this->load->view('templates/nav', $data);
$this->load->view('templates/sidebar', $data);
$this->load->view('pedido-informacao',$data);
$this->load->view('templates/footer', $data);
}

}

public function news($pagina=null)
{
//$result = $this->company_model->gest_page('1');
$data['news'] = $this->news_model->get_news();

// vai buscar lista de produtos ou detalhe
//$data['gest_page'] = $result[0];

$data['title'] = lang('gestinfor.news');
$data['current'] = 'news';

$this->load->view('templates/header', $data);
$this->load->view('templates/nav', $data);
$this->load->view('templates/sidebar', $data);

if($pagina != null){
$data['new'] = $this->news_model->get_new($pagina,$this->lang->lang());
$this->load->view('new',$data);
}
else{
$this->load->view('news');
}

$this->load->view('templates/footer', $data);	
}

public function contactos($pagina = 'contactos')
{

$result = $this->company_model->gest_page($pagina);
$data['news'] = $this->news_model->get_news();

// vai buscar lista de produtos ou detalhe
//$data['gest_page'] = $result[0];

$data['title'] = lang('gestinfor.contacts');
$data['current'] = 'contactos';
$data['message'] = '';
$data['reset'] = FALSE;

$this->load->view('templates/header', $data);
$this->load->view('templates/nav', $data);
$this->load->view('templates/sidebar', $data);
$this->load->view('contactos');
$this->load->view('templates/footer', $data);	
}

public function send_contactos($pagina = 'contactos')
{
$this->load->library('form_validation');
$this->form_validation->set_rules('imprensa', 'Imprensa', 'trim');
$this->form_validation->set_rules('internet', 'Internet', 'trim');
$this->form_validation->set_rules('feira', 'Feira', 'trim');
$this->form_validation->set_rules('outra', 'Outra', 'trim');
$this->form_validation->set_rules('outro', 'Outro', 'max_length[50]');
$this->form_validation->set_rules('nome', 'Nome', 'required|min_length[5]|max_length[50]');
$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
$this->form_validation->set_rules('mensagem', 'Mensagem', 'required|max_length[100]');


$result = $this->company_model->gest_page($pagina);
$data['news'] = $this->news_model->get_news();

// vai buscar lista de produtos ou detalhe
//$data['gest_page'] = $result[0];

$data['title'] = lang('gestinfor.contacts');
$data['current'] = 'contactos';

if($this->form_validation->run() == FALSE){
$data['message'] = '';
$data['reset'] = FALSE;
$this->load->view('templates/header', $data);
$this->load->view('templates/nav', $data);
$this->load->view('templates/sidebar', $data);
$this->load->view('contactos');
$this->load->view('templates/footer', $data);
}
else{
$data['message'] = 'O Formulario foi enviado com sucesso';
$data['reset'] = TRUE;
//Enviar email
$this->load->library('email');
$config = array('useragent'        => 'CodeIgniter',        
'protocol'         => 'mail',        
'mailpath'         => '/usr/sbin/sendmail',
'smtp_host'        => 'smtp.gmail.com',
'smtp_user'        => 'rj.leiria@gmail.com',
'smtp_pass'        => '',
'smtp_port'        => 25,
'smtp_timeout'     => 5,
'wordwrap'         => TRUE,
'wrapchars'        => 76,
'mailtype'         => 'html',
'charset'          => 'utf-8',
'validate'         => FALSE,
'priority'         => 3,
//'crlf'             => "\r\n",
//'newline'          => "\r\n",
'bcc_batch_mode'   => FALSE,
'bcc_batch_size'   => 200
);

// Run some setup
$this->email->initialize($config);
$this->email->from('rj.leiria@gmail.com');
$this->email->to('rj.leiria@gmail.com');
$this->email->subject('Envio de Sugestão');
$this->email->message('Envio de Sugestão<br><br>Como teve conhecimento do nosso site?<br><br>Imprensa: '.set_value('imprensa').'<br>Internet: '.set_value('internet').'<br>Feira: '.set_value('feira').'<br>Por Outra Pessoa: '.set_value('outra').'<br>Outro: '.set_value('outro').'<br><br>Para melhor o satisfazermos queira deixar a sua sugestão:<br><br> Nome: '.set_value('nome').'<br>Email: '.set_value('email').'<br>Mensagem: '.set_value('mensagem'));
//$this->email->attach(set_value('cv'));
$this->email->send();

// Debug Email
echo $this->email->print_debugger();

$this->load->view('templates/header', $data);
$this->load->view('templates/nav', $data);
$this->load->view('templates/sidebar', $data);
$this->load->view('contactos');
$this->load->view('templates/footer', $data);
}
}

public function teste_connect()
{
$this->load->spark('restclient/2.1.0');

// Load the library
$this->load->library('rest');

// Set config options (only 'server' is required to work)

$config = array('server'            => 'http://localhost:8080/index.php/pt/api/',
//'api_key'         => 'Setec_Astronomy'
//'api_name'        => 'X-API-KEY'
//'http_user'       => 'username',
//'http_pass'       => 'password',
//'http_auth'       => 'basic',
//'ssl_verify_peer' => TRUE,
//'ssl_cainfo'      => '/certs/cert.pem'
);

// Run some setup
$this->rest->initialize($config);

///// Teste GET //////
/*$valor = $this->rest->get('/Cursos/GetCurso?codcurso=10010000100010');
print_r($valor);*/

///// Teste POST /////
/*
$result = $this->rest->post('setbanner/user/id/1', 
array(
'Ativo' => '1',
'Importancia' => '1',
'vagasVisiveis' => '1',
'nrVagas' => '1',
'TipoBanner' => '1',
'idTurma' => '1',
'idOfertaEmprego' => '1',
'idBannerPersonalizado' => '1'),
'json');

echo '<pre>';
if(isset($result->Valido) && $result->Valido == true)  
{
print_r($result);
echo $data['message'] ='O seu Pedido foi enviado com sucesso';  

}     
else  
{
print_r($result);
echo $data['message'] ='Erro';  

} 
echo '</pre>';
// Rest Debug
$this->rest->debug();
}

/////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////TESTES REST CLIENT-SERVER//////////////////////////////////// 	
/////////////////////////////////////////////////////////////////////////////////////////////////	

public function teste_connect_banner()
{
$this->load->spark('restclient/2.1.0');

// Load the library
$this->load->library('rest');

// Set config options (only 'server' is required to work)

$config = array('server'            => 'http://localhost:8080/pt/api/',
//'api_key'         => 'Setec_Astronomy'
//'api_name'        => 'X-API-KEY'
//'http_user'       => 'username',
//'http_pass'       => 'password',
//'http_auth'       => 'basic',
//'ssl_verify_peer' => TRUE,
//'ssl_cainfo'      => '/certs/cert.pem'
);

// Run some setup
$this->rest->initialize($config);

$result = $this->rest->put('banner/setBanner', 
array(
'idBanner' => '5',
'Ativo' => '1',
'Importancia' => '1',
'vagasVisiveis' => '1',
'nrVagas' => '1',
'TipoBanner' => '1',
'idTurma' => '1',
'idOfertaEmprego' => '1',
'idBannerPersonalizado' => '1'),
'json');

echo '<pre>';
if(isset($result->Valido) && $result->Valido == true)  
{
//print_r($result);
echo $data['message'] ='O seu Pedido foi enviado com sucesso';  

}     
else  
{
//print_r($result);
echo $data['message'] ='Erro';  

} 
echo '</pre>';
// Rest Debug
$this->rest->debug();
}

public function teste_connect_imagem()
{
$this->load->spark('restclient/2.1.0');

// Load the library
$this->load->library('rest');

// Set config options (only 'server' is required to work)

$config = array('server'            => 'http://localhost:8080/pt/api/',
//'api_key'         => 'Setec_Astronomy'
//'api_name'        => 'X-API-KEY'
//'http_user'       => 'username',
//'http_pass'       => 'password',
//'http_auth'       => 'basic',
//'ssl_verify_peer' => TRUE,
//'ssl_cainfo'      => '/certs/cert.pem'
);

// Run some setup
$this->rest->initialize($config);

$result = $this->rest->put('imagem/setImagem', 
array(
'idImagem' => '1',
'FileName' => 'teste'),
'json');

echo '<pre>';
if(isset($result->Valido) && $result->Valido == true)  
{
//print_r($result);
echo $data['message'] ='O seu Pedido foi enviado com sucesso';  

}     
else  
{
//print_r($result);
echo $data['message'] ='Erro';  

} 
echo '</pre>';
// Rest Debug
$this->rest->debug();
}


public function teste_connect_bannerPersonalizado()
{
$this->load->spark('restclient/2.1.0');

// Load the library
$this->load->library('rest');

// Set config options (only 'server' is required to work)

$config = array('server'            => 'http://localhost:8080/pt/api/',
//'api_key'         => 'Setec_Astronomy'
//'api_name'        => 'X-API-KEY'
//'http_user'       => 'username',
//'http_pass'       => 'password',
//'http_auth'       => 'basic',
//'ssl_verify_peer' => TRUE,
//'ssl_cainfo'      => '/certs/cert.pem'
);

// Run some setup
$this->rest->initialize($config);

$result = $this->rest->put('banner/setBannerPersonalizado', 
array(
'idBannerPersonalizado' => '2',
'Titulo' => 'teste',
'Corpo' => 'teste',
'idImagem' => '1'),
'json');

echo '<pre>';
if(isset($result->Valido) && $result->Valido == true)  
{
//print_r($result);
echo $data['message'] ='O seu Pedido foi enviado com sucesso';  

}     
else  
{
//print_r($result);
echo $data['message'] ='Erro';  

} 
echo '</pre>';
// Rest Debug
$this->rest->debug();
}

public function teste_connect_turmacomagendamento()
{
$this->load->spark('restclient/2.1.0');

// Load the library
$this->load->library('rest');

// Set config options (only 'server' is required to work)

$config = array('server'            => 'http://localhost:8080/pt/api/',
//'api_key'         => 'Setec_Astronomy'
//'api_name'        => 'X-API-KEY'
//'http_user'       => 'username',
//'http_pass'       => 'password',
//'http_auth'       => 'basic',
//'ssl_verify_peer' => TRUE,
//'ssl_cainfo'      => '/certs/cert.pem'
);

// Run some setup
$this->rest->initialize($config);

$result = $this->rest->put('turma/setTurmaComAgendamento', 
array(
'idTurma' => '2',
'DataInicio' => '2014-01-02',
'DataFim' => '2014-01-02',
'CodCurso' => '11'),
'json');

echo '<pre>';
if(isset($result->Valido) && $result->Valido == true)  
{
//print_r($result);
echo $data['message'] ='O seu Pedido foi enviado com sucesso';  

}     
else  
{
//print_r($result);
echo $data['message'] ='Erro';  

} 
echo '</pre>';
// Rest Debug
$this->rest->debug();
}

public function teste_connect_ofertaEmprego()
{
$this->load->spark('restclient/2.1.0');

// Load the library
$this->load->library('rest');

// Set config options (only 'server' is required to work)

$config = array('server'            => 'http://localhost:8080/pt/api/',
//'api_key'         => 'Setec_Astronomy'
//'api_name'        => 'X-API-KEY'
//'http_user'       => 'username',
//'http_pass'       => 'password',
//'http_auth'       => 'basic',
//'ssl_verify_peer' => TRUE,
//'ssl_cainfo'      => '/certs/cert.pem'
);

// Run some setup
$this->rest->initialize($config);

$result = $this->rest->put('emprego/setOfertaEmprego', 
array(
'idOfertaEmprego' => '2',
'Referencia' => '1',
'Descricao' => 'teste',
'Requisitos' => 'teste2',
'Perfil' => 'teste',
'Cargo' => 'teste',
'Entidade' => 'teste2',
'Localidade' => 'teste',
'Regimes' => 'teste',
'DataDisponibilizacao' => '2014-01-02',
'DataFimDisponibilizacao' => '2014-01-02'),
'json');

echo '<pre>';
if(isset($result->Valido) && $result->Valido == true)  
{
//print_r($result);
echo $data['message'] ='O seu Pedido foi enviado com sucesso';  

}     
else  
{
//print_r($result);
echo $data['message'] ='Erro';  

} 
echo '</pre>';
// Rest Debug
$this->rest->debug();
}

/////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////FIM TESTES REST CLIENT-SERVER//////////////////////////////////// 
/////////////////////////////////////////////////////////////////////////////////////////////////////



public function webservice()
{		
$context  = stream_context_create(array('http' => array('header' => 'Accept: application/xml')));
$url = 'http://62.28.251.194:8081/api/Cursos/GetCursosCompletos?incluirFamilias=1';
$xml = file_get_contents($url, false, $context);
$xml = simplexml_load_string($xml);
//print_r($xml);

//Load do Ficheiro -- Pré-solução
//$xml2 = simplexml_load_file('http://gestinforcatalogo.com/GetCursosCompletos.xml');
$resultado = $this->xml2mysql->cp_cursos($xml);
if ($resultado)
echo "Dados inseridos com sucesso</br>";
else
echo "ERRO</br>";
/*
//$host = '185.11.164.16';
//$user = json_decode(file_get_contents('http://62.28.251.194:8081/api/Cursos/GetCurso?codcurso=10010000100010')); 
//$user ='testes2';
------------*/
/*$url = curl_init('http://62.28.251.194:8081/api/Cursos/GetCurso?codcurso=10');
$content = curl_exec($url);
curl_close($url);*/
//simplexml_load_file($content);
//echo(json_decode($content));
//var_dump($user);
/*$url = curl_init('http://62.28.251.194:8081/api/Cursos/GetCurso?codcurso=10010000100020');
$content = curl_exec($url);
curl_close($url);
echo($content);*/
//ini_set('allow_url_fopen', 'on');
//$user = simplexml_load_string('http://62.28.251.194:8081/api/Cursos/GetCurso?codcurso=10');
//var_dump($user);
//}



/* ------  URL ENGLISH ------- */
public function company() {
	$this->empresa();
}
}

/* End of file home.php */
/* Location: ./application/controllers/company.php */