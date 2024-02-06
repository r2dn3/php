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



<!--Formulario simple cuyo objetivo es captar el nombre que irá en la cookie y mandarnos a
process_cookie.php, donde se creará dicha cookie-->
<form action="./process_cookie.php" method="post">
    <input type="text"  name="nameUser">
    <input type="submit" value="Enviar" name="Enviar">
</form>


</body>
</html>

