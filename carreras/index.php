<?php 
/*
| 
| Página: Carreras
| 
| Esta página pide al usuario elegir la carrera a la que
| pertenece.
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
// Para la barra de progreso
$progress = 3;
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Título de la pág -->
	<?php $page_title = "Carreras"; ?>
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
				Carrera
				<?php require '../progress/progress.php'; ?>
			</h1>			
			<h3>Selecciona tu <span class='label label-warning'>carrera</span></h3>
			<br><br>
			<!-- 
			================================================
			Lista carreras + Buscar
			================================================
			-->
			<div ng-app="" ng-controller="carrerasController">
				<!-- Input buscar -->
				<div class="input-group">
					<span  class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
					<input type="text" class="form-control user-buscar-input" placeholder="buscar..." ng-model="buscar" autofocus>
				</div>
				<!-- fin input buscar -->
				<br><br>
				<div class="list-group user-lista-facultades">
				  <a href="../materias" class="list-group-item" ng-repeat="x in carreras | filter:buscar | orderBy:'nombre'">
				    {{ (x.nombre) }}
				  </a>
				</div>
			</div>
			<script src="data.js"></script>
			<!-- 
			================================================
			fin lista carreras + buscar
			================================================
			-->
			
		</div>
	</div>
	<!-- fin contenido principal -->

	<!-- Page footer -->
	<?php require '../footer/footer.php'; ?>


	<!-- JS/JQuery scripts -->
	<?php require '../default/jsscripts.php'; ?>



</body>
</html>