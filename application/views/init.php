<?php

ini_set('display_errors', '1');
include 'classes/autoloader.php';
class Init
{
	public $provincias;
	public $localidades;
	private $curso;
	private $idPage;

	public function __construct($idPage)
	{
		$this->idPage = $idPage;
		switch ($idPage)
		{
			case 'index':
				autoloader('cursos');
				$this->curso = new Cursos;
			break;

			default:
				# code...
			break;
		}
	}

	public function getProvincias()
	{
		$this->provincias = $this->curso::getProvincias();
	}

	public function getLocalidades($provincia)
	{
		$this->localidades = $this->curso::getLocalidades($provincia);
	}
}