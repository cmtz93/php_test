<?php

/**
 * Persona
 */
class Persona
{
	private $id = null;
	private $nombre = null;
	private $apellido = null;
	private $edad = null;

	function __construct($id, $nombre, $apellido, $edad)
	{
		$this->id = $id;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->edad = $edad;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getNombre()
	{
		return $this->nombre;
	}

	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	public function getApellido()
	{
		return $this->apellido;
	}

	public function setApellido($apellido)
	{
		$this->apellido = $apellido;
	}

	public function getEdad()
	{
		return $this->edad;
	}

	public function setEdad($edad)
	{
		$this->edad = $edad;
	}
	

}