<?php

require_once('./Empresa.php');

$empresa = new Empresa(1, 'Carlos INC');

echo $empresa->getNombre();
echo "\n";
var_dump($empresa->getEmpleados());
echo "\n";
$empresa->setEmpleado([
	'tipoEmpleado' => 0, 
	'id' => 1, 
	'nombre' => 'Carlos', 
	'apellido' => 'Martinez',
	'edad' => 25, 
	'lenguaje' => 'PHP'
]);
echo "\n";
var_dump($empresa->getEmpleados());
echo $empresa->buscarEmpleado(1)->getNombre();
