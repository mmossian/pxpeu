<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| CONTROLADOR PRINCIPAL PAGINA PUBLICA
|--------------------------------------------------------------------------
|
|
*/

class PoliticaPrivacidad extends CI_Controller
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
		$this->data['idPage'] = 'politica-privacidad';
		$this->data['files'] = $this->configFiles->set('politica-privacidad', $this->init->appLang);
	}
}