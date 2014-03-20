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

// load language file
/*	$this->lang->load('gestinfor');

*/
$this->load->model('company_model');
$this->load->model('product_model');/*
$this->load->model('news_model');
$this->load->model('home_model');
$this->load->model('xml2mysql');
$this->load->model('formacao_model');*/
}


public function index()
{
	$this->home();        
/*$result = $this->company_model->gest_page('1');
$data['news'] = $this->news_model->get_news();

$data['cursos'] = $this->home_model->get_cursos($this->lang->lang());
// vai buscar lista de produtos ou detalhe
$data['gest_page'] = $result[0];

$data['title'] = lang('indelague.home');
$data['current'] = 'home';

$this->load->view('templates/header', $data);
$this->load->view('templates/nav', $data);
$this->load->view('templates/sidebar', $data);
//$this->load->view('templates/carousel');
$this->load->view('home');
$this->load->view('templates/footer', $data);*/

}

public function home()
{
//$result = $this->company_model->gest_page('1');
/*$data['news'] = $this->news_model->get_news();

$data['cursos'] = $this->home_model->get_cursos($this->lang->lang());
$data['formacoes'] = $this->home_model->get_formacoes($this->lang->lang());
// vai buscar lista de produtos ou detalhe
//$data['gest_page'] = $result[0];

$data['title'] = lang('indelague.home');
$data['current'] = 'home';
*/
$data['galeria_obra'] = $this->company_model->get_galeria_obra(183);
$data['produto_aluminio'] = $this->company_model->get_produto_aluminio(1);
$data['galeria_obras'] = $this->company_model->get_galeria_obras();
$data['produtos_aluminio'] = $this->company_model->get_produtos_aluminio();
$data['current'] = 'home';

//$this->load->view('templates/nav', $data);
//$this->load->view('templates/sidebar', $data);
$this->load->view('templates/carousel_caixilharia');
$this->load->view('pages/caixilharia',$data);
$this->load->view('templates/footer');

}

public function home_caixilharia()
{
//$result = $this->company_model->gest_page('1');
/*$data['news'] = $this->news_model->get_news();

$data['cursos'] = $this->home_model->get_cursos($this->lang->lang());
$data['formacoes'] = $this->home_model->get_formacoes($this->lang->lang());
// vai buscar lista de produtos ou detalhe
//$data['gest_page'] = $result[0];

$data['title'] = lang('indelague.home');
$data['current'] = 'home';
*/
$data['galeria_obra'] = $this->company_model->get_galeria_obra(183);
$data['produto_aluminio'] = $this->company_model->get_produto_aluminio(1);
$data['galeria_obras'] = $this->company_model->get_galeria_obras();
$data['produtos_aluminio'] = $this->company_model->get_produtos_aluminio();
$data['batentes_com_corte'] = $this->product_model->get_batentes_com_corte();
$data['batentes_sem_corte'] = $this->product_model->get_batentes_sem_corte();
$data['aluminios_madeira'] = $this->product_model->get_aluminios_madeira();
$data['correres_com_corte'] = $this->product_model->get_correres_com_corte();
$data['correres_sem_corte'] = $this->product_model->get_correres_sem_corte();
$data['gradeamentos'] = $this->product_model->get_gradeamentos();
$data['fachadas'] = $this->product_model->get_fachadas();
$data['portadas'] = $this->product_model->get_portadas();
$data['portoes'] = $this->product_model->get_portoes();
$data['standards'] = $this->product_model->get_standards();
$data['current'] = 'home_caixilharia';		

$this->load->view('templates/header_caixilharia', $data);		
//$this->load->view('templates/nav', $data);
//$this->load->view('templates/sidebar', $data);
$this->load->view('templates/carousel_caixilharia');
$this->load->view('pages/caixilharia',$data);
$this->load->view('templates/footer');

}

public function home_vidro()
{
//$result = $this->company_model->gest_page('1');
/*$data['news'] = $this->news_model->get_news();

$data['cursos'] = $this->home_model->get_cursos($this->lang->lang());
$data['formacoes'] = $this->home_model->get_formacoes($this->lang->lang());
// vai buscar lista de produtos ou detalhe
//$data['gest_page'] = $result[0];

$data['title'] = lang('indelague.home');
$data['current'] = 'home';
*/
$data['galeria_obra'] = $this->company_model->get_galeria_obra(183);
$data['produto_aluminio'] = $this->company_model->get_produto_aluminio(1);
$data['galeria_obras'] = $this->company_model->get_galeria_obras();
$data['produtos_aluminio'] = $this->company_model->get_produtos_aluminio();
$data['current'] = 'home_vidro';

$this->load->view('templates/header_vidro');
//$this->load->view('templates/nav', $data);
//$this->load->view('templates/sidebar', $data);
$this->load->view('templates/carousel_vidro');
$this->load->view('pages/vidro',$data);
$this->load->view('templates/footer');

}

public function home_extrusao()
{
//$result = $this->company_model->gest_page('1');
/*$data['news'] = $this->news_model->get_news();

$data['cursos'] = $this->home_model->get_cursos($this->lang->lang());
$data['formacoes'] = $this->home_model->get_formacoes($this->lang->lang());
// vai buscar lista de produtos ou detalhe
//$data['gest_page'] = $result[0];

$data['title'] = lang('indelague.home');
$data['current'] = 'home';
*/
$data['galeria_obra'] = $this->company_model->get_galeria_obra(183);
$data['produto_aluminio'] = $this->company_model->get_produto_aluminio(1);
$data['galeria_obras'] = $this->company_model->get_galeria_obras();
$data['produtos_aluminio'] = $this->company_model->get_produtos_aluminio();
$data['current'] = 'home_extrusao';

$this->load->view('templates/header_extrusao');
//$this->load->view('templates/nav', $data);
//$this->load->view('templates/sidebar', $data);
$this->load->view('templates/carousel_extrusao');
$this->load->view('pages/extrusao',$data);
$this->load->view('templates/footer');

}

public function home_tratamento()
{
//$result = $this->company_model->gest_page('1');
/*$data['news'] = $this->news_model->get_news();

$data['cursos'] = $this->home_model->get_cursos($this->lang->lang());
$data['formacoes'] = $this->home_model->get_formacoes($this->lang->lang());
// vai buscar lista de produtos ou detalhe
//$data['gest_page'] = $result[0];

$data['title'] = lang('indelague.home');
$data['current'] = 'home';
*/
$data['galeria_obra'] = $this->company_model->get_galeria_obra(183);
$data['produto_aluminio'] = $this->company_model->get_produto_aluminio(1);
$data['galeria_obras'] = $this->company_model->get_galeria_obras();
$data['produtos_aluminio'] = $this->company_model->get_produtos_aluminio();
$data['current'] = 'home_tratamento';

$this->load->view('templates/header_tratamento');
//$this->load->view('templates/nav', $data);
//$this->load->view('templates/sidebar', $data);
$this->load->view('templates/carousel_tratamento');
$this->load->view('pages/tratamento',$data);
$this->load->view('templates/footer');

}

/*public function portfolio_list_caixilharia()
{
//$result = $this->company_model->gest_page('1');
/*$data['news'] = $this->news_model->get_news();

$data['cursos'] = $this->home_model->get_cursos($this->lang->lang());
$data['formacoes'] = $this->home_model->get_formacoes($this->lang->lang());
// vai buscar lista de produtos ou detalhe
//$data['gest_page'] = $result[0];

$data['title'] = lang('indelague.home');
$data['current'] = 'home';
*/
/*$data['galeria_obra'] = $this->company_model->get_galeria_obra(183);
$data['produto_aluminio'] = $this->company_model->get_produto_aluminio(1);
$data['galeria_obras'] = $this->company_model->get_galeria_obras();
$data['produtos_aluminio'] = $this->company_model->get_produtos_aluminio();
$this->load->view('templates/header_caixilharia');
//$this->load->view('templates/nav', $data);
//$this->load->view('templates/sidebar', $data);
//$this->load->view('templates/carousel_caixilharia');
$this->load->view('pages/portfolio_list', $data);
$this->load->view('templates/footer');
}*/

public function portfolio_caixilharia($id=null)
{
//$result = $this->company_model->gest_page('1');
/*$data['news'] = $this->news_model->get_news();

$data['cursos'] = $this->home_model->get_cursos($this->lang->lang());
$data['formacoes'] = $this->home_model->get_formacoes($this->lang->lang());
// vai buscar lista de produtos ou detalhe
//$data['gest_page'] = $result[0];

$data['title'] = lang('indelague.home');
$data['current'] = 'home';
*/


/*$data['produto_aluminio'] = $this->company_model->get_produto_aluminio(1);
$data['galeria_obras'] = $this->company_model->get_galeria_obras();
$data['produtos_aluminio'] = $this->company_model->get_produtos_aluminio();
//$data['obra'] = $this->company_model->get_obra();
$data['obras'] = $this->company_model->get_obras();*/	
$data['current'] = 'portfolio_caixilharia';
$this->menu_produtos();

if($id != null){
	$data['obra'] = $this->company_model->get_obra($id);
	$data['galeria_obra'] = $this->company_model->get_galeria_obra($id);
	$data['produtos_aluminio_obra'] = $this->company_model->get_produtos_aluminio_obra($id);
//$this->load->view('new',$data);
	$this->load->view('pages/portfolio', $data);
}
else{
	$data['obras'] = $this->company_model->get_obras();
	$this->load->view('pages/portfolio_list', $data);
}
//$this->load->view('pages/portfolio', $data);

$this->load->view('templates/footer');
}

public function produto_caixilharia($id)
{
//$result = $this->company_model->gest_page('1');
/*$data['news'] = $this->news_model->get_news();

$data['cursos'] = $this->home_model->get_cursos($this->lang->lang());
$data['formacoes'] = $this->home_model->get_formacoes($this->lang->lang());
// vai buscar lista de produtos ou detalhe
//$data['gest_page'] = $result[0];

$data['title'] = lang('indelague.home');
$data['current'] = 'home';
*/
$data['caracteristicas'] = $this->product_model->get_caracteristicas_($id);

print_r($data['caracteristicas']);

$produto;

if (!empty($data['caracteristicas'])) {
$produto = $this->product_model->get_produto($id);
} else {
$produto = $this->product_model->get_produto_($id);
}

$data['produto'] = $produto;
$data['obras'] = $this->product_model->get_obras($id);
$data['current'] = 'produto_caixilharia';
$this->menu_produtos();
//$this->load->view('templates/nav', $data);
//$this->load->view('templates/sidebar', $data);
//$this->load->view('templates/carousel_caixilharia');		
$this->load->view('pages/produto',$data);
$this->load->view('templates/footer');

}

public function produtos_list(){
	$data['current'] = 'produtos_list';
	$data['tipos'] = $this->product_model->get_tipos();
	$this->menu_produtos();

	$this->load->view('pages/produtos_list', $data);
	$this->load->view('templates/footer');
}

public function produtos_tipo($id_tipo_produto_aluminio){
	$data['caracteristicas'] = $this->product_model->get_caracteristicas($id_tipo_produto_aluminio);

	print_r($data['caracteristicas']);

	if (!empty($data['caracteristicas'])) {
		$data['current'] = 'produtos_tipo';

		$produtos;

		foreach ($data['caracteristicas'] as $caracteristica) {
			$produtos[$caracteristica['nome']] = $this->product_model->get_produtos($id_tipo_produto_aluminio, $caracteristica['id_caracteristica_produto_aluminio']);
		}

		$this->menu_produtos();
		$data['produtos'] = $produtos;
		$data['tipo'] = $this->product_model->get_tipo($id_tipo_produto_aluminio);

		$this->load->view('pages/produtos_com_caracteristicas', $data);
		$this->load->view('templates/footer');
	} else {
		$data['current'] = 'produtos_sem_caracteristicas';
		$data['tipo'] = $this->product_model->get_tipo($id_tipo_produto_aluminio);
		$data['produtos'] = $this->product_model->get_produtos_($id_tipo_produto_aluminio);
		$this->menu_produtos();

		$this->load->view('pages/produtos_sem_caracteristicas', $data);
		$this->load->view('templates/footer');
	}
}

public function menu_produtos() {
	$data['batentes_com_corte'] = $this->product_model->get_batentes_com_corte();
	$data['batentes_sem_corte'] = $this->product_model->get_batentes_sem_corte();
	$data['aluminios_madeira'] = $this->product_model->get_aluminios_madeira();
	$data['correres_com_corte'] = $this->product_model->get_correres_com_corte();
	$data['correres_sem_corte'] = $this->product_model->get_correres_sem_corte();
	$data['gradeamentos'] = $this->product_model->get_gradeamentos();
	$data['fachadas'] = $this->product_model->get_fachadas();
	$data['portadas'] = $this->product_model->get_portadas();
	$data['portoes'] = $this->product_model->get_portoes();
	$data['standards'] = $this->product_model->get_standards();

	$this->load->view('templates/header_caixilharia', $data);
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