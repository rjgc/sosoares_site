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

    $this->lang->load('cizacl', $this->config->item('language'));
    $this->lang->load('cizacl');

    $this->load->library('cizacl');
    $this->load->library('login');
    $this->load->library('form_validation'); 
    $this->load->library('ion_auth');

    $this->load->model('login_mdl');
    $this->load->model('cizacl_mdl');
    $this->load->model('vidro_model');
    $this->load->model('sosoares_model');  

    if(!class_exists('CI_Cizacl'))
        show_error($this->lang->line('library_not_loaded'));
}

public function get_lang()
{
    return $this->lang->lang();
}

public function home()
{
    $data['page_style'] = "vidro";
    $data['current'] = 'home';
    $data['noticia'] = $this->sosoares_model->get_destaque();
    $this->menu($data);

    $banners = $this->sosoares_model->get_banners(2);

    if (!empty($banners)) {
        $data['banners'] = $banners;
    } else {
        $data['banners'] = $this->sosoares_model->get_banners(1);
    }

    $this->load->view('templates/carousel', $data, $this->get_lang());
    $this->load->view('pages/inicio', $data);
    $this->load->view('templates/footer');
}

public function area_reservada()
{   
    $session = $this->sosoares_model->get_user_id($this->session->userdata('session_id'));

    $temp = explode('"user_id"', $session['user_data']);

    if (isset($temp['1'])) 
    {
        $temp = explode('"', $temp['1']);

        $role = $this->sosoares_model->get_role($temp['1']);

        if ($this->cizacl->check_isAllowed($role['cizacl_role_name'], 'caixilharia', 'account')) 
        {
            $data['logged_in'] = True;

            $data['profile'] = $this->sosoares_model->get_profile($temp['1']);
            $data['categoria_ficheiros'] = $this->sosoares_model->get_categoria_ficheiros();
            $data['ficheiros'] = $this->sosoares_model->get_ficheiros();
        }
        else
            $data['logged_in'] = False;
    }

    $data['page_style']= "vidro";
    $data['current'] = 'reserved';
    $this->menu($data);

    $this->load->view('pages/area_reservada', $data);
    $this->load->view('templates/footer');
}

public function menu($data) 
{
    $data['tipos'] = $this->vidro_model->get_tipos_produtos();
    
    $z = 0;
    $arrayProdutos;

    foreach ($data['tipos'] as $tipo) {
        $data['produtos'] = $this->vidro_model->get_produtos_tipo($tipo['id_tipo_produto_vidro']);

        foreach ($data['produtos'] as $produto) {
            $arrayProdutos[$z][0] = $tipo['nome_pt'];
            $arrayProdutos[$z][1] = $produto['nome_pt'];
            $arrayProdutos[$z][2] = $produto['id_produto_vidro'];

            $z++;
        }         
    }
    
    $data['array'] = $arrayProdutos;
    $data['apoios'] = $this->sosoares_model->get_apoios(2);

    $this->load->view('templates/header', $data, $this->get_lang());
}

public function grupo_sosoares($page=null)
{
    $data['page_style'] = "vidro";
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
    $data['page_style']= "vidro";
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
    $data['page_style'] = "vidro";
    $data['page_title'] = "areas_comerciais";
    $data['current'] = 'areas_comerciais'; 
    $this->menu($data);

    $data['areas_comerciais'] = $this->sosoares_model->get_areas_comerciais();

    $this->load->view('pages/areas_comerciais', $data);
    $this->load->view('templates/footer', $data);
}

public function noticia($id=null)
{
    $data['page_style'] = "vidro";
    $data['current'] = 'grupo_sosoares';
    $this->menu($data);

    $data['id'] = $id;
    $data['noticia'] = $this->sosoares_model->get_noticia($id);

    $this->load->view('pages/noticia', $data);
    $this->load->view('templates/footer', $data);
}

public function noticias()
{
    $data['page_style'] = "vidro";
    $data['current'] = 'grupo_sosoares';
    $this->menu($data);

    $data['noticias'] = $this->sosoares_model->get_noticias();

    $this->load->view('pages/noticias', $data);
    $this->load->view('templates/footer', $data);
}

public function candidaturas()
{
    $data['page_style'] = "vidro";
    $data['current'] = 'candidaturas';    
    $this->menu($data);

    $data['destinatario'] = $this->sosoares_model->get_destinatario(2);

    $this->load->view('pages/candidatura', $data);
    $this->load->view('templates/footer');
}

public function send_candidatura() 
{
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nome', 'Nome', 'required|min_length[5]|max_length[50]');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('telefone', 'Telefone', 'required|numeric');
    $this->form_validation->set_rules('telemovel', 'Telemóvel', 'numeric');
    $this->form_validation->set_rules('cv', 'Curriculum Vitae', 'required');
    $this->form_validation->set_rules('apresentacao', 'Apresentação', 'required|min_length[5]|max_length[500]');

    if($this->form_validation->run() == FALSE){
        $data['message'] = 'Erro no envio da candidatura! Volte a tentar.';
        $data['reset'] = FALSE;
        $data['page_style']= "caixilharia";
        $data['current'] = 'grupo_sosoares';
        $this->menu($data);

        $this->load->view('pages/candidatura', $data);
        $this->load->view('templates/footer');
    }
    else{
        $data['message'] = 'A candidatura foi enviada com sucesso!';
        $data['reset'] = TRUE;

        //Enviar email
        $this->load->library('email');
        $config = array('useragent'        => 'CodeIgniter',        
            'protocol'         => 'mail',        
            'mailpath'         => '/usr/sbin/sendmail',
            'smtp_host'        => '',
            'smtp_user'        => '',
            'smtp_pass'        => '',
            'smtp_port'        => 25,
            'smtp_timeout'     => 5,
            'wordwrap'         => TRUE,
            'wrapchars'        => 76,
            'mailtype'         => 'html',
            'charset'          => 'utf-8',
            'validate'         => FALSE,
            'priority'         => 3,
            'bcc_batch_mode'   => FALSE,
            'bcc_batch_size'   => 200
            );

        // Run some setup
        $this->email->initialize($config);
        $this->email->from(set_value("email"));
        $this->email->to($this->sosoares_model->get_destinatario(2));
        $this->email->subject('Candidatura');
        $this->email->message('Exmo.(s) do Grupo Sosoares,<br><br> Venho apresentar a V. Ex.as a minha candidatura para uma possível colaboração com a vossa empresa.<br><br>Segue uma breve apresentação da minha pessoa:<br><br>'.set_value("apresentacao").'.<br><br>O(s) meu(s) contacto(s) é/são:<br><br>Telefone: '.set_value("telefone").'<br>Telemóvel: '.set_value("telemovel").'. P.S.: Envio em anexo o meu Curriculum Vitae.<br><br>Atenciosamente,<br><br>'.set_value("nome").'');
        $this->email->attach(set_value('cv'));
        $this->email->send();

        // Debug Email
        if (!$this->email->send()) {
            echo $this->email->print_debugger();
        } else {
            $data['page_style']= "caixilharia";
            $data['current'] = 'grupo_sosoares';
            $this->menu($data);

            $this->load->view('pages/candidatura', $data);
            $this->load->view('templates/footer');
        }      
    }
}

public function produto($id=null)
{
    $data['page_style'] = "vidro";        
    $data['current'] = 'produto';
    $data['id'] = $id;    
    $this->menu($data);

    if ($id != null) {
        $data['produto'] = $this->vidro_model->get_produto($id);

        $this->load->view('pages/vidro/produto', $data, $this->get_lang());
    } else {
        $this->load->view('pages/vidro/produto', $data, $this->get_lang());
    }

    $this->load->view('templates/footer');
}

public function produtos($id_tipo_produto_vidro=null)
{
    $data['page_style']= "vidro";
    $data['current'] = 'produtos';
    $this->menu($data);

    if ($id_tipo_produto_vidro != null) {
        $data['tipo'] = $this->vidro_model->get_tipo_produtos($id_tipo_produto_vidro);

        $data['produtos'] = $this->vidro_model->get_produtos_tipo($id_tipo_produto_vidro);

        $this->load->view('pages/vidro/produtos_sem_caracteristicas', $data, $this->get_lang());
    }
    else {
        $data['tipos'] = $this->vidro_model->get_tipos_produtos();

        $this->load->view('pages/vidro/produtos', $data);
    }

    $this->load->view('templates/footer');
}

public function servico()
{
    $data['page_style']= "vidro";        
    $data['current'] = 'servico';
    $this->menu($data);

    $data['servico'] = $this->vidro_model->get_servico();

    $this->load->view('pages/servico', $data);
    $this->load->view('templates/footer');
}

public function apoio_cliente($page=null)
{
    $data['page_style'] = "vidro";        
    $data['current'] = 'apoio_cliente';
    $data['page'] = $page;  
    $this->menu($data); 

    if ($page != null) {
        $data['page'] = $this->sosoares_model->get_apoio(2, $page);

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
    $this->menu($data);

    $data['pages'] = $this->sosoares_model->get_apoios(2);

    $this->load->view('pages/apoios_cliente', $data);
    $this->load->view('templates/footer');
}

public function contactos()
{
    $data['page_style'] = "vidro";
    $data['page_title'] = "contactos";
    $data['current'] = 'contactos';    
    $this->menu($data);

    $data['contactos'] = $this->sosoares_model->get_contactos(2);
    $data['contactos_mapa'] = $this->sosoares_model->get_contactos_mapa();
    $data['destinatario'] = $this->sosoares_model->get_destinatario(1);

    $this->load->view('pages/contactos', $data);
    $this->load->view('templates/footer', $data);
}

public function send_contactos() 
{
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nome', 'Nome', 'required|min_length[5]|max_length[50]');
    $this->form_validation->set_rules('empresa', 'Empresa', 'max_length[50]');
    $this->form_validation->set_rules('cargo', 'Cargo', 'max_length[50]');
    $this->form_validation->set_rules('telefone', 'Telefone', 'numeric');
    $this->form_validation->set_rules('fax', 'Fax', 'numeric');
    $this->form_validation->set_rules('telemovel', 'Telemóvel', 'required|numeric');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('morada', 'Morada', 'max_length[50]');
    $this->form_validation->set_rules('distrito', 'Distrito', 'required|max_length[50]');
    $this->form_validation->set_rules('concelho', 'Concelho', 'required|max_length[50]');
    $this->form_validation->set_rules('assunto', 'Assunto', 'required');
    $this->form_validation->set_rules('mensagem', 'Mensagem', 'required|min_length[5]|max_length[500]');

    if($this->form_validation->run() == FALSE){
        $data['message'] = 'Erro no envio da mensagem! Volte a tentar.';
        $data['reset'] = FALSE;
        $data['page_style']= "caixilharia";
        $data['current'] = 'grupo_sosoares';
        $this->menu($data);

        $this->load->view('pages/contactos', $data);
        $this->load->view('templates/footer');
    }
    else{
        $data['message'] = 'A mensagem foi enviada com sucesso!';
        $data['reset'] = TRUE;

        //Enviar email
        $this->load->library('email');
        $config = array('useragent'        => 'CodeIgniter',        
            'protocol'         => 'mail',        
            'mailpath'         => '/usr/sbin/sendmail',
            'smtp_host'        => '',
            'smtp_user'        => '',
            'smtp_pass'        => '',
            'smtp_port'        => 25,
            'smtp_timeout'     => 5,
            'wordwrap'         => TRUE,
            'wrapchars'        => 76,
            'mailtype'         => 'html',
            'charset'          => 'utf-8',
            'validate'         => FALSE,
            'priority'         => 3,
            'bcc_batch_mode'   => FALSE,
            'bcc_batch_size'   => 200
            );

        // Run some setup
        $this->email->initialize($config);
        $this->email->from(set_value("email"));
        $this->email->to($this->sosoares_model->get_destinatario(1));
        $this->email->subject(set_value("assunto"));
        $this->email->message('Exmo.(s) do Grupo Sosoares,<br><br>'.set_value("mensagem").'.<br><br>Os meus dados pessoais são:<br><br>Empresa: '.set_value("empresa").'<br>Cargo: '.set_value("cargo").'<br>Telefone: '.set_value("telefone").'<br>Fax: '.set_value("telefone").'<br>Telemóvel: '.set_value("telemovel").'<br>Morada: '.set_value("morada").'<br>Distrito: '.set_value("distrito").'<br>Concelho: '.set_value("concelho").'.<br><br>Atenciosamente,<br><br>'.set_value("nome").'');
        $this->email->send();

        // Debug Email
        if (!$this->email->send()) {
            echo $this->email->print_debugger();
        } else {
            $data['page_style']= "caixilharia";
            $data['current'] = 'grupo_sosoares';
            $this->menu($data);

            $this->load->view('pages/contactos', $data);
            $this->load->view('templates/footer');
        }      
    }
}

}