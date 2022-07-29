<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver usuarios</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>





<?php
include("header.php");

?>

<section class="contenedor_usuario">

<?php
include("conexion.php");
$consulta_db=mysqli_query($conexionBD, "SELECT * FROM usuariospagina");


//para mostrarlos, hay que rcorrer la matriz
while($mostrar_datos=mysqli_fetch_assoc($consulta_db)){
    ?>



<div class="caja_usuario">
<h1><?php echo $mostrar_datos['nombre'] . " " . $mostrar_datos['apellido']  ?></h1>
<img src="imagenes/<?php echo $mostrar_datos['imagen']?>" alt="">
<p><?php echo  "Mensaje:" .$mostrar_datos['mensaje']?></p>


<div class="botones_elim_editar">
<div class="eliminar"><p><a href="eliminar.php?id=<?php echo $mostrar_datos['id']?>">Eliminar</a></p></div>
<div class="editar"><p><a href="editar_form.php?id=<?php echo $mostrar_datos['id']?>">Editar</a></p></div>
</div>

</div>



<?php }
?>



</body>
</html>