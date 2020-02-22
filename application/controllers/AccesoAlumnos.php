<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| CONTROLADOR CENTROS
|--------------------------------------------------------------------------
|
|
*/

class AccesoAlumnos extends CI_Controller
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
		$this->data['idPage'] = 'acceso-alumnos';
		$this->data['files'] = $this->configFiles->set('acceso-alumnos', $this->init->appLang);
	}
}