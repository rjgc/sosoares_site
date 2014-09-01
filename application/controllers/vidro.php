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
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {
        $data['page_style'] = "vidro";
        $data['current'] = 'home';
        $data['noticia'] = $this->sosoares_model->get_destaque();
        $this->menu($data);

        $data['banners'] = $this->sosoares_model->get_banners(2);

        $this->load->view('templates/carousel', $data, $this->get_lang());
        $this->load->view('pages/inicio', $data);
        $this->load->view('templates/footer');
    }
}

public function registar()
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {      
        $data['page_style']= "vidro";
        $data['current'] = 'registar';
        $this->menu($data);

        $data['paises'] = file(base_url().'assets/uploads/paises.txt');
        $data['distritos'] = file(base_url().'assets/uploads/distritos.txt');
        $data['concelhos'] = file(base_url().'assets/uploads/concelhos.txt');

        $this->load->view('pages/registar', $data);
        $this->load->view('templates/footer');
    }
}

public function registado()
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {      
        $data['page_style']= "vidro";
        $data['current'] = 'registado';
        $this->menu($data);

        $data['registado'] = $this->sosoares_model->get_page(18);

        $this->load->view('pages/confirmacao', $data);
        $this->load->view('templates/footer');
    }
}

public function recuperar_password()
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {      
        $data['page_style']= "vidro";
        $data['current'] = 'recuperar_password';
        $this->menu($data);

        $this->load->view('pages/recuperar_password', $data);
        $this->load->view('templates/footer');
    }
}

public function password_recuperada()
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {      
        $data['page_style']= "vidro";
        $data['current'] = 'password_recuperada';
        $this->menu($data);

        $data['page'] = $this->sosoares_model->get_page(20);

        $this->load->view('pages/confirmacao', $data);
        $this->load->view('templates/footer');
    }
}

public function alterar_password()
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else if (isset($_GET['password'])) {      
        $data['page_style']= "vidro";
        $data['current'] = 'alterar_password';
        $this->menu($data);

        $_SESSION['old_password'] = $_GET['password'];

        $this->load->view('pages/alterar_password', $data);
        $this->load->view('templates/footer');
    }
}

public function password_alterada()
{
    if (isset($_GET['search'])) {
        $this->pesquisa($_GET['search']);
    } else {      
        $data['page_style']= "vidro";
        $data['current'] = 'password_alterada';
        $this->menu($data);

        $data['registado'] = $this->sosoares_model->get_page(19);

        $this->load->view('pages/confirmacao', $data);
        $this->load->view('templates/footer');
    }
}

public function area_privada()
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
                $_SESSION['logged_in'] = True;
                $_SESSION['notAllowed'] = False;

                $_SESSION['profile'] = $this->sosoares_model->get_profile($temp['1']);
                $data['categoria_ficheiros'] = $this->sosoares_model->get_categoria_ficheiros();
                $data['todos'] = $this->sosoares_model->get_ficheiros();
                $data['perfis'] = $this->sosoares_model->get_perfis();
                $data['pormenores'] = $this->sosoares_model->get_pormenores();
                $data['catalogos'] = $this->sosoares_model->get_catalogos();
                $data['ensaios'] = $this->sosoares_model->get_ensaios();
                $data['folhetos'] = $this->sosoares_model->get_folhetos();
                $data['ferragens_vidro'] = $this->sosoares_model->get_ferragens_vidro();
            } 
            else {
                $_SESSION['notAllowed'] = True;
                $_SESSION['logged_in'] = True;
            }
        }
        else {
            $_SESSION['logged_in'] = False;
            $_SESSION['notAllowed'] = False;
        }

        $data['page_style']= "vidro";
        $data['current'] = 'area_privada';
        $this->menu($data);

        // if (isset($temp['1'])) 
        //     if ($this->sosoares_model->check_user_profile($temp['1'])) 
                $this->load->view('pages/area_privada', $data);
            // else 
            // {
            //     $data['paises'] = file(base_url().'assets/uploads/paises.txt');
            //     $data['distritos'] = file(base_url().'assets/uploads/distritos.txt');
            //     $data['concelhos'] = file(base_url().'assets/uploads/concelhos.txt');

            //     $this->load->view('pages/editar_perfil', $data); 
            // }

            $this->load->view('templates/footer');
        }
    }

    public function editar_perfil() 
    {
        $data['page_style']= "vidro";
        $data['current'] = 'editar_perfil';
        $this->menu($data);

        $data['paises'] = file(base_url().'assets/uploads/paises.txt');
        $data['distritos'] = file(base_url().'assets/uploads/distritos.txt');
        $data['concelhos'] = file(base_url().'assets/uploads/concelhos.txt');

        $this->load->view('pages/editar_perfil', $data); 
        $this->load->view('templates/footer');
    }

    public function logout()
    {
        $this->session->sess_destroy();

        $this->home();
    }

    public function pesquisa($pesquisa)
    {
        $data['page_style']= "vidro";
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
        $data['produtos'] = $this->vidro_model->get_produtos();
        $data['apoios'] = $this->sosoares_model->get_apoios(2);
        $data['servicos'] = $this->vidro_model->get_servicos();
        $data['area_tecnica'] = $this->vidro_model->get_areas_tecnicas();

        $this->load->view('templates/header', $data, $this->get_lang());
    }

    public function grupo_sosoares($page=null)
    {
        if (isset($_GET['search'])) {
            $this->pesquisa($_GET['search']);
        } else {
            $data['page_style'] = "vidro";
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
            $data['page_style']= "vidro";
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
            $data['page_style'] = "vidro";
            $data['page_title'] = "areas_comerciais";
            $data['current'] = 'areas_comerciais'; 
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
            $data['page_style'] = "vidro";
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
            $data['page_style'] = "vidro";
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
            $data['page_style'] = "vidro";
            $data['current'] = 'grupo_sosoares';
            $data['reset'] = FALSE;
            $data['message'] = null;
            $this->menu($data);

            $data['destinatario'] = $this->sosoares_model->get_email(2);

            $this->load->view('pages/candidatura', $data);
            $this->load->view('templates/footer');
        }
    }

    public function send_candidatura() 
    {
        //load the helper
        $this->load->helper('form');

        //Configure
        //set the path where the files uploaded will be copied. NOTE if using linux, set the folder to permission 777
        $config['upload_path'] = 'assets/uploads/candidaturas/';

        // set the filter image types
        $config['allowed_types'] = 'pdf';

        //load the upload library
        $this->load->library('upload', $config);

        $this->upload->initialize($config);

        $this->upload->set_allowed_types('*');

        $data['upload_data'] = '';

        //if not successful, set the error message
        if (!$this->upload->do_upload('cv')) {
            if ($this->lang->lang() === 'pt')
                $data['message'] = 'Tem de enviar um Curriculum Vitae.';
            elseif ($this->lang->lang() === 'en')
                $data['message'] = 'Must submit a Curriculum Vitae.';
            elseif ($this->lang->lang() === 'fr')
                $data['message'] = 'Doit présenter un Curriculum Vitae.';
            elseif ($this->lang->lang() === 'es')
                $data['message'] = 'Debe presentar un Curriculum Vitae.';

            $data['reset'] = FALSE;
            $data['page_style']= "vidro";
            $data['current'] = 'grupo_sosoares';
            $this->menu($data);

            $this->load->view('pages/candidatura', $data);
            $this->load->view('templates/footer');
        } else { 
            //else, set the success message
            $data = array('msg' => "Upload success!");

            $data['upload_data'] = $this->upload->data();

            $cv = $data['upload_data']['file_name'];

            $this->form_validation->set_rules('nome', 'Nome', 'required|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('telefone', 'Telefone', 'required|numeric');
            $this->form_validation->set_rules('telemovel', 'Telemóvel', 'numeric');
            $this->form_validation->set_rules('apresentacao', 'Apresentação', 'required|min_length[5]|max_length[500]');

            if($this->form_validation->run() == FALSE){
                if ($this->lang->lang() === 'pt')
                    $data['message'] = 'Erro no envio da candidatura! Volte a tentar.';
                elseif ($this->lang->lang() === 'en')
                    $data['message'] = 'Error in sending the application! Try again.';
                elseif ($this->lang->lang() === 'fr')
                    $data['message'] = "Erreur dans l'envoi de la demande! Essayer à nouveau.";
                elseif ($this->lang->lang() === 'es')
                    $data['message'] = 'Error en el envío de la aplicación! Inténtalo de nuevo.';

                $data['reset'] = FALSE;
                $data['page_style']= "vidro";
                $data['current'] = 'grupo_sosoares';
                $this->menu($data);

                $this->load->view('pages/candidatura', $data);
                $this->load->view('templates/footer');
            }
            else{
                if ($this->lang->lang() === 'pt')
                    $data['message'] = 'A candidatura foi enviada com sucesso!';
                elseif ($this->lang->lang() === 'en')
                    $data['message'] = 'The application was successfully sent!';
                elseif ($this->lang->lang() === 'fr')
                    $data['message'] = "La demande a été envoyée avec succès!";
                elseif ($this->lang->lang() === 'es')
                    $data['message'] = 'La solicitud se ha enviado correctamente!';

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
                $this->email->to($this->sosoares_model->get_email(2));
                $this->email->subject('Candidatura');
                $this->email->message('Exmo.(s) do Grupo Sosoares,<br><br> Venho apresentar a V. Ex.as a minha candidatura para uma possível colaboração com a vossa empresa.<br><br>Segue uma breve apresentação da minha pessoa:<br><br>'.set_value("apresentacao").'<br><br>O(s) meu(s) contacto(s) é/são:<br><br>Telefone: '.set_value("telefone").'<br>Telemóvel: '.set_value("telemovel").'<br><br>Curriculum Vitae: <a href="'.base_url().'assets/uploads/candidaturas/'.$cv.'">'.$cv.'</a><br><br>Atenciosamente,<br><br>'.set_value("nome"));                  

                // Run some setup
                $this->email->initialize($config);
                $this->email->from($this->sosoares_model->get_email(2));
                $this->email->to(set_value("email"));
                $this->email->subject('Candidatura');

                if ($this->lang->lang() === 'pt')
                {
                    $this->email->message('A sua candidatura foi enviada com sucesso!<br><br>'.lang('nome').': '.set_value("nome").'<br>'.lang('telefone').': '.set_value("telefone").'<br>'.lang('telemovel').': '.set_value("telemovel").'<br>'.lang('apresentacao').': '.set_value("apresentacao").'<br><br>Com os melhores cumprimentos,<br><br>Sosoares');
                    $data['message'] = 'A candidatura foi enviada com sucesso!';
                }                    
                elseif ($this->lang->lang() === 'en')
                {
                    $this->email->message('The application was successfully sent!<br><br>'.lang('nome').': '.set_value("nome").'<br>'.lang('telefone').': '.set_value("telefone").'<br>'.lang('telemovel').': '.set_value("telemovel").'<br>'.lang('apresentacao').': '.set_value("apresentacao").'<br><br>Yours sincerely,<br><br>Sosoares');
                    $data['message'] = 'The application was successfully sent!';
                }                    
                elseif ($this->lang->lang() === 'fr')
                {   
                    $this->email->message('La demande a été envoyée avec succès!<br><br>'.lang('nome').': '.set_value("nome").'<br>'.lang('telefone').': '.set_value("telefone").'<br>'.lang('telemovel').': '.set_value("telemovel").'<br>'.lang('apresentacao').': '.set_value("apresentacao").'<br><br>Cordialement,<br><br>Sosoares');
                    $data['message'] = "La demande a été envoyée avec succès!";
                }                    
                elseif ($this->lang->lang() === 'es')
                {
                    $this->email->message('La solicitud se ha enviado correctamente!<br><br>'.lang('nome').': '.set_value("nome").'<br>'.lang('telefone').': '.set_value("telefone").'<br>'.lang('telemovel').': '.set_value("telemovel").'<br>'.lang('apresentacao').': '.set_value("apresentacao").'<br><br>Tuyo sinceramente,<br><br>Sosoares');
                    $data['message'] = 'La solicitud se ha enviado correctamente!';
                }  

                // Debug Email
                if (!$this->email->send()) {
                    die($this->cizacl->json_msg('error',$this->lang->line('attention'),$this->lang->line('email_error'),true));
                } else {
                    $data['page_style']= "vidro";
                    $data['current'] = 'grupo_sosoares';
                    $data['reset'] = TRUE;
                    $this->menu($data);

                    $this->load->view('pages/candidatura', $data);
                    $this->load->view('templates/footer');
                }      
            }
        } 
    }

    public function produto($id=null)
    {
        if (isset($_GET['search'])) {
            $this->pesquisa($_GET['search']);
        } else {
            $data['page_style'] = "vidro";        
            $data['current'] = 'produto';
            $data['id'] = $id;    
            $this->menu($data);

            if ($id != null) {
                $data['produto'] = $this->vidro_model->get_produto($id);

                $this->load->view('pages/vidro/produto', $data, $this->get_lang());
            } else {
                $data['produtos'] = $this->vidro_model->get_produtos();

                $this->load->view('pages/vidro/produtos', $data, $this->get_lang());
            }

            $this->load->view('templates/footer');
        }
    }

    public function servico($servico=null)
    {
        if (isset($_GET['search'])) {
            $this->pesquisa($_GET['search']);
        } else {
            $data['page_style']= "vidro";        
            $data['current'] = 'servico';
            $data['servico'] = $servico;
            $this->menu($data);

            if ($servico != null) {
                $data['servico'] = $this->vidro_model->get_servico($servico);

                $this->load->view('pages/servico', $data);
            } else {
                $data['servicos'] = $this->vidro_model->get_servicos();

                $this->load->view('pages/servicos', $data);
            }

            $this->load->view('templates/footer'); 
        }
    }

    public function area_tecnica($page=null)
    {
        if (isset($_GET['search'])) {
            $this->pesquisa($_GET['search']);
        } else {
            $data['page_style']= "vidro";        
            $data['current'] = 'area_tecnica';
            $data['page'] = $page;
            $this->menu($data);

            if ($page != null) {
                $data['area_tecnica'] = $this->vidro_model->get_area_tecnica($page);

                $this->load->view('pages/area_tecnica', $data);
            } else {
                $this->load->view('pages/area_tecnica', $data);
            }

            $this->load->view('templates/footer');
        }
    }

    public function apoio_cliente($page=null)
    {
        if (isset($_GET['search'])) {
            $this->pesquisa($_GET['search']);
        } else {
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
    }

    public function apoios_cliente()
    {
        if (isset($_GET['search'])) {
            $this->pesquisa($_GET['search']);
        } else {
            $data['page_style'] = "vidro";
            $data['current'] = 'apoios_cliente';    
            $this->menu($data);

            $data['pages'] = $this->sosoares_model->get_apoios(2);

            $this->load->view('pages/apoios_cliente', $data);
            $this->load->view('templates/footer');
        }
    }

    public function contactos()
    {
        if (isset($_GET['search'])) {
            $this->pesquisa($_GET['search']);
        } else {
            $data['page_style'] = "vidro";
            $data['page_title'] = "contactos";
            $data['current'] = 'contactos';
            $this->menu($data);

            $data['paises'] = file(base_url().'assets/uploads/paises.txt');
            $data['distritos'] = file(base_url().'assets/uploads/distritos.txt');
            $data['concelhos'] = file(base_url().'assets/uploads/concelhos.txt');
            $data['contactos'] = $this->sosoares_model->get_contactos(2);
            $data['contactos_mapa'] = $this->sosoares_model->get_contactos_mapa();
            $data['destinatario'] = $this->sosoares_model->get_destinatario(1);

            $this->load->view('pages/contactos', $data);
            $this->load->view('templates/footer', $data);
        }
    }

    public function contacto_recebido()
    {
        if (isset($_GET['search'])) {
            $this->pesquisa($_GET['search']);
        } else {      
            $data['page_style']= "vidro";
            $data['current'] = 'contacto_recebido';
            $this->menu($data);

            $data['page'] = $this->sosoares_model->get_page(22);

            $this->load->view('pages/confirmacao', $data);
            $this->load->view('templates/footer');
        }
    }

}