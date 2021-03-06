<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



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



class CI_Login

{

	

	function getCss()

	{

		$array = array(

			'login',

			'ui-cizacl/jquery-ui-1.8.14.custom'

			);

		$data = '';

		foreach($array as $value)	{

			$data .= '<link href="'.base_url().'assets/cizacl/css/'.$value.'.css" rel="stylesheet" type="text/css" />'.PHP_EOL;

		}

		return $data;

	}

	

	function getScripts()

	{

		$array = array(

			'jquery-1.6.1.min',

			'jquery-ui-1.8.14.custom.min'

			);

		$data = '';

		foreach($array as $value)	{

			$data .= '<script type="text/javascript" src="'.base_url().'assets/cizacl/js/'.$value.'.js"></script>'.PHP_EOL;

		}

		$data .= '<script type="text/javascript" src="'.site_url('login_js/scripts').'"></script>'.PHP_EOL;

		return $data;

	}



	function getScriptsLogin($page)

	{
		
		$array = array(

			'jquery-1.6.1.min',

			'jquery-ui-1.8.14.custom.min'

			);

		$data = '';

		foreach($array as $value)	{

			$data .= '<script type="text/javascript" src="'.base_url().'assets/cizacl/js/'.$value.'.js"></script>'.PHP_EOL;

		}

		$data .= '<script type="text/javascript" src="'.site_url('login_js/scripts_newsletter?'.$page).'"></script>'.PHP_EOL;
		$data .= '<script type="text/javascript" src="'.site_url('login_js/scripts_contactos?'.$page).'"></script>'.PHP_EOL;
		$data .= '<script type="text/javascript" src="'.site_url('login_js/scripts_login?'.$page).'"></script>'.PHP_EOL;
		$data .= '<script type="text/javascript" src="'.site_url('login_js/scripts_registar?'.$page).'"></script>'.PHP_EOL;
		$data .= '<script type="text/javascript" src="'.site_url('login_js/scripts_recuperar_password?'.$page).'"></script>'.PHP_EOL;
		$data .= '<script type="text/javascript" src="'.site_url('login_js/scripts_alterar_password?'.$page).'"></script>'.PHP_EOL;
		$data .= '<script type="text/javascript" src="'.site_url('login_js/scripts_editar_perfil?'.$page).'"></script>'.PHP_EOL;

		return $data;

	}



	function __get($var)    {

		static $CI;

		(is_object($CI)) OR $CI = get_instance();

		return $CI->$var;

	}

}