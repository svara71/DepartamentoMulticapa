
	<?php  
		/**
		 * 
		 * @author Samuel Vara
		 */
		require_once 'DBPDO.php' ;
		class UsuarioPDO {

			 /**
			     * Valida el usuario
			     * @param  string $codigo
			     * @param  string $descripcion
			     * @return object Usuario
			     *
			     */
			public static function validarUsuario($codigo,$password){

				$arrayUsuario=[];//Inicializa un array

				$consulta="select * from Usuario where CodUsuario=? AND Pass=?";//Consulta a la base de datos
				
				$resultado=DBPDO::ejecutaConsulta($consulta,[$codigo,$password]);//Llamada al el metodo de DBPDO ejecutar consulta

				if($resultado->rowCount()){//Si al columna

					$usuario= $resultado ->fetchObject();//Devuelve los resultados de la consulta

					$arrayUsuario['codigo'] = $usuario->CodUsuario;// Almacena el codigo
		            $arrayUsuario['descripcion'] = $usuario->DescUsuario;//Almacena la descripcion
		            $arrayUsuario['password'] = $usuario->Pass;//Almacena la contraseña
		            $arrayUsuario['perfil'] = $usuario->Perfil;//Almacena el perfil

				}
			
				return $arrayUsuario;//Array que los campos de un usuario
			}
		}
	
	?>
