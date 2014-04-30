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

    $this->lang->load('cizacl', $this->config->item('language'));
    $this->lang->load('cizacl');

    $this->load->library('cizacl');
    $this->load->library('login');
    $this->load->library('form_validation'); 
    $this->load->library('ion_auth');

    $this->load->model('login_mdl');
    $this->load->model('cizacl_mdl');
    $this->load->model('caixilharia_model');
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
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {
        $data['page_style']= "caixilharia";
        $data['current'] = 'home';
        $data['noticia'] = $this->sosoares_model->get_destaque();

        $banners = $this->sosoares_model->get_banners(1);

        if (!empty($banners)) {
            $data['banners'] = $banners;
        } else {
            $data['banners'] = $this->sosoares_model->get_banners();
        }
        
        $this->menu($data);

        $this->load->view('templates/carousel', $data, $this->get_lang());
        $this->load->view('pages/inicio', $data);
        $this->load->view('templates/footer');
    }
}

public function area_reservada()
{   
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {
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

        $data['page_style']= "caixilharia";
        $data['current'] = 'reserved';
        $this->menu($data);

        $this->load->view('pages/area_reservada', $data);
        $this->load->view('templates/footer');
    }
}

public function pesquisa($pesquisa)
{
    $data['page_style']= "caixilharia";
    $data['current'] = 'pesquisa';
    $this->menu($data);

    $data['tipos_aluminio'] = $this->sosoares_model->pesquisa_tipos_aluminio($pesquisa);
    $data['tipos_extrusao'] = $this->sosoares_model->pesquisa_tipos_extrusao($pesquisa);
    $data['produtos_aluminio'] = $this->sosoares_model->pesquisa_produtos_aluminio($pesquisa);
    $data['produtos_vidro'] = $this->sosoares_model->pesquisa_produtos_vidro($pesquisa);
    $data['produtos_extrusao'] = $this->sosoares_model->pesquisa_produtos_extrusao($pesquisa);
    $data['obras'] = $this->sosoares_model->pesquisa_obras($pesquisa);

    $this->load->view('pages/pesquisa', $data);
    $this->load->view('templates/footer');
}

public function menu($data)
{
    $data['grupo_sosoares'] = $this->sosoares_model->get_grupos_sosoares();
    $data['tipos'] = $this->caixilharia_model->get_tipos_produtos();

    $z = 0;
    $arrayProdutos;

    foreach ($data['tipos'] as $tipo) {
        $data['caracteristicas'] = $this->caixilharia_model->get_caracteristicas_produtos($tipo['id_tipo_produto_aluminio']);

        if (!empty($data['caracteristicas'])) {
            foreach ($data['caracteristicas'] as $caracteristica) {
                $data['produtos'] = $this->caixilharia_model->get_produtos($tipo['id_tipo_produto_aluminio'], $caracteristica['id_caracteristica_produto_aluminio']);

                foreach ($data['produtos'] as $produto) {
                    $arrayProdutos[$z][0] = $tipo['nome_pt'];
                    $arrayProdutos[$z][1] = $caracteristica['nome_pt'];
                    $arrayProdutos[$z][2] = $produto['nome_pt'];
                    $arrayProdutos[$z][3] = $produto['id_produto_aluminio'];

                    $z++;
                }
            }
        } else {
            $data['produtos'] = $this->caixilharia_model->get_produtos_tipo($tipo['id_tipo_produto_aluminio']);

            foreach ($data['produtos'] as $produto) {
                $arrayProdutos[$z][0] = $tipo['nome_pt'];
                $arrayProdutos[$z][1] = '';
                $arrayProdutos[$z][2] = $produto['nome_pt'];
                $arrayProdutos[$z][3] = $produto['id_produto_aluminio'];

                $z++;
            }
        }
    } 

    $data['array'] = $arrayProdutos;
    $data['marcacao'] = $this->sosoares_model->get_page(17);
    $data['apoios'] = $this->sosoares_model->get_apoios(1);
    $data['servicos'] = $this->caixilharia_model->get_servicos();

    $this->load->view('templates/header', $data, $this->get_lang());
}

public function grupo_sosoares($page=null)
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {
        $data['page_style'] = "caixilharia";
        $data['current'] = 'grupo_sosoares';
        $data['page'] = $page;
        $this->menu($data);

        if ($page != null) {
            $data['page'] = $this->sosoares_model->get_grupo_sosoares($page);

            $this->load->view('pages/grupo_sosoares', $data);
        } else {
            $this->load->view('pages/grupo_sosoares', $data);
        }

        $this->load->view('templates/footer');
    }
}

public function grupos_sosoares()
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {
        $data['page_style']= "caixilharia";
        $data['current'] = 'grupos_sosoares';
        $this->menu($data);

        $data['pages'] = $this->sosoares_model->get_grupos_sosoares();

        $this->load->view('pages/grupos_sosoares', $data);
        $this->load->view('templates/footer');
    }
}

public function areas_comerciais()
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {
        $data['page_style']= "caixilharia";
        $data['page_title'] = "areas_comerciais";
        $data['current'] = 'grupo_sosoares';
        $this->menu($data);

        $data['areas_comerciais'] = $this->sosoares_model->get_areas_comerciais();

        $this->load->view('pages/areas_comerciais', $data);
        $this->load->view('templates/footer', $data);
    }
}

public function noticia($id=null)
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {
        $data['page_style'] = "caixilharia";
        $data['current'] = 'grupo_sosoares';
        $this->menu($data);

        $data['id'] = $id;
        $data['noticia'] = $this->sosoares_model->get_noticia($id);

        $this->load->view('pages/noticia', $data);
        $this->load->view('templates/footer', $data);
    }
}

public function noticias()
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {
        $data['page_style'] = "caixilharia";
        $data['current'] = 'grupo_sosoares';
        $this->menu($data);

        $data['noticias'] = $this->sosoares_model->get_noticias();

        $this->load->view('pages/noticias', $data);
        $this->load->view('templates/footer', $data);
    }
}

public function candidaturas()
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {
        $data['page_style']= "caixilharia";
        $data['current'] = 'grupo_sosoares';
        $data['reset'] = FALSE;
        $this->menu($data);

        $data['destinatario'] = $this->sosoares_model->get_destinatario(2);

        $this->load->view('pages/candidatura', $data);
        $this->load->view('templates/footer');
    }
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
            'smtp_host'        => 'smtpa.mail.oni.pt',
            'smtp_user'        => 'webmaster@sosoares.pt',
            'smtp_pass'        => '?Web123Sos_',
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
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {
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
}

public function produtos($id_tipo_produto_aluminio=null)
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {
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
}

public function obras($id=null)
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {
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
}

public function servico($servico=null)
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {
        $data['page_style']= "caixilharia";
        $data['current'] = 'servico';
        $data['servico'] = $servico;
        $this->menu($data);

        if ($servico != null) {
            $data['servico'] = $this->caixilharia_model->get_servico($servico);

            $this->load->view('pages/servico', $data);
        } else {
            $data['servicos'] = $this->caixilharia_model->get_servicos();

            $this->load->view('pages/servicos', $data);
        }

        $this->load->view('templates/footer');  
    }    
}

public function marcacao($page=null)
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {
        $data['page_style']= "caixilharia";
        $data['current'] = 'marcacao';
        $data['page'] = $page;
        $this->menu($data);

        if ($page != null) {
            $data['page'] = $this->sosoares_model->get_page($page);

            $this->load->view('pages/marcacao', $data);
        } else {
            $this->load->view('pages/marcacao', $data);
        }

        $this->load->view('templates/footer');
    }
}

public function apoio_cliente($page=null)
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {
        $data['page_style']= "caixilharia";
        $data['current'] = 'apoio_cliente';
        $data['page'] = $page;
        $this->menu($data);

        if ($page != null) {
            $data['page'] = $this->sosoares_model->get_apoio(1, $page);

            $this->load->view('pages/apoio_cliente', $data);
        } else {
            $this->load->view('pages/apoio_cliente', $data);
        }

        $this->load->view('templates/footer');
    }
}

public function apoios_cliente()
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {
        $data['page_style']= "caixilharia";
        $data['current'] = 'apoios_cliente';
        $this->menu($data);

        $data['pages'] = $this->sosoares_model->get_apoios(1);

        $this->load->view('pages/apoios_cliente', $data);
        $this->load->view('templates/footer');
    }
}

public function contactos()
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {
        $data['page_style'] = "caixilharia";
        $data['page_title'] = "contactos";
        $data['current'] = 'contactos';
        $data['reset'] = FALSE;
        $this->menu($data);

        $data['distritos'] = file(base_url().'assets/uploads/distritos.txt');
        $data['concelhos'] = file(base_url().'assets/uploads/concelhos.txt');
        $data['contactos'] = $this->sosoares_model->get_contactos(1);
        $data['contactos_mapa'] = $this->sosoares_model->get_contactos_mapa();
        $data['destinatario'] = $this->sosoares_model->get_destinatario(1);

        $this->load->view('pages/contactos', $data);
        $this->load->view('templates/footer', $data);
    }
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
            'smtp_host'        => 'smtpa.mail.oni.pt',
            'smtp_user'        => 'webmaster@sosoares.pt',
            'smtp_pass'        => '?Web123Sos_',
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