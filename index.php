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
<!DOCTYPE html>
<html>
<head>
	<!-- Especificar título de la página -->
	<?php $page_title = "Inicio"; ?>
	<!-- Este archivo contiene lo que se incluye en <HEAD><HEAD/> -->
	<?php require 'default/page_head.php'; ?>
</head>
<body>
	<!-- Page header -->
	<?php require 'header/header.php'; ?>
	
	<!-- Hero -->
	<?php require 'hero.php'; ?>

	<!-- Contenido principal -->
	<div class="container">
		<div class="jumbotron">
			<h3>Con <?php echo $product_name; ?> crear tu horario no será lo mismo</h3>
			<br>
			<ul class="list-unstyled">
				<li><p><span class="glyphicon glyphicon-ok"></span>&nbsp; En cuestión de minutos</p></li>
				<li><p><span class="glyphicon glyphicon-ok"></span>&nbsp; Se adapta a tus restricciones de horario</p></li>
				<li><p><span class="glyphicon glyphicon-ok"></span>&nbsp; Evita ciertos grupos o profesores</p></li>
			</ul>
			<p class="text-right"><a href="universidades" class="btn btn-primary btn-lg">¡Comenzar!</a></p>
		</div>
	</div>
	<!-- Fin del contenido principal -->

	<!-- Page footer -->
	<?php require 'footer/footer.php'; ?>

	<!-- JS/JQuery scripts -->
	<?php require 'default/jsscripts.php'; ?>

</body>
</html>