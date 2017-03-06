
	<?php  
		/**
		 * 
		 * @author Samuel Vara
		 */
		require_once 'DBPDO.php' ;
		class DepartamentoPDO {

			  /**
			     * Buscar un departamento por la descripcion
			     * @param  string $descripcion
			     * @return Array 
			     *
			     */
			public static function buscarDepartamento($descripcion){

				

				$consulta="select * FROM Departamento where DescDepartamento like concat('%',?,'%') ";//Consulta a la base de datos
				
				$resultado=DBPDO::ejecutaConsulta($consulta,[$descripcion]);//Llamamos a ejecutar consulta 

				$arrayDepartamento=[];//Array vacio
			
				if($resultado->rowCount()){//si hay filas
				$cont=0;//Contador a 0
				while($departamento= $resultado ->fetchObject()){//Mientras halla valores 
						//los introduces en el array 
						$arrayDepartamento[$cont]['codigoD'] = $departamento->CodDepartamento;

			            $arrayDepartamento[$cont]['descripcionD'] = $departamento->DescDepartamento;
		          		 $cont++;//Aumentas el contedor en 1
			          }  
				}
			
				return $arrayDepartamento;
			}
			  /**
			     * Buscar un departamento por la codigo
			     * @param  string ~codigo
			     * @return Array 
			     *
			     */
			public static function buscarCodigoDepartamento($codigo){

				

				$consulta="select * FROM Departamento where CodDepartamento=? ";//Consulta a la base de datos
				
				$resultado=DBPDO::ejecutaConsulta($consulta,[$codigo]);//Llamamos a ejecutar consulta 

				$arrayDepartamento=[];//Array vacio
			
				if($resultado->rowCount()){//si hay filas
				$departamento= $resultado ->fetchObject();//Recorremos 
						//los introduces en el array 
						$arrayDepartamento['codigoD'] = $departamento->CodDepartamento;

			            $arrayDepartamento['descripcionD'] = $departamento->DescDepartamento;
		          		
				}
			
				return $arrayDepartamento;
			}
			  /**
			     * Lista departamentos
			     * @return Array 
			     *
			   */
			public static function listarDepartamento(){

				

				$consulta="select * FROM Departamento";//Consulta a la base de datos
				
				$resultado=DBPDO::ejecutaConsulta($consulta,['']);//Llamamos a ejecutar consulta 

				$arraylistaDepartamento=[];//Array vacio
			
				if($resultado->rowCount()){//si hay filas
				$cont=0;//Contador a 0
				while($departamento= $resultado ->fetchObject()){//Mientras halla valores 
						//los introduces en el array 
						$arraylistaDepartamento[$cont]['codigoD'] = $departamento->CodDepartamento;

			            $arraylistaDepartamento[$cont]['descripcionD'] = $departamento->DescDepartamento;
		          		 $cont++;//Aumentas el contedor en 1
			          }  
				}
			
				return $arraylistaDepartamento;
			}
			  /**
			     * Borra un departamento 
			     * @param  string $codigo
			     * @return boolean
			     *
			     */
			public static function borrarDepartamento($codigo){

				$correcto=false;//Variable boolean a False
				$consulta="Delete FROM Departamento where CodDepartamento=?";//Consulta a la base de datos
				
				if($resultado=DBPDO::ejecutaConsulta($consulta,[$codigo])){//Llamamos a ejecutar consulta y si devuelve algun valor
						$correcto=true;//Cambiamos el valor de correcto
				}
				return $correcto;//Devolvemos correcto
			}
			  /**
			     * Modifica un departamento 
			     * @param  string $descripcion
			     * @param  string $codigo
			     * @return boolean
			     *
			     */
			public static function modificaDepartamento($descripcion,$codigo){

				$correcto=false;//Variable boolean a False
				$consulta="Update Departamento set DescDepartamento=? where CodDepartamento=?";//Consulta a la base de datos
				
				if($resultado=DBPDO::ejecutaConsulta($consulta,[$descripcion,$codigo])){//Llamamos a ejecutar consulta y si devuelve algun valor
						$correcto=true;//Cambiamos el valor de correcto
				}
				return $correcto;//Devolvemos correcto
			}
			  /**
			     * Crea un departamento
			     * @param  string $descripcion
			     * @param  string $codigo
			     * @return boolean
			     *
			     */
			public static function nuevoDepartamento($codigo,$descripcion){

				$correcto=false;//Variable boolean a False
				$consulta="insert into Departamento value(?,?)";//Consulta a la base de datos
				
				if($resultado=DBPDO::ejecutaConsulta($consulta,[$codigo,$descripcion])){//Llamamos a ejecutar consulta y si devuelve algun valor
						$correcto=true;//Cambiamos el valor de correcto
				}
				return $correcto;//Devolvemos correcto
			}
		}
	
	?>