<?php

 /*  session_start(); */
  
  //Llama al controlador
  require_once("models/login_model.php");
  
  
  $facturas=new facturas_model();
  
  $datosfactura=$facturas->get_facturas(); //contiene idCliente
  

  //Llamada a la vista
	require_once("../views/idcliente_view.phtml");
  
  
  
  
   ?>
 