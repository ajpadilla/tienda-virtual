<?php  
	require(MODELS_PATH."user.php");

	switch ($route["view"]) 
	{
		case 'create':
				$user = new User();
				if ($user->login($params["user"]["username"], $params["user"]["password"])) 
				{
					save_msg_success("Te encuentras logueado");
					redirect_to("sessions/index");
				}
				else
				{
					save_msg_warnings("Nombre de usuario y/o contraseña incorrectos");
					$route["view"] = "new";
				}
			break;
		
		default:
			# code...
			break;
	}
?>