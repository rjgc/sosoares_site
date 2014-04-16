<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Caixilharia extends CI_Controller {

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

    $this->load->library('ion_auth');

    $this->load->model('caixilharia_model');
    $this->load->model('sosoares_model');
}

public function get_lang()
{
    return $this->lang->lang();
}

public function home()
{
    $data['page_style']= "caixilharia";
    $data['current'] = 'home';
    $data['noticia'] = $this->sosoares_model->get_destaque();
    $data['banners'] = $this->sosoares_model->get_banners(1);
    $this->menu($data);

    $this->load->view('templates/carousel_caixilharia', $data, $this->get_lang());
    $this->load->view('pages/inicio', $data);
    $this->load->view('templates/footer');
}

public function menu($data)
{
    $data['batentes_com_corte'] = $this->caixilharia_model->get_batentes_com_corte($this->get_lang());
    $data['batentes_sem_corte'] = $this->caixilharia_model->get_batentes_sem_corte($this->get_lang());
    $data['aluminios_madeira_com_corte'] = $this->caixilharia_model->get_aluminios_madeira_com_corte($this->get_lang());
    $data['aluminios_madeira_sem_corte'] = $this->caixilharia_model->get_aluminios_madeira_sem_corte($this->get_lang());
    $data['correres_com_corte'] = $this->caixilharia_model->get_correres_com_corte($this->get_lang());
    $data['correres_sem_corte'] = $this->caixilharia_model->get_correres_sem_corte($this->get_lang());
    $data['gradeamentos'] = $this->caixilharia_model->get_gradeamentos($this->get_lang());
    $data['fachadas'] = $this->caixilharia_model->get_fachadas($this->get_lang());
    $data['portadas'] = $this->caixilharia_model->get_portadas($this->get_lang());
    $data['portoes'] = $this->caixilharia_model->get_portoes($this->get_lang());
    $data['standards'] = $this->caixilharia_model->get_standards($this->get_lang());
    $data['guilhotinas'] = $this->caixilharia_model->get_guilhotinas($this->get_lang());
    $data['resguardos'] = $this->caixilharia_model->get_resguardos($this->get_lang());

    $data['servicos'] = $this->caixilharia_model->get_servicos();

    $data['marcacoes'] = $this->caixilharia_model->get_marcacoes();

    $this->load->view('templates/header', $data, $this->get_lang());
}

public function grupo_sosoares($page=null)
{
    $data['page_style'] = "caixilharia";
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

public function grupos_sosoares()
{
    $data['page_style']= "caixilharia";
    $data['current'] = 'grupos_sosoares';
    $this->menu($data);

    $paginas;

    for ($i=1; $i < 7; $i++) {
        $paginas[$i] = $this->sosoares_model->get_pages($i);
    }

    $data['pages'] = $paginas;

    $this->load->view('pages/grupos_sosoares', $data);
    $this->load->view('templates/footer');
}

public function areas_comerciais()
{
    $data['page_style']= "caixilharia";
    $data['page_title'] = "areas_comerciais";
    $data['current'] = 'grupo_sosoares';
    $this->menu($data);

    $data['areas_comerciais'] = $this->sosoares_model->get_areas_comerciais();

    $this->load->view('pages/areas_comerciais', $data);
    $this->load->view('templates/footer', $data);
}

public function noticia($id=null)
{
    $data['page_style'] = "caixilharia";
    $data['current'] = 'grupo_sosoares';
    $this->menu($data);

    $data['id'] = $id;
    $data['noticia'] = $this->sosoares_model->get_noticia($id);

    $this->load->view('pages/noticia', $data);
    $this->load->view('templates/footer', $data);
}

public function noticias()
{
    $data['page_style'] = "caixilharia";
    $data['current'] = 'grupo_sosoares';
    $this->menu($data);

    $data['noticias'] = $this->sosoares_model->get_noticias();

    $this->load->view('pages/noticias', $data);
    $this->load->view('templates/footer', $data);
}

public function candidaturas()
{
    $data['page_style']= "caixilharia";
    $data['current'] = 'grupo_sosoares';
    $this->menu($data);

    $data['destinatario'] = $this->sosoares_model->get_destinatario(2);

    $this->load->view('pages/candidatura', $data);
    $this->load->view('templates/footer');
}

public function produto($id=null)
{
    $data['page_style']= "caixilharia";
    $data['current'] = 'produto';
    $data['id'] = $id;
    $this->menu($data);

    if ($id != null) {
        $data['caracteristicas'] = $this->caixilharia_model->get_caracteristicas_produto($id);

        $produto;

        if (!empty($data['caracteristicas'])) {
            $produto = $this->caixilharia_model->get_produto_com_caracteristica($id, $this->get_lang());
        } else {
            $produto = $this->caixilharia_model->get_produto_sem_caracteristica($id, $this->get_lang());
        }

        $data['produto'] = $produto;
        $data['perfis'] = $this->caixilharia_model->get_perfis($id, $this->get_lang());
        $data['pormenores'] = $this->caixilharia_model->get_pormenores($id, $this->get_lang());
        $data['catalogos'] = $this->caixilharia_model->get_catalogos($id, $this->get_lang());
        $data['ensaios'] = $this->caixilharia_model->get_ensaios($id, $this->get_lang());
        $data['folhetos'] = $this->caixilharia_model->get_folheto_promocional($id, $this->get_lang());
        $data['obras'] = $this->caixilharia_model->get_obras_produto($id, $this->get_lang());

        $this->load->view('pages/caixilharia/produto', $data, $this->get_lang());
    } else {
        $this->load->view('pages/caixilharia/produto', $data, $this->get_lang());
    }

    $this->load->view('templates/footer');
}

public function produtos($id_tipo_produto_aluminio=null)
{
    $data['page_style']= "caixilharia";
    $data['current'] = 'produtos';
    $this->menu($data);

    if ($id_tipo_produto_aluminio != null) {
        $data['caracteristicas'] = $this->caixilharia_model->get_caracteristicas_produtos($id_tipo_produto_aluminio);
        $data['tipo'] = $this->caixilharia_model->get_tipo_produtos($id_tipo_produto_aluminio);

        if (!empty($data['caracteristicas'])) {
            $produtos;

            foreach ($data['caracteristicas'] as $caracteristica) {
                $produtos[$caracteristica['nome_pt']] = $this->caixilharia_model->get_produtos($id_tipo_produto_aluminio, $caracteristica['id_caracteristica_produto_aluminio']);
            }

            $data['produtos'] = $produtos;

            $this->load->view('pages/caixilharia/produtos_com_caracteristicas', $data, $this->get_lang());

        } else {
            $data['produtos'] = $this->caixilharia_model->get_produtos_tipo($id_tipo_produto_aluminio);

            $this->load->view('pages/caixilharia/produtos_sem_caracteristicas', $data, $this->get_lang());
        }
    }
    else {
        $data['tipos'] = $this->caixilharia_model->get_tipos_produtos();

        $this->load->view('pages/caixilharia/produtos', $data);
    }

    $this->load->view('templates/footer');
}

public function obras($id=null)
{
    $data['page_style']= "caixilharia";
    $data['current'] = 'obras';
    $data['id'] = $id;
    $this->menu($data);

    if($id != null){
        $data['obra'] = $this->caixilharia_model->get_obra($id);
        $data['galeria_obra'] = $this->caixilharia_model->get_galeria_obra($id);
        $data['produtos_aluminio_obra'] = $this->caixilharia_model->get_produtos_obra($id, $this->get_lang());

        $this->load->view('pages/obra', $data, $this->get_lang());
    }
    else{
        $data['obras'] = $this->caixilharia_model->get_obras();

        $this->load->view('pages/obras', $data, $this->get_lang());
    }

    $this->load->view('templates/footer');
}

public function servico($servico=null)
{
    $data['page_style']= "caixilharia";
    $data['current'] = 'servico';
    $data['servico'] = $servico;
    $this->menu($data);

    if ($servico != null) {
        $data['servico'] = $this->caixilharia_model->get_servico($servico);

        $this->load->view('pages/servico', $data);
    } else {
        $this->load->view('pages/servico', $data);
    }

    $this->load->view('templates/footer');      
}

public function marcacao($marcacao=null)
{
    $data['page_style']= "caixilharia";
    $data['current'] = 'marcacao';
    $data['marcacao'] = $marcacao;
    $this->menu($data);

    if ($marcacao != null) {
        $data['marcacao'] = $this->caixilharia_model->get_marcacao($marcacao);

        $this->load->view('pages/marcacao', $data);
    } else {
        $this->load->view('pages/marcacao', $data);
    }

    $this->load->view('templates/footer');
}

public function apoio_cliente($page=null)
{
    $data['page_style']= "caixilharia";
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
    $data['page_style']= "caixilharia";
    $data['current'] = 'apoios_cliente';
    $this->menu($data);

    $paginas;

    for ($i=1; $i < 8; $i++) {
        $paginas[$i] = $this->sosoares_model->get_apoios($i);
    }

    $data['pages'] = $paginas;

    $this->load->view('pages/apoios_cliente', $data);
    $this->load->view('templates/footer');
}

public function contactos()
{
    $data['page_style'] = "caixilharia";
    $data['page_title'] = "contactos";
    $data['current'] = 'contactos';
    $this->menu($data);

    $data['contactos'] = $this->sosoares_model->get_contactos(1);
    $data['destinatario'] = $this->sosoares_model->get_destinatario(1);

    $this->load->view('pages/contactos', $data);
    $this->load->view('templates/footer', $data);
}

    public function account()
    {
        if($this->ion_auth->logged_in() == true){
            $data['page_style']= "caixilharia";
            $data['current'] = 'reserved';
            $this->menu($data);
    
            $this->load->view('pages/account', $data);
            $this->load->view('templates/footer');
        }
        else{
            //$this->home();
            redirect('home');
        }
        
    }
}