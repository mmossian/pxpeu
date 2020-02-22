<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
----------------------------------------------------------
	MODELO DE GESTION DE CENTROS
----------------------------------------------------------

*/
class Centro extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function get($id_centro=NULL)
	{
		$this->db->join('centros', 'centros.id_centro = centros_direcciones.id_centro', 'inner');
		$this->db->join('direcciones', 'direcciones.id_direccion = centros_direcciones.id_direccion', 'inner');
		if(isset($id_centro))
		{
			return $this->db->get_where('centros_direcciones', ['centros_direcciones.id_centro' => $id_centro])->row();
		}
		$this->db->where('direcciones.latitude !=', 0);
		return $this->db->get('centros_direcciones')->result();
	}

	public function getByAddress($id_provincia, $id_localidad)
	{
		$this->db->join('centros', 'centros.id_centro = centros_direcciones.id_centro', 'inner');
		$this->db->join('direcciones', 'direcciones.id_direccion = centros_direcciones.id_direccion', 'inner');
		if($id_provincia != -1)
		{
			$this->db->where('direcciones.id_provincia', $id_provincia);
		}
		if($id_localidad != -1)
		{
			$this->db->where('direcciones.id_localidad', $id_localidad);
		}
		return $this->db->get('centros_direcciones')->result();
	}
}