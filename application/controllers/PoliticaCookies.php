<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| CONTROLADOR PRINCIPAL PAGINA PUBLICA
|--------------------------------------------------------------------------
|
|
*/

class PoliticaCookies extends CI_Controller
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
		$this->data['idPage'] = 'politica-cookies';
		$this->data['files'] = $this->configFiles->set('politica-cookies', $this->init->appLang);
	}
}