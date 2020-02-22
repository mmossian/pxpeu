<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
----------------------------------------------------------
	MODELO DE GESTION DE CURSOS
----------------------------------------------------------

*/
class Curso extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->_setStatus();
	}

	/*
	--------------------------------------------------------------
	Obtiene listado de cursos
	@access public
	@params int
	@return object
	--------------------------------------------------------------
	*/
	public function get($id_curso=NULL)
	{
		if(isset($id_curso))
		{
			$curso = $this->db
				->get_where('cursos', ['id_curso' => $id_curso])
				->row();
			$curso->curso = $this->lang->line($curso->curso);
			return $curso;
		}
		$curso = $this->db
			->order_by('orden')
			->get('cursos')
			->result();
		foreach ($curso as $c)
		{
			$c->curso = $this->lang->line($c->curso);
		}
		return $curso;
	}

	/*
	--------------------------------------------------------------
	Obtiene Obtiene los cursos por centro
	@access public
	@params int | string
	@return object
	--------------------------------------------------------------
	*/
	public function getByCentro($id_centro, $id_curso=NULL, $estado=NULL)
	{
		$this->db->join('cursos', 'cursos.id_curso = calendario.id_curso', 'inner');
		$this->db->join('centros', 'centros.id_centro = calendario.id_centro', 'inner');
		$this->db->join('centros_direcciones', 'centros.id_centro = centros_direcciones.id_centro', 'inner');
		$this->db->join('direcciones', 'direcciones.id_direccion = centros_direcciones.id_direccion', 'inner');
		$this->db->join('precios_cursos', 'cursos.id_curso = precios_cursos.id_curso', 'inner');
		$this->db->join('precios', 'precios.id_precio = precios_cursos.id_precio', 'inner');
		$this->db->where('centros.id_centro', $id_centro);
		if(isset($id_curso))
		{
			$this->db->where('cursos.id_curso', $id_curso);
		}
		if(isset($estado))
		{
			$this->db->where('calendario.estado', $estado);
		}
		return $this->db->get('calendario')->result();
	}

	/*
	--------------------------------------------------------------
	Obtiene Obtiene los cursos por locacion
	@access public
	@params int | string
	@return object
	--------------------------------------------------------------
	*/
	public function getByLocation($id_provincia=NULL, $id_localidad=NULL, $id_curso=NULL, $estado=NULL)
	{
		$this->db->join('cursos', 'cursos.id_curso = calendario.id_curso', 'inner');
		$this->db->join('centros_direcciones', 'calendario.id_centro = centros_direcciones.id_centro', 'inner');
		$this->db->join('centros', 'calendario.id_centro = centros.id_centro', 'inner');
		$this->db->join('direcciones', 'direcciones.id_direccion = centros_direcciones.id_direccion', 'inner');
		$this->db->join('precios_cursos', 'cursos.id_curso = precios_cursos.id_curso', 'inner');
		$this->db->join('precios', 'precios.id_precio = precios_cursos.id_precio', 'inner');
		if(isset($id_provincia))
		{
			$this->db->where('direcciones.id_provincia', $id_provincia);
		}
		if(isset($id_localidad))
		{
			$this->db->where('direcciones.id_localidad', $id_localidad);
		}
		if(isset($id_curso))
		{
			$this->db->where('cursos.id_curso', $id_curso);
		}
		if(isset($estado))
		{
			$this->db->where('calendario.estado', $estado);
		}
		$this->db->order_by('calendario.fecha_inicio', 'ASC');
		return $this->db->get('calendario')->result();
	}

	/*
	--------------------------------------------------------------
	Obtiene curso por su id de calendario
	@access public
	@params int
	@return object
	--------------------------------------------------------------
	*/
	public function getByCalendario($id_calendario)
	{
		$this->db->join('cursos', 'cursos.id_curso = calendario.id_curso', 'inner');
		$this->db->join('centros_direcciones', 'calendario.id_centro = centros_direcciones.id_centro', 'inner');
		$this->db->join('centros', 'calendario.id_centro = centros.id_centro', 'inner');
		$this->db->join('direcciones', 'direcciones.id_direccion = centros_direcciones.id_direccion', 'inner');
		$this->db->join('precios_cursos', 'cursos.id_curso = precios_cursos.id_curso', 'inner');
		$this->db->join('precios', 'precios.id_precio = precios_cursos.id_precio', 'inner');
		$this->db->where('calendario.id_calendario', $id_calendario);
		return $this->db->get('calendario')->row();
	}

	/*
	--------------------------------------------------------------
	Actualizacion masiva del estado de los cursos
	@access public
	@params void
	@return void
	--------------------------------------------------------------
	*/
	private function _setStatus()
	{
		$data['estado'] = 'finalizado';
		$now = mdate('%Y-%m-%d 00:00:00', now());
		$this->db
			->where('fecha_inicio <=', $now)
			->update('calendario', $data);
	}
}