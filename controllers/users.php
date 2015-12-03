<?php 
	require(MODELS_PATH."user.php");

	switch ($route["view"]) 
	{
		case 'create':
			$user = new User();
			$user->set($params["post"]);
			echo "Usuario agregado";
			break;
	}
?>