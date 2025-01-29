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
        <form action="conversor.php" method="post">
            <label class="form-label" for="kilo">Tamaño en Kb</label>
            <input class="form-control" type="number" name="kilo" id="kb">
            <input class="btn w-100 mt-4" type="submit" name="calcular" value="Convertir">
        </form>
    <?php
    if (isset($_REQUEST['calcular'])){
        $kb = $_REQUEST['kilo'];
        $const = 1024;
        echo "$kb Kb son ".$kb/$const." Mb.";
    }
    ?>
    </div>
</body>
</html>