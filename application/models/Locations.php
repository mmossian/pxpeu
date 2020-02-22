<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
----------------------------------------------------------
	MODELO DE GESTION DE LOCACIONES
----------------------------------------------------------

*/
class Locations extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	/*
	--------------------------------------------------------------
	Obtiene listado de provincias
	@access public
	@params int
	@return object
	--------------------------------------------------------------
	*/
	public function getProvincias($id_provincia=NULL)
	{
		if(isset($id_provincia))
		{
			return $this->db
				->order_by('provincia')
				->get_where('provincias', ['id_provincia' => $id_provincia])
				->row();
		}
		return $this->db
			->order_by('provincia')
			->get('provincias')
			->result();
	}

	/*
	--------------------------------------------------------------
	Obtiene listado de localidades
	@access public
	@params int
	@return object
	--------------------------------------------------------------
	*/
	public function getLocalidades($id_localidad=NULL)
	{
		if(isset($id_localidad))
		{
			return $this->db->get_where('localidades', ['id_localidad' => $id_localidad])->row();
		}
		return $this->db->get('localidades')->result();
	}

	/*
	--------------------------------------------------------------
	Obtiene listado de localidades asociadas a provincias
	@access public
	@params int
	@return object
	--------------------------------------------------------------
	*/
	public function getProvinciasLocalidades($id_provincia)
	{
		$this->db->join('provincias', 'provincias_localidades.id_provincia = provincias.id_provincia', 'inner');
		$this->db->join('localidades', 'provincias_localidades.id_localidad = localidades.id_localidad', 'inner');
		if(isset($id_provincia))
		{
			$this->db->where('provincias.id_provincia', $id_provincia);
		}
		$this->db->order_by('localidades.localidad');
		return $this->db->get('provincias_localidades')->result();
	}
}