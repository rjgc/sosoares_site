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

		$this->lang->load('cizacl',$this->config->item('language'));

		if(!class_exists('CI_Cizacl'))

			show_error($this->lang->line('library_not_loaded'));

		$this->load->library('cizacl');

		$this->load->library('login');

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

					

					$this->db->update('user_profiles', array('user_profile_lastaccess ' => mktime()), 'user_profile_user_id = '.$row->user_id);

					

					$this->session->set_userdata($session);

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
						die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('login_progress'),false,base_url().'index.php/'.$lang.'/caixilharia/area_reservada'));
					else if (strpos($_SERVER['REQUEST_URI'], 'vidro'))
						die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('login_progress'),false,base_url().'index.php/'.$lang.'/vidro/area_reservada'));
					else if (strpos($_SERVER['REQUEST_URI'], 'extrusao'))
						die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('login_progress'),false,base_url().'index.php/'.$lang.'/extrusao/area_reservada'));
					else if (strpos($_SERVER['REQUEST_URI'], 'tratamento'))
						die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('login_progress'),false,base_url().'index.php/'.$lang.'/tratamento/area_reservada'));

				}

			}

			else

				die($this->cizacl->json_msg('error',$this->lang->line('attention'),$this->lang->line('user_not_found')));



		}

	}



	function registar()

	{ 

		$this->load->library('form_validation');

		
		$this->form_validation->set_rules('nome', 'Nome', 'required|min_length[5]|max_length[20]');

		$this->form_validation->set_rules('apelido', 'Apelido', 'required|min_length[5]|max_length[20]');

		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');

		$this->form_validation->set_rules('username', $this->lang->line('username'), 'required');

		$this->form_validation->set_rules('password', $this->lang->line('password'), 'required');

		if ($this->form_validation->run() == false)	{

			die($this->cizacl->json_msg('error',$this->lang->line('attention'),validation_errors("<p><span class=\"ui-icon ui-icon-alert\" style=\"float: left; margin-right: .3em;\"></span>","</p>"),true));

		}

		else	{

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
			$this->email->subject('Registo');
			$this->email->message('Exmo.(s) do Grupo Sosoares,<br><br>.<br><br>Gostaria de me registar no vosso site. Os meus dados pessoais são:<br><br>Nome: '.set_value("nome").'<br>Sobrenome: '.set_value("apelido").'<br>E-mail: '.set_value("email").'<br>Username: '.set_value("username").'<br>Password: '.set_value("password").'.<br><br>Atenciosamente,<br><br>'.set_value("nome").'');
			$this->email->send();

    // Debug Email
			if (!$this->email->send()) {
				echo $this->email->print_debugger();
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
					die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/caixilharia/home'));
				else if (strpos($_SERVER['REQUEST_URI'], 'vidro'))
					die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/vidro/home'));
				else if (strpos($_SERVER['REQUEST_URI'], 'extrusao'))
					die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/extrusao/home'));
				else if (strpos($_SERVER['REQUEST_URI'], 'tratamento'))
					die($this->cizacl->json_msg('success',$this->lang->line('wait'),$this->lang->line('email_progress'),false,base_url().'index.php/'.$lang.'/tratamento/home'));
			}     
		}

	}



	function logout()

	{

		$this->session->sess_destroy();

		redirect();

	}



}

