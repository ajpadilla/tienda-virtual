<?php 
	
	$routes = array(
		array("url" => "/^\/users\/?$/", "controller" => "users", "view" => ""),

	);

	define("HOST", "localhost");
	define("USERNAME", "root");
	define("PASSWORD", "1234");
	define("DATABASE", "tienda_virtual");
	define("APP_ROOT","/");
	define("WEBSITE", "http://localhost/");
	define("DS", "/");
	define("SERVER_ROOT",$_SERVER["DOCUMENT_ROOT"]);
	define("CONTROLLERS_PATH",APP_ROOT."controllers".DS);
	define("MODELS_PATH",APP_ROOT."models".DS);
	define("VIEWS_PATH",APP_ROOT."views".DS);
?>