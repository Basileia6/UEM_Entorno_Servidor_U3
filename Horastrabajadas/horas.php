<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="principal">
        <form action="horas.php" method="post">
            <label for="horas">Número de horas</label>
            <input type="number" name="horas" id="horas">
            <input type="submit" name="calcular" value="Calcular">
        </form>
        <?php
            $phora = 12;
            if (isset($_REQUEST['calcular'])){
                echo "El salario es de 12€ la hora, por tanto el total es: ".$phora*$_REQUEST['horas'];
            }
        ?>
    </div>
</body>
</html>