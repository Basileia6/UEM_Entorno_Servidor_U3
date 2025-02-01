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
        <p>Escriba su nombre:</p>
        <form action="menu.php" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            
            <input type="submit" value="Guardar" name="guardar">
        </form>
        <ul>
            <li><a href="menu.php">Volver al inicio</a></li>
        </ul>
    </div>
</body>
</html>