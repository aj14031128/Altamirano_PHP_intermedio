
<?php

$nombre_per=$_POST['nombre'];
$apellido_per=$_POST['apellido'];
$mensaje_per=$_POST['mensaje'];
$DNI_per=$_POST['DNI'];
$imagen_per=$_POST['imagen'];

//conexion a BD
$conexionBD=mysqli_connect('localhost',"root","","altamiranodiego") or exit ("No se puede conectar con la BD");

//Consulta a la tabla (insert)
mysqli_query($conexionBD, "INSERT INTO usuariospagina VALUES ('default','$nombre_per','$apellido_per','$DNI_per','$mensaje_per','$imagen_per')");

mysqli_close($conexionBD);

header("Location:index.php?ok");
?>