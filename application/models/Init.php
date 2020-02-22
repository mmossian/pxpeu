<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
----------------------------------------------------------
	MODELO DE INICIALIZACION DE LA APLICACION
----------------------------------------------------------

*/
class Init extends CI_Model
{
	public $baseUrl = NULL;
	public $appLang = 'es';

	public function __construct()
	{
		$this->baseUrl = base_url();
		$this->_setLang();
	}

	private function _setLang()
	{
		if(isset($_SESSION['DISTINTIVA-LANG']))
		{
			$this->appLang = $_SESSION['DISTINTIVA-LANG'];
		}
		$this->lang->load('message', $this->appLang);
	}
}