<?php
	include("config.php");

	function routing($routes)
	{
		$url = $_SERVER['REQUEST_URI'];
		//echo $url;
		//$url = str_replace("/tienda-virtual.local/","",$url);
		$url = str_replace("?".$_SERVER['QUERY_STRING'], "", $url);
		foreach ($routes as $route) 
		{
			if ($num_routes = preg_match($route["url"],$url,$matches) > 0)
			{
				//$params = array_merge($matches,$params);
				break;
			}
		}

		//print_r($matches)."<br/>";

		if ($num_routes == 0) 
		{
			exit("No se ha encontrado la ruta");
		}
		if ($route["controller"] != "")
		{
			include(CONTROLLERS_PATH.$route["controller"].".php");
		}

		if(file_exists(VIEWS_PATH."layouts".DS.$route["controller"].".php")) 
		{
			include(VIEWS_PATH."layouts".DS.$route["controller"].".php");
		}
		else
		{
			include(VIEWS_PATH."layouts".DS."default.php");
		}

	}

	routing($routes);
?>