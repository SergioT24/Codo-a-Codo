<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<link rel="stylesheet" href="css/estilo.css">
	
	
	<title>PHP Primera clase</title>
	
</head>
<body>
			<header>
	<?php include 'menu.php'; ?>
	 
	</header>
  <section>
   <?php
   //echo $_GET['nombre'];
   if (isset($_POST['Enviar'])) {	

	trim(stripslashes( extract($_POST)));
	$mensaje=strip_tags($mensaje);
	
	//$nombre=$_POST['nombre'];
	//echo $nombre;
	echo '<br>';
	//echo $apellido;
	$email_to='fclastra@gmail.com';
	$email_from=strtolower($email);
	$subject='Formulario de contacto';
	$body='<p style="font-size: 10.5pt; font-family: Trebuchet MS,sans-serif;  color: #44546A; ">Nombre: ' . $nombre . "</p>";
	$body .= '<p style="font-size: 10.5pt; font-family: Trebuchet MS,sans-serif;  color: #44546A; ">Apellido: ' . $apellido . "</p>";
	$body .= '<img src=https://imagen>';
    //echo $body;
    $headers = "From: " .$email_to. "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

	//mail($email_to, $subject, $body, $headers);
	include 'conexion.php';
	
	$sql="INSERT INTO contacto (nombre, apellido, email, mensaje) VALUES ('$nombre', '$apellido', '$email', '$mensaje')";
    
	mysqli_query($basededatos, "SET SESSION sql_mode = ' ' ");   
    $result=mysqli_query($conexion, $sql);
   }
	?>
    <p>esto es html</p>
       
</section>
<footer>
  Pie de página
</footer>
</body>
</html>