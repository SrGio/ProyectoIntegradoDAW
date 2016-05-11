<?php
	function load_template($title='Sin Titulo'){

		$pagina = load_page('app/views/default/page.php');
		$pagina = replace_content('/\#TITULO\#/ms' ,$title , $pagina);	
		return $pagina;
	}


    function load_page($page){
		return file_get_contents($page);
	}

	function view_page($html){
		echo $html;
	}
	

	function replace_content($in='/\#CONTENIDO\#/ms', $out,$pagina){
		 return preg_replace($in, $out, $pagina);	 	
	}
	?>