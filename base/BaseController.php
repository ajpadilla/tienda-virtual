<?php
	require_once('constants.php'); 
	require_once("view.php");

	// Verifica la vista o acción ejecutada por el usuario
	function handler()
	{
		$event = VIEW_INDEX;
		$uri = $_SERVER['REQUEST_URI'];
		$petitions = array(MODULE_USER.SET_USER,MODULE_USER.VIEW_SET_USER);
		foreach ($petitions as $petition) 
		{
			$uri_petition = $petition.'/';
			if( strpos($uri, $uri_petition) == true ) 
			{
				$action = explode('/', $uri_petition);
				$event = $action[1];
			}
			/*echo $uri.'<br/>';
			echo $uri_petition.'<br/>';*/
		}
		//echo $event;
		switch ($event)
		{
			case 'value':
				# code...
				break;
			
			default:
				return_view($event);
				break;
		}
	}

	handler();

 ?>