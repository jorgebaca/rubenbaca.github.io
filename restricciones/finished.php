<?php 
/*
| 
| Este archivo muestra mensaje de 'cargando resultado',
| se espera 12 segundos en redirigir al resultado.
| 
| Muestra publicidad en lo que se carga.
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
require '../default/settings.php';
// Para la barra de progreso
$progress = 7;
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Título de la pág -->
	<?php $page_title = "Procesando"; ?>
	<!-- Este archivo contiene lo que se incluye en <HEAD><HEAD/> -->
	<?php require '../default/page_head.php'; ?>

	<!-- This will redirect user to next page after X seconds -->
	<meta http-equiv="refresh" content="3; url=../resultado">
</head>
<body>
	<!-- Page header -->
	<?php require '../header/header.php'; ?>
	
	<div class="container">
		<div class="jumbotron">
			<h1>
				Generando horarios
				<?php require '../progress/progress.php'; ?>
			</h1>
			<h3>Espera unos segundos...</h3>
			<br>
		

		</div>
	</div>


	<!-- Page footer -->
	<?php require '../footer/footer.php'; ?>

	<!-- JS/JQuery scripts -->
	<?php require '../default/jsscripts.php'; ?>
	
</body>
</html>