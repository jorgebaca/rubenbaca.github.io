<?php 
/*
| 
| Página: Horario
| 
| Esta página pide al usuario elegir las horas en las que está
| disponible.
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

// Para el porcentage de la barra de progreso
$progress = 5; 
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Titulo -->
  <title>Horario | <?php echo $product_name; ?></title>
  <!-- <HEAD></HEAD> files (css, charset, etc) -->
  <?php require '../default/page_head.php'; ?>
  
  <!-- For JQuery 'selectable' -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
   
    <style>
    #feedback { font-size: 1.4em; }
    #selectable .ui-selecting { background: rgba(0,110,0, 0.9); }
    #selectable .ui-selected { background: rgba(0,100,0, 0.9); color: white; }
    #selectable { list-style-type: none; margin: 0; padding: 0; width: 600px; }
    #selectable li { margin: 3px; padding: 1px; float: left; width: 70px; height: 30px; font-size: 4em; text-align: center; }
    #selectable{
      font-size: 4px;
    }
    </style>
    <script>
    $(function() {
      $( "#selectable" ).selectable();
    });
    </script>
  <!-- ... -->
</head>
<body>
  
  <!-- Page header -->
  <?php require '../header/header.php'; ?>

  <!-- Contenido principal -->
  <div class="container">
    <div class="jumbotron">
      <h1>
        Disponibilidad
        <?php require '../progress/progress.php'; ?>
      </h1>     
      <h3>Selecciona las <span class='label label-danger'>horas</span> en las que estás disponible.</h3>
      <br>

		<?php require 'content.php'; ?>
    
      <!-- Botón de siguiente -->
      <p class="text-right"><a href="../restricciones" class="btn btn-primary btn-lg">Siguiente</a></p>

    </div> 
  </div> 
  <!-- Fin contenido principal -->


  <!-- Page footer -->
  <?php require '../footer/footer.php'; ?>


  <!-- For JQuery 'selectable' -->
    <script>
    $(function() {
      $( "#selectable" ).selectable({
        stop: function() {
          var result = $( "#select-result" ).empty();
          $( ".ui-selected", this ).each(function() {
            var index = $( "#selectable li" ).index( this );
            result.append( " #" + ( index + 1 ) );
          });
        }
      });
    });
    </script>
  <!-- ... -->

</body>
</html>