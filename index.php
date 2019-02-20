<?php

echo "Inicio index"."<br>";
// Llamada al fichero que inicia la conexión a la Base de Datos
require_once("db/config.php"); //devuelve la conexion


//Llamada al controlador
require_once("controllers/controller_login.php");


?>