<?php
//creamos una cladse que permita conectarnos a la base de datos
	class Conectar{
		public static function conexion(){
		$conexion=new mysqli("localhost","root","rootroot", "musica");
		return $conexion;
		
		}
		
		
		
		
	}
  
?>