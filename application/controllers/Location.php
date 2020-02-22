<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| CONTROLADOR DE LOCACIONES
|--------------------------------------------------------------------------
|
|
*/

class Location extends CI_Controller
{
	private $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->model('locations');
	}

	public function getLocalidades()
	{
		if($this->input->is_ajax_request())
		{
			$id_provincia = $this->security->xss_clean($this->input->get('id_provincia', TRUE));
			echo json_encode($this->locations->getProvinciasLocalidades($id_provincia));
		}
	}
}