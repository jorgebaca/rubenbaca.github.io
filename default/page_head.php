<!-- 
|	
|	Este archivo se incluye en el <HEAD></HEAD> de cáda página.
|	Require especificar $page_title con anterioridad.
|	
-->
<!-- Page title -->
<title><?php echo $page_title." | ".$product_name; ?></title>
<!-- Charset -->
<meta charset='utf-8'> 
<!-- Viewport for touch zooming and rendering -->
<meta name='viewport' content='width=device-width, initial-scale=1'>
<!-- Include Bootstrap's CSS from CDN (content delivery network) -->
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<!-- Include css/user.css (for all style added by user for specific css stylings) -->
<link rel='stylesheet' href='<?php echo $site_url ?>/css/user.css'>
<!-- Estilo añadido por el usuario para el navbar de Bootstrap -->
<link rel='stylesheet' href='<?php echo $site_url ?>/css/user-navbar.css'>
<!-- Include angular.js -->
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>