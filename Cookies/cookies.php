<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_REQUEST['cambiar'])){
            setcookie("background",$_REQUEST['color'],time()+60);
        }
    ?>
    <?php 
        if (isset($_COOKIE['background'])){
            echo "<p>El color elegido para el fondo es: ".$_COOKIE['background']."</p>"; 
        } 
    ?>
    <form action="#" method="post">
        <label for="color">Escriba el color de fondo que desea</label>
        <input type="text" name="color">
        <input type="submit" name="cambiar" value="cambiar">
    </form>
    
</body>
</html>