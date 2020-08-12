<?php 

    require_once "producto.php";


$productoModel = new producto();
$reg = $productoModel->listar();
if($reg){
    ?>


<div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <?php foreach ($reg as $row): ?>
           <div class="col-md-4">
          <h2><?php echo $row['nombre']; ?></h2>
          <p><?php echo $row['precio']; ?></p>
          <p><a class="btn btn-default" href="#" type="button" class="btn btn-danger">Comprar</button>>View details &raquo;</a></p>
        </div>
        
        <?php 
            endforeach
        ?>
       
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2020</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>

<?php    
}else{
    echo "<script>
       alert('no existen registros!! ');
        </script>";

}
?>