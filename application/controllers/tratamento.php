<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tratamento extends CI_Controller {

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

        $this->load->model('tratamento_model');
        $this->load->model('sosoares_model');
    }

    public function get_lang()
    {
        return $this->lang->lang();
    }

    public function home()
    {
        $data['page_style']= "tratamento";
        $data['current'] = 'home';
        $data['noticia'] = $this->sosoares_model->get_destaque();

        $banners = $this->sosoares_model->get_banners(4);

        if (!empty($banners)) {
            $data['banners'] = $banners;
        } else {
            $data['banners_default'] = $this->sosoares_model->get_banners(1);
        } 

        $this->load->view('templates/header', $data);
        $this->load->view('templates/carousel_tratamento', $data, $this->get_lang());
        $this->load->view('pages/tratamento', $data);
        $this->load->view('templates/footer');
    }

    public function grupo_sosoares($page=null)
    {
        $data['page_style'] = "tratamento";
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

    public function areas_comerciais()
    {
        $data['page_style']= "tratamento";
        $data['page_title']= "areas_comerciais";
        $data['current'] = 'areas_comerciais';

        $data['areas_comerciais'] = $this->sosoares_model->get_areas_comerciais();

        $this->load->view('templates/header', $data);
        $this->load->view('pages/areas_comerciais', $data);
        $this->load->view('templates/footer', $data);
    }

    public function noticia($id=null)
    {
        $data['page_style'] = "tratamento";
        $data['current'] = 'grupo_sosoares';

        $data['id'] = $id;
        $data['noticia'] = $this->sosoares_model->get_noticia($id);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/noticia', $data);
        $this->load->view('templates/footer', $data);
    }

    public function noticias()
    {
        $data['page_style'] = "tratamento";
        $data['current'] = 'grupo_sosoares';

        $data['noticias'] = $this->sosoares_model->get_noticias();

        $this->load->view('templates/header', $data);
        $this->load->view('pages/noticias', $data);
        $this->load->view('templates/footer', $data);
    }

    public function candidaturas()
    {
        $data['page_style']= "tratamento";
        $data['current'] = 'candidaturas';

        $data['destinatario'] = $this->sosoares_model->get_destinatario(2);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/candidatura', $data);
        $this->load->view('templates/footer');
    }

    public function lacagem()
    {
        $data['page_style']= "tratamento";
        $data['current'] = 'lacagem';

        $data['page'] = $this->sosoares_model->get_page(6);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/tratamento/lacagem');
        $this->load->view('templates/footer', $data);
    }

    public function anodizacao()
    {
        $data['page_style']= "tratamento";
        $data['current'] = 'anodizacao';

        $data['page'] = $this->sosoares_model->get_page(7);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/tratamento/anodizacao');
        $this->load->view('templates/footer', $data);
    }

    public function imitacao_madeira()
    {
        $data['page_style']= "tratamento";
        $data['current'] = 'imitacao_madeira';

        $data['page'] = $this->sosoares_model->get_page(8);

        $this->load->view('templates/header', $data);
        $this->load->view('pages/tratamento/imitacao_madeira');
        $this->load->view('templates/footer', $data);
    }

    public function contactos()
    {
        $data['page_style']= "tratamento";
        $data['page_title']= "contactos";
        $data['current'] = 'contactos';

        $data['contactos'] = $this->sosoares_model->get_contactos(4);
        $data['destinatario'] = $this->sosoares_model->get_destinatario(1);
        
        $this->load->view('templates/header', $data);
        $this->load->view('pages/contactos', $data);
        $this->load->view('templates/footer', $data);
    }
}