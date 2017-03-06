<?php  
		  
		/**
		 * 
		 * @author Samuel Vara
		 */
		require_once 'DepartamentoPDO.php';//Incluye DepartamentoPDO

		class Departamento{
			/**
			 * @var string
			 * @access private
			 */
			private $codigoD;
			/**
			 * @var string
			 * @access private
			 */
			private $descripcionD;
			
			  /**
			     * 
			     * @param string $codigo Devuelve el codigo del departamento
			   */
			public function getCodigoD() {
				return $this->codigoD; 
			}
			   /**
			     * 
			     * @param string $descripcion Devuelve la Descripcion del departamento
			     */
			public function getDescripcionD() {
				return $this->descripcionD; 
			} 
		

			
			    /**
			     * Usuario constructor.
			     * @param string $codigo Codigo del departamento
			     * @param string $descripcion Descripcion del departamento
			     */
			public function __construct($codigoD, $descripcionD){

				$this->codigoD = $codigoD;
	            $this->descripcionD = $descripcionD;
	            
			}


			    /**
			     *
			     * Destructor de departamento
			     * 
			     * 
			     *
			     */
			public function __destruct(){
				$this->codigoD ;
				$this->descripcionD;
				
			}
			
			  /**
			     * Buscar un departamento por la descripcion
			     * @param  string $descripcion
			     * @return Array[object Departamento]
			     *
			     */
			public static function buscarDepartamento($descripcion){

				$objDep = null;//Objeto  departamento inicializado a null 
		        $arrayDepartamento = DepartamentoPDO::buscarDepartamento($descripcion);//Llama al metodo con el mismo nombre de DepartmantoPDO
		        $arrayBuscado=[];//Array vacio para almacenar los objetos 
		        foreach ($arrayDepartamento as $Dep) {//Recorre arrayDepartamento 

		        	
		        	$objDep = new Departamento($Dep['codigoD'],$Dep['descripcionD']);//Crea un nuevo object de departmanto





		        	$arrayBuscado[]=$objDep;//Lo introducce en el arrayBuscar
		        }
		        
		        return $arrayBuscado;//Devuelve el arrayBuscar
			}



			
			  /**
			     * Buscar un departamento por su codigo
			     * @param  string $codigo
			     * @return object Departamento
			     *
			     */
			public static function buscarCodigoDepartamento($codigo){

				$objDep = null;//Objeto  departamento inicializado a null 
		        $arrayDepartamento = DepartamentoPDO::buscarCodigoDepartamento($codigo);//Llama al metodo con el mismo nombre de DepartmantoPDO
		       
		        if($arrayDepartamento) {//Si hay valores en el array

		        	
		        	$objDep = new Departamento($codigo,$arrayDepartamento['descripcionD']);//Crea un objeto departamento



		        	
		        }
		        
		        return $objDep;//Lo debuelve
			}
			 /**
			     * Buscar un departamento por su codigo
			     * @return object Departamento
			     *
			     */
			public static function listarDepartamento(){

				$objDep = null;//Objeto  departamento inicializado a null 
		       $arraylistaDepartamento = DepartamentoPDO::listarDepartamento();//Llama al metodo con el mismo nombre de DepartmantoPDO
		        $arrayListar=[];//Array vacio para almacenar los objetos 
		        foreach ($arraylistaDepartamento as $Dep) {//Recorre arrayDepartamento 

		        	
		        	$objDep = new Departamento($Dep['codigoD'],$Dep['descripcionD']);//Crea un nuevo object de departmanto



		        	$arrayListar[]=$objDep;//Lo introducce en el arrayListar
		        }
		        
		        return $arrayListar;//Lo devuelve el arrayBuscar
			}
			
 				/**
			     * Borra un departamento 
			     * @param  string $codigo
			     * @return boolean
			     *
			     */
		public static function borrarDepartamento($codigo) { 
      			$correcto = DepartamentoPDO::borrarDepartamento($codigo);//Llama al metodo con el mismo nombre de DepartmantoPDO 
      			  return $correcto;
    			} 
			
				 /**
			     * Modificaa un departamento 
			     * @param  string $codigo
			     * @param  string $descripcion
			     * @return boolean
			     *
			     */
	   public static function modificaDepartamento($descripcion,$codigo) { 
      			$correcto = DepartamentoPDO::modificaDepartamento($descripcion,$codigo); //Llama al metodo con el mismo nombre de DepartmantoPDO
      			  return $correcto; 
    			} 
			


    			 /**
			     * Crea un departamento 
			     * @param  string $codigo
			     * @param  string $descripcion
			     * @return boolean
			     *
			     */
		public static function nuevoDepartamento($codigo,$descripcion) { 
      			$correcto = DepartamentoPDO::nuevoDepartamento($codigo,$descripcion); //Llama al metodo con el mismo nombre de DepartmantoPDO
      			  return $correcto; 
    			} 
		}
	

	?>





