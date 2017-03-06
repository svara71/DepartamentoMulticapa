<?php
/*
 * Configuración para la navegación entre páginas
 *
 * Autor: Pablo Mora Martín
 * Fecha de última modificación: 23/01/2017
 */
//Array con la lista de controladores disponibles. Clave - Valor (nombre del archivo)
$controladores =[
    'inicio' => 'Controlador/cInicio.php',
    'login' => 'Controlador/cLogin.php',
    'departamento'=>'Controlador/cDepartamento.php',
    'borrar'=>'Controlador/cBorrar.php',
    'modificar'=>'Controlador/cModificar.php',
    'nuevo'=>'Controlador/cNuevo.php',
    'buscar'=>'Controlador/cBuscar.php'
    
];

//Array con la lista de vistas disponibles. Clave - Valor (nombre del archivo)
$vistas = [
    'inicio' => 'Vista/vInicio.php',
    'login' => 'Vista/vlogin.php',
    'departamento'=>'Vista/vDepartamento.php',
    'modificar'=>'Vista/vModificar.php',
     'nuevo'=>'Vista/vNuevo.php',
      'buscar'=>'Vista/vBuscar.php'
];

?>