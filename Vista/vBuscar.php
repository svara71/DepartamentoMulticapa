
<pre>

<?php 
/**
		 * 
		 * @author Samuel Vara
		 */
require_once 'Modelo/Departamento.php';//Incluimos el departamento









foreach ($_SESSION['departamento'] as $key) {//Recorremos
	$codigo=$key->getCodigoD();//Almacenamos el valor 
	$descripcion=$key->getDescripcionD();//Almacenamos el valor 


	print_r($codigo);//Lo imprimimos
	
	print_r($descripcion);//Lo imprimimos

	echo "<a href='index.php?location=borrar&borrar=true&codigo=$codigo'>Borrar  </a>";//Creamos los botones borrar

	echo "<a href='index.php?location=modificar&modificar&codigo=$codigo'>Modifcar</a>";//Creamos los botones Modificar
	print_r('<br/>');
}


 ?>
 	
 </pre>
  <form action="./index.php?location=departamento" method="post">
        <button type="submit" name="atras" value="atras">Atras</button>
  </form>