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
	<title>Acerca de | <?php echo $brand_name ?></title>
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
				Acerca de
			</h1>
			<p class="text-justify">
			<?php echo $product_name; ?> es un producto creado por <?php echo $brand_name; ?>, 
			un grupo de ingenieros dedicados a facilitar los tediosos procesos escolares existentes.
			</p>
			<br>
			<h3>¿Cómo funciona?</h3>
			<p class="text-justify">
			Gracias al arduo trabajo del equipo de desarrollo hemos logrado crear un proceso
			lo suficientemente eficaz para analizar miles de posibilidades una por una para ver 
			cúal es la más óptima para ti, de forma que tú no te preocupes por revisar tediosas
			hojas de cálculo e información.
			</p>
			<center> 
				<img src="easy.jpg" alt="" class="thumbnail" width="100%" height="auto" style="max-width: 500px;">
			</center>
			<br>	
			<h3>Expansión</h3>
			<p class="text-justify">
			En <?php echo $brand_name; ?> estamos trabajando sin parar para abarcar el máximo
			número posible de instituciones educativas. Iniciaremos operaciones en Enero 2015 abarcando
			el 75% de las facultades de Ingeniería de la Universidad Autónoma de Chihuahua. A partir de
			ahí esperamos expandirnos tan pronto como sea posbile.
			</p>
			<br>
			<table class="table table-bordered table-hover">
				<tr>
					<th>Fecha</th>
					<th>Insituto</th>
					<th>% abarcado</th>
					<th>Alcance (# alumnos)</th>
				</tr>
				<tr>
					<td>Enero 2015</td>
					<td>UACH - Ingeniería</td>
					<td>75%</td>
					<td>2,500</td>
				</tr>
				<tr>
					<td rowspan="3">Junio 2015</td>
					<td>UACH - Ingeniería</td>
					<td><span class='label label-success'>100%</span></td>
					<td>3,300</td>
				</tr>
				<tr>
					<td>UACH - Todas las facultades</td>
					<td>20%</td>
					<td>6,000</td>
				</tr>
				<tr>
					<td>ITCH</td>
					<td>50%</td>
					<td>4,100</td>
				</tr>
				<tr>
					<td rowspan="2">Enero 2016</td>
					<td>UACH - Todas las facultadoes</td>
					<td><span class='label label-success'>100%</span></td>
					<td>30,000+</td>
				</tr>
				<tr>
					<td>ITCH</td>
					<td><span class='label label-success'>100%</span></td>
					<td>9,500+</td>
				</tr>
			</table>
			
		</div>
	</div>
	<!-- fin contenido principal -->

	<!-- Page footer -->
	<?php require '../footer/footer.php'; ?>
	
	<!-- JS/JQuery scripts -->
	<?php require '../default/jsscripts.php'; ?>

</body>
</html>