<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| CONTROLADOR PRINCIPAL PAGINA PUBLICA
|--------------------------------------------------------------------------
|
|
*/

class LinksInteres extends CI_Controller
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
		$this->data['idPage'] = 'links-interes';
		$this->data['files'] = $this->configFiles->set('links-interes', $this->init->appLang);
	}
}