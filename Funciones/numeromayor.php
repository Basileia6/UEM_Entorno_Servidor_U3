<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <?php
        function numeromayor($num1,$num2,$num3){
            $num = $num1;
            if ($num<$num2){
                $num=$num2;
            }
            if ($num<$num3){
                $num=$num3;
            }
            return $num;
        }
    ?>
    <div>
        <form action="#" method="post">
            <div>
                <label for="num1">Número 1</label>
                <input type="number" name="num1" id="num1">
            </div>
            <div>
                <label for="num2">Número 2</label>
                <input type="number" name="num2" id="num2">
            </div>
            <div>
                <label for="num3">Número 3</label>
                <input type="number" name="num3" id="num3">
            </div>
            <input type="submit" name="comprobar" value="comprobar">
        </form>
        <?php
            if (isset($_REQUEST['comprobar'])){
                $mayor = numeromayor($_REQUEST['num1'],$_REQUEST['num2'],$_REQUEST['num3']);
                echo "El número mayor es $mayor";
            }
        ?>
    </div>    
</body>
</html>