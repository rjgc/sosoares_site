<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Extrusao extends CI_Controller {

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

	$this->load->model('extrusao_model');
	$this->load->model('sosoares_model');
}

public function get_lang()
{
	return $this->lang->lang();
}

public function home()
{
	$data['page_style']= "extrusao";
	$data['current'] = 'home';
	$data['noticia'] = $this->sosoares_model->get_destaque();
	$this->menu($data);

    $banners = $this->sosoares_model->get_banners(3);

    if (!empty($banners)) {
        $data['banners'] = $banners;
    } else {
        $data['banners_default'] = $this->sosoares_model->get_banners(1);
    } 

	$this->load->view('templates/carousel_extrusao', $data, $this->get_lang());
	$this->load->view('pages/extrusao', $data);
	$this->load->view('templates/footer');
}

public function menu($data) 
{
	$data['caixilharia_batente'] = $this->extrusao_model->get_caixilharia_batente($this->get_lang());
	$data['caixilharia_correr'] = $this->extrusao_model->get_caixilharia_correr($this->get_lang());
	$data['caixilharia_portadas'] = $this->extrusao_model->get_caixilharia_portadas($this->get_lang());
	$data['standards'] = $this->extrusao_model->get_standards($this->get_lang());
	$data['estores'] = $this->extrusao_model->get_estores($this->get_lang());
	$data['diversos_divisorias'] = $this->extrusao_model->get_diversos_divisorias($this->get_lang());
	$data['diversos_gradeamentos'] = $this->extrusao_model->get_diversos_gradeamento($this->get_lang());
	$data['diversos_mosquiteiras'] = $this->extrusao_model->get_diversos_mosquiteiras($this->get_lang());
	$data['diversos_laminas'] = $this->extrusao_model->get_diversos_laminas($this->get_lang());

	$this->load->view('templates/header', $data, $this->get_lang());
}

public function grupo_sosoares($page=null)
{
	$data['page_style'] = "extrusao";
	$data['current'] = 'grupo_sosoares';
	$data['page'] = $page;
	$this->menu($data);

	if ($page != null) {
		$data['page'] = $this->sosoares_model->get_page($page);

		$this->load->view('pages/grupo_sosoares', $data);
	} else {
		$this->load->view('pages/grupo_sosoares', $data);
	}

	$this->load->view('templates/footer');
}

public function areas_comerciais()
{
	$data['page_style']= "extrusao";
	$data['page_title'] = "areas_comerciais";
	$data['current'] = 'areas_comerciais';
	$this->menu($data);

	$data['areas_comerciais'] = $this->sosoares_model->get_areas_comerciais();

	$this->load->view('pages/areas_comerciais', $data);
	$this->load->view('templates/footer', $data);
}

public function noticia($id=null)
{
	$data['page_style'] = "extrusao";
	$data['current'] = 'grupo_sosoares';
	$this->menu($data);

	$data['id'] = $id;
	$data['noticia'] = $this->sosoares_model->get_noticia($id);

	$this->load->view('pages/noticia', $data);
	$this->load->view('templates/footer', $data);
}

public function noticias()
{
	$data['page_style'] = "extrusao";
	$data['current'] = 'grupo_sosoares';
	$this->menu($data);

	$data['noticias'] = $this->sosoares_model->get_noticias();

	$this->load->view('pages/noticias', $data);
	$this->load->view('templates/footer', $data);
}

public function candidaturas()
{
	$data['page_style']= "extrusao";
	$data['current'] = 'candidaturas';
	$this->menu($data);

	$data['destinatario'] = $this->sosoares_model->get_destinatario(2);

	$this->load->view('pages/candidatura', $data);
	$this->load->view('templates/footer');
}

public function produto($id=null)
{
	$data['page_style']= "extrusao";
	$data['current'] = 'produto';
	$data['id'] = $id;        
	$this->menu($data);

	if ($id != null) {
		$data['caracteristicas'] = $this->extrusao_model->get_caracteristicas_produto($id);

		$produto;

		if (!empty($data['caracteristicas'])) {
			$produto = $this->extrusao_model->get_produto_com_caracteristica($id, $this->get_lang());
		} else {
			$produto = $this->extrusao_model->get_produto_sem_caracteristica($id, $this->get_lang());
		}

		$data['produto'] = $produto;
		$data['perfis'] = null;
		$data['pormenores'] = null;
		$data['catalogos'] = null;
		$data['ensaios'] = null;
		$data['folhetos'] = null;
		$data['obras'] = null;

		$this->load->view('pages/extrusao/produto', $data, $this->get_lang());
	} else {
		$this->load->view('pages/extrusao/produto', $data, $this->get_lang());
	}

	$this->load->view('templates/footer');
}

public function produtos($id_tipo_produto_extrusao=null)
{
	$data['page_style']= "extrusao";
	$data['current'] = 'produtos';
	$this->menu($data);

	if ($id_tipo_produto_extrusao != null) {
		$data['caracteristicas'] = $this->extrusao_model->get_caracteristicas_produtos($id_tipo_produto_extrusao);
		$data['tipo'] = $this->extrusao_model->get_tipo_produtos($id_tipo_produto_extrusao);

		if (!empty($data['caracteristicas'])) {
			$produtos;

			foreach ($data['caracteristicas'] as $caracteristica) {
				$produtos[$caracteristica['nome_pt']] = $this->extrusao_model->get_produtos($id_tipo_produto_extrusao, $caracteristica['id_caracteristica_produto_extrusao']);
			}

			$data['produtos'] = $produtos;

			$this->load->view('pages/extrusao/produtos_com_caracteristicas', $data, $this->get_lang());

		} else {
			$data['produtos'] = $this->extrusao_model->get_produtos_tipo($id_tipo_produto_extrusao);

			$this->load->view('pages/extrusao/produtos_sem_caracteristicas', $data, $this->get_lang());
		}
	}
	else {
		$data['tipos'] = $this->extrusao_model->get_tipos_produtos();

		$this->load->view('pages/extrusao/produtos', $data);
	}

	$this->load->view('templates/footer');
}

public function servico()
{
	$data['page_style']= "extrusao";        
	$data['current'] = 'servico';
	$this->menu($data);

	$data['servico'] = $this->extrusao_model->get_servico();    

	$this->load->view('pages/servico', $data);
	$this->load->view('templates/footer');
}

public function apoio_cliente($page=null)
{
	$data['page_style']= "extrusao";        
	$data['current'] = 'apoio_cliente';
	$data['page'] = $page;
	$this->menu($data);

	if ($page != null) {
		$data['page'] = $this->sosoares_model->get_apoio($page);

		$this->load->view('pages/apoio_cliente', $data);
	} else {
		$this->load->view('pages/apoio_cliente', $data);
	}

	$this->load->view('templates/footer');
}

public function apoios_cliente()
{
	$data['page_style']= "extrusao";
	$data['current'] = 'apoios_cliente';
	$this->menu($data);

	$paginas[0] = $this->sosoares_model->get_apoios(1);
	$paginas[1] = $this->sosoares_model->get_apoios(2);
	$paginas[2] = $this->sosoares_model->get_apoios(8);

	$data['pages'] = $paginas;

	$this->load->view('pages/apoios_cliente', $data);
	$this->load->view('templates/footer');
}

public function contactos()
{
	$data['page_style']= "extrusao";
	$data['page_title']= "contactos";
	$data['current'] = 'contactos';
	$this->menu($data);

    $data['contactos'] = $this->sosoares_model->get_contactos(3);
    $data['destinatario'] = $this->sosoares_model->get_destinatario(1);

    $this->load->view('pages/contactos', $data);
	$this->load->view('templates/footer', $data);
}
}
