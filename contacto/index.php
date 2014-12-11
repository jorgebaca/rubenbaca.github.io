<?php 
/*
| 
| Página: Acerca de
| 
| Esta página muestra información básica del producto/empresa.
| 
| 
*/
/*
| 
| El archivo default/settings.php contiene información básica del
| sitio como:
| 
|   - $site_url: URL del sitio
|   - $brand_name: Nombre de la empresa
|   - $product_name: Nombre del producto
| 
*/
require '../default/settings.php';
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Título de la pág -->
	<title>Contacto | <?php echo $brand_name ?></title>
	<!-- Este archivo contiene lo que se incluye en <HEAD><HEAD/> -->
	<?php require '../default/page_head.php'; ?>
</head>
<body>
	<!-- Page header -->
	<?php require '../header/header.php'; ?>

	<!-- Contenido principal -->
	<div class="container">
		<div class="jumbotron">
			<h1>Contacto</h1>
			<br>
			<p><span class="glyphicon glyphicon-globe"></span>&nbsp; <a href=""><?php echo $product_website_url; ?></a></p>
			<p><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; (614) 303 7367</p>
			<p><span class="glyphicon glyphicon-envelope"></span>&nbsp; <?php echo $contact_email; ?></p>
		</div>
	</div>
	<!-- fin contenido principal -->

	<!-- Page footer -->
	<?php require '../footer/footer.php'; ?>
	
	<!-- JS/JQuery scripts -->
	<?php require '../default/jsscripts.php'; ?>

</body>
</html>