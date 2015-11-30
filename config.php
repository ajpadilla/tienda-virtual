<?php 
	
	$routes = array();

	define("HOST", "localhost");
	define("USERNAME", "root");
	define("PASSWORD", "1234");
	define("DATABASE", "tienda_virtual");
	define("APP_ROOT","/");
	define("WEBSITE", "http://localhost/");
	define("DS", "/");
	define("SERVER_ROOT",$_SERVER["DOCUMENT_ROOT"]);
	define("CONTROLLERS_PATH",SERVER_ROOT.DS.APP_ROOT.DS."controllers".DS);
	define("MODELS_PATH",SERVER_ROOT.DS.APP_ROOT.DS."models".DS);
	define("VIEWS_PATH",SERVER_ROOT.DS.APP_ROOT.DS."views".DS);
?>