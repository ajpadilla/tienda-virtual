<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<label for="roles">Rol</label>
	<select name="post[roles]" id="roles">
		<option value="admin">Administrador</option>
		<option value="salesman">Vendedor</option>
		<option value="customer">Cliente</option>
	</select>
	<label for="email">Email</label>
	<input type="text" id="email" name="post[email]" value="<?php echo isset($post)?$post['email']:""; ?>">
	<?php  
		if (isset($errors)) 
		{
			echo error_msg($errors["email"],"Dirección de correo no valida");
		}

		if(isset($invalid_fields)) {
			echo error_msg($invalid_fields["email"],"El email ya se encuentra registrado");
		}
	?>
	<label for="username">Nombre de usuario</label>
	<input type="text" id="username" name="post[username]" value="<?php echo isset($post)?$post['username']:""; ?>">
	<?php  
		if (isset($errors)) 
		{
			echo error_msg($errors["username"],"Nombre de usuario no valido");
		}
		if(isset($invalid_fields)) {
			echo error_msg($invalid_fields["username"],"El username ya se encuentra registrado");
		}
	?>
	<label for="password">Contraseña</label>
	<input type="password" id="password" name="post[password]" value="<?php echo isset($post)?$post['password']:""; ?>">
	<?php  
		if (isset($errors)) 
		{
			echo error_msg($errors["password"],"Contraseña no valida");
		}
	?>
	<label for="confirm_pass">Confirmar contraseña</label>
	<input type="password" id="confirm_pass" name="post[confirm_pass]">
	<label for="name">Nombre </label>
	<input type="text" id="name" name="post[name]">
	<label for="last_name">Apellido</label>
	<input type="text" id="last_name" name="post[last_name]">
	<label for="date_of_birth">Fecha de nacimiento</label>
	<input type="text" id="date_of_birth" name="post[date_of_birth]">
	<label for="phone">telefono</label>
	<input type="text" id="phone" name="post[phone]">
	<label for="address">Dirección</label>
	<input type="text" id="address" name="post[address]">
	<input type="submit" value="Crear">