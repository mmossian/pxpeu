<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| CONTROLADOR PRINCIPAL CURSOS
|--------------------------------------------------------------------------
|
|
*/

class Cursos extends CI_Controller
{
	private $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->lang->load('buttons', $this->init->appLang);
		$this->lang->load('curso', $this->init->appLang);
		$this->load->model('curso');
		$this->load->model('locations');
	}

	public function index()
	{
		$this->_set();
		$this->load->view('index', $this->data);
	}

	private function _set()
	{
		$this->data['idPage'] = 'cursos';
		$this->data['files'] = $this->configFiles->set('cursos', $this->init->appLang);
		$this->data['provincias'] = $this->locations->getProvincias();
		$this->data['cursos'] = $this->curso->get();
		$this->data['csrf'] = [
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		];
	}

	public function getByCentro()
	{
		if($this->input->is_ajax_request())
		{
			$id_provincia = $this->security->xss_clean($this->input->post('id_provincia', TRUE));
			$id_localidad = $this->security->xss_clean($this->input->post('id_localidad', TRUE));
			$id_curso = $this->security->xss_clean($this->input->post('id_curso', TRUE));
			$response = [
				'csrf' => [
					'name' => $this->security->get_csrf_token_name(),
					'hash' => $this->security->get_csrf_hash()
				],
				'data' => $this->curso->getByLocation($id_provincia, $id_localidad, $id_curso, 'activo'),
				'buttons' => [
					'button_ficha_centro' => $this->lang->line('button-ficha-centro'),
					'button_preinscripcion' => $this->lang->line('button-preinscripcion')
				]
			];
			foreach($response['data'] as $curso)
			{
				$curso->curso = $this->lang->line($curso->curso);
			}
			echo json_encode($response);
		}
	}

	public function checkFinished()
	{
		if($this->input->is_ajax_request())
		{
			$now = mdate('%Y-%m-%d %H:%i:%s', now());
			$this->db->where('fecha_fin >', $now);
			$data['estado'] = 'finalizado';
			$this->db->update('calendario', $data);
		}
	}
}