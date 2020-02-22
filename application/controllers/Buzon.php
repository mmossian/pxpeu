<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| CONTROLADOR PRINCIPAL PAGINA PUBLICA
|--------------------------------------------------------------------------
|
|
*/

class Buzon extends CI_Controller
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
		$this->data['idPage'] = 'buzon';
		$this->data['files'] = $this->configFiles->set('buzon', $this->init->appLang);
		$this->data['csrf'] = [
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		];
	}

	public function sendEmail()
	{
		$data = $this->security->xss_clean($this->input->post(NULL, TRUE));

		$this->load->library('form_validation');
		$this->lang->load('form_validation', $this->init->appLang);
		$this->lang->load('validation', $this->init->appLang);

	$this->form_validation->set_rules($this->lang->line('rules-buzon'));

		if ($this->form_validation->run() == TRUE)
		{
			ini_set('date.timezone', 'Europe/Madrid');
			$this->config->load('config.mail');
			$this->load->model('smail');
			//$this->load->library('email');
			$this->lang->load('mail-tpl', $this->init->appLang);
			$tpl = $this->lang->line('tpl-buzon-sugerencias');
			$search = [
				'%nombre%',
				'%apellido%',
				'%autoescuela%',
				'%email%',
				'%telefono%',
				'%comentario%'
			];

			$replace = [
				$data['buzon_nombre'],
				$data['buzon_apellidos'],
				$data['buzon_autoescuela'],
				$data['buzon_email'],
				$data['buzon_telefono'],
				$data['buzon_comentario']
			];

			$tpl['tplContent'] = str_replace($search, $replace, $tpl['tplContent']);
			$this->smail->subject = $tpl['subject'];
			$this->smail->message = $this->load->view('email-template', $tpl, TRUE);
			$this->smail->to = $this->config->item('pxp-to')['buzon-sugerencias'];

			$message = $this->smail->send() ? $this->lang->line('message-sent-ok') : $this->lang->line('message-sent-error');
		}
		else
		{
			$message = $this->lang->line('message-general-error');
			$message['message'] = str_replace('%debug%', validation_errors(), $message['message']);
		}
		$this->session->set_flashdata('DISTINTIVA-REQUEST', $data);
		$this->session->set_flashdata('DISTINTIVA-MESSAGE', $message);
		redirect(base_url().'index.php/buzon', 'refresh');
	}
}