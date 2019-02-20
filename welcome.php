<?php
 include('db/config.php'); 
  session_start();
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Bienvenido <?php /* echo $login_session; */ ?></h1> 
	  
	  
	  <nav class="dropdownmenu">
  <ul>
    <li><a href="models/downmusic.php">Seleccionar tracks</a></li>
    <li><a href="models/histfacturas.php">Consultar historial de facturas</a>  </li>
    <li><a href="models/form-facturas.php">Consultar facturas entre dos fechas</li>
  
  </ul>
</nav>
	  
	  
	  
      <h2><a href = "logout.php">Cerrar Sesion</a></h2>
   </body>
   
</html>