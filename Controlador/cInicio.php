<?php 
/**
		 * 
		 * @author Samuel Vara
		 */
require_once 'Modelo/Usuario.php';//Incluimos el Usuario

if(isset($_REQUEST['salir'])){//Si se pulsa salir

	unset($_SESSION['usuario']);//Se vacia la $_SESSION['Usuario']
	session_destroy();//Se destrulle la session
	header('Location: index.php');//Se redirige al index

}else{

	
		include 'Vista/layout.php';//Incluye layout

	}
	


 ?>