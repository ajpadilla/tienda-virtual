<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="">
	<title>Tienda Virtual</title>
	<link rel="shortcut icon" size="64x64" href="/site_media/img/shopping-basket-icon.png" />
	<link rel="stylesheet" type="text/css" href="/site_media/css/styles.css">
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
					<a href="/{VIEW_SET_USER}" class="boton-buscar">Sing up</a>
					<a href="" class="boton-buscar">Sing in</a>
				</div>
			</div>
		</div>
		<div id="contenedor-menu">
			
		</div>
		<a id="logo" href="/site_media/html/index_template.html">Logo</a>
	</div>
	<div id="contenido">
		{content}
	</div>
</body>
</html>