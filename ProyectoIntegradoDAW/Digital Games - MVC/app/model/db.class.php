<?php

class Database {
	private $conexion;

	public function conectar(){
		if(!isset($this->conexion)){
			if($this->conexion=mysqli_connect("localhost","root","","biblioteca")){
				echo "Se ha realizado la conexión correctamente<br>";
			}else{
				echo "No se ha realizado la conexión<br>";
			}
			
		}
	}
	public function consulta(){
		$resultado = mysqli_query($this->conexion, $sql);
		return $resultado;
	}
	public function numero_de_filas($result){
		return mysqli_num_rows($result);
	}
	public function fetch_assoc($result){
		return mysqli_fetch_assoc($result);
	}
	public function disconnect(){
		mysqli_close();
	}
}
?>