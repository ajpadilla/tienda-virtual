<form action="<?php echo APP_ROOT; ?>users/create" method="post">
<fieldset>
    <legend>Por favor inicia sesión</legend>
    <div>
        <input type="text" name="user[username]" value="" />        
    </div>
    <div>
        <input type="password" name="user[password]" value="" />        
    </div>
    <input type="submit" value="Entrar" />
</fieldset>
</form>