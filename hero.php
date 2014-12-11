<!-- 
|
|   Este archivo contene el recuadro de la página principal
|   con la palabra TEMPLE y la animación del mouse.
|
|
-->

<!-- Estilo del contenedor principal  -->
<style>
  #canvas-container {
    left:0;
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
  }    
  .another {
    margin-top: 320px;
    text-align: center;
  }

  canvas {
    position: absolute;
    opacity: 0.2;
  }
  
  #myCanvas {
    left: -50px;
    top: -50px; 
  }
  
  h1 >div > img {
    height: 100px;
    font-size: 64px;
    font-weight: 200;
  }
</style>
<!-- Fin estilo contenedor principal -->

<!-- Contenedor -->
<div class="hero hidden-xs">
  <div id="canvas-container">
    <text class="brand-logo animated bounceInLeft"><?php echo "$product_name"; ?></text>
  </div>
</div>
<!-- ... -->
      
<!-- Script con la animación del contenedor -->
<script src="http://d3js.org/d3.v3.min.js"></script>
    <script>
    function handleOrientation(event) {
      var x     = Math.abs(event.beta);
      var y    = Math.abs(event.gamma);
      var canvas = document.getElementById('myCanvas');
      canvas.style.left = parseInt(y/180*50-50)+"px";
      canvas.style.top = parseInt(x/180*50-50)+"px";
    }
    
    window.addEventListener('deviceorientation', handleOrientation);
    
    window.addEventListener('mousemove', function(e){ 
      x = e.clientX || e.pageX; 
      y = e.clientY || e.pageY;
      var canvas = document.getElementById('myCanvas');
      canvas.style.left = parseInt(x/(window.innerWidth)*50)-50+"px";
      canvas.style.top = parseInt(y/(window.innerHeight)*50)-50+"px";
      
    }, false);
    
    function init(){
      var width = window.innerWidth+100,
          height = 400;
      
      var colors = [
        "rgb(197,27,125)",
        "rgb(222,119,174)",
        "rgb(241,182,218)",
        "rgb(253,224,239)",
        "rgb(247,247,247)",
        "rgb(230,245,208)",
        "rgb(184,225,134)",
        "rgb(127,188,65)",
        "rgb(77,146,33)"
      ];
      
      var colors = [
          "#333",
          "#555",
          "#777",
          "#999",
          "#aaa",
          "#ccc"
        ]
      
      var sites = d3.range(70).map(function(d) {
        return [Math.random() * width, Math.random() * height];
      });
      
      var voronoi = d3.geom.voronoi();
      
      var canvas = d3.select("#canvas-container").append("canvas")
          .attr("id", "myCanvas")
          .attr("width", width)
          .attr("height", height)
          .on("mousemove", function() { sites[0] = d3.mouse(this); redraw(); });
      
      var context = canvas.node().getContext("2d");
      
      redraw();
      
      function redraw() {
        var cells = voronoi(sites);
      
        context.clearRect(0, 0, width, height);
      
        context.fillStyle = "#000";
        draw(cells[0]);
        context.fill();
      
        for (var k = 0, l = colors.length; k < l; ++k) {
          context.fillStyle = colors[k];
          for (var i = 1, n = cells.length; i < n; ++i) {
            if (i % l === k && draw(cells[i])) context.fill();
          }
        }
      
        context.strokeStyle = "white";
        for (var i = 0, n = cells.length; i < n; ++i) {
          if (draw(cells[i])) context.stroke();
        }
      
        context.fillStyle = "black";
        for (var i = 1, n = sites.length, site; i < n; ++i) {
          site = sites[i];
          context.beginPath();
          context.arc(site[0], site[1], 1.5, 0, 2 * Math.PI, false);
          context.fill();
        }
      }
      
      function draw(cell) {
        if (cell) {
          context.beginPath();
          context.moveTo(cell[0][0], cell[0][1]);
          for (var j = 1, m = cell.length; j < m; ++j) {
            context.lineTo(cell[j][0], cell[j][1]);
          }
          context.closePath();
          return true;
        }
      }
    }
    
    init();
</script>
<!-- fin script contenedor -->


<!-- Scripts necesarios para el contenedor -->
    <script src="js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/flat-ui.min.js"></script>
    <script type="text/javascript" src="js/angular.js"></script>
    <script type="text/javascript" src="js/app.js"></script>