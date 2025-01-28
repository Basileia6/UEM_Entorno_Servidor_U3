<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Calculadora</title>
</head>
<body>
    <div class="principal">
        <form action="calculadora.php" method="post">
            <div>
                <label class="form-label" for="n1">Número 1</label>
                <input class="form-control w-100" type="number" name="n1" id="n1">
            </div>
            <div>
                <label class="form-label" for="n2">Número 2</label>
                <input class="form-control w-100" type="number" name="n2" id="n2">
            </div>
            <input type="submit" class="btn w-100 mt-4" name="confirmar" value="Calcular"/> 
        </form>
        <div>
        <?php
        if (isset($_REQUEST['confirmar'])){
            $n1 = $_REQUEST['n1'];
            $n2 = $_REQUEST['n2'];
            echo "Suma $n1+$n2: ".$n1+$n2."</br>";
            echo "Resta $n1-$n2: ".$n1-$n2."</br>";
            echo "Multiplicación $n1*$n2: ".$n1*$n2."</br>";
            echo "División $n1/$n2: ".$n1/$n2."</br>";
        }
        ?>
        </div>
    </div>
    
</body>
</html>