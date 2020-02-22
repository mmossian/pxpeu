<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| CONTROLADOR CAMBIO IDIOMA
|--------------------------------------------------------------------------
|
|
*/

class Idioma extends CI_Controller
{
	private $data = [];

	public function __construct()
	{
		parent::__construct();
	}

	public function index($lang, $segment=NULL, ...$segments)
	{
		if(!isset($segment))
		{
			$segment = 'home';
		}
		else
		{
			if(isset($segments))
			{
				foreach ($segments as $s)
				{
					$segment .= '/'.$s;
				}
			}
		}
		$_SESSION['DISTINTIVA-LANG'] = $lang;
		redirect($this->init->baseUrl.'index.php/'.$segment, 'refresh');
	}
}