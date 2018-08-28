<?php
require_once('./Persona.php');

/**
 * Programador
 */
class Programador extends Persona
{
	private $lenguaje = null;

	function __construct($id, $nombre, $apellido, $edad, $lenguaje)
	{
		parent::__construct($id, $nombre, $apellido, $edad);
		$this->lenguaje = $lenguaje;
	}

	public function getLenguaje()
	{
		return $this->lenguaje;
	}

	public function setLenguaje($lenguaje)
	{
		$this->lenguaje = $lenguaje;
	}

}