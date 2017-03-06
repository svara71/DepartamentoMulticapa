<?php 
/**
		 * 
		 * @author Samuel Vara
		 */
require_once 'Modelo/Departamento.php';//Incluimos departamento




	$entradaOK=true;//Entrada true
	if(isset($_POST['modificar'])){//Si se pulsa modificar 
		include "otros/funciones.php";//Se incluye las funciones 

		$codigo=$_POST['codigo'];//Recibimos el valor del codigo
		if(empty($_POST['descripcion'])){//Si la descripcion esta vacia
			$_SESSION['errorModificar']="Campo vacio";//Devuleve un error y lo mete en la variable $_SESSION
			$entradaOK=false;//Entradaok pasa a false
		}else{
			if(!validarCampoTexto($_POST['descripcion'])){//Llamamos ha la funcion validarCampoTexto
				$_SESSION['errorModificar']="Solo se pueden introduccir letras";//Devuleve un error y lo mete en la variable $_SESSION
				$entradaOK=false;//Entrada a false
			}else{
				$descripcion=$_POST['descripcion'];//Pasamoe el valor de la descripcion a una variable
				$entradaOK=true;//EntradaOK a true
			}
		}


		if($entradaOK){//Si entrada es true
			Departamento::modificaDepartamento($descripcion,$codigo);//Pasamos los valores a la funcion
			unset($_SESSION['errorModificar']);//Vaciamos los errores que se allas podido produccir
			header("refresh:0; url=index.php?location=departamento");//Refrescamos y redirigimos a la pagina d departamento
		}
		

	}
		include "Vista/layout.php";//Incluimos layout

 ?>