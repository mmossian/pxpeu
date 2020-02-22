<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| CONTROLADOR CENTROS
|--------------------------------------------------------------------------
|
|
*/

class CursosPrecios extends CI_Controller
{
	private $data = [];

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$this->_set();
		$this->load->view('index', $this->data);
	}

	private function _set()
	{
		$this->data['idPage'] = 'cursos-precios';
		$this->data['files'] = $this->configFiles->set('cursos-precios', $this->init->appLang);
	}
}