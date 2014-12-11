<?php 
/*
| 
| Página: Materias.
| 
| Pide al usuario elegir el conjunto de materias que está dispuesto
| a cursar.
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
$progress = 4;
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Título de la pág -->
	<?php $page_title = "Materias"; ?>
	<!-- Este archivo contiene lo que se incluye en <HEAD><HEAD/> -->
	<?php require '../default/page_head.php'; ?>
</head>
<body>
	<!-- Page header -->
	<?php require '../header/header.php'; ?>
	
	<div class="container">
		<div class="jumbotron">
			<h1>
				Materias
				<?php require '../progress/progress.php'; ?>
			</h1>			
			<h3>Selecciona las <span class='label label-warning'>materias</span> que estás dispuesto a cursar.</h3>
			<br>
			
			<!-- Archivo con todas las materias -->
			<?php require 'content.php'; ?>

			<p class="text-right"><a href="../horario" class="btn btn-primary btn-lg">Siguiente</a></p>


		</div> <!-- End of jumbotron -->
	</div> <!-- End of container -->


	<!-- Page footer -->
	<?php require '../footer/footer.php'; ?>
	
	<!-- JS/JQuery scripts -->
	<?php require '../default/jsscripts.php'; ?>


</body>
</html>