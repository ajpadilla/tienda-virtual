<?php 
	require(MODELS_PATH."user.php");

	switch ($route["view"]) 
	{
		case 'create':
			$user = new User();
			$invalid_fields = $user->search($params["post"]);
			$errors = get_errors($user->validations, $params["post"]);
			if (!$errors && !$invalid_fields["email"] && !$invalid_fields["username"]) 
			{
				$user->set($params["post"]);
				save_msg_success("Se ha agregado correctamente el nuevo usuario");
				redirect_to("users/new");
			}
			else
			{
				$post = $params["post"];
				$route["view"] = "new";
				save_msg_warnings("Por favor, corrige los siguientes campos: <br/><br/>");	
			}
			break;
	}
?>