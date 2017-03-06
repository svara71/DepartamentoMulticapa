<!DOCTYPE html>
<html>
<head>
<title>ConexionMysql</title>
</head>
       <body>
		<?php
		
		function validarCampoTexto($texto){
			$valido_texto = 0;
			$patron_texto = "/^[a-zA-ZáéíóúAÉÍÓÚÑñ ]+$/";//Patron para validar el texto
			
				if(preg_match($patron_texto, $texto)){//Si la cadena que le pasas cumple con el patron 
					$valido_texto  = 1;//El valor de validar_texto cambia a 1
					return $valido_texto ;
				}else{//Si no lo cumple se mantiene en 0
					return $valido_texto ;
				}
		
		}
//--------------------------------------------------------------------------------------------------------------------------------
		function validarCampoAlfanumerico($alfnum){
			$valido = 0;
			$patron_alfanum ="/^[0-9a-zA-ZáéíóúAÉÍÓÚÑñ]+$/";//Patron para validar un campo con texto y numeros
			
				if(preg_match($patron_alfanum, $alfnum)){//Si la cadena que le pasas cumple con el patron 
					$valido = 1;//El valor de validar_alfanum cambia a 1
					return $valido;
				}else{//Si no lo cumple se mantiene en 0
					return $valido;
			
				}
	
		}
//----------------------------------------------------------------------------------------------------------------------------------
		function validarCampoNumero($numero){
			$valido_numero = 0;
			$patron_numero = "/^[0-9]+$/";//Patron para validar un campo con texto y numeros
			
				if(preg_match($patron_numero, $numero)){//Si la cadena que le pasas cumple con el patron 
					$valido_numero = 1;//El valor de validar_numero cambia a 1
					return $valido_numero;
				}else{//Si no lo cumple se mantiene en 0
					return $valido_numero;
			
				}
	
		}
//---------------------------------------------------------------------------------------------------------------------------------
		function validarFechaAnt($fecha){
			$valido_fecha = 0;
			$ArrayFecha = explode("-",$fecha);//Divide la fecha pasada y la combierte en un Array 
			
			//Recoge los valores del dia el mes y el año del array
		    $ano =$ArrayFecha[0];
		    $mes =$ArrayFecha[1];
		    $dia =$ArrayFecha[2];
	
			//Recoge los valores del dia actual
			$diahoy=date("d");
			$meshoy=date("m");
			$anohoy=date("Y");
			
				//Compara que la fecha pasada no sea superior al la fecha actual
				if($ano = $anohoy && $mes = $meshoy && $dia < $diahoy || $ano = $anohoy && $mes < $meshoy  || $ano < $anohoy  ){//Si es anterior a la fecha devuelve 1
					$valido_fecha = 1;
					
				}else{//Si no devuelve 0
					
					$valido_fecha = 0;
				}
	
				return $valido_fecha;
		}
//-----------------------------------------------------------------------------------------------------		
		function CalculaEdad( $fecha ) {
			$Array = explode("-",$fecha);//Divide la fecha pasada y la combierte en un Array 
			
			//Recoge los valores del dia el mes y el año del array		  
		    $ano =$Array[0];
		    $mes =$Array[1];
		    $dia =$Array[2];
			
			//Recoge los valores del dia actual		  
			$diahoy=date("d");
			$meshoy=date("m");
			$anohoy=date("Y");
			
					if (($mes == $meshoy) && ($dia > $diahoy)) {
						$anohoy=($anohoy-1); }

						//si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual

						if ($mes > $meshoy) {
						$ano=($ano-1);}

						//ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad

						$edad=($anohoy-$ano);
						
						return $edad;
		}
//-----------------------------------------------------------------------------------------------------------		
		function validarDNI($dni){
			$valido_fecha=0;
			$letra = substr($dni, -1); //Extrae la letra de la cadena
			$letraMay=strtoupper($letra);
			$numeros = substr($dni, 0, -1);//Extrae los numeros de la cadena
			
			if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letraMay && strlen($letraMay) == 1 && strlen ($numeros) == 8 ){//Comprueba que el DNI es valido
				$valido_fecha=1;
			}else{
				$valido_fecha=0;
			}
			return $valido_fecha;
		}
//-------------------------------------------------------------------------------------------------------------		
		function fechahora(){
			$numero_mes = date("m"); 
				$numero_dia_semana = date("N"); 
				switch($numero_mes){ 
					case 1: $mes = "Enero"; 
					  break; 
					case 2: $mes = "Febrero"; 
					  break; 
					case 3: $mes = "Marzo"; 
					  break; 
					case 4: $mes = "Abril"; 
					  break; 
					case 5: $mes = "Mayo"; 
					  break; 
					case 6: $mes = "Junio"; 
					  break; 
					case 7: $mes = "Julio"; 
					  break; 
					case 8: $mes = "Agosto"; 
					  break; 
					case 9: $mes = "Septiembre"; 
					  break; 
					case 10: $mes = "Octubre"; 
					  break; 
					case 11: $mes = "Noviembre"; 
					  break; 
					case 12: $mes = "Diciembre"; 
					  break; 
			  } 
			   switch($numero_dia_semana){ 
					case 1: $dia_semana = "Lunes"; 
					  break; 
					case 2: $dia_semana = "Martes"; 
					  break; 
					case 3: $dia_semana = "Miercoles"; 
					  break; 
					case 4: $dia_semana = "Jueves"; 
					  break; 
					case 5: $dia_semana = "Viernes"; 
					  break; 
					case 6: $dia_semana = "Sabado"; 
					  break; 
						 case 7: $dia_semana = "Domingo"; 
					  break; 
			  } 
			  
				return $dia_semana.", ".date("j")." de ".$mes." de ".date("Y")." ".date("g:i a");
	  
		}
		
		?>
       </body>
</html>