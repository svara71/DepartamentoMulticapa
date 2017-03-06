<?php 
/**
		 * 
		 * @author Samuel Vara
		 */
require_once 'Modelo/Departamento.php';


if(isset($_GET['borrar'])){//Si se pulsa borrar 
	$codigo=$_GET['codigo'];//Recoge el valor de la vista
	Departamento::borrarDepartamento($codigo);//Ejecuta borrarDepartamento de Departamento
	
	header("refresh:0; url=index.php?location=departamento");//Refresca y redirige a la vista de departamento
}

 ?>