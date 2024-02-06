<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<!--Formulario simple cuyo objetivo es captar el nombre que irá en la cookie y mandarnos a
process_cookie.php, donde se creará dicha cookie-->
<br><br>
<div class="h-100 d-flex align-items-center justify-content-center">
    <form class="form-inline" action="./process_cookie.php" method="post">
        <div class="form-group mx-sm-3 mb-2">
            <input type="text" class="form-control" id="nameUser" placeholder="Introduzca su nombre" name="nameUser">
            <button type="submit" class="btn btn-primary mb-2" value="Enviar" name="Enviar">Enviar</button>
        </div>
    </form>
</div>
</body>
</html>

