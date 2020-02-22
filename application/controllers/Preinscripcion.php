<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| CONTROLADOR PRINCIPAL PAGINA PUBLICA
|--------------------------------------------------------------------------
|
|
*/

class Preinscripcion extends CI_Controller
{
	private $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->model('curso');
		$this->lang->load('curso', $this->init->appLang);
	}

	public function index($id_centro, $id_calendario)
	{
		$this->_set($id_centro, $id_calendario);
		$this->load->view('index', $this->data);
	}

	private function _set($id_centro, $id_calendario)
	{
		$this->data['idPage'] = 'preinscripcion';
		$this->data['files'] = $this->configFiles->set('preinscripcion', $this->init->appLang);

		$this->data['csrf'] = [
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		];

		$this->data['id_centro'] = $id_centro;
		$this->data['curso'] = $this->curso->getByCalendario($id_calendario);
	}

	public function sendEmail()
	{
		$data = $this->security->xss_clean($this->input->post(NULL, TRUE));

		$this->load->library('form_validation');
		$this->lang->load('form_validation', $this->init->appLang);
		$this->lang->load('validation', $this->init->appLang);

		$this->form_validation->set_rules($this->lang->line('rules-preinscripcion'));

		if ($this->form_validation->run() == TRUE)
		{
			$this->load->model('smail');
			$this->config->load('config.mail');
			$this->lang->load('mail-tpl', $this->init->appLang);

			$curso = $this->curso->getByCalendario($data['id_calendario']);
			$fechaCurso = '<ul>';
				$fechaCurso .= '<li>'.$curso->fecha_inicio.'</li>';
				if(!is_null($curso->dia2))
				{
					$fechaCurso .= '<li>'.$curso->dia2.'</li>';
				}
				if(!is_null($curso->dia3))
				{
					$fechaCurso .= '<li>'.$curso->dia3.'</li>';
				}
				if(!is_null($curso->dia4))
				{
					$fechaCurso .= '<li>'.$curso->dia4.'</li>';
				}
				if(!is_null($curso->dia5))
				{
					$fechaCurso .= '<li>'.$curso->dia5.'</li>';
				}
				if(!is_null($curso->dia6))
				{
					$fechaCurso .= '<li>'.$curso->dia6.'</li>';
				}
			$fechaCurso .= '</ul>';

			$horaCurso = '<ul>';
				$horaCurso .= '<li>'.$curso->fecha_fin.'</li>';
				if(!is_null($curso->horario2))
				{
					$horaCurso .= '<li>'.$curso->horario2.'</li>';
				}
				if(!is_null($curso->horario3))
				{
					$horaCurso .= '<li>'.$curso->horario3.'</li>';
				}
				if(!is_null($curso->horario4))
				{
					$horaCurso .= '<li>'.$curso->horario4.'</li>';
				}
				if(!is_null($curso->horario5))
				{
					$horaCurso .= '<li>'.$curso->horario5.'</li>';
				}
				if(!is_null($curso->horario6))
				{
					$horaCurso .= '<li>'.$curso->horario6.'</li>';
				}
			$horaCurso .= '</ul>';

			$tpl = $this->lang->line('tpl-preinscripcion');
			$search = [
				'%nombre%',
				'%apellido%',
				'%dni%',
				'%telefono%',
				'%idioma%',
				'%fecha-curso%',
				'%horario-curso%',
				'%idioma-curso%',
				'%nombre-centro%',
				'%direccion-centro%',
				'%precio-curso%'
			];

			$replace = [
				$data['pre_nombre'],
				$data['pre_apellidos'],
				$data['pre_dni'],
				$data['pre_telefono'],
				$data['pre_idioma'],
				$fechaCurso,
				$horaCurso,
				$curso->idioma,
				$curso->nombre,
				$curso->direccion,
				$curso->precio
			];

			$tpl['tplContent'] = str_replace($search, $replace, $tpl['tplContent']);


			// Envio via swift mailer
			$this->smail->subject = $tpl['subject'];
			$this->smail->message = $this->load->view('mail-tpl', $tpl, TRUE);
			$this->smail->to = trim($curso->email);

			$message = $this->smail->send() ? $this->lang->line('message-sent-ok') : $this->lang->line('message-sent-error');
		}
		else
		{
			$message = $this->lang->line('message-general-error');
			$message['message'] = str_replace('%debug%', validation_errors(), $message['message']);
			$this->session->set_flashdata('DISTINTIVA-REQUEST', $data);
		}
		$this->session->set_flashdata('DISTINTIVA-MESSAGE', $message);
		redirect(base_url()."index.php/preinscripcion/index/{$data['id_centro']}/{$data['id_calendario']}", 'refresh');
	}
}