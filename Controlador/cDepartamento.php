<?php 
/**
		 * 
		 * @author Samuel Vara
		 */
$lista=Departamento::listarDepartamento();//Llamamos a la funcion de listar
$_SESSION['listarDepartamento']=$lista;//Guardamos los resultados en $_SESSION

require_once 'Modelo/Departamento.php';//Incluimos el departamento


$correcto=false;//Boolean a false		



if(isset($_POST['atras'])){//Si se pulsa atras
	unset($_SESSION['departamento']);//Se vacia la variable departamento
	unset($_SESSION['errorNuevoCOD']);//Se vacia la variable error de nuevo cod
	unset($_SESSION['errorNuevoDECS']);//Se vacia la variable error de nueva desc
	unset($_SESSION['errorModificar']);//Se vacia la variable error de modificar
	
}
if(isset($_SESSION['departamento'])){//Si la $_SESSION['departamento'] no esta vacia
		header("Location: index.php?location=buscar");//Rediriges a la pagina de buscar

}else{

if (isset($_REQUEST['buscar'])){//Si se pulsa buscar
	$correcto=true;//Correcto cambia a true

		$descripcion=$_POST['desc'];//Recogemos el valor de la descripcion 
		$departamento=Departamento::buscarDepartamento($descripcion);//Lamamos a l funcion de buscar y le pasamos el valor de la descripcion
		

		if($departamento==null){//Si la consulta devuelve null
			$_SESSION['error']="No hay departamentos con esa descripcion";//Guardamos un error en la la $_SESSION
			$correcto=false;//Cambiamos el valor a false
		
		}
		

		if($correcto){//Si correcto es true
					$_SESSION['departamento']=$departamento;//Pasamos el valor de la consulta a la $_SESSSION
					unset($_SESSION['error']);//Vaciamos el error por si nos dio una en una busqueda anterior
					header("Location: index.php?location=buscar");//Redirigimos a la pagina de buscar

		}
}

	
	
	
}

include 'Vista/layout.php';//Incluimos el layout

 ?>