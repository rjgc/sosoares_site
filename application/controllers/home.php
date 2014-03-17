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
		/*$this->load->helper('image_helper');*/
 
		// load language file
		//$this->lang->load('indelague');
		
 	/*	$this->load->model('news_model');
        $this->load->model('products_model');
        $this->load->model('downloads_model');*/

        $this->load->helper('url');
/*
        $this->load->view('templates/newsletter');*/
    }
	 
	
	public function index()
	{
		
		/*$data['news'] = $this->news_model->get_news();
        $data['cat_arquitectural'] = $this->products_model->get_cats_arquitect();
        $data['cat_industrial'] = $this->products_model->get_cats_industrial();
        $data['applications'] = $this->products_model->get_applications();
        $data['type_mounting'] = $this->products_model->get_type_mounting();
        $data['thumbs'] = $this->products_model->get_thumbs();

        $data['type_mounting_indust'] = $this->products_model->get_category_by_app(1);
        $data['type_mounting_arc'] = $this->products_model->get_category_by_app(2);
        
        $data['downloads'] = $this->downloads_model->get_downloads_type();*/ 
        
        
        
        //print_r($data['thumbs']);

        // echo "<pre>";
        // print_r($data['thumbs']);
        // echo "</pre>";
	
	/*	$data['title'] = lang('indelague.home'); // Capitalize the first letter
	    $data['current'] = 'home';*/
		/*$this->load->view('templates/header', $data);
		$this->load->view('templates/nav', $data);
		$this->load->view('templates/carousel');*/
		$this->load->view('pages/home');
		//$this->load->view('templates/footer', $data);	
	}
	
	
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */