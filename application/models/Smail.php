<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Modelo de gestion de envio de correos con swiftmail
|--------------------------------------------------------------------------
| Ubicacion: application/models
*/

class Smail extends CI_Model
{
	public $from = NULL;
	public $to = NULL;
	public $cc = NULL;
	public $bcc = NULL;
	public $subject = '';
	public $message = '';
	public $priority = NULL;
	public $attachment = NULL;
	public $errors = NULL;
	private $transport = NULL;

	function __construct()
	{
		parent::__construct();
		//date_default_timezone_set('GMT');
		$this->load->config('config.mail');
		$this->transport = (new Swift_SmtpTransport(
			$this->config->item('smtp_host'),
			$this->config->item('smtp_port'),
			$this->config->item('smtp_crypto')
		))
		->setUsername($this->config->item('smtp_user'))
		->setPassword($this->config->item('smtp_pass'));
	}

	private function _set()
	{
		if(!isset($this->from))
		{
			$this->from = $this->config->item('mail-default-from');
		}
	}

	public function send()
	{
		$this->_set();
		$mailer = new Swift_Mailer($this->transport);
		$message = (new Swift_Message($this->subject))
			->setFrom($this->from)
			->setBody($this->message, $this->config->item('mailtype')
		);
		if(isset($this->to))
		{
			$message->setTo($this->to);
		}
		if(isset($this->cc))
		{
			$message->setCc($this->cc);
		}
		if(isset($this->bcc))
		{
			$message->setBcc($this->bcc);
		}
		return $mailer->send($message);
	}
}