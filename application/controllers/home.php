<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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

        $this->load->model('sosoares_model');
	}
	
	
	public function index()
	{
		$data['background_image'] = $this->sosoares_model->get_background_image();

		$this->load->view('pages/home', $data, $this->lang->lang());
	}	
	
}