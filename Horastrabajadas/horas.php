<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="principal">
        <form action="horas.php" method="post">
            <label class="form-label" for="horas">Número de horas</label>
            <input class="form-control" type="number" name="horas" id="horas">
            <input class="btn w-100 mt-4" type="submit" name="calcular" value="Calcular">
        </form>
        <?php
            $phora = 12;
            if (isset($_REQUEST['calcular'])){
                echo "El salario es de 12€ la hora, por tanto el total es: ".$phora*$_REQUEST['horas']."€";
            }
        ?>
    </div>
</body>
</html>