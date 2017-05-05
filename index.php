<?php

    require 'app/controller/mvc.controller.php';
	$mvc = new mvc_controller();	
	require 'app/controller/mvc.controllerUserOfi.php';
	$userO = new mvc_controllerUserOfi();	 
	require 'app/controller/mvc.controllerUserCam.php'; 
	$userC = new mvc_controllerUserCam();	
		error_reporting(0);	


/*Operaciones de Usuario de Oficina*/
   	if( $_GET['action'] == 'crearCitatorio' ) //muestra  el modulo "crear Citatorio"
	{
			$userO->crearCitatorio();	
	}
	else 	if( $_GET['action'] == 'crearEvento' ) //muestra  el modulo "crear Evento"
	{
			$userO->crearEvento();	
	}
	else 	if( $_GET['action'] == 'crearFormato' ) //muestra  el modulo "crear Formato"
	{
			$userO->crearFormato();	
	}
	else 	if( $_GET['action'] == 'historialCitatorio' ) //muestra  el modulo "historial Citatorio"
	{
			$userO->historialCitatorio();	
	}
	else 	if( $_GET['action'] == 'historialEvento' ) //muestra  el modulo "historial Evento"
	{
			$userO->historialEvento();	
	}
	else 	if( $_GET['action'] == 'historialFormato' ) //muestra  el modulo "historial Formato"
	{
			$userO->historialFormato();	
	}
	else 	if( $_GET['action'] == 'indexUserOfi' ) //muestra  el modulo "index Principal User Oficina"
	{
			$userO->indexUserOfi();	
	}

/*Operaciones de Usuario de Campo*/
   else 	if( $_GET['action'] == 'crearGira' ) //muestra  el modulo "crear Gira"
	{
			$userC->crearGira();	
	}
   else 	if( $_GET['action'] == 'crearPregira' ) //muestra  el modulo "crear Pregira"
	{
			$userC->crearPregira();	
	}
	else 	if( $_GET['action'] == 'historialEvento' ) //muestra  el modulo "historial Evento"
	{
			$userC->historialEvento();	
	}   	
	else 	if( $_GET['action'] == 'historialGira' ) //muestra  el modulo "historial Gira"
	{
			$userC->historialGira();	
	}
	
	else 	if( $_GET['action'] == 'historialPregira' ) //muestra  el modulo "historial Pregira"
	{
			$userC->historialPregira();	
	}
	else 	if( $_GET['action'] == 'indexUserCam' ) //muestra  el modulo "index Principal User Campo"
	{
			$userC->indexUserCam();	
	}


	
	else{ 

        $mvc->index();   /*menu principal todas las funciones*/

	}
?>