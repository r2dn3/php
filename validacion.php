<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>


<?php

  if(isset($_POST["enviando"])){
    $usuario=$_POST["nombre_usuario"];
    $edad=$_POST["edad_usuario"];

    if ($edad>=18) {
      echo "<p class='validado'>Eres mayor de edad</p>";
    } 
    else {
      echo "<p class='no_validado'>No eres mayor de edad</p>";    
    }

  }

?>