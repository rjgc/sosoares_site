<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

ini_set("max_execution_time", "300");
ini_set("max_input_time", "600");
ini_set("memory_limit", "256M");
ini_set("post_max_size", "512M");
ini_set("upload_max_filesize", "128M");

header('Pragma: no-cache');
header('Cache-Control: private, no-cache');
header('Content-Disposition: inline; filename="files.json"');
header('X-Content-Type-Options: nosniff');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: OPTIONS, HEAD, GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: X-File-Name, X-File-Type, X-File-Size');

class Mediagest extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
		$this->load->library('image_CRUD');
		$this->load->library('session');
	}

	function _admin_output($output = null)
	{

		$this->load->view('mediagest/mediagest',$output);
	}

	function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}

	function _form_tabs()
	{
        $tabs = $this->session->userdata('myproject_film_tabs'); // retrieve arrays from session data

        // build the tabs
        $html = '
        <!-- tabs -->
        <ul class="nav nav-tabs" data-toggle="myproject.tabs.fields_box">'. "\n";
        	$i = 0;

        	foreach ($tabs as $tab) {
        		$html .= '<li';
        		if ($i == 0){$html .= ' class="active"'; $i = 1;}
        		$html .= '><a href="#' . implode(",", array_slice($tab,1)) . '">'. $tab[0] . '</a></li>' . "\n";
        	}

        	$html .= '</ul>
        	<!-- #/tabs -->';

        	return $html;
        }

    // por defeito abre a lista de obras
        function index()
        {
        	try{
        		$crud = new grocery_CRUD();

        		$this->load->model('caixilharia_model');

        		$crud->set_table('obras');
        		$crud->set_subject('Obras');
        		$crud->columns('nome_pt','descricao_pt', 'localizacao');
        		$crud->order_by('ordem', 'asc');

        		$crud->field_type('ordem', 'hidden');
        		$crud->display_as('descricao_pt', 'Descrição pt')->display_as('descricao_en', 'Descrição en')->display_as('descricao_fr', 'Descrição fr')->display_as('descricao_es', 'Descrição es')->display_as('localizacao', 'Localização');

        		$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es', 'localizacao');
        		$crud->field_type('descricao_pt', 'text')->field_type('descricao_en', 'text')->field_type('descricao_fr', 'text')->field_type('descricao_es', 'text');

        		$crud->set_relation_n_n('produtos_aluminio', 'produtos_aluminio_obras', 'produtos_aluminio', 'obra_id', 'produto_aluminio_id', 'nome_pt', 'priority');

        		$crud->callback_before_insert(array($this, 'callback_before_insert'));

        		$crud->add_action('Fotos', 'http://www.indelague.pt/assets/uploads/photo.png', 'mediagest/galeria', 'iframe');
        		$crud->add_action('down', 'http://www.indelague.pt/assets/indelague/img/sort_down_green.png', 'mediagest/change_order', 'order-position-product-down');
        		$crud->add_action('up', 'http://www.indelague.pt/assets/indelague/img/sort_up_green.png', 'mediagest/change_order', 'order-position-product-up');

        		$output = $crud->render();

        		$data['titulo'] = 'Obras';
        		$data['sub-titulo'] = 'Faça aqui a gestão das Obras';

        		$this->load->view('mediagest/header',  (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

        		$this->_admin_output($output);
        	}catch(Exception $e){
        		show_error($e->getMessage().' --- '.$e->getTraceAsString());
        	}
        }

        function galeria()
        {
        	$image_crud = new image_CRUD();

        	$image_crud->set_table('obras_gallery');
        	$image_crud->set_primary_key_field('id');
        	$image_crud->set_url_field('url');

        	$image_crud->set_relation_field('id_obra')->set_ordering_field('priority')->set_image_path('assets/uploads/obras');

        	$output = $image_crud->render();

        	$this->_example_output($output);
        }

        function change_order()
        {
        	if (isset($_POST['eventRow']) && isset($_POST['clickEl']) && isset($_POST['el'])) {
        		$this->load->model('caixilharia_model');
        		$event = trim($_POST['eventRow']);
        		$clickEl = intval($_POST['clickEl']);
        		$el = intval($_POST['el']);
        		if ($event && $clickEl && $el) {
        			if ($this->caixilharia_model->change_order($event, $clickEl, $el)) {
        				exit("success");
        			} else {
        				exit("error1");
        			}
        			$this->caixilharia_model->change_order($event, $clickEl, $el);
        		} else {
        			exit("error2");
        		}
        	} else {
        		exit("error3");
        	}
        }


    //DEFINICOES

    //IMAGEM DE FUNDO

        function background_image_management()
        {
        	$crud = new grocery_CRUD();

        	$crud->unset_delete();
        	$crud->unset_add();

        	$crud->set_table('background_image');
        	$crud->set_subject('Background Image');
        	$crud->columns('foto');

        	$crud->required_fields('foto');

        	$crud->set_field_upload('foto', 'assets/uploads/background');

        	$output = $crud->render();

        	$data['titulo'] = 'Imagem de Fundo';
        	$data['sub-titulo'] = 'Faça aqui a gestão da Imagem de Fundo';

        	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

        	$this->_admin_output($output);
        }


    // BANNERS

    function banners_management()
    {
        $crud = new grocery_CRUD();

        $crud->set_table('banners');
        $crud->set_subject('Banners');
        $crud->columns('nome_pt', 'banner', 'id_categoria_banner');

        $crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'banner', 'id_categoria_banner');
        $crud->display_as('id_categoria_banner', 'Categoria')->display_as('id_banner_obra', 'Obra')->display_as('id_banner_noticia', 'Notícia');

        $crud->set_field_upload('banner', 'assets/uploads/banners');

        $crud->set_relation('id_categoria_banner', 'categorias', 'nome');
        /*$crud->set_relation_n_n('id_banner_obra', 'banners_obras', 'obras', 'id_banner', 'id_obra', 'nome_pt', 'priority');
        $crud->set_relation_n_n('id_banner_noticia', 'banners_noticias', 'noticias', 'id_banner', 'id_noticia', 'titulo_pt', 'priority');*/

        $crud->callback_after_upload(array($this,'callback_after_upload_banners'));

        $output = $crud->render();

        $data['titulo'] = 'Banners';
        $data['sub-titulo'] = 'Faça aqui a gestão dos Banners';

        $this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

        $this->_admin_output($output);
    }

        function callback_after_upload_banners($uploader_response, $field_info, $files_to_upload)
        {
        	$this->load->library('image_moo');

        	$file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name;

    //thumb
        	$this->image_moo->load($file_uploaded)->resize_crop(2000, 600)->save_pa($prepend="thumb_", $append="", $overwrite=true);

    //refold
        	rename($field_info->upload_path."/"."thumb_".$uploader_response[0]->name, "assets/uploads/banners/thumb/".$uploader_response[0]->name);

        	return true;
        }


    //NEWSLETTER

        function newsletter_management()
        {
        	$crud = new grocery_CRUD();

        	$crud->set_table('newsletter');
        	$crud->set_subject('Newsletter');

        	$crud->unset_add();

        	$crud->add_action('Export', 'http://cdn-img.easyicon.net/png/5295/529568.png', 'mediagest/export_to_csv');

        	$output = $crud->render();

        	$data['titulo'] = 'Newsletter';
        	$data['sub-titulo'] = 'Faça aqui a gestão da Newsletter';

        	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

        	$this->_admin_output($output);
        }

        function export_to_csv()
        {
        	/*******EDIT LINES 3-8*******/
        $DB_Server = "critecns.com"; //MySQL Server
        $DB_Username = "crtns25g_gestor"; //MySQL Username
        $DB_Password = "rGGST}T6vm=@";             //MySQL Password
        $DB_DBName = "crtns25g_sosoares";         //MySQL Database Name
        $DB_TBLName = "newsletter"; //MySQL Table Name
        $filename = "newsletter";         //File Name
        /*******YOU DO NOT NEED TO EDIT ANYTHING BELOW THIS LINE*******/

        //create MySQL connection
        $sql = "Select * from $DB_TBLName";

        $Connect = @mysql_connect($DB_Server, $DB_Username, $DB_Password)
        or die("Couldn't connect to MySQL:<br>" . mysql_error() . "<br>" . mysql_errno());

        //select database
        $Db = @mysql_select_db($DB_DBName, $Connect)
        or die("Couldn't select database:<br>" . mysql_error(). "<br>" . mysql_errno());

        //execute query
        $result = @mysql_query($sql,$Connect)
        or die("Couldn't execute query:<br>" . mysql_error(). "<br>" . mysql_errno());
        $file_ending = "xls";

        //header info for browser
        header("Content-Type: application/xls");

        header("Content-Disposition: attachment; filename=$filename.xls");

        header("Pragma: no-cache");

        header("Expires: 0");

        /*******Start of Formatting for Excel*******/

        //define separator (defines columns in excel & tabs in word)
        $sep = "\t"; //tabbed character

        //start of printing column names as names of MySQL fields
        for ($i = 0; $i < mysql_num_fields($result); $i++) {
        	echo mysql_field_name($result,$i) . "\t";
        }

        print("\n");
        //end of printing column names

        //start while loop to get data
        while($row = mysql_fetch_row($result))
        {
        	$schema_insert = "";

        	for($j=0; $j<mysql_num_fields($result);$j++)
        	{
        		if(!isset($row[$j]))
        			$schema_insert .= "NULL".$sep;
        		elseif ($row[$j] != "")
        			$schema_insert .= "$row[$j]".$sep;
        		else
        			$schema_insert .= "".$sep;
        	}

        	$schema_insert = str_replace($sep."$", "", $schema_insert);

        	$schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);

        	$schema_insert .= "\t";

        	print(trim($schema_insert));

        	print "\n";
        }
    }


    //DESTINATARIOS

    function destinatarios_management()
    {
    	$crud = new grocery_CRUD();

    	$crud->set_table('destinatarios');
    	$crud->set_subject('Destinatários');

    	$crud->required_fields('email', 'id_categoria');
    	$crud->display_as('id_categoria', 'Categoria');

    	$crud->set_relation('id_categoria', 'categoria_destinatario', 'nome');

    	$output = $crud->render();

    	$data['titulo'] = 'Destinatários';
    	$data['sub-titulo'] = 'Faça aqui a gestão dos Destinatários';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }


    // ÁREAS COMERCIAIS

    function areas_comerciais_management()
    {
    	$crud = new grocery_CRUD();

    	$crud->set_table('areas_comerciais');
    	$crud->set_subject('Áreas Comerciais');

    	$crud->required_fields('titulo', 'morada', 'nome', 'telefone', 'email', 'latitude', 'longitude');

    	$output = $crud->render();

    	$data['titulo'] = 'Áreas Comerciais';
    	$data['sub-titulo'] = 'Faça aqui a gestão das Áreas Comerciais';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }


    //CONTACTOS

    function contactos_management()
    {
    	$crud = new grocery_CRUD();

    	$crud->set_table('contactos');
    	$crud->set_subject('Contactos');
    	$crud->columns('id_categoria', 'nome_departamento_pt', 'email', 'morada', 'codigo_postal', 'telefone', 'fax');

    	$crud->required_fields('nome_departamento_pt', 'nome_departamento_en', 'nome_departamento_fr', 'nome_departamento_es', 'email', 'morada', 'codigo_postal', 'telefone', 'id_seccao');
    	$crud->display_as('id_categoria', 'Categoria');

    	$crud->set_relation('id_categoria', 'categorias', 'nome');

    	$output = $crud->render();

    	$data['titulo'] = 'Contactos';
    	$data['sub-titulo'] = 'Faça aqui a gestão dos Contactos';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }


    //NOTICIAS

    function noticias_management()
    {
    	$crud = new grocery_CRUD();

    	$crud->set_table('noticias');
    	$crud->set_subject('Notícias');
    	$crud->columns('data_noticia', 'titulo_pt', 'texto_pt', 'foto');
    	$crud->display_as('data_noticia', 'Data');

    	$crud->required_fields('data', 'titulo_pt', 'titulo_en', 'titulo_fr', 'titulo_es', 'texto_pt', 'texto_en', 'texto_fr', 'texto_es');

    	$crud->set_field_upload('foto', 'assets/uploads/noticias');

    	$crud->callback_after_upload(array($this,'callback_after_upload_noticia'));

    	$output = $crud->render();

    	$data['titulo'] = 'Notícias';
    	$data['sub-titulo'] = 'Faça aqui a gestão das Notícias';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }

    function callback_after_upload_noticia($uploader_response, $field_info, $files_to_upload)
    {
    	$this->load->library('image_moo');

    	$file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name;

    //thumb
    	$this->image_moo->load($file_uploaded)->resize_crop(200, 133)->save_pa($prepend="thumb_", $append="", $overwrite=true);

    //refold
    	rename($field_info->upload_path."/"."thumb_".$uploader_response[0]->name, "assets/uploads/noticias/thumb/".$uploader_response[0]->name);

    	return true;
    }


    //PRODUTOS

    //PRODUTOS ALUMINIO

    function produtos_aluminio_management()
    {
    	$crud = new grocery_CRUD();

    	$this->load->model('caixilharia_model');

    	$crud->set_table('produtos_aluminio');
    	$crud->set_subject('Produtos Aluminio');
    	$crud->columns('nome_pt', 'descricao_pt', 'id_tipo_produto_aluminio', 'id_caracteristica_produto_aluminio', 'foto_1', 'foto_2', 'foto_3', 'foto_4');
    	$crud->order_by('ordem', 'asc');

    	$crud->fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es', 'resultado_pt', 'resultado_en', 'resultado_fr', 'resultado_es', 'id_tipo_produto_aluminio', 'id_caracteristica_produto_aluminio', 'foto_1', 'foto_2', 'foto_3', 'foto_4', 'corte_1', 'corte_2', 'corte_3', 'ordem', 'perfis', 'pormenores', 'catalogo', 'ensaios', 'folhetos_promocionais');
    	$crud->field_type('ordem', 'hidden');
    	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es', 'resultado_pt', 'resultado_en', 'resultado_fr', 'resultado_es', 'id_tipo_produto_aluminio', 'foto_1', 'restrito');
    	$crud->display_as('descricao_pt', 'Descrição pt')->display_as('descricao_en', 'Descrição en')->display_as('descricao_fr', 'Descrição fr')->display_as('descricao_es', 'Descrição es')->display_as('id_caracteristica_produto_aluminio', 'Característica')->display_as('id_tipo_produto_aluminio', 'Tipo')->display_as('catalogo', 'Catálogo');

    	$crud->set_field_upload('foto_1', 'assets/uploads/produtos')->set_field_upload('foto_2', 'assets/uploads/produtos')->set_field_upload('foto_3', 'assets/uploads/produtos')->set_field_upload('foto_4', 'assets/uploads/produtos');

    	$crud->callback_after_upload(array($this,'callback_after_upload_produto'));

    	$crud->set_field_upload('corte_1', 'assets/uploads/files')->set_field_upload('corte_2', 'assets/uploads/files')->set_field_upload('corte_3', 'assets/uploads/files');

    	$crud->set_relation_n_n('perfis', 'perfis_aluminio_produto', 'ficheiros', 'produto_aluminio_id', 'perfil_aluminio_id', 'nome_pt', 'priority', array('id_categoria_ficheiro'=>1));
    	$crud->set_relation_n_n('pormenores', 'pormenores_aluminio_produto', 'ficheiros', 'produto_aluminio_id', 'pormenor_aluminio_id', 'nome_pt', 'priority', array('id_categoria_ficheiro'=>3));
    	$crud->set_relation_n_n('catalogo', 'catalogos_aluminio_produto', 'ficheiros', 'produto_aluminio_id', 'catalogo_aluminio_id', 'nome_pt', 'priority', array('id_categoria_ficheiro'=>4));
    	$crud->set_relation_n_n('ensaios', 'ensaios_aluminio_produto', 'ficheiros', 'produto_aluminio_id', 'ensaio_aluminio_id', 'nome_pt', 'priority', array('id_categoria_ficheiro'=>5));
    	$crud->set_relation_n_n('folhetos_promocionais', 'folheto_promocional_produto', 'ficheiros', 'produto_aluminio_id', 'folheto_promocional_aluminio_id', 'nome_pt', 'priority', array('id_categoria_ficheiro'=>6));
    	$crud->set_relation('id_tipo_produto_aluminio', 'tipos_produto_aluminio', 'nome_pt');
    	$crud->set_relation('id_caracteristica_produto_aluminio', 'caracteristicas_produto_aluminio', 'nome_pt');

    	$crud->callback_before_insert(array($this, 'callback_before_insert_produto_aluminio'));

    	$crud->add_action('down', 'http://www.indelague.pt/assets/indelague/img/sort_down_green.png', 'mediagest/change_order_aluminio', 'order-position-product-down');
    	$crud->add_action('up', 'http://www.indelague.pt/assets/indelague/img/sort_up_green.png', 'mediagest/change_order_aluminio', 'order-position-product-up');

    	$output = $crud->render();

    	$data['titulo'] = 'Produtos Alumínio';
    	$data['sub-titulo'] = 'Faça aqui a gestão dos Produtos Alumínio';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }

    function change_order_aluminio()
    {
    	if (isset($_POST['eventRow']) && isset($_POST['clickEl']) && isset($_POST['el'])) {
    		$this->load->model('caixilharia_model');
    		$event = trim($_POST['eventRow']);
    		$clickEl = intval($_POST['clickEl']);
    		$el = intval($_POST['el']);
    		if ($event && $clickEl && $el) {
    			if ($this->caixilharia_model->change_order_aluminio($event, $clickEl, $el)) {
    				exit("success");
    			} else {
    				exit("error1");
    			}
    			$this->caixilharia_model->change_order_aluminio($event, $clickEl, $el);
    		} else {
    			exit("error2");
    		}
    	} else {
    		exit("error3");
    	}
    }

    function tipos_produto_aluminio_management()
    {
    	$crud = new grocery_CRUD();

    	$crud->set_table('tipos_produto_aluminio');
    	$crud->set_subject('Tipos de Produto Alumínio');
    	$crud->columns('nome_pt', 'foto');
        $crud->order_by('ordem', 'asc');

    	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'foto');

    	$crud->set_field_upload('foto', 'assets/uploads/produtos');

        $crud->add_action('down', 'http://www.indelague.pt/assets/indelague/img/sort_down_green.png', 'mediagest/change_order_tipo_produto_aluminio', 'order-position-product-down');
        $crud->add_action('up', 'http://www.indelague.pt/assets/indelague/img/sort_up_green.png', 'mediagest/change_order_tipo_produto_aluminio', 'order-position-product-up');

    	$output = $crud->render();

    	$data['titulo'] = 'Tipos de Produto Alumínio';
    	$data['sub-titulo'] = 'Faça aqui a gestão dos Tipos de Produto de Alumínio';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }

    function change_order_tipo_produto_aluminio()
    {
        if (isset($_POST['eventRow']) && isset($_POST['clickEl']) && isset($_POST['el'])) {
            $this->load->model('caixilharia_model');
            $event = trim($_POST['eventRow']);
            $clickEl = intval($_POST['clickEl']);
            $el = intval($_POST['el']);
            if ($event && $clickEl && $el) {
                if ($this->caixilharia_model->change_order_tipo_produto_aluminio($event, $clickEl, $el)) {
                    exit("success");
                } else {
                    exit("error1");
                }
                $this->caixilharia_model->change_order_tipo_produto_aluminio($event, $clickEl, $el);
            } else {
                exit("error2");
            }
        } else {
            exit("error3");
        }
    }

    function caracteristicas_produto_aluminio_management()
    {
    	$crud = new grocery_CRUD();

    	$crud->set_table('caracteristicas_produto_aluminio');
    	$crud->set_subject('Características de Produto Alumínio');
    	$crud->columns('nome_pt');

    	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es');

    	$output = $crud->render();

    	$data['titulo'] = 'Caract. de Produto Alumínio';
    	$data['sub-titulo'] = 'Faça aqui a gestão das Caract. de Produto Alumínio';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }


    //PRODUTOS VIDRO

    function produtos_vidro_management()
    {
    	$crud = new grocery_CRUD();

    	$crud->set_table('produtos_vidro');
    	$crud->set_subject('Produtos Vidro');
    	$crud->columns('nome_pt', 'descricao_pt', 'id_tipo_produto_vidro', 'aplicacao_pt', 'foto_1', 'foto_2', 'foto_3', 'foto_4');

    	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es', 'aplicacao_pt', 'aplicacao_en', 'aplicacao_fr', 'aplicacao_es', 'foto_1', 'id_tipo_produto_vidro');
    	$crud->display_as('descricao_pt', 'Descrição pt')->display_as('descricao_en', 'Descrição en')->display_as('descricao_fr', 'Descrição fr')->display_as('descricao_es', 'Descrição es')->display_as('aplicacao_pt', 'Aplicação pt')->display_as('aplicacao_en', 'Aplicação en')->display_as('aplicacao_fr', 'Aplicação fr')->display_as('aplicacao_es', 'Aplicação es')->display_as('id_tipo_produto_vidro', 'Tipo');

    	$crud->set_field_upload('foto_1', 'assets/uploads/produtos')->set_field_upload('foto_2', 'assets/uploads/produtos')->set_field_upload('foto_3', 'assets/uploads/produtos')->set_field_upload('foto_4', 'assets/uploads/produtos');

    	$crud->callback_after_upload(array($this,'callback_after_upload_produto'));

    	$crud->set_relation('id_tipo_produto_vidro', 'tipos_produto_vidro', 'nome_pt');

    	$output = $crud->render();

    	$data['titulo'] = 'Produtos Vidro';
    	$data['sub-titulo'] = 'Faça aqui a gestão dos Produtos Vidro';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }

    function tipos_produto_vidro_management()
    {
    	$crud = new grocery_CRUD();

    	$crud->set_table('tipos_produto_vidro');
    	$crud->set_subject('Tipos de Produto Vidro');
    	$crud->columns('nome_pt', 'foto');

    	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'foto');

    	$crud->set_field_upload('foto', 'assets/uploads/produtos');

    	$output = $crud->render();

    	$data['titulo'] = 'Tipos de Produto Vidro';
    	$data['sub-titulo'] = 'Faça aqui a gestão dos Tipos de Produto Vidro';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }


    //PRODUTOS EXTRUSAO

    function produtos_extrusao_management()
    {
    	$crud = new grocery_CRUD();

    	$this->load->model('extrusao_model');

    	$crud->set_table('produtos_extrusao');
    	$crud->set_subject('Produtos Extrusão');
    	$crud->columns('nome_pt', 'descricao_pt', 'id_tipo_produto_extrusao', 'id_caracteristica_produto_extrusao', 'foto_1', 'foto_2', 'foto_3', 'foto_4');
    	$crud->order_by('ordem', 'asc');

    	$crud->field_type('ordem', 'hidden');
    	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es', 'resultado_pt', 'resultado_en', 'resultado_fr', 'resultado_es', 'id_tipo_produto_extrusao', 'foto_1');
    	$crud->field_type('descricao_pt', 'text');
    	$crud->display_as('descricao_pt', 'Descrição pt')->display_as('descricao_en', 'Descrição en')->display_as('descricao_fr', 'Descrição fr')->display_as('descricao_es', 'Descrição es')->display_as('id_tipo_produto_extrusao', 'Tipo')->display_as('id_caracteristica_produto_extrusao', 'Característica');

    	$crud->set_field_upload('foto_1', 'assets/uploads/produtos')->set_field_upload('foto_2', 'assets/uploads/produtos')->set_field_upload('foto_3', 'assets/uploads/produtos')->set_field_upload('foto_4', 'assets/uploads/produtos');

    	$crud->callback_after_upload(array($this,'callback_after_upload_produto'));

    	$crud->set_field_upload('corte_1','assets/uploads/files')->set_field_upload('corte_2', 'assets/uploads/files')->set_field_upload('corte_3', 'assets/uploads/files');

    	$crud->set_relation('id_tipo_produto_extrusao', 'tipos_produto_extrusao', 'nome_pt');
    	$crud->set_relation('id_caracteristica_produto_extrusao', 'caracteristicas_produto_extrusao', 'nome_pt');
        //$crud->set_relation_n_n('ensaios_extrusao', 'ensaios_extrusao_produtos', 'ensaios_extrusao', 'produto_extrusao_id', 'ensaio_extrusao_id', 'nome_pt', 'priority');

    	$crud->callback_before_insert(array($this, 'callback_before_insert_produto_extrusao'));

    	$crud->add_action('down', 'http://www.indelague.pt/assets/indelague/img/sort_down_green.png', 'mediagest/change_order_extrusao', 'order-position-product-down');
    	$crud->add_action('up', 'http://www.indelague.pt/assets/indelague/img/sort_up_green.png', 'mediagest/change_order_extrusao', 'order-position-product-up');

    	$output = $crud->render();

    	$data['titulo'] = 'Produtos Extrusão';
    	$data['sub-titulo'] = 'Faça aqui a gestão dos Produtos Extrusão';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }

    function change_order_extrusao()
    {
    	if (isset($_POST['eventRow']) && isset($_POST['clickEl']) && isset($_POST['el'])) {
    		$this->load->model('extrusao_model');
    		$event = trim($_POST['eventRow']);
    		$clickEl = intval($_POST['clickEl']);
    		$el = intval($_POST['el']);
    		if ($event && $clickEl && $el) {
    			if ($this->extrusao_model->change_order($event, $clickEl, $el)) {
    				exit("success");
    			} else {
    				exit("error1");
    			}
    			$this->extrusao_model->change_order($event, $clickEl, $el);
    		} else {
    			exit("error2");
    		}
    	} else {
    		exit("error3");
    	}
    }

    function tipos_produto_extrusao_management()
    {
    	$crud = new grocery_CRUD();

    	$crud->set_table('tipos_produto_extrusao');
    	$crud->set_subject('Tipos de Produto Extrusão');
    	$crud->columns('nome_pt', 'foto');

    	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'foto');

    	$crud->set_field_upload('foto', 'assets/uploads/produtos');

    	$output = $crud->render();

    	$data['titulo'] = 'Tipos de Produto Extrusão';
    	$data['sub-titulo'] = 'Faça aqui a gestão dos Tipos de Produto Extrusão';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }

    function caracteristicas_produto_extrusao_management()
    {
    	$crud = new grocery_CRUD();

    	$crud->set_table('caracteristicas_produto_extrusao');
    	$crud->set_subject('Características de Produto Extrusão');
    	$crud->columns('nome_pt');

    	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es');

    	$output = $crud->render();

    	$data['titulo'] = 'Caract. de Produto Extrusão';
    	$data['sub-titulo'] = 'Faça aqui a gestão das Caract. de Produto Extrusão';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }


    //FICHEIROS

    function ficheiros_management()
    {
    	$crud = new grocery_CRUD();

    	$crud->set_table('ficheiros');
    	$crud->set_subject('Ficheiros');
    	$crud->columns('nome_pt', 'id_categoria_ficheiro');
    	$crud->order_by('id_ficheiro', 'asc');

    	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'ficheiro', 'id_categoria_ficheiro');
    	$crud->display_as('id_categoria_ficheiro', 'Categoria');

    	$crud->set_field_upload('ficheiro', 'assets/uploads/files');

    	$crud->set_relation('id_categoria_ficheiro', 'categoria_ficheiro', 'nome');

    	$crud->callback_after_insert(array($this, 'callback_after_insert'));

    	$output = $crud->render();

    	$data['titulo'] = 'Ficheiros';
    	$data['sub-titulo'] = 'Faça aqui a gestão dos Ficheiros';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }

    function callback_after_insert($post_array)
    {
    	switch ($post_array['id_categoria_ficheiro']) {
    		case '1':
    		rename("assets/uploads/files/".$post_array['ficheiro'], "assets/uploads/perfis/".$post_array['ficheiro']);
    		break;
    		case '3':
    		rename("assets/uploads/files/".$post_array['ficheiro'], "assets/uploads/pormenores/".$post_array['ficheiro']);
    		break;
    		case '4':
    		rename("assets/uploads/files/".$post_array['ficheiro'], "assets/uploads/catalogos/aluminio/".$post_array['ficheiro']);
    		break;
    		case '5':
    		rename("assets/uploads/files/".$post_array['ficheiro'], "assets/uploads/ensaios/aluminio/".$post_array['ficheiro']);
    		break;
    		case '6':
    		rename("assets/uploads/files/".$post_array['ficheiro'], "assets/uploads/folhetos/".$post_array['ficheiro']);
    		break;
    		case '7':
    		rename("assets/uploads/files/".$post_array['ficheiro'], "assets/uploads/catalogos/extrusao/".$post_array['ficheiro']);
    		break;
    		case '8':
    		rename("assets/uploads/files/".$post_array['ficheiro'], "assets/uploads/ensaios/extrusao/".$post_array['ficheiro']);
    		break;
    		case '9':
    		rename("assets/uploads/files/".$post_array['ficheiro'], "assets/uploads/ferragens_vidro/".$post_array['ficheiro']);
    		break;
    	}

    	return true;
    }

    function callback_before_insert($post_array)
    {
    	$post_array['ordem'] = $this->caixilharia_model->set_ordem();

    	return $post_array;
    }

    function callback_before_insert_produto_aluminio($post_array)
    {
    	$post_array['ordem'] = $this->caixilharia_model->set_ordem_produto();

    	return $post_array;
    }

    function callback_before_insert_produto_extrusao($post_array)
    {
    	$post_array['ordem'] = $this->extrusao_model->set_ordem();

    	return $post_array;
    }


    //UPLOAD FOTO PRODUTO

    function callback_after_upload_produto($uploader_response, $field_info, $files_to_upload)
    {
    	$this->load->library('image_moo');

    	$file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name;

        //list - normal - thumb
    	$this->image_moo->load($file_uploaded)->resize_crop(256, 230)->save_pa($prepend="list_", $append="", $overwrite=true)->resize_crop(330, 393)->save_pa($prepend="normal_", $append="", $overwrite=true)->resize_crop(80, 80)->save_pa($prepend="thumb_", $append="", $overwrite=true);

        //refold
    	rename($field_info->upload_path."/"."list_".$uploader_response[0]->name, "assets/uploads/produtos/list/".$uploader_response[0]->name);
    	rename($field_info->upload_path."/"."normal_".$uploader_response[0]->name, "assets/uploads/produtos/normal/".$uploader_response[0]->name);
    	rename($field_info->upload_path."/"."thumb_".$uploader_response[0]->name, "assets/uploads/produtos/thumb/".$uploader_response[0]->name);

    	return true;
    }


    //OBRAS


    //SERVIÇOS

    function servicos_aluminio_management()
    {
    	$crud = new grocery_CRUD();

    	$crud->set_table('servicos_aluminio');
    	$crud->set_subject('Serviços Alumínio');
    	$crud->columns('nome_pt', 'descricao_pt');

    	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es');
    	$crud->display_as('descricao_pt', 'Descrição pt')->display_as('descricao_en', 'Descrição en')->display_as('descricao_fr', 'Descrição fr')->display_as('descricao_es', 'Descrição es');

    	$output = $crud->render();

    	$data['titulo'] = 'Serviços Alumínio';
    	$data['sub-titulo'] = 'Faça aqui a gestão dos Serviços de Alumínio';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }

    function servicos_vidro_management()
    {
    	$crud = new grocery_CRUD();

    	$crud->set_table('servicos_vidro');
    	$crud->set_subject('Serviços Vidro');
    	$crud->columns('nome_pt', 'descricao_pt');

    	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es');
    	$crud->display_as('descricao_pt', 'Descrição pt')->display_as('descricao_en', 'Descrição en')->display_as('descricao_fr', 'Descrição fr')->display_as('descricao_es', 'Descrição es');

    	$output = $crud->render();

    	$data['titulo'] = 'Serviços Vidro';
    	$data['sub-titulo'] = 'Faça aqui a gestão dos Serviços de Vidro';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }

    function servicos_extrusao_management()
    {
    	$crud = new grocery_CRUD();

    	$crud->set_table('servicos_extrusao');
    	$crud->set_subject('Serviços Extrusão');
    	$crud->columns('nome_pt', 'descricao_pt');

    	$crud->required_fields('nome_pt', 'nome_en', 'nome_fr', 'nome_es', 'descricao_pt', 'descricao_en', 'descricao_fr', 'descricao_es');
    	$crud->display_as('descricao_pt', 'Descrição pt')->display_as('descricao_en', 'Descrição en')->display_as('descricao_fr', 'Descrição fr')->display_as('descricao_es', 'Descrição es');

    	$output = $crud->render();

    	$data['titulo'] = 'Serviços Extrusão';
    	$data['sub-titulo'] = 'Faça aqui a gestão dos Serviços de Extrusão';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }


    //PAGINAS

    function paginas_management()
    {
    	$crud = new grocery_CRUD();

    	$crud->unset_delete();
    	$crud->unset_add();

    	$crud->set_table('paginas');
    	$crud->set_subject('Páginas');
    	$crud->columns('titulo_pt', 'imagem');
    	$crud->order_by('id_pagina', 'asc');

    	$crud->display_as('titulo_pt', 'Título');
    	$crud->set_field_upload('imagem', 'assets/uploads/paginas');

    	$output = $crud->render();

    	$data['titulo'] = 'Páginas';
    	$data['sub-titulo'] = 'Faça aqui a gestão das Páginas';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }


    //APOIO CLIENTE

    function apoio_cliente_management()
    {
    	$crud = new grocery_CRUD();

    	$crud->unset_delete();
    	$crud->unset_add();

    	$crud->set_table('apoio_cliente');
    	$crud->set_subject('Apoio ao Cliente');
    	$crud->columns('titulo_pt', 'imagem');
    	$crud->order_by('id_pagina', 'asc');

    	$crud->display_as('titulo_pt', 'Título');
    	$crud->set_field_upload('imagem', 'assets/uploads/apoio_cliente');

    	$output = $crud->render();

    	$data['titulo'] = 'Apoio ao Cliente';
    	$data['sub-titulo'] = 'Faça aqui a gestão do Apoio ao Cliente';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }


    //AREA TECNICA

    function area_tecnica_management()
    {
    	$crud = new grocery_CRUD();

    	$crud->set_table('area_tecnica');
    	$crud->set_subject('Área Técnica');
    	$crud->columns('titulo_pt', 'imagem');
    	$crud->order_by('id_pagina', 'asc');

    	$crud->display_as('titulo_pt', 'Título');
    	$crud->set_field_upload('imagem', 'assets/uploads/area_tecnica');

    	$output = $crud->render();

    	$data['titulo'] = 'Área Técnica';
    	$data['sub-titulo'] = 'Faça aqui a gestão da Área Técnica';

    	$this->load->view('mediagest/header', (object)array('data' => $data, 'js_files' => $crud->get_js_files(), 'css_files' => $crud->get_css_files()));

    	$this->_admin_output($output);
    }

}