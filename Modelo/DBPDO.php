<?php 
/**
 * 
 * @author Samuel Vara
 */
require_once 'UsuarioPDO.php';

 class DBPDO {  
     /**
     * Ejecuta una consulta SQL con o sin parámetros.
     *
     *
     * @param String $sql Consulta preparada SQL
     * @param array [string] $parametros Parámetros de la consulta
     * @return null|PDOStatement Null / ResultSet con la información del registro
     */
  public static function ejecutaConsulta($sql,$parametros) { 

    try{
   
         
    $conexion = new PDO('mysql:host=localhost;dbname=DAW208_SVGDBDEPARTAMENTO','DAW208','paso') ;//Inicia la conexion a la base de Datos

    $consultaPreparada = $conexion->prepare($sql);//Se le pasa la consulta 
               
    $consultaPreparada->execute($parametros);//Se ejecuta la consulta preparada
              
    

   } catch (PDOException $e) {//Si hay algun error 
          
          $consultaPreparada=null;
          unset($conexion);//Cierra la conexion
  }
    return $consultaPreparada;//Devuelve 
 }
}

 ?> 

