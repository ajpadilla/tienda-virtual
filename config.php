<?php 
	
	$routes = array(
		array("url" => "/^\/$/", "controller" => "", "view" => "default"),
		array("url" => "/^\/users\/new\/?$/", "controller" => "users", "view" => "new"),
		array("url" => "/^\/users\/create\/?$/", "controller" => "users", "view" => "create"),
		array("url" => "/^\/sessions\/new\/?$/","controller" => "sessions", "view" => "new"),
		array("url" => "/^\/sessions\/create\/?$/", "controller" => "sessions", "view" => "create"),
	);

	define("HOST", "localhost");
	define("USERNAME", "root");
	define("PASSWORD", "1234");
	define("DATABASE", "tienda_virtual");
	define("APP_ROOT","/");
	define("WEBSITE", "http://localhost/");
	define("DS", "/");
	define("SERVER_ROOT",$_SERVER["DOCUMENT_ROOT"]);
	define("CONTROLLERS_PATH",SERVER_ROOT.APP_ROOT."controllers".DS);
	define("MODELS_PATH",SERVER_ROOT.APP_ROOT."models".DS);
	define("VIEWS_PATH",SERVER_ROOT.APP_ROOT."views".DS);

	require("lib/model.php");
	require("lib/controller.php");
	require("lib/view.php");
?>