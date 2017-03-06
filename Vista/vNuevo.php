<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="./index.php?location=nuevo" method="post">
			<span>Codigo</span><input type="text" name="codigo" value="">
				<?php if(!empty($_SESSION['errorNuevoCOD'])){
					print $_SESSION['errorNuevoCOD'];	
				} //Imprimimos el error?>
			<span>Descripcion</span><input type="text" name="descripcion" value="">
				<?php if(!empty($_SESSION['errorNuevoDECS'])){
					print $_SESSION['errorNuevoDECS'];	
				} //Imprimimos el error?>
			<input type="submit" name="nuevo" value="Nuevo">

	</form>
		 <form action="./index.php?location=departamento" method="post">
        <button type="submit" name="atras" value="atras">Atras</button>
  </form>
</html>