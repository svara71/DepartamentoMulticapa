<?php  
	
	require_once 'Modelo/Usuario.php';//Incluimos Usuario.php
	require_once 'Modelo/Departamento.php';//Iniciamos departamento
	require_once 'Config/Config.php';//Incluimos Config.php
	session_start();//Iniciamos la session
	$controlador = 'Controlador/cInicio.php';


if(isset($_SESSION['usuario'])){//Si se a iniciado session 
	 if (isset($_GET['location']) && isset($controladores[$_GET['location']])) {//Se comprueba que hay una localizacion y que hay una localizacion del controlador
        $controlador = $controladores[$_GET['location']];//Se le pasa la localizacion 
    	}
	} else {//sino
	    $_GET['location'] = 'login';//Se le pasa la localizacion de l controlador de login 
	    $controlador = $controladores[$_GET['location']];//Se lo pasa a la variable
	}

include $controlador;//Se incluye 
?>