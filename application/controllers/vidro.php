<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vidro extends CI_Controller {

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

    $this->load->model('vidro_model');
    $this->load->model('sosoares_model');
}

public function get_lang()
{
    return $this->lang->lang();
}

public function home()
{
    $data['page_style'] = "vidro";
    $data['current'] = 'home';
    $data['noticia'] = $this->sosoares_model->get_noticia(4);
    $data['banners'] = $this->vidro_model->get_banners();    

    $this->load->view('templates/header', $data);
    $this->load->view('templates/carousel_vidro', $data, $this->get_lang());
    $this->load->view('pages/vidro', $data);
    $this->load->view('templates/footer');
}

public function grupo_sosoares($page=null)
{
    $data['page_style'] = "vidro";
    $data['current'] = 'grupo_sosoares';
    $data['page'] = $page;    

    $this->load->view('templates/header', $data);

    if ($page != null) {
        $data['page'] = $this->sosoares_model->get_page($page);

        $this->load->view('pages/grupo_sosoares', $data);
    } else {
        $this->load->view('pages/grupo_sosoares', $data);
    }

    $this->load->view('templates/footer');
}

public function candidaturas()
{
    $data['page_style'] = "vidro";
    $data['current'] = 'candidaturas';    

    $this->load->view('templates/header', $data);
    $this->load->view('pages/candidatura', $data);
    $this->load->view('templates/footer');
}

public function areas_comerciais()
{
    $data['page_style'] = "vidro";
    $data['page_title'] = "areas_comerciais";
    $data['current'] = 'areas_comerciais'; 

    $data['areas_comerciais'] = $this->sosoares_model->get_areas_comerciais();

    $this->load->view('templates/header', $data);
    $this->load->view('pages/areas_comerciais', $data);
    $this->load->view('templates/footer', $data);
}

public function produto($id=null)
{
    $data['page_style'] = "vidro";        
    $data['current'] = 'produto';
    $data['id'] = $id;    

    $this->load->view('templates/header', $data);

    if ($id != null) {
        $data['produto'] = $this->vidro_model->get_produto($id, $this->get_lang());

        $this->load->view('pages/vidro/produto', $data, $this->get_lang());
    } else {
        $this->load->view('pages/vidro/produto', $data, $this->get_lang());
    }

    $this->load->view('templates/footer');
}

public function produtos()
{
    $data['page_style'] = "vidro";
    $data['current'] = 'produtos';    

    $data['categorias'] = $this->vidro_model->get_categoria_produtos();
    $data['produtos'] = $this->vidro_model->get_produtos();

    $this->load->view('templates/header', $data);
    $this->load->view('pages/vidro/produtos', $data, $this->get_lang());
    $this->load->view('templates/footer');
}

public function apoio_cliente($page=null)
{
    $data['page_style'] = "vidro";        
    $data['current'] = 'apoio_cliente';
    $data['page'] = $page;   

    $this->load->view('templates/header', $data); 

    if ($page != null) {
        $data['page'] = $this->sosoares_model->get_page($page);

        $this->load->view('pages/apoio_cliente', $data);
    } else {
        $this->load->view('pages/apoio_cliente', $data);
    }

    $this->load->view('templates/footer');
}

public function apoios_cliente()
{
    $data['page_style'] = "vidro";
    $data['current'] = 'apoios_cliente';    

    $this->load->view('templates/header', $data);

    $paginas;
    $y=0;

    for ($i=7; $i < 13; $i++) {
        $paginas[$y] = $this->sosoares_model->get_pages($i);
        $y++;
    }

    $data['pages'] = $paginas;

    $this->load->view('pages/apoio_cliente_list', $data);
    $this->load->view('templates/footer');
}

public function contactos()
{
    $data['page_style'] = "vidro";
    $data['page_title'] = "contactos";
    $data['current'] = 'contactos';    

    $this->load->view('templates/header', $data);
    $this->load->view('pages/contactos');
    $this->load->view('templates/footer', $data);
}
}