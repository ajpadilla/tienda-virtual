<?php 
	require(MODELS_PATH."user.php");

	switch ($route["view"]) 
	{
		case 'create':
			$user = new User();
			$user->get("j@oja.la");
			echo $user->email;
			break;
	}
?>