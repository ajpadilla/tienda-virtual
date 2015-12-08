<br/>
	
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<label for="roles">Rol</label>
	<select name="post[roles]" id="roles">
		<option value="2">Vendedor</option>
		<option value="3">Cliente</option>
	</select>
	<label for="email">Email</label>
	<input type="text" id="email" name="post[email]" value="<?php echo isset($post)?$post['email']:""; ?>">
	<?php  
		if (isset($errors_user)) 
		{
			echo error_msg($errors_user["email"],"Dirección de correo no valida");
		}

		if(isset($invalid_fields)) {
			echo error_msg($invalid_fields["email"],"El email ya se encuentra registrado");
		}
	?>
	<label for="username">Nombre de usuario</label>
	<input type="text" id="username" name="post[username]" value="<?php echo isset($post)?$post['username']:""; ?>">
	<?php  
		if (isset($errors_user)) 
		{
			echo error_msg($errors_user["username"],"Nombre de usuario no valido");
		}
		if(isset($invalid_fields)) {
			echo error_msg($invalid_fields["username"],"El username ya se encuentra registrado");
		}
	?>
	<label for="password">Contraseña</label>
	<input type="password" id="password" name="post[password]" value="<?php echo isset($post)?$post['password']:""; ?>">
	<?php  
		if (isset($errors_user)) 
		{
			echo error_msg($errors_user["password"],"Contraseña no valida");
		}

		if (isset($invalid_password["confirm_password"])) 
		{
			echo error_msg($invalid_password["confirm_password"],"No coincide el password");
		}
	?>
	<label for="confirm_password">Confirmar contraseña</label>
	<input type="password" id="confirm_password" name="post[confirm_password]">
	<?php  
		if (isset($errors_user)) 
		{
			echo error_msg($errors_user["confirm_password"],"Contraseña no valida");
		}

		if (isset($invalid_password["confirm_password"])) 
		{
			echo error_msg($invalid_password["confirm_password"],"No coincide el password");
		}
	?>

	<label for="name">Nombre </label>
	<input type="text" id="name" name="post[name]" value="<?php echo isset($post)?$post['name']:""; ?>"/>
	<?php 
		if (isset($errors_person)) 
		{
			echo error_msg($errors_person["name"],"Nombre invalido");
		}
	?>

	<label for="last_name">Apellido</label>
	<input type="text" id="last_name" name="post[last_name]" value="<?php echo isset($post)?$post['last_name']:""; ?>">
	<?php 
		if (isset($errors_person)) 
		{
			echo error_msg($errors_person["last_name"],"Apellido invalido");
		}
	?>
	
	<label for="date_of_birth">Fecha de nacimiento</label>
	<input type="text" id="date_of_birth" name="post[date_of_birth]" value="<?php echo isset($post)?$post['date_of_birth']:""; ?>">
	<?php 
		if (isset($errors_person)) 
		{
			echo error_msg($errors_person["date_of_birth"],"Fecha invalido");
		}
	?>
	<label for="phone">telefono</label>
	<input type="text" id="phone" name="post[phone]" value="<?php echo isset($post)?$post['phone']:""; ?>">
	<?php 
		if (isset($errors_person)) 
		{
			echo error_msg($errors_person["phone"],"Telefono invalido");
		}
	?>

	<label for="address">Dirección</label>
	<input type="text" id="address" name="post[address]" value="<?php echo isset($post)?$post['address']:""; ?>">
	<?php 
		if (isset($errors_person)) 
		{
			echo error_msg($errors_person["address"],"Dirección invalido");
		}
	?>
	<input type="submit" value="Crear">