<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>



<!--Formulario simple cuya función es mostrar el nombre captado en la cookie y devolvernos
a process_cookie.php, donde se realizará la acción de eliminar la COOKIE-->
<br><br>
<div class="h-100 d-flex align-items-center justify-content-center">
    <form class="form-inline" action="./process_cookie.php" method="post">
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" readonly class="form-control-plaintext" value="Hola <?php echo$_COOKIE["nombre"]?>">
            <button type="submit" class="btn btn-danger mb-2" value="Borrar Cookie y Volver" name="eraseCookie">Borrar Cookie y Volver</button>
        </div>
    </form>
</div>





</body>
</html>

