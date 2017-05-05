<?php
	require 'app/controller/mvc.controllerUserOfi.php'; 
	$mvc = new mvc_controllerUserOfi();	
		error_reporting(0);

	

		if( $_GET['action'] == 'altaCitatorio' ) //muestra  el modulo "sociedad"
	{
			$mvc->altaCitatorio();	
	}

	else 	if( $_GET['action'] == 'altaFormato' ) //muestra  el modulo "sociedad"
	{
			$mvc->altaFormato();	
	}

/*Operaciones de Usuario de Oficina*/
    else 	if( $_GET['action'] == 'crearCitatorio' ) //muestra  el modulo "crear Citatorio"
	{
			$mvc->crearCitatorio();	
	}
	else 	if( $_GET['action'] == 'crearEvento' ) //muestra  el modulo "crear Evento"
	{
			$mvc->crearEvento();	
	}
	else 	if( $_GET['action'] == 'crearFormato' ) //muestra  el modulo "crear Formato"
	{
			$mvc->crearFormato();	
	}
	else 	if( $_GET['action'] == 'historialCitatorio' ) //muestra  el modulo "historial Citatorio"
	{
			$mvc->historialCitatorio();	
	}
	else 	if( $_GET['action'] == 'historialEvento' ) //muestra  el modulo "historial Evento"
	{
			$mvc->historialEvento();	
	}
	else 	if( $_GET['action'] == 'historialFormato' ) //muestra  el modulo "historial Formato"
	{
			$mvc->historialFormato();	
	}
	else 	if( $_GET['action'] == 'indexUserOfi' ) //muestra  el modulo "index Principal User Oficina"
	{
			$mvc->indexUserOfi();	
	}
	
	else{ 

        $mvc->index();

	}
?>