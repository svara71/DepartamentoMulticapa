<?php 
	/**
		 * 
		 * @author Samuel Vara
		 */
require_once 'Modelo/Departamento.php';//Incluimos el departamento




$entradaOK=true;//Entrada true
if(isset($_POST['nuevo'])){//Si se pulsa nuevo
	include "otros/funciones.php";//Se incluye las funciones 
		
		if(empty($_POST['descripcion'])){//Si la descripcion esta vacia
			$_SESSION['errorNuevoDECS']="Campo vacio";//Devuleve un error y lo mete en la variable $_SESSION
			$entradaOK=false;//Entradaok pasa a false
		}else{
			if(!validarCampoTexto($_POST['descripcion'])){//Llamamos ha la funcion validarCampoTexto
				$_SESSION['errorNuevoDECS']="Solo se pueden introduccir letras";//Devuleve un error y lo mete en la variable $_SESSION
				$entradaOK=false;//Entrada a false
			}else{
				$descripcion=$_POST['descripcion'];//Pasamoe el valor de la descripcion a una variable
				$entradaOK=true;//EntradaOK a true
			}
		}

		
		if(empty($_POST['codigo'])){//Si la descripcion esta vacia
			$_SESSION['errorNuevoCOD']="Campo vacio";//Devuleve un error y lo mete en la variable $_SESSION
			$entradaOK=false;//Entradaok pasa a false
		}else{
			if(!validarCampoTexto($_POST['codigo'])){//Llamamos ha la funcion validarCampoTexto
				$_SESSION['errorNuevoCOD']="Solo se pueden introduccir letras";//Devuleve un error y lo mete en la variable $_SESSION
				$entradaOK=false;//Entrada a false
			}else{
				$descripcion=$_POST['codigo'];//Pasamoe el valor de la descripcion a una variable
				$entradaOK=true;//EntradaOK a true
			}
		}




if($entradaOK){//Si entrada es true
		Departamento::nuevoDepartamento($codigo,$descripcion);//Pasamos los valores a la funcion
		unset($_SESSION['errorNuevoCOD']);//Vaciamos los errores que se allas podido produccir
		unset($_SESSION['errorNuevoDECS']);//Vaciamos los errores que se allas podido produccir
		header("refresh:0; url=index.php?location=departamento");//Refrescamos y redirigimos a la pagina d departamento

}


	


}
include "Vista/layout.php";//Incluimos el layout

?>