<?php

/*require 'app/model/universitario.class.php';*/

class mvc_controllerUserCam {  
	

  function index()
   {
		$pagina=$this->load_template('');	/*titulo de la pagina */			
		$html = $this->load_page('app/views/default/modules/m.principal.php');
		$pagina = $this->replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);
	
		$this->view_page($pagina);
   }  

   /*Funciones de Usuario de Campo*/
   function indexUserCam()
   {
		$pagina=$this->load_template('');	/*titulo de la pagina */	
		
		$html = $this->load_page('app/views/default/modules/userCam/m.indexUserCam.php');
		$pagina = $this->replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);	
		$this->view_page($pagina);
   }
   function crearGira()
   {
		$pagina=$this->load_template('');	/*titulo de la pagina */			
		$html = $this->load_page('app/views/default/modules/userCam/m.crearGira.php');
		$pagina = $this->replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);		
		$this->view_page($pagina);
   }
    function crearPregira()
   {
		$pagina=$this->load_template('');	/*titulo de la pagina */			
		$html = $this->load_page('app/views/default/modules/userCam/m.crearPregira.php');
		$pagina = $this->replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);		
		$this->view_page($pagina);
   }  
   
    function historialEvento()
   {
		$pagina=$this->load_template('');	/*titulo de la pagina */			
		$html = $this->load_page('app/views/default/modules/userCam/m.historialEvento.php');
		$pagina = $this->replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);		
		$this->view_page($pagina);
   }
   function historialGira()
   {
		$pagina=$this->load_template('');	/*titulo de la pagina */			
		$html = $this->load_page('app/views/default/modules/userCam/m.historialGira.php');
		$pagina = $this->replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);		
		$this->view_page($pagina);
   }
   function historialPregira()
   {
		$pagina=$this->load_template('');	/*titulo de la pagina */			
		$html = $this->load_page('app/views/default/modules/userCam/m.historialPregira.php');
		$pagina = $this->replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);		
		$this->view_page($pagina);
   }




  
   
	/* METODO QUE CARGA LAS PARTES PRINCIPALES DE LA PAGINA WEB
	INPUT
		$title | titulo en string del header
	OUTPIT
		$pagina | string que contiene toda el cocigo HTML de la plantilla 
	*/
	function load_template($title='Sin Titulo'){
		$pagina = $this->load_page('app/views/default/page.php');
		$head = $this->load_page('app/views/default/sections/s.head.php');		
		$foot = $this->load_page('app/views/default/sections/s.foot.php');
		$footer = $this->load_page('app/views/default/sections/s.footer.php');
		$menu = $this->load_page('app/views/default/sections/s.menuUserC.php');
		$pagina = $this->replace_menuAdm('/\#MENU\#/ms' ,$menu , $pagina);
		$pagina = $this->replace_content('/\#HEAD\#/ms' ,$head , $pagina);
		$pagina = $this->replace_content('/\#FOOT\#/ms',$foot , $pagina);
		$pagina = $this->replace_content('/\#FOOTER\#/ms',$footer , $pagina);
		$pagina = $this->replace_content('/\#TITLE\#/ms' ,$title , $pagina);
	
		return $pagina;
	}



	
	
	
	/* METODO QUE CARGA UNA PAGINA DE LA SECCION VIEW Y LA MANTIENE EN MEMORIA
		INPUT
		$page | direccion de la pagina 
		OUTPUT
		STRING | devuelve un string con el codigo html cargado
	*/	
	private function load_page($page)
	{
		return file_get_contents($page);
	}
	
	/* METODO QUE ESCRIBE EL CODIGO PARA QUE SEA VISTO POR EL USUARIO
		INPUT
		$html | codigo html
		OUTPUT
		HTML | codigo html		
	*/
	private function view_page($html)
	{
		echo $html;
	}
	
	/* PARSEA LA PAGINA CON LOS NUEVOS DATOS ANTES DE MOSTRARLA AL USUARIO
		INPUT
		$out | es el codigo html con el que sera reemplazada la etiqueta CONTENIDO
		$pagina | es el codigo html de la pagina que contiene la etiqueta CONTENIDO
		OUTPUT
		HTML 	| cuando realiza el reemplazo devuelve el codigo completo de la pagina
	*/
	private function replace_content($in='/\#CONTENIDO\#/ms', $out,$pagina)
	{
		 return preg_replace($in, $out, $pagina);	 	
	}



   private function replace_menuAdm($in='/\#MENU\#/ms', $out,$pagina)
	{
		 return preg_replace($in, $out, $pagina);	 	
	}

	
	
}
?>