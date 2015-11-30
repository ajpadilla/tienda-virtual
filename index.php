<?php
	include("config.php");

	function routing($routes)
	{
		$url = $_SERVER['REQUEST_URI'];
		$url = str_replace("/tienda-virtual.local/","",$url);
		$url = str_replace("?".$_SERVER['QUERY_STRING'], "", $url);
		//echo $_SERVER['QUERY_STRING'];
		
		foreach ($routes as $route) 
		{
			if ($num_routes = preg_match($route["url"],$url,$matches) > 0) 
			{
				break;
			}
		}

		/*if ($num_routes == 0) 
		{
			exit("No se ha encontrado la ruta");
		}*/

		include("/views/"."layouts".DS."default.php");

	}

	routing($routes);
?>