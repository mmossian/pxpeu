<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| CONTROLADOR CENTROS
|--------------------------------------------------------------------------
|
|
*/

class Centros extends CI_Controller
{
	private $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->lang->load('buttons', $this->init->appLang);
		$this->lang->load('curso', $this->init->appLang);
		$this->load->model('locations');
		$this->load->model('curso');
		$this->load->model('centro');
	}

	public function index()
	{
		$this->_set();
		$this->load->view('index', $this->data);
	}

	private function _set()
	{
		$this->data['idPage'] = 'centros';
		$this->data['files'] = $this->configFiles->set('centros', $this->init->appLang);
		$this->data['provincias'] = $this->locations->getProvincias();
		$this->data['cursos'] = $this->curso->get();
		$this->data['csrf'] = [
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		];
	}

	public function getAll()
	{
		if($this->input->is_ajax_request())
		{
			echo json_encode([
				'centro' => $this->centro->get(),
				'button' => $this->lang->line('button-ver-ficha')
			]);
		}
	}

	public function getByAddress()
	{
		if($this->input->is_ajax_request())
		{
			$id_provincia = $this->security->xss_clean($this->input->post('id_provincia', TRUE));
			$id_localidad = $this->security->xss_clean($this->input->post('id_localidad', TRUE));
			//$id_curso = $this->security->xss_clean($this->input->post('id_curso', TRUE));
			$response = [
				'csrf' => [
					'name' => $this->security->get_csrf_token_name(),
					'hash' => $this->security->get_csrf_hash()
				],
				'data' => $this->centro->getByAddress($id_provincia, $id_localidad),
				'button' => $this->lang->line('button-ver-ficha')
			];
			echo json_encode($response);
		}
	}
}