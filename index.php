<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de administracion Altamirano</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<?php
include('header.php')
?>

<section class="form">
        <form action="cargar_usuario.php" method="post" class="formulario">
        <input type="text" name="nombre" required placeholder="Nombre">
        <input type="text" name="apellido" required placeholder="Apellido">
        <input type="text" name="DNI" required placeholder="DNI">
        <input type="text" name="imagen" required placeholder="Imagen">
        <input type="text" name="mensaje" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Crear usuario">
        </form>

    <?php

    if(isset($_GET['ok'])){
echo('Usuario registrado con exito');


    }
    ?>


</section>
</body>
</html>