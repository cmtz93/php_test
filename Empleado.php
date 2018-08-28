<?php
require_once('./Programador.php');
require_once('./Disenador.php');

/**
 * Empleados
 */
class Empleado
{
 	const DISENADOR = 1;
	const PROGRAMADOR = 0;
	
	function __construct($params)
	{
		switch ($params['tipoEmpleado']) {
   		case self::PROGRAMADOR:
    		return new Programador($params['id'],$params['nombre'],$params['apellido'],$params['edad'],$params['lenguaje']);
   		case self::DISENADOR:
    		return new Disenador($params['id'],$params['nombre'],$params['apellido'],$params['edad'],$params['tipo']);
  	}  
	}
 
}