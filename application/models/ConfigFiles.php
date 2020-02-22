<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
----------------------------------------------------------
	LIBRERIA DE ARCHIVOS A SER MOSTRADOS EN VISTAS
----------------------------------------------------------

*/
class ConfigFiles extends CI_Model
{
	private $baseUrl;

	public function __construct()
	{
		parent::__construct();
		$this->baseUrl = base_url();
	}

	public function set($idPage, $lang)
	{
		$result = [];
		$this->config->load("files/{$idPage}");
		$config = $this->config->item('app-files');
		foreach ($config as $key => $file)
		{
			$result[$key] = str_replace(
				['%lang%', '%base-url%'],
				[$lang, $this->baseUrl],
				$file
			);
		}
		return $result;
		/*$result = [];
		$this->config->load('files/'.$idPage);
		foreach ($this->config->item($idPage) as $key => $page)
		{
			foreach ($page as $value)
			{
				if($key === 'views')
				{
					$result[$key][] = $lang.'/'.$value;
				}
				else
				{
					$result[$key][] = $value;
				}
			}
		}
		return $result;*/
	}
}