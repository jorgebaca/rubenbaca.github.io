<?php 
/*
| 
| Documento principal, mensaje bienvenida.
| 
| 
| 
| 
*/
/*
| 
| El documento default/settings.php contiene información básica del
| sitio como:
| 
| 	- $site_url: URL del sitio
| 	- $brand_name: Nombre de la empresa
| 	- $product_name: Nombre del producto
| 
*/
require 'default/settings.php';

?>

<style>
	li, p{
		font-size: 20px;
	}
</style>
<!DOCTYPE html>
<html>
<head>
	<!-- Especificar título de la página -->
	<?php $page_title = "Inicio"; ?>
	<!-- Este archivo contiene lo que se incluye en <HEAD><HEAD/> -->
	<?php require 'default/page_head.php'; ?>
</head>
<body class="container">
	<br><br><br>
	<br><br><br>

	<h1 class="brand-logo text-center" style="font-size: 180px; color: rgb(0,137,188)">Temple</h1>
		<br><br><br>
		<br><br><br>

	<div class="row well">
		<h1>Paso 1:</h1>
		<h2 class="text-center">Selecciona tu Universidad, Facultad, Carrera</h2>
	</div>
</body>
</html>