<!doctype html>
<html lang="en">

<?php include "assets/const/head.php"; ?>

    <title>Inicio</title>

  </head>
  <body>
  <?php include "assets/const/sidebar.php"; ?>
  <!-- Inicio de navegacion var  -->
  <div class="w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div id="mostrar_sidebar"><i class="fas fa-arrow-circle-right"></i></div>
        <div style="display:none;" id="ocultar_sidebar"><i class="fas fa-arrow-circle-left"></i></div>
      <div class="container">
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php include "assets/const/nav.php"; ?>
        </div>
      </div>
        </nav>
<!-- Fin de navegacion var  -->

<div id="page-loader">
    <span class="preloader-interior">   </span>
</div>

<div id="vista_general">
  
</div>


<?php include "assets/const/boots_footer.php";?>

</body>
</html>