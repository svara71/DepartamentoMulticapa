<?php  
		/**
		 * 
		 * @author Samuel Vara
		 */
		require_once 'UsuarioPDO.php';

		class Usuario{
			/**
			 * @var string
			 * @access private
			 */
			private $codigo;
			/**
			* @var string
			* @access private
			 */
			private $descripcion;
			/**
			 *
			 * @var string
			 * @access private
			 */
			private $password;
			/**
			 * @var string
			 * @access private
			 */
			private $perfil;


			  /**
			     * 
			     * Devuelve el codigo del usuario
			     * @param string $codigo 
			   */
			public function getCodigo() {
				return $this->codigo; 
			}
			  /**
			     *  Devuelve la Descripcion del usuario
			     * @param string $descripcion
			     */
			public function getDescripcion() {
				return $this->descripcion; 
			} 
			  /**
			     *  Devuelve el Password del usuario
			     * @param string $password
			     */
			public function getPassword() {
				return $this->password; 
			} 
			  /**
			     * Devuelve el Perfil del usuario
			     * @param string $perfil  
			     */
			public function getPerfil() {
				return $this->perfil; 
			} 

			    /**
			     * Usuario constructor.
			     * @param string $codigo Codigo del usuario
			     * @param string $descripcion Descripcion del usuario
			     * @param string $password Password del usuario
			     * @param string $perfil Perfil del usuario
			     */
			public function __construct($codigo, $descripcion, $password, $perfil){

				$this->codigo = $codigo;
	            $this->descripcion = $descripcion;
	            $this->password =  $password;
	            $this->perfil = $perfil;
			}


			    /**
			     *
			     * Destructor de usuario
			     * 
			     * 
			     *
			     */
			public function __destruct(){
				$this->codigo ;
				$this->descripcion;
				$this->password;
				$this->perfil;
			}


			    /**
			     * Valida el usuario
			     * @param  string $codigo
			     * @param  string $descripcion
			     * @return object Usuario
			     *
			     */
			
			public static function validarUsuario($codigo,$password){

				$objUser = null;
		        $arrayUsuario = UsuarioPDO::validarUsuario($codigo, $password);//Llama al metodo validar de UsuarioPDO

		        if ($arrayUsuario) {//Si hay un array de usuario
		            $objUser = new Usuario($codigo, $arrayUsuario['descripcion'], $password, $arrayUsuario['perfil']);//Mete los campos del array en un objeto
		        }
		        return $objUser;//Devuelve el objeto de usuario
			}
		}

	?>





