<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| CONTROLADOR PRINCIPAL CURSOS
|--------------------------------------------------------------------------
|
|
*/

class FichaCentro extends CI_Controller
{
	private $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->model('centro');
		$this->load->model('curso');
		$this->lang->load('curso', $this->init->appLang);
	}

	public function index($id_centro)
	{
		$this->_set($id_centro);
		$this->load->view('index', $this->data);
	}

	private function _set($id_centro)
	{
		$this->data['idPage'] = 'ficha-centro';
		$this->data['files'] = $this->configFiles->set('ficha-centro', $this->init->appLang);
		$centro = $this->centro->get($id_centro);
		$this->data['centro'] = $centro;
		$this->data['cursos'] = $this->curso->getByCentro($id_centro, NULL, 'activo');
		$this->data['dataCentro'] = [
		    'latitude' => $centro->latitude,
		    'longitude' => $centro->longitude,
		    'nombre' => $centro->nombre,
		    'direccion' => $centro->direccion_simple,
		    'localidad' => $centro->localidad,
		    'provincia' => $centro->provincia
  		];
  		$this->data['dataTitle'] = [
			$this->lang->line('fecha'),
			$this->lang->line('horario'),
			$this->lang->line('tipo'),
			$this->lang->line('idioma'),
			$this->lang->line('precio_sin_iva')
		];
	}
}