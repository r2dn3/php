<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<!--Formulario simple cuya función es mostrar el nombre captado en la cookie y devolvernos
a process_cookie.php, donde se realizará la acción de eliminar la COOKIE-->
<form action="./process_cookie.php" method="post">
    <p>Tu nombre es: <?php echo $_COOKIE["nombre"]; ?></p>
    <input type="submit" value="Borrar Cookie y Volver" name="eraseCookie">
</form>




</body>
</html>

