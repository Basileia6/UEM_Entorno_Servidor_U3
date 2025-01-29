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
    <div>
        <form action="resultado.php" method="post">
            <div class="mt-2">
                <label class="form-label" for="nombre">Nombre</label>
                <input class="form-control" type="text" name="nombre">
            </div>
            <div class="mt-2">
                <label class="form-label" for="apell">Apellidos</label>
                <input class="form-control" type="text" name="apell">
            </div>
            <div class="linea mt-2">
                <div class="w-50">
                    <label class="form-label" for="edad">Edad</label>
                    <select class="form-control" name="edad" id="edad">
                        <option value="Entre 10 y 20 años">Entre 10 y 20 años</option>
                        <option value="Entre 21 y 30 años">Entre 21 y 30 años</option>
                        <option value="Entre 31 y 40 años">Entre 31 y 40 años</option>
                        <option value="Entre 41 y 50 años">Entre 41 y 50 años</option>
                    </select>
                </div>
                <div class="w-50 ps-3">
                    <label class="form-label" for="peso">Peso en Kg</label>
                    <input class="form-control" type="number" name="peso">
                </div>
            </div>
            <div class="linea mt-2">
                <div class="linea w-50">
                    <label class="form-label" for="sexo">Sexo:</label>
                    <div class="ps-3">
                        <div>
                            <input class="form-check-input" type="radio" name="sexo" id="Hombre" value="hombre">
                            <label for="Hombre">Hombre</label>
                        </div>
                        <div>
                            <input class="form-check-input" type="radio" name="sexo" id="Mujer" value="mujer">
                            <label for="Mujer">Mujer</label>
                        </div>
                    </div>
                </div>
                <div class="linea w-50">
                    <label class="form-label" for="estado">Estado Civil:</label>
                    <div class="ps-3">
                        <div>
                            <input class="form-check-input" type="radio" name="estado" id="Soltero" value="Soltero">
                            <label for="Soltero">Soltero</label>
                        </div>
                        <div>
                            <input class="form-check-input" type="radio" name="estado" id="Casado" value="Casado">
                            <label for="Casado">Casado</label>
                        </div>
                        <div>
                            <input class="form-check-input" type="radio" name="estado" id="Otro" value="Otro" >
                            <label for="Otro">Otro</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linea mt-2">
                <div>
                    <label class="form-label" for="aficiones">Aficiones:</label>
                </div>
                <div class="linea ps-3">
                    <div>
                        <div>
                            <input class="form-check-input" type="checkbox" name="aficiones[]" value="Cine">
                            <label for="Cine">Cine</label>
                        </div>
                        <div class="mt-1">
                            <input class="form-check-input" type="checkbox" name="aficiones[]" value="Deporte">
                            <label for="Deporte">Deporte</label>
                        </div>
                    </div>
                    <div class="ps-3">
                        <div>        
                            <input class="form-check-input" type="checkbox" name="aficiones[]" value="Literatura">
                            <label for="Literatura">Literatura</label>
                        </div>
                        <div class="mt-1">
                            <input class="form-check-input" type="checkbox" name="aficiones[]" value="Música">
                            <label for="Música">Música</label>
                        </div>
                    </div>
                    <div class="ps-3">
                        <div>
                            <input class="form-check-input" type="checkbox" name="aficiones[]" value="Tebeos">
                            <label for="Tebeos">Tebeos</label>
                        </div>
                        <div class="mt-1">
                            <input class="form-check-input" type="checkbox" name="aficiones[]" value="Televisión">
                            <label for="Televisión">Televisión</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linea mt-4">
                <input class="btn w-50" type="submit" name="Enviar" value="Enviar">
                <input class="btn w-50 ms-3" name="Limpiar" value="Limpiar" action="limpiar.php">
            </div>
        </form>
    </div>
</body>
</html>