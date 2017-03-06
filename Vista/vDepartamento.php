
<form action="./index.php?location=departamento" method="post">
	<div class="vista">
		
			<p>Descripcion</p>
				<input type="text" name="desc">
			
			<p></p>
			  <input type="submit" name="buscar" value="Buscar">
			<?php  
			if(!empty($_SESSION['error'])){
				print $_SESSION['error'];
			}
			?>
	</div>

</form> 
<form action="index.php?location=inicio" method="post">
        <button type="submit" name="salir" value="salir">Salir</button>
       
 </form>
<?php 
/**
		 * 
		 * @author Samuel Vara
		 */
require_once 'Modelo/Departamento.php';



echo "<a href='index.php?location=nuevo'>Nuevo</a>";//Boton de nuevo
print_r('<br/>');
$listadoDepartamento=$_SESSION['listarDepartamento'];//Listamos los departamentos
foreach ($listadoDepartamento as $key) {//Recorremos 
	$codigo=$key->getCodigoD();//Recogemos el valor 
	$descripcion=$key->getDescripcionD();//Recogemos el valor 


	print_r($codigo." ");//Imprimimos el valor

	print_r($descripcion." ");//Imprimimos el valor
	echo "<a href='index.php?location=borrar&borrar=true&codigo=$codigo'>Borrar  </a>";//Boton de borrar

	echo "<a href='index.php?location=modificar&modificar&codigo=$codigo'>Modifcar</a>";//Boton de modificar
	print_r('<br/>');
}




 ?>