<?php
require_once("db.class.php");
class Juego extends Database{
	function mostrarDatos($id){
		$this->conectar();
		$sentencia="";

		if(mysqli_query($c,$sentencia)){
			
		}else{
		 	
}		}
		$this->disconnect();

	}
	function mostrarPrecios($id){
		$this->conectar();
		
		$sentencia="";

		if(mysqli_query($c,$sentencia)){
			
 		}else{

 		}
 		 	
		$this->disconnect();
		
	}
	function insertarFotoPerfil($){
		$this->conectar();
		$sql="INSERT INTO usuarios VALUES ('$foto')";
		if($this->consulta($sql)){
			$this->disconnet();
			return true;
		}else{
			$this->disconnet();
			return false;
		}
	}
}

?>