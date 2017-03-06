<?php 
/**
		 * 
		 * @author Samuel Vara
		 */
require_once 'Modelo/Usuario.php';//Incluimos el usuario

if(isset($_SESSION['usuario'])){//Si ya hay valores en la session 
	header("Location: index.php?location=departamento");//Redirige a inicio

}else{
	$correcto=false;//Boolean a false

	if(isset($_REQUEST['enviar']) && isset($_REQUEST['usuario']) && isset($_REQUEST['password'])){//Se se pulsa enviar y hay valores en usuario y password

		$usuario=Usuario::validarUsuario($_REQUEST['usuario'], hash('sha256',$_REQUEST['password']));//Llamamos a validar usuario y le pasamos los valores de el usuario y la contraseña

		if(is_null($usuario)){//Si la consulta devuelve  null
			print "Usuario no encontrado";	//Devuelve un error
		}else{
			$correcto=true;//Boolean a true
		}
	}

	if($correcto){//Si correcto es true
		$_SESSION['usuario']=$usuario;//incluimos el resultado en la variable $_SESSION

		header("Location: index.php?location=departamento");//Redirigimos a departamento

	}else{
		include 'Vista/layout.php';//incluimos el layout
	}


}

 ?>