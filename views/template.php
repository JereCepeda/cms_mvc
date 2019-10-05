<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FrontEnd</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="images/icono.jpg">

	<link rel="stylesheet" href="views/modules/css/bootstrap.min.css">
	<link rel="stylesheet" href="views/modules/css/font-awesome.min.css">
	<link rel="stylesheet" href="views/modules/css/style.css">
	<link rel="stylesheet" href="views/modules/css/fonts.css">
	<link rel="stylesheet" href="views/modules/css/cssFancybox/jquery.fancybox.css">

	<script src="views/modules/js/jquery-2.2.0.min.js"></script>
	<script src="views/modules/js/bootstrap.min.js"></script>
	<script src="views/modules/js/jquery.fancybox.js"></script>
	<script src="views/modules/js/animatescroll.js"></script>
	<script src="views/modules/js/jquery.scrollUp.js"></script>

</head>

<body>

	<div class="container-fluid">

		<!--=====================================
		CABEZOTE
		======================================-->
		<?php 
			include "views/modules/cabecera.php";
		?>
	
		<!--====  Fin de CABEZOTE  ====-->

		<!--=====================================
		SLIDE
		======================================-->
		
		<?php include "modules/slide.php" ?>
		<!--====  Fin de SLIDE  ====-->

		<!--=====================================
		TOP
		======================================-->
		<?php include "modules/top.php" ?>

		<!--====  Fin de TOP  ====-->

		<!--=====================================
		GALERIA
		======================================-->
		<?php include "modules/galeria.php" ?>

		<!--====  Fin de GALERIA  ====-->

		<!--=====================================
		ARTÍCULOS
		======================================-->
		<?php include "modules/articulos.php" ?>

		<!--====  Fin de ARTÍCULOS  ====-->

		<!--=====================================
		VIDEOS
		======================================-->
		<?php include "modules/videos.php" ?>

		<!--====  Fin de VIDEOS  ====-->

		<!--=====================================
			CONTÁCTENOS         
			======================================-->
			<?php include "modules/contacto.php" ?>
		
		<!--====  Fin de CONTÁCTENOS ====-->

		<!--=====================================
			ARTÍCULO MODAL         
		======================================-->
		<?php include "modules/modal.php" ?>
		

    	<!--====  Fin de ARTICULO MODAL ====-->
		
	</div>




<script src="views/modules/js/script.js"></script>

</body>
</html>
