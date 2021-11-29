<?php 
	$server = "localhost";
	$user = "root";
	$password = "$}b26hfwCK~5nPY,";
	$bd = "empresa";
	
	if ( $conn = mysqli_connect($server, $user, $password, $bd) ) {
		//echo "Conectado";
	} else
		echo "ERROR";

	function mensagem($texto, $color) {
		echo "<div class='alert alert-$color' role='alert'>$texto</div>";
	}

 ?>