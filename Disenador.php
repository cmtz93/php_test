<?php

require_once('./Persona.php');
/**
 * Diseñador
 */
class Disenador extends Persona
{
	private $tipo = null;

	function __construct($id, $nombre, $apellido, $edad, $tipo)
	{
		parent::__construct($id, $nombre, $apellido, $edad);
		$this->tipo = $tipo;
	}

	public function getTipo()
	{
		return $this->tipo;
	}

	public function setTipo($tipo)
	{
		$this->tipo = $tipo;
	}

}