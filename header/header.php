<!-- 
|   
|   Este archivo contiene el header/encabezado del sitio.
|   
|   Se incluye en todas las páginas principales.
|   (requiere del archivo ../default/settings.php para usar variables
|   $site_url, $product_name).
|   
-->
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand brand-logo" href="<?php echo $site_url; ?>">
        <?php echo $product_name; ?>
      </a>
    </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo $site_url; ?>/acerca">Acerca</a></li>
        <li><a href="<?php echo $site_url; ?>/contacto">Contacto</a></li>
      </ul>
  </div>    
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>