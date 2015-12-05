<?php
	
	session_start();

	include("config.php");

	function routing($routes)
	{
		$url = $_SERVER['REQUEST_URI'];
		/*echo $url.'<br/>';*/
		$url = str_replace("?".$_SERVER['QUERY_STRING'],"",$url);
		/*echo $_SERVER['QUERY_STRING'].'<br/>';
		echo $url.'<br/>';*/
		$params = params();

		//print_r($params)."<br/>";

		foreach ($routes as $route) 
		{
			if ($num_routes = preg_match($route["url"],$url,$matches) > 0)
			{
				$params = array_merge($matches,$params);
				break;
			}
		}

		//print_r($params)."<br/>";

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
		$_SESSION["msg"]["warnings"] = "";
		$_SESSION["msg"]["success"] = "";
	}

			
	function params()
	{
		$params = array();
		
		if(!empty($_POST))
		{
			if(get_magic_quotes_gpc()==1)
			{
				//echo "1";
				$params = array_merge($params,stripslashes_array($_POST));
			}
			else
			{
				//echo "2";
				$params = array_merge($params,$_POST);
			}
		}
		
		if(!empty($_GET))
		{
			if(get_magic_quotes_gpc()==1)
			{
				$params = array_merge($params,stripslashes_array($_GET));
			}
			else
			{
				$params = array_merge($params,$_GET);
			}
		}
		
		return $params;
	}
	
	function stripslashes_array($value)
	{
		if(is_array($value))
		{
			$value = array_map("stripslashes_array",$value);
		}
		else
		{
			$value = stripslashes($value);
		}
		
		return $value;
	}

	routing($routes);
?>