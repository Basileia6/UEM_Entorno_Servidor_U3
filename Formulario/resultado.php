<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = $_REQUEST['nombre'];
        $apel = $_REQUEST['apell'];
        $edad = $_REQUEST['edad'];
        $peso = $_REQUEST['peso'];
        $sexo = $_REQUEST['sexo'];
        $estado = $_REQUEST['estado'];
        $aficiones = $_REQUEST['aficiones'];

        echo "Su nombre es $nombre<br>Sus apellidos son $apel<br>Tiene $edad<br>Su peso es de $peso Kg<br>Es $sexo<br>Su estado civil es $estado<br>Le gusta:";
        foreach($aficiones as $aficion){
            echo "$aficion,";
        }
    ?>
</body>
</html>