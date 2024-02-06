
<?php

//establezco el nombre de la cookie a través del valor pasado por $_POST["nameUser"] al pulsar el botón
//$_POST["Enviar"]

if (isset($_POST["Enviar"])) {
    setcookie("nombre", $_POST["nameUser"], 0);
    header("Location: tarea_evaluable_febrero_2.php");
}

//Elimino el valor de la cookie estableciéndolo a "", o lo que es lo mismo, una string vacía,
//al pulsar el botón $_POST["eraseCookie"]
elseif (isset($_POST["eraseCookie"])){
    unset($_COOKIE["nombre"]);
    header("Location: tarea_evaluable_febrero_1.php");
}

?>
