<?php 
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
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Título de la pág -->
	<?php $page_title = "Resultado"; ?>
	<!-- Este archivo contiene lo que se incluye en <HEAD><HEAD/> -->
	<?php require '../default/page_head.php'; ?>
</head>
<body>
	<!-- Page header -->
	<?php require '../header/header.php'; ?>
	
	<!-- 
	==============================================
	CONTENIDO PRINCIPAL
	==============================================
	-->
	<div class="container">
		<div class="jumbotron">
			<h1>
				¡Listo!
				<span class='glyphicon glyphicon-ok text-success'></span>
			</h1>			
			<!-- <h3>Obtuvimos 2 horarios perfectos para ti.</h3> -->
			<br>
			<?php require 'result.php'; ?>
		</div>
	</div>
	<!-- 
	==============================================
	OPCIONES EXPORTAR (mail, imagen, pdf, etc) 
	==============================================
	-->
	<br>
	<div class="container">
		<div class="well pull-right" style="max-width: 300px;">
			<h3 class="text-left"><strong>Exportar horario</strong></h3>
			<p class="text-left">
				<a href="#" class="btn btn-primary user-export-mail"><span class='glyphicon glyphicon-envelope'></span></a>
				<a href="#" class="btn btn-primary user-export-image"><span class='glyphicon glyphicon-picture'></span></a>
				<a href="#" class="btn btn-primary user-export-pdf"><span class='glyphicon glyphicon-file'>PDF</span></a>
				<a href="#" class="btn btn-primary user-export-excel"><span class='glyphicon glyphicon-file'>Excel</span></a>
			</p>
		</div>
	</div>
	<!-- fin opciones exportar -->
	<!-- 
	==============================================
	fin contenido principal
	==============================================
	-->

	<!-- Page footer -->
	<?php require '../footer/footer.php'; ?>

	<!-- JS/JQuery scripts -->
	<?php require '../default/jsscripts.php'; ?>
	
</body>
</html>