<?php

require 'app/model/usuario.class.php';
require 'app/model/juego.class.php';
require 'pageGenerator.php';

class mvc_controller {

	
   function buscar($juego){
		
   }


   function insertar($nombre, $apellido1, $apellido2, $dni, $facultad){
		view_page($pagina);
   }



   function actualizar($nombre, $apellido1, $apellido2, $dni, $facultad)
   {
			
		view_page($pagina);
   }

  
   function principal(){
   		$pagina=load_template('Digital Games - Inicio');
   		$css = load_page('app/views/default/modules/m.estiloInicio.php');
   		$logo = load_page('app/views/default/modules/m.logo.php');
		$html = load_page('app/views/default/modules/m.inicio.php');
		replace_page($css,$logo,$sesion,$buscador);
   }

	function genero(){
		$pagina=load_template('Digital Games - Géneros');
   		$css = load_page('app/views/default/modules/m.estiloGenero.php');
   		$logo = load_page('app/views/default/modules/m.logo.php');
		$buscador = load_page('app/views/default/modules/m.genero.php');
		replace_page($css,$logo,$sesion,$buscador);
	}

	function buscador(){
		$pagina=load_template('Digital Games - Busqueda');
   		$css = load_page('app/views/default/modules/m.estiloBuscador.php');
   		$logo = load_page('app/views/default/modules/m.logo.php');
		$buscador = load_page('app/views/default/modules/m.buscador.php');
		replace_page($css,$logo,$sesion,$buscador);
	}

	function perfil(){
		$pagina=load_template('Digital Games - Perfil');
   		$css = load_page('app/views/default/modules/m.estiloPerfil.php');
   		$logo = load_page('app/views/default/modules/m.logoPerfil.php');		
		$buscador = load_page('app/views/default/modules/m.perfil.php');
		replace_page($css,$logo,$sesion,$buscador);
	}

	function conectarse(){
		$pagina=load_template('Digital Games - Iniciar Sesión');
   		$css = load_page('app/views/default/modules/m.estiloConectarse.php');
   		$logo = load_page('app/views/default/modules/m.logo.php');				
		$buscador = load_page('app/views/default/modules/m.iniciosesion.php');
		replace_page($css,$logo,$sesion,$buscador);
	}

	function load_menu(){
		if(isset($_SESSION["nombreusuario"])&&($_SESSION["nombreusuario"])!=""){
			$sesion = load_page('app/views/default/modules/m.menuPerfil.php');
		}else{
			$sesion = load_page('app/views/default/modules/m.menuInicioSesion.php');
		}
		$pagina = replace_content('/\#SESION\#/ms' ,$sesion , $pagina);
	}
	
	function replace_page($css,$logo,$sesion,$buscador){
		$pagina = replace_content('/\#CSS\#/ms' ,$css , $pagina);
		$pagina = replace_content('/\#LOGO\#/ms' ,$logo , $pagina);
		$pagina = replace_content('/\#CONTENIDO\#/ms' ,$buscador , $pagina);	
		view_page($pagina);
	}

	
}
?>