<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="">
	<title>Tienda Virtual</title>
	<link rel="shortcut icon" size="64x64" href="/public/images/shopping-basket-icon.png" />
	<link rel="stylesheet" type="text/css" href="/public/css/styles.css">
</head>
<body>
	<div id="contenedor-encabezado">
		<div id="contenedor-navegador">
			<div class="contenedor">
				<div class="grilla_buscador push_buscador">
					<input type="text" name="busqueda" id="busqueda" placeholder="¿Buscas algo...?">
				</div>
				<div class="grilla_selector push_selector">
					<select id="categorias">
						<option>Todas las categorias</option>
					</select>
				</div>
				<div class="grilla_buscar push_buscar"> 
					<button class="boton-buscar">Buscar</button>
				</div>
				<div class="grilla_busqueda_avanzada push_busqueda_avanzada">
					<a href="#">Búsqueda avanzada</a>
				</div>
				<div class="grilla_articulos push_articulos">
					<a href="#" class="icon-cart"></a>
					<a href="#" class="icon-checkmark"></a>
				</div>
				<div class="grilla_accion push_accion">
					<a href="<?php echo APP_ROOT; ?>users/new" class="boton-buscar">Sing up</a>
					<a href="<?php echo APP_ROOT; ?>sessions/new" class="boton-buscar">Sing in</a>
				</div>
			</div>
		</div>
		<div id="contenedor-menu">
			
		</div>
		<!--<a id="logo" href="/">Logo</a>-->
	</div>
	<div id="contenedor-principal">
	<?php if (logged_in()): ?>
		Hola <strong><?php echo current_user("username"); ?></strong>
	<?php endif ?>
	<?php if (isset($_SESSION["msg"]["success"])): ?>
	<span class="msg-success"><?php echo $_SESSION["msg"]["success"]; ?></span>
	<?php endif ?>
	<?php if (!empty($_SESSION["msg"]["warnings"])): ?>
	<span class="msg-success"><?php echo $_SESSION["msg"]["warnings"]; ?></span>
	<?php endif ?>
	<?php if ($route["view"] != "" && file_exists(VIEWS_PATH.$route["controller"].DS.$route["view"].".php")): ?>
		<?php include(VIEWS_PATH.$route["controller"].DS.$route["view"].".php"); ?>
	<?php endif ?>
	</div>
</body>
</html>