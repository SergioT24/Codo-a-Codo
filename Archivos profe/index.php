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
   
    <p>esto es html</p>
    <p>
<?php
$cadena1= 'hola';
$cadena2='que tal';
echo $cadena1.' '.$cadena2;


settype($numero2, "integer");


$numero='2';
settype($numero, "integer");
$numero2=25;

 $total=$numero2/$numero;
 settype($total, "integer");
echo 'Total= '.$total;
?>
 </p>
   
</section>
<footer>
  Pie de página
</footer>
</body>
</html>