<?php
/*
 | 
 | Archivo temporal
 | 
 | 
 | 
 | 
 */ 
require '../default/settings.php';
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
    #selectable .ui-selecting { background: rgba(0,120,0, 0.9); }
    #selectable .ui-selected { background: rgba(0,130,0, 0.9); color: white; }
    #selectable { list-style-type: none; margin: 0; padding: 0; width: 800px; }
    #selectable li { margin: 3px; padding: 1px; float: left; width: 100px; height: 40px; font-size: 4em; text-align: center; }
    #selectable{
      font-size: 6px;
    }
    </style>
    <script>
    $(function() {
      $( "#selectable" ).selectable();
    });
    </script>
  <!-- ... -->
</head>
<body style="min-width: 1100px;">


  <br>
  <div class="container" style="min-width: 900px;">
    <div class="jumbotron">
      <h1>
        Fase 2
        <small>
          <span class="glyphicon glyphicon-star-empty"></span>
          <span class="glyphicon glyphicon-star-empty"></span>
          <span class="glyphicon glyphicon-star-empty"></span>
        </small>
      </h1>     
      <h3>Selecciona las <span class='label label-danger'>horas</span> en las que estás disponible.</h3>
      <br>



      <div class="well" style="background-color: rgb(220,220,220); width: 820px; box-shadow: 0px 0px 4px gray;">
        <ol id="selectable">
          <li>Hora</li>
          <li>Lunes</li>
          <li>Martes</li>
          <li>Miércoles</li>
          <li>Jueves</li>
          <li>Viernes</li>
          <li>Sábado</li>
          <li>7:00</li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li>8:00</li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li>9:00</li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li>10:00</li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li>11:00</li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li>12:00</li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li>13:00</li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li>14:00</li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li>15:00</li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li>16:00</li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li>17:00</li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li>18:00</li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li>19:00</li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li>20:00</li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
          <li class="ui-state-default"></li>
        </ol>
        <!-- For styling purposes -->
        <div style="clear:both;"></div>
      </div>
    
      <!-- Botón de siguiente -->
      <p class="text-right"><a href="../materias" class="btn btn-primary btn-lg">Siguiente</a></p>

    </div> <!-- End of jumbotron -->
  </div> <!-- End of container -->

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