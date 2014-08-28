<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



/**

 * CIzACL

 * 

 * @copyright	Copyright (c) Schizzoweb Web Agency

 * @website		http://www.schizzoweb.com

 * @version		1.3

 * @revision	2013-06-14

 * 

 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR

 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,

 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE

 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER

 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,

 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN

 * THE SOFTWARE.

 **/



class Login extends CI_Controller {



	function __construct()

	{

		parent::__construct();

		$this->load->helper('language');

		$this->load->helper('url');

		$this->lang->load('cizacl',$this->config->item('language'));

		if(!class_exists('CI_Cizacl'))

			show_error($this->lang->line('library_not_loaded'));

		$this->load->library('cizacl');

		$this->load->library('login');

		$this->load->model('sosoares_model');

		$this->load->model('login_mdl');

		$this->load->model('cizacl_mdl');

	}



	function index()

	{

		$this->load->view('cizacl/login');

	}



	function check_login()

	{

		$this->load->library('form_validation');

		

		$this->form_validation->set_rules('username', $this->lang->line('username'), 'required');

		$this->form_validation->set_rules('password', $this->lang->line('password'), 'required');

		

		if ($this->form_validation->run() == false)	{

			die($this->cizacl->json_msg('error',$this->lang->line('attention'),validation_errors("<p><span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span>","</p>"),true));

		}

		else	{

			$this->load->model('login_mdl');

			$check_user_login = $this->login_mdl->check_user_login($this->input->post('username',true),$this->input->post('password',true));

			

			if($check_user_login)	{

				if($this->login_mdl->check_user_disabled($this->input->post('username',true),$this->input->post('password',true)))

					die($this->cizacl->json_msg('error',$this->lang->line('attention'),$this->lang->line('user_disabled'),true));

				elseif($this->login_mdl->check_user_block($this->input->post('username',true),$this->input->post('password',true)))	{

					die($this->cizacl->json_msg('error',$this->lang->line('attention'),$this->lang->line('user_block'),true));

				}

				else	{

					$this->db->from('users');

					$this->db->from('user_profiles');

					$this->db->from('cizacl_roles');

					$this->db->where('user_username',$this->input->post('username',true));

					$this->db->where('user_password',md5($this->input->post('password',true)));

					$this->db->where('user_id = user_profile_user_id');

					$this->db->where('user_cizacl_role_id = cizacl_role_id');

					$query = $this->db->get();

					$row = $query->row();



					// In caso di primo accesso

					$user_lastaccess = !empty($row->user_profile_lastaccess) ? $this->cizacl_mdl->mktime_format($row->user_profile_lastaccess) : '-';



					$session = array(

						'user_id'				=> $row->user_id,

						'user_name'				=> $row->user_profile_name,

						'user_surname'			=> $row->user_profile_surname,

						'user_lastaccess'		=> $user_lastaccess,

						'user_cizacl_role_id'	=> $row->user_cizacl_role_id

						);

					

					$this->db->update('user_profiles', array('user_profile_lastaccess ' => mktime()), 'user_profile_user_id = '.$row->user_id);

					

					$this->session->set_userdata($session);

					

					die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('login_progress'),false,site_url($row->cizacl_role_redirect)));

				}

			}

			else

				die($this->cizacl->json_msg('error',$this->lang->line('attention'),$this->lang->line('user_not_found')));



		}

	}

	

	function check_login_home()

	{

		$this->load->library('form_validation');

		

		$this->form_validation->set_rules('username', $this->lang->line('username'), 'required');

		$this->form_validation->set_rules('password', $this->lang->line('password'), 'required');

		

		if ($this->form_validation->run() == false)	{

			die($this->cizacl->json_msg('error',$this->lang->line('attention'),validation_errors("<p><span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span>","</p>"),true));

		}

		else	{

			$this->load->model('login_mdl');

			$check_user_login = $this->login_mdl->check_user_login($this->input->post('username',true),$this->input->post('password',true));

			

			if($check_user_login)	{

				if($this->login_mdl->check_user_disabled($this->input->post('username',true),$this->input->post('password',true)))

					die($this->cizacl->json_msg('error',$this->lang->line('attention'),$this->lang->line('user_disabled'),true));

				elseif($this->login_mdl->check_user_block($this->input->post('username',true),$this->input->post('password',true)))	{

					die($this->cizacl->json_msg('error',$this->lang->line('attention'),$this->lang->line('user_block'),true));

				}

				else	{

					$this->db->from('users');

					$this->db->from('user_profiles');

					$this->db->from('cizacl_roles');

					$this->db->where('user_username',$this->input->post('username',true));

					$this->db->where('user_password',md5($this->input->post('password',true)));

					$this->db->where('user_id = user_profile_user_id');

					$this->db->where('user_cizacl_role_id = cizacl_role_id');

					$query = $this->db->get();

					$row = $query->row();



					// In caso di primo accesso

					$user_lastaccess = !empty($row->user_profile_lastaccess) ? $this->cizacl_mdl->mktime_format($row->user_profile_lastaccess) : '-';


					$session = array(

						'user_id'				=> $row->user_id,

						'user_name'				=> $row->user_profile_name,

						'user_surname'			=> $row->user_profile_surname,

						'user_lastaccess'		=> $user_lastaccess,

						'user_cizacl_role_id'	=> $row->user_cizacl_role_id

						);



					$this->session->set_userdata($session);

					

					$this->db->update('user_profiles', array('user_profile_lastaccess ' => mktime()), 'user_profile_user_id = '.$row->user_id);


					$lang;

					if (strpos($_SERVER['REQUEST_URI'], 'pt'))
						$lang = 'pt';
					else if (strpos($_SERVER['REQUEST_URI'], 'en'))
						$lang = 'en';
					else if (strpos($_SERVER['REQUEST_URI'], 'fr'))
						$lang = 'fr';
					else if (strpos($_SERVER['REQUEST_URI'], 'es'))
						$lang = 'es';
					
					if (strpos($_SERVER['REQUEST_URI'], 'caixilharia'))
						die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('login_progress'),false,base_url().'index.php/'.$lang.'/caixilharia/area_privada'));
					else if (strpos($_SERVER['REQUEST_URI'], 'vidro'))
						die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('login_progress'),false,base_url().'index.php/'.$lang.'/vidro/area_privada'));
					else if (strpos($_SERVER['REQUEST_URI'], 'extrusao'))
						die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('login_progress'),false,base_url().'index.php/'.$lang.'/extrusao/area_privada'));
					else if (strpos($_SERVER['REQUEST_URI'], 'tratamento'))
						die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('login_progress'),false,base_url().'index.php/'.$lang.'/tratamento/area_privada'));
					else if (strpos($_SERVER['REQUEST_URI'], 'home'))
						die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('login_progress'),false,base_url().'index.php/'.$lang.'/caixilharia/area_privada'));

				}

			}

			else

				die($this->cizacl->json_msg('error',$this->lang->line('attention'),$this->lang->line('user_not_found')));



		}

	}



	function newsletter()

	{
		$this->load->library('form_validation');

		
		$this->form_validation->set_rules('nome', 'Nome', 'required|min_length[5]|max_length[50]');

		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');

		if ($this->form_validation->run() == false)	{

			die($this->cizacl->json_msg('error',$this->lang->line('attention'),validation_errors("<p><span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span>","</p>"),true));

		}

		else	{

			$data = array('nome' => set_value('nome'), 'email' => set_value('email'), 'activo' => '1');

			$this->db->insert('newsletter', $data);

			$lang;

			if (strpos($_SERVER['REQUEST_URI'], 'pt'))
				$lang = 'pt';
			else if (strpos($_SERVER['REQUEST_URI'], 'en'))
				$lang = 'en';
			else if (strpos($_SERVER['REQUEST_URI'], 'fr'))
				$lang = 'fr';
			else if (strpos($_SERVER['REQUEST_URI'], 'es'))
				$lang = 'es';

			if (strpos($_SERVER['REQUEST_URI'], 'caixilharia'))
				die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('newsletter_progress'),false,base_url().'index.php/'.$lang.'/caixilharia/home'));
			else if (strpos($_SERVER['REQUEST_URI'], 'vidro'))
				die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('newsletter_progress'),false,base_url().'index.php/'.$lang.'/vidro/home'));
			else if (strpos($_SERVER['REQUEST_URI'], 'extrusao'))
				die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('newsletter_progress'),false,base_url().'index.php/'.$lang.'/extrusao/home'));
			else if (strpos($_SERVER['REQUEST_URI'], 'tratamento'))
				die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('newsletter_progress'),false,base_url().'index.php/'.$lang.'/tratamento/home'));    
		}
	}



	function contactos()

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
		$this->form_validation->set_rules('pais', 'País', 'required|min_length[5]|max_length[50]');

		if ($_POST['pais'] == 'Portugal') 
		{
			$this->form_validation->set_rules('distrito', 'Distrito', 'required|min_length[5]|max_length[50]');
			$this->form_validation->set_rules('concelho', 'Concelho', 'required|min_length[5]|max_length[50]');
		}
		
		$this->form_validation->set_rules('assunto', 'Assunto', 'required|min_length[5]|max_length[50]');
		$this->form_validation->set_rules('mensagem', 'Mensagem', 'required|min_length[5]|max_length[500]');

		if($this->form_validation->run() == FALSE){

			die($this->cizacl->json_msg('error',$this->lang->line('attention'),validation_errors("<p><span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span>","</p>"),true));

		}
		else{

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
			$this->email->to($this->sosoares_model->get_email(1));
			$this->email->subject(set_value("assunto"));
			$this->email->message('Exmo.(s) do Grupo Sosoares,<br><br>'.set_value("mensagem").'<br><br>Os meus dados pessoais são:<br><br>Empresa: '.set_value("empresa").'<br>Cargo: '.set_value("cargo").'<br>Telefone: '.set_value("telefone").'<br>Fax: '.set_value("fax").'<br>Telemóvel: '.set_value("telemovel").'<br>Morada: '.set_value("morada").'<br>País: '.set_value("pais").'<br>Distrito: '.set_value("distrito").'<br>Concelho: '.set_value("concelho").'.<br><br>Venho por este meio informar que:<br>'.set_value("mensagem").'<br><br>Atenciosamente,<br><br>'.set_value("nome").'');

        	// Run some setup
			$this->email->initialize($config);
			$this->email->from($this->sosoares_model->get_email(1));
			$this->email->to(set_value("email"));
			$this->email->subject(set_value("assunto"));

			if (strpos($_SERVER['REQUEST_URI'], 'pt'))
				$this->email->message('Agradecemos o seu contacto. Ao qual responderemos o mais breve possível.<br><br>'.lang('nome').': '.set_value("nome").'<br>'.lang('empresa').': '.set_value("empresa").'<br>'.lang('cargo').': '.set_value("cargo").'<br>'.lang('telefone').': '.set_value("telefone").'<br>'.lang('fax').': '.set_value("fax").'<br>'.lang('telemovel').': '.set_value("telemovel").'<br>'.lang('morada').': '.set_value("morada").'<br>'.lang('pais').': '.set_value("pais").'<br>'.lang('distritos').': '.set_value("distrito").'<br>'.lang('concelho').': '.set_value("concelho").'<br>'.lang('mensagem').': '.set_value('mensagem').'<br><br>Com os melhores cumprimentos,<br><br>Sosoares');
			else if (strpos($_SERVER['REQUEST_URI'], 'en'))
				$this->email->message('Please contact us. To which we will respond as soon as possible.<br><br>'.lang('nome').': '.set_value("nome").'<br>'.lang('empresa').': '.set_value("empresa").'<br>'.lang('cargo').': '.set_value("cargo").'<br>'.lang('telefone').': '.set_value("telefone").'<br>'.lang('fax').': '.set_value("fax").'<br>'.lang('telemovel').': '.set_value("telemovel").'<br>'.lang('morada').': '.set_value("morada").'<br>'.lang('pais').': '.set_value("pais").'<br>'.lang('distritos').': '.set_value("distrito").'<br>'.lang('concelho').': '.set_value("concelho").'<br>'.lang('mensagem').': '.set_value('mensagem').'<br><br>Yours sincerely,<br><br>Sosoares');
			else if (strpos($_SERVER['REQUEST_URI'], 'fr'))
				$this->email->message('S´il vous plaît contactez-nous. À laquelle nous répondrons dès que possible.<br><br>'.lang('nome').': '.set_value("nome").'<br>'.lang('empresa').': '.set_value("empresa").'<br>'.lang('cargo').': '.set_value("cargo").'<br>'.lang('telefone').': '.set_value("telefone").'<br>'.lang('fax').': '.set_value("fax").'<br>'.lang('telemovel').': '.set_value("telemovel").'<br>'.lang('morada').': '.set_value("morada").'<br>'.lang('pais').': '.set_value("pais").'<br>'.lang('distritos').': '.set_value("distrito").'<br>'.lang('concelho').': '.set_value("concelho").'<br>'.lang('mensagem').': '.set_value('mensagem').'<br><br>Cordialement,<br><br>Sosoares');
			else if (strpos($_SERVER['REQUEST_URI'], 'es'))
				$this->email->message('Agradecemos o seu contacto. Ao calidad responderemos o mais breve possível.<br><br>'.lang('nome').': '.set_value("nome").'<br>'.lang('empresa').': '.set_value("empresa").'<br>'.lang('cargo').': '.set_value("cargo").'<br>'.lang('telefone').': '.set_value("telefone").'<br>'.lang('fax').': '.set_value("fax").'<br>'.lang('telemovel').': '.set_value("telemovel").'<br>'.lang('morada').': '.set_value("morada").'<br>'.lang('pais').': '.set_value("pais").'<br>'.lang('distritos').': '.set_value("distrito").'<br>'.lang('concelho').': '.set_value("concelho").'<br>'.lang('mensagem').': '.set_value('mensagem').'<br><br>Tuyo sinceramente,<br><br>Sosoares');

        	// Debug Email
			if (!$this->email->send()) {
				die($this->cizacl->json_msg('error',$this->lang->line('attention'),$this->lang->line('user_disabled'),true));
			} else {
				$lang;

				if (strpos($_SERVER['REQUEST_URI'], 'pt'))
					$lang = 'pt';
				else if (strpos($_SERVER['REQUEST_URI'], 'en'))
					$lang = 'en';
				else if (strpos($_SERVER['REQUEST_URI'], 'fr'))
					$lang = 'fr';
				else if (strpos($_SERVER['REQUEST_URI'], 'es'))
					$lang = 'es';

				if (strpos($_SERVER['REQUEST_URI'], 'caixilharia'))
					die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/caixilharia/contacto_recebido'));
				else if (strpos($_SERVER['REQUEST_URI'], 'vidro'))
					die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/vidro/contacto_recebido'));
				else if (strpos($_SERVER['REQUEST_URI'], 'extrusao'))
					die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/extrusao/contacto_recebido'));
				else if (strpos($_SERVER['REQUEST_URI'], 'tratamento'))
					die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/tratamento/contacto_recebido'));
			}      
		} 
	}



	function registar()

	{ 

		$this->load->library('form_validation');

		
		$this->form_validation->set_rules('nome', 'Nome', 'required|min_length[5]|max_length[50]');

		$this->form_validation->set_rules('morada', 'Morada', 'required|min_length[5]|max_length[100]');

		$this->form_validation->set_rules('codigo', 'Código Postal', 'required|numeric');

		$this->form_validation->set_rules('codigo2', 'Código Postal 2', 'required|numeric');

		$this->form_validation->set_rules('pais', 'País', 'required|min_length[5]|max_length[50]');

		$this->form_validation->set_rules('localidade', 'Localidade', 'required|min_length[5]|max_length[50]');

		if ($_POST['pais'] == 'Portugal') {
			$this->form_validation->set_rules('distrito', 'Distrito', 'required|min_length[5]|max_length[50]');

			$this->form_validation->set_rules('concelho', 'Concelho', 'required|min_length[5]|max_length[50]');
		}		

		$this->form_validation->set_rules('telefone', 'Telefone', 'required|numeric');

		$this->form_validation->set_rules('contribuinte', 'Contribuinte', 'required|numeric');

		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');

		$this->form_validation->set_rules('password', $this->lang->line('password'), 'required');

		$this->form_validation->set_rules('confirmar', 'Confirmar Password', 'required|matches[password]');

		if ($this->form_validation->run() == false)	{

			die($this->cizacl->json_msg('error',$this->lang->line('attention'),validation_errors("<p><span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span>","</p>"),true));

		}

		else	{

			$distrito;
			$concelho;
			$codigo;
			$serralharia;
			$vidraria;
			$armazenista;
			$arquitectura;
			$construtora;
			$cfinal;
			$outros;
			$idUser;

			if (set_value('distrito') == '') {
				$distrito = NULL;
				$concelho = NULL;
			}

			$codigo =  set_value('codigo')."-".set_value('codigo2');

			if (empty($_POST['serralharia']))
				$serralharia = ' ';
			else
				$serralharia = $_POST['serralharia'];

			if (empty($_POST['vidraria']))
				$vidraria = ' ';
			else
				$vidraria = $_POST['vidraria'];

			if (empty($_POST['armazenista']))
				$armazenista = ' ';
			else
				$armazenista = $_POST['armazenistas'];

			if (empty($_POST['arquitectura']))
				$arquitectura = ' ';
			else
				$arquitectura = $_POST['arquitectura'];

			if (empty($_POST['construtora']))
				$construtora = ' ';
			else
				$construtora = $_POST['construtora'];

			if (empty($_POST['cfinal']))
				$cfinal = ' ';
			else
				$cfinal = $_POST['cfinal'];

			if (empty($_POST['outros']))
				$outros = ' ';
			else
				$outros = $_POST['outros'];

			if (strpos(set_value('email'), '@sosoares')) 
			{
				$idUser = $this->db->query('select max(user_id) from users where user_id < 1000');
				$idUser++;
			}
			else
			{
				$idUser = $this->db->query('select max(user_id) from users where');
				$idUser++;
			}


			$data = array('user_id' => $idUser, 'user_username' => set_value('email'), 'user_password' => md5(set_value('password')), 'user_cizacl_role_id' => '2', 'user_auth' => NULL, 'user_auth_date' => NULL);

			$this->db->insert('users', $data);

			$data2 = array('user_profile_id' => $idUser, 'user_profile_user_id' => $idUser, 'user_profile_name' => set_value('nome'), 'user_profile_surname' => ' ', 'user_profile_email' => set_value('email'), 'user_profile_morada' => set_value('morada'), 'user_profile_codigo_postal' => $codigo, 'user_profile_pais' => set_value('pais'), 'user_profile_localidade' => set_value('localidade'), 'user_profile_distrito' => $distrito, 'user_profile_concelho' => $concelho, 'user_profile_telefone' => set_value('telefone'), 'user_profile_contribuinte' => set_value('contribuinte'), 'user_profile_serralharia' => $serralharia, 'user_profile_vidraria' => $vidraria, 'user_profile_armazenista' => $armazenista, 'user_profile_arquitectura' => $arquitectura, 'user_profile_construtora' => $construtora, 'user_profile_cliente_final' => $cfinal, 'user_profile_outros' => $outros, 'user_profile_user_status_code' => '1', 'user_profile_lastaccess' => NULL, 'user_profile_added' => NULL, 'user_profile_edited' => NULL, 'user_profile_added_by' => '1', 'user_profile_edited_by' => NULL);

			$this->db->insert('user_profiles', $data2);

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
			$this->email->to($this->sosoares_model->get_email(3));
			$this->email->subject('Registo');
			$this->email->message('Exmo.(s) do Grupo Sosoares,<br><br>Gostaria de me registar no vosso site. Os meus dados pessoais são:<br><br>Nome: '.set_value("nome").'<br>Morada: '.set_value("morada").'<br>Código Postal: '.$codigo.'<br>País: '.set_value("pais").'<br>Localidade: '.set_value("localidade").'<br>Concelho: '.set_value("concelho").'<br>Distrito: '.set_value("distrito").'<br>Telefone: '.set_value("telefone").'<br>Nº de Contribuinte: '.set_value("contribuinte").'<br>Serralharia: '.$serralharia.'<br>Vidraria: '.$vidraria.'<br>Armazenista: '.$armazenista.'<br>Arquitectura: '.$arquitectura.'<br>Construtora: '.$construtora.'<br>Cliente Final: '.$cfinal.'<br>Outros: '.$outros.'<br>Username: '.set_value("email").'<br>Password: '.set_value("password").'<br><br>Atenciosamente,<br><br>'.set_value("nome"));
			
			// Run some setup
			$this->email->initialize($config);
			$this->email->from($this->sosoares_model->get_email(3));
			$this->email->to(set_value("email"));
			$this->email->subject('Registo');

			if (strpos($_SERVER['REQUEST_URI'], 'pt'))
				$this->email->message('Caro '.set_value('nome').',<br><br>O seu pedido de registo foi submetido, encontrando-se pendente.<br>Receberá um e-mail logo que o seu registo seja aprovado.<br><br> Dados de registo:<br><br>'.lang('nome').': '.set_value("nome").'<br>'.lang('morada').': '.set_value("morada").'<br>'.lang('codigo').': '.$codigo.'<br>'.lang('pais').': '.set_value("pais").'<br>'.lang('localidade').': '.set_value("localidade").'<br>'.lang('concelho').': '.set_value("concelho").'<br>'.lang('distrito').': '.set_value("distrito").'<br>'.lang('telefone').': '.set_value("telefone").'<br>'.lang('contribuinte').': '.set_value("contribuinte").'<br>'.lang('serralharia').': '.$serralharia.'<br>'.lang('vidraria').': '.$vidraria.'<br>'.lang('armazenista').': '.$armazenista.'<br>'.lang('arquitectura').': '.$arquitectura.'<br>'.lang('construtora').': '.$construtora.'<br>'.lang('cfinal').': '.$cfinal.'<br>'.lang('outros').': '.$outros.'<br>Username: '.set_value("email").'<br>Password: '.set_value("password").'<br><br>Com os melhores cumprimentos,<br><br>Sosoares');
			else if (strpos($_SERVER['REQUEST_URI'], 'en'))
				$this->email->message('Dear '.set_value('nome').',<br><br>Your application for registration was submitted, and is now pending.<br>You will receive an email once your registration is approved.<br><br> Registration data:<br><br>'.lang('nome').': '.set_value("nome").'<br>'.lang('morada').': '.set_value("morada").'<br>'.lang('codigo').': '.$codigo.'<br>'.lang('pais').': '.set_value("pais").'<br>'.lang('localidade').': '.set_value("localidade").'<br>'.lang('concelho').': '.set_value("concelho").'<br>'.lang('distrito').': '.set_value("distrito").'<br>'.lang('telefone').': '.set_value("telefone").'<br>'.lang('contribuinte').': '.set_value("contribuinte").'<br>'.lang('serralharia').': '.$serralharia.'<br>'.lang('vidraria').': '.$vidraria.'<br>'.lang('armazenista').': '.$armazenista.'<br>'.lang('arquitectura').': '.$arquitectura.'<br>'.lang('construtora').': '.$construtora.'<br>'.lang('cfinal').': '.$cfinal.'<br>'.lang('outros').': '.$outros.'<br>Username: '.set_value("email").'<br>Password: '.set_value("password").'<br><br>Yours sincerely,<br><br>Sosoares');
			else if (strpos($_SERVER['REQUEST_URI'], 'fr'))
				$this->email->message('Cher '.set_value('nome').',<br><br>Votre demande d´enregistrement a été soumis, et est actuellement en instance.<br>Vous recevrez un e-mail une fois votre inscription approuvée.<br><br> Données de l´enregistrement:<br><br>'.lang('nome').': '.set_value("nome").'<br>'.lang('morada').': '.set_value("morada").'<br>'.lang('codigo').': '.$codigo.'<br>'.lang('pais').': '.set_value("pais").'<br>'.lang('localidade').': '.set_value("localidade").'<br>'.lang('concelho').': '.set_value("concelho").'<br>'.lang('distrito').': '.set_value("distrito").'<br>'.lang('telefone').': '.set_value("telefone").'<br>'.lang('contribuinte').': '.set_value("contribuinte").'<br>'.lang('serralharia').': '.$serralharia.'<br>'.lang('vidraria').': '.$vidraria.'<br>'.lang('armazenista').': '.$armazenista.'<br>'.lang('arquitectura').': '.$arquitectura.'<br>'.lang('construtora').': '.$construtora.'<br>'.lang('cfinal').': '.$cfinal.'<br>'.lang('outros').': '.$outros.'<br>Username: '.set_value("email").'<br>Password: '.set_value("password").'<br><br>Cordialement,<br><br>Sosoares');
			else if (strpos($_SERVER['REQUEST_URI'], 'es'))
				$this->email->message('Querido(a) '.set_value('nome').',<br><br>Se presentó su solicitud de registro, y ahora está pendiente.<br>Usted recibirá un correo electrónico una vez que se apruebe su registro.<br><br> Datos registrales:<br><br>'.lang('nome').': '.set_value("nome").'<br>'.lang('morada').': '.set_value("morada").'<br>'.lang('codigo').': '.$codigo.'<br>'.lang('pais').': '.set_value("pais").'<br>'.lang('localidade').': '.set_value("localidade").'<br>'.lang('concelho').': '.set_value("concelho").'<br>'.lang('distrito').': '.set_value("distrito").'<br>'.lang('telefone').': '.set_value("telefone").'<br>'.lang('contribuinte').': '.set_value("contribuinte").'<br>'.lang('serralharia').': '.$serralharia.'<br>'.lang('vidraria').': '.$vidraria.'<br>'.lang('armazenista').': '.$armazenista.'<br>'.lang('arquitectura').': '.$arquitectura.'<br>'.lang('construtora').': '.$construtora.'<br>'.lang('cfinal').': '.$cfinal.'<br>'.lang('outros').': '.$outros.'<br>Username: '.set_value("email").'<br>Password: '.set_value("password").'<br><br>Tuyo sinceramente,<br><br>Sosoares');

    		// Debug Email
			if (!$this->email->send()) {
				die($this->cizacl->json_msg('error',$this->lang->line('attention'),$this->lang->line('email_error'),true));
			} else {
				$lang;

				if (strpos($_SERVER['REQUEST_URI'], 'pt'))
					$lang = 'pt';
				else if (strpos($_SERVER['REQUEST_URI'], 'en'))
					$lang = 'en';
				else if (strpos($_SERVER['REQUEST_URI'], 'fr'))
					$lang = 'fr';
				else if (strpos($_SERVER['REQUEST_URI'], 'es'))
					$lang = 'es';

				if (strpos($_SERVER['REQUEST_URI'], 'caixilharia'))
					die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/caixilharia/registado'));
				else if (strpos($_SERVER['REQUEST_URI'], 'vidro'))
					die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/vidro/registado'));
				else if (strpos($_SERVER['REQUEST_URI'], 'extrusao'))
					die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/extrusao/registado'));
				else if (strpos($_SERVER['REQUEST_URI'], 'tratamento'))
					die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/tratamento/registado'));
			}     
		}

	}



	function recuperar_password()

	{ 

		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');

		if ($this->form_validation->run() == false)	{

			die($this->cizacl->json_msg('error',$this->lang->line('attention'),validation_errors("<p><span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span>","</p>"),true));

		}

		else	{

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

			$data = $this->sosoares_model->recuperar_password(set_value('email'));
			$url;

			if (strpos($_SERVER['REQUEST_URI'], 'caixilharia'))
				$url = site_url('caixilharia/alterar_password?password='.$data['user_password']);
			else if (strpos($_SERVER['REQUEST_URI'], 'vidro'))
				$url = site_url('vidro/alterar_password?password='.$data['user_password']);
			else if (strpos($_SERVER['REQUEST_URI'], 'extrusao'))
				$url = site_url('extrusao/alterar_password?password='.$data['user_password']);
			else if (strpos($_SERVER['REQUEST_URI'], 'tratamento'))
				$url = site_url('tratamento/alterar_password?password='.$data['user_password']);

    		// Run some setup
			$this->email->initialize($config);
			$this->email->from($this->sosoares_model->get_email(3));
			$this->email->to(set_value("email"));
			$this->email->subject($this->sosoares_model->get_email(3));

			if (strpos($_SERVER['REQUEST_URI'], 'pt'))
				$this->email->message('Viva,<br><br>Alguém recentemente pediu para relembrar a sua password. Caso tenha sido você aceda a este link: <a href="'.$url.'">Clique aqui</a><br><br>Caso não tenha sido você ignore este email e elimine-o.<br><br>Para manter a sua conta segura não reencaminhe este email para ninguém.<br><br>Atenciosamente,<br><br>Grupo Sosoares');
			else if (strpos($_SERVER['REQUEST_URI'], 'en'))
				$this->email->message('Viva,<br><br>Someone recently asked to remember your password. If you have been you click on this link: <a href="'.$url.'">Click here</a><br><br>If not you ignore this email and delete it.<br><br>To keep your account secure not forwards this email to anyone.<br><br>Kind regards,<br><br>Grupo Sosoares');
			else if (strpos($_SERVER['REQUEST_URI'], 'fr'))
				$this->email->message('Viva,<br><br>Quelqu´un a récemment demandé à vous souvenir de votre mot de passe. Si vous avez été vous cliquez sur ce lien: <a href="'.$url.'">Cliquez ici</a><br><br>Si non, vous ignorez ce message et le supprimer.<br><br>Pour garder votre compte sécurisé pas avant cet e-mail à n´importe qui.<br><br>Cordialement,<br><br>Grupo Sosoares');
			else if (strpos($_SERVER['REQUEST_URI'], 'es'))
				$this->email->message('Viva,<br><br>Alguien le preguntó recientemente a recordar su contraseña. Si usted ha estado hace clic en este enlace: <a href="'.$url.'">Haga clic aquí</a><br><br>Si no se pasa por alto este correo electrónico y borre.<br><br>Para mantener tu cuenta segura no reenvía este email a cualquier persona.<br><br>Un cordial saludo,<br><br>Grupo Sosoares');
			
    		// Debug Email
			if (!$this->email->send()) {
				die($this->cizacl->json_msg('error',$this->lang->line('attention'),$this->lang->line('user_disabled'),true));
			} else {
				$lang;

				if (strpos($_SERVER['REQUEST_URI'], 'pt'))
					$lang = 'pt';
				else if (strpos($_SERVER['REQUEST_URI'], 'en'))
					$lang = 'en';
				else if (strpos($_SERVER['REQUEST_URI'], 'fr'))
					$lang = 'fr';
				else if (strpos($_SERVER['REQUEST_URI'], 'es'))
					$lang = 'es';

				if (strpos($_SERVER['REQUEST_URI'], 'caixilharia'))
					die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/caixilharia/password_recuperada'));
				else if (strpos($_SERVER['REQUEST_URI'], 'vidro'))
					die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/vidro/password_recuperada'));
				else if (strpos($_SERVER['REQUEST_URI'], 'extrusao'))
					die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/extrusao/password_recuperada'));
				else if (strpos($_SERVER['REQUEST_URI'], 'tratamento'))
					die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/tratamento/password_recuperada'));
			}     
		}

	}



	function alterar_password()

	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('password', $this->lang->line('password'), 'required');

		$this->form_validation->set_rules('confirmar', 'Confirmar Password', 'required|matches[password]');

		if ($this->form_validation->run() == false)	{

			die($this->cizacl->json_msg('error',$this->lang->line('attention'),validation_errors("<p><span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span>","</p>"),true));

		}

		else	{

			$data = array(
				'user_password' => md5(set_value('password'))
				);

			$this->db->where('user_password', $_SESSION['old_password']);
			$this->db->update('users', $data); 
			
			$lang;

			if (strpos($_SERVER['REQUEST_URI'], 'pt'))
				$lang = 'pt';
			else if (strpos($_SERVER['REQUEST_URI'], 'en'))
				$lang = 'en';
			else if (strpos($_SERVER['REQUEST_URI'], 'fr'))
				$lang = 'fr';
			else if (strpos($_SERVER['REQUEST_URI'], 'es'))
				$lang = 'es';

			if (strpos($_SERVER['REQUEST_URI'], 'caixilharia'))
				die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('password_progress'),false,base_url().'index.php/'.$lang.'/caixilharia/password_alterada'));
			else if (strpos($_SERVER['REQUEST_URI'], 'vidro'))
				die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('password_progress'),false,base_url().'index.php/'.$lang.'/vidro/password_alterada'));
			else if (strpos($_SERVER['REQUEST_URI'], 'extrusao'))
				die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('password_progress'),false,base_url().'index.php/'.$lang.'/extrusao/password_alterada'));
			else if (strpos($_SERVER['REQUEST_URI'], 'tratamento'))
				die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('password_progress'),false,base_url().'index.php/'.$lang.'/tratamento/password_alterada'));

		}
	}



	function editar_perfil()

	{ 

		$this->load->library('form_validation');

		
		$this->form_validation->set_rules('nome', 'Nome', 'required|min_length[5]|max_length[50]');

		$this->form_validation->set_rules('morada', 'Morada', 'required|min_length[5]|max_length[100]');

		$this->form_validation->set_rules('codigo', 'Código Postal', 'required|numeric');

		$this->form_validation->set_rules('codigo2', 'Código Postal 2', 'required|numeric');

		$this->form_validation->set_rules('pais', 'País', 'required|min_length[5]|max_length[50]');

		$this->form_validation->set_rules('localidade', 'Localidade', 'required|min_length[5]|max_length[50]');

		if ($_POST['pais'] == 'Portugal') {
			$this->form_validation->set_rules('distrito', 'Distrito', 'required|min_length[5]|max_length[50]');

			$this->form_validation->set_rules('concelho', 'Concelho', 'required|min_length[5]|max_length[50]');
		}		

		$this->form_validation->set_rules('telefone', 'Telefone', 'required|numeric');

		$this->form_validation->set_rules('contribuinte', 'Contribuinte', 'required|numeric');

		if ($this->form_validation->run() == false)	{

			die($this->cizacl->json_msg('error',$this->lang->line('attention'),validation_errors("<p><span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span>","</p>"),true));

		}

		else	{

			$distrito;
			$concelho;
			$codigo;
			$serralharia;
			$vidraria;
			$armazenista;
			$arquitectura;
			$construtora;
			$cfinal;
			$outros;
			$idUser;

			if (set_value('distrito') == '') {
				$distrito = NULL;
				$concelho = NULL;
			}

			$codigo =  set_value('codigo')."-".set_value('codigo2');

			if (empty($_POST['serralharia']))
				$serralharia = ' ';
			else
				$serralharia = $_POST['serralharia'];

			if (empty($_POST['vidraria']))
				$vidraria = ' ';
			else
				$vidraria = $_POST['vidraria'];

			if (empty($_POST['armazenista']))
				$armazenista = ' ';
			else
				$armazenista = $_POST['armazenistas'];

			if (empty($_POST['arquitectura']))
				$arquitectura = ' ';
			else
				$arquitectura = $_POST['arquitectura'];

			if (empty($_POST['construtora']))
				$construtora = ' ';
			else
				$construtora = $_POST['construtora'];

			if (empty($_POST['cfinal']))
				$cfinal = ' ';
			else
				$cfinal = $_POST['cfinal'];

			if (empty($_POST['outros']))
				$outros = ' ';
			else
				$outros = $_POST['outros'];


			$data2 = array('user_profile_id' => $_SESSION["profile"]["user_profile_id"], 'user_profile_user_id' => $_SESSION["profile"]["user_profile_user_id"], 'user_profile_name' => set_value('nome'), 'user_profile_surname' => ' ', 'user_profile_email' => set_value('email'), 'user_profile_morada' => set_value('morada'), 'user_profile_codigo_postal' => $codigo, 'user_profile_pais' => set_value('pais'), 'user_profile_localidade' => set_value('localidade'), 'user_profile_distrito' => $distrito, 'user_profile_concelho' => $concelho, 'user_profile_telefone' => set_value('telefone'), 'user_profile_contribuinte' => set_value('contribuinte'), 'user_profile_serralharia' => $serralharia, 'user_profile_vidraria' => $vidraria, 'user_profile_armazenista' => $armazenista, 'user_profile_arquitectura' => $arquitectura, 'user_profile_construtora' => $construtora, 'user_profile_cliente_final' => $cfinal, 'user_profile_outros' => $outros, 'user_profile_user_status_code' => '1', 'user_profile_lastaccess' => NULL, 'user_profile_added' => NULL, 'user_profile_edited' => NULL, 'user_profile_added_by' => '1', 'user_profile_edited_by' => NULL);

			$this->db->update('user_profiles', $data2);


			$lang;

			if (strpos($_SERVER['REQUEST_URI'], 'pt'))
				$lang = 'pt';
			else if (strpos($_SERVER['REQUEST_URI'], 'en'))
				$lang = 'en';
			else if (strpos($_SERVER['REQUEST_URI'], 'fr'))
				$lang = 'fr';
			else if (strpos($_SERVER['REQUEST_URI'], 'es'))
				$lang = 'es';

			if (strpos($_SERVER['REQUEST_URI'], 'caixilharia'))
				die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/caixilharia/area_privada'));
			else if (strpos($_SERVER['REQUEST_URI'], 'vidro'))
				die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/vidro/area_privada'));
			else if (strpos($_SERVER['REQUEST_URI'], 'extrusao'))
				die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/extrusao/area_privada'));
			else if (strpos($_SERVER['REQUEST_URI'], 'tratamento'))
				die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/tratamento/area_privada'));    
		}

	}



	function logout()

	{

		$this->session->sess_destroy();

		redirect();

	}



}

