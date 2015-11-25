<?php 
	require_once("view.php");
	
	function handler()
	{
		$event = "";
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