<?php

	include("mysqli.inc.php");
	error_reporting(0);

	if($c = mysqli_connect($cfg_servidor,$cfg_usuario,$cfg_password,$cfg_basephp1)){

		$tabla="comentarios";

		$sentenciaNombre="select j.Nombre from comentarios c,juegossteam j where c.Id_Juego=j.Id_Juego and j.Id_Juego=2 
		group by j.Nombre;";
		$sentenciaCom="select c.Comentario from comentarios c,juegossteam j where c.Id_Juego=j.Id_Juego and j.Id_Juego=2";


		//Mostrar el nombre de un juego

		if(mysqli_query($c,$sentenciaNombre)){
			$resNom=mysqli_query($c,$sentenciaNombre);

			while($objeto=mysqli_fetch_object($resNom)){
					$Nombre=$objeto->Nombre;
					echo "<h1>$Nombre</h1><br>";
		}

		}

		//Mostrar los comentarios de un juego
		if(mysqli_query($c,$sentenciaCom)){

			$resultado=mysqli_query($c,$sentenciaCom);

			while($objeto=mysqli_fetch_object($resultado)){
					$comentario=$objeto->Comentario;
					echo "<br>$comentario<br>";
		}




			mysql_close($c);
	
		}else{
 			echo "Error al conectar con la base de datos";
		}

}

?>