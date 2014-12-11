<?php 
/*
| 
| Página: Universidades.
| 
| Pide al usuario seleccionar el instituto al que pertenece.
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
require '../default/settings.php';
$progress = 1;
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Especificar título de la página -->
	<?php $page_title = "Universidades"; ?>
	<!-- Este archivo contiene lo que se incluye en <HEAD><HEAD/> -->
	<?php require '../default/page_head.php'; ?>
</head>
<body>
	<!-- Page header -->
	<?php require '../header/header.php'; ?>

	<!-- Contenido principal -->
	<div class="container">
		<div class="jumbotron">
			<h1>
				Universidad
				<!-- Barra de progreso -->
				<?php require '../progress/progress.php'; ?>
			</h1>
			<h3>Selecciona tu <span class='label label-danger'>universidad</span></h3>
			<!-- Logos UACH / ITCH -->
			<center>
				<div class="uni_logos">
					<a href="../facultades">
						<div id="logo_uach"></div>				
					</a>
				</div>
			</center>
			<!-- Clear float from logos -->
			<div style="clear:both"></div>				
		</div>
	</div>
	<!-- fin contenido principal -->

	<!-- Page footer -->
	<?php require '../footer/footer.php'; ?>
	
	<!-- JS/JQuery scripts -->
	<?php require '../default/jsscripts.php'; ?>




<div id="preload" style="display:none;     background-color: yellow;">
   <img src="../media/uni_logos/uach/hover.png" width="1" height="1" alt="" />
   <img src="../media/uni_logos/tec_chih/hover.png" width="1" height="1" alt="" />
</div>	

	

</body>
</html>