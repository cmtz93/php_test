<?php

require_once('./Empleado.php');
/**
 * Empresa Class
 */
class Empresa
{
	private $id = null;
	private $nombre = null;
	private $empleados = array();

	function __construct($id, $nombre)
	{
		$this->id = $id;
		$this->nombre = $nombre;
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

	/**
	 * @return Array of Empleados
	 */
	public function getEmpleados()
	{
		return count($this->empleados) == 0 ? null : $this->empleados;
	}

	/**
	 * @param $params['tipoEmpleado'] & others [id,nombre,apellido,edad,(lenguaje|tipo{Disenador})]
	 * 
	 */
	public function setEmpleado($params)
	{
		$empleado =new Empleado($params);
		var_dump($empleado);
		$this->empleados = array_push($this->empleados, $empleado);
	}

	/**
	 * @param  int $id
	 * @return Disenador|Programdor|null
	 */
	public function buscarEmpleado($id)
	{
		foreach ($this->empleados as $empleado) {
			if ($empleado->getId() == $id) {
				return $empleado;
			}
		}
		return null;
	}

	/**
	 * @return float promedioEdadEmpleados
	 */
	public function promedioEdad()
	{
		$avg = 0;
		foreach ($this->empleados as $empleado) {
			$avg += $empleado->getEdad();
		}
		return $avg / count($this->empleados);
	}

}