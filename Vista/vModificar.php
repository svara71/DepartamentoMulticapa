<?php 
/**
		 * 
		 * @author Samuel Vara
		 */
	require_once 'Modelo/Departamento.php';//Incluimos departamento
	if(isset($_GET['modificar'])){//Si modificar


	$departamento=Departamento::buscarCodigoDepartamento($_GET['codigo']);//LLamamos a la funcion 

	$cod=$departamento->getCodigoD();//Recivimos los valores
	$desc=$departamento->getDescripcionD();//Recivimos los valores

	$_SESSION['modificar']=$departamento;//Pasamos los valores a la $_SESSION
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="./index.php?location=modificar" method="post">
			<span>Codigo</span><input type="text" readonly name="codigo" value="<?php echo $_SESSION['modificar']->getCodigoD();?>">
			<span>Descripcion</span><input type="text" name="descripcion" value="<?php echo $_SESSION['modificar']->getDescripcionD();?>">
			<?php if(!empty($_SESSION['errorModificar'])){
					print $_SESSION['errorModificar'];	
				} 
				//Imprimimos el error?>
			<input type="submit" name="modificar" value="Modificar">

	</form>
		 <form action="./index.php?location=departamento" method="post">
      		  <button type="submit" name="atras" value="atras">Atras</button>
  		</form>
</html>