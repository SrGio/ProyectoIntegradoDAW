 <?php

	include("mysqli.inc.php");
	error_reporting(0);

	if($c = mysqli_connect($cfg_servidor,$cfg_usuario,$cfg_password,$cfg_basephp1)){

		$tabla="videos";

		$sentenciaNombre="select j.Nombre from videos v,juegossteam j where v.Id_Juego=j.Id_Juego and j.Id_Juego=2 
		group by j.Nombre;";
		$sentenciaUrl="select v.Url from videos v,juegossteam j where v.Id_Juego=j.Id_Juego and j.Id_Juego=2;";


		//Mostrar el nombre de un juego

		if(mysqli_query($c,$sentenciaNombre)){
			$resNom=mysqli_query($c,$sentenciaNombre);

			while($objeto=mysqli_fetch_object($resNom)){
					$Nombre=$objeto->Nombre;
					echo "<h1>$Nombre</h1><br>";
		}

		}

		//Mostrar los enlaces a youtube de un juego
		if(mysqli_query($c,$sentenciaUrl)){

			$resultado=mysqli_query($c,$sentenciaUrl);

			while($objeto=mysqli_fetch_object($resultado)){
					$url=$objeto->Url;
					echo "<br>$url<br>";
		}




			mysql_close($c);
	
		}else{
 			echo "Error al conectar con la base de datos";
		}

}

?>