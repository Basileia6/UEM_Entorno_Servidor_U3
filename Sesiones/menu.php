<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        Elegir una opción:
        <ul>
            <li><a href="nombre.php">Introducir Nombre</a></li>
            <li><a href="apellido.php">Introducir Apellidos</a></li>
            <li><a href="verdatos.php">Mostrar datos</a></li>
            <li><a href="datosborrados.php">Borrar sesión</a></li>
        </ul>
    </div>
    <?php
        if (!isset($_SESSION['nombre'])){
            $_SESSION['nombre']=$_REQUEST['nombre'];
        }
        if (!isset($_SESSION['apellidos'])){
            $_SESSION['apellidos']=$_REQUEST['apell'];
        }
    ?>
</body>
</html>