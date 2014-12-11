<?php 
/*
| 
| Página: Restricciones.
| 
| Pide al usuario elegir las últimas restricciones deseadas:
|	- Grupos/profesores que desea evitar.
| 	- Min. y máx. de materias a cursar (pendiente)
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
$progress = 6;
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Título de la pág -->
	<?php $page_title = "Restricciones"; ?>
	<!-- Este archivo contiene lo que se incluye en <HEAD><HEAD/> -->
	<?php require '../default/page_head.php'; ?>
</head>
<body>
	<!-- Page header -->
	<?php require '../header/header.php'; ?>

	<div class="container" ng-app="" ng-controller="gruposController">
		<div class="jumbotron">
			<h1>
				Restricciones
				<?php require '../progress/progress.php'; ?>
			</h1>			
			<h3>¡Casi listos! Selecciona las restricciones que desees.</h3>
			<br>	

			<!-- Input buscar -->
			<div class="input-group">
				<span  class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
				<input type="text" class="form-control user-buscar-input" placeholder="buscar..." ng-model="buscar" autofocus>
			</div>
			<!-- fin input buscar -->
			<br><br>

			<table class="table table-bordered table-striped">
				<tr>
					<th>Evitar</th>
					<th>Docente</th>
					<th>Materia(s)</th>
				</tr>

				<!-- 
				================================================
				Lista docentes
				================================================
				-->
				<script src="data.js"></script>
					 	
				<tr ng-repeat="x in grupos | filter:buscar | orderBy:'materia'"> 
					<td><input type="checkbox"></td>
					<td>{{ x.docente }}</td>
					<td>{{ x.materia }}</td>
				</tr>				
				<!-- 
				================================================
				fin lista docentes
				================================================
				-->
			</table>

			<p class="text-right"><a href="finished.php" class="btn btn-success btn-lg">¡Ver horarios!</a></p>


		</div>
	</div>


	<!-- Page footer -->
	<?php require '../footer/footer.php'; ?>

	<!-- JS/JQuery scripts -->
	<?php require '../default/jsscripts.php'; ?>
	
</body>
</html>