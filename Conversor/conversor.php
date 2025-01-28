<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="principal">
        <form action="conversor.php" method="post">
            <label for="kilo">Tamaño en Kb</label>
            <input type="number" name="kilo" id="kb">
            <input type="submit" name="calcular" value="Convertir">
        </form>
    </div>
    <?php
    if (isset($_REQUEST['calcular'])){
        $kb = $_REQUEST['kilo'];
        $const = 1024;
        echo "$kb Kb son ".$kb/$const." Mb.";
    }
    ?>
</body>
</html>