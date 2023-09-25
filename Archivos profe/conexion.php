<?php
    $servidor = "localhost";
    $usuario = "uv029723";
    $contrasena = "Sistemas3141";
    $basededatos = "23086";

    $conexion = mysqli_connect($servidor, $usuario, $contrasena) or die ("No se conecto al servidor");
    
    
    $db = mysqli_select_db($conexion, $basededatos) or die ("No se conecto a la base");
?>