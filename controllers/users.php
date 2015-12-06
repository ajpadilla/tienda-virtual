<?php 
	require(MODELS_PATH."user.php");

	switch ($route["view"]) 
	{
		case 'create':
			$user = new User();
			$invalid_fields = $user->search($params["post"]);
			$errors = get_errors($user->validations, $params["post"]);
			$invalid_password = $user->valid_password($params["post"]["password"], $params["post"]["confirm_password"]);
			if (!$errors && !$invalid_fields["email"] && !$invalid_fields["username"] && !$invalid_password["confirm_password"]) 
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