<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
		<title>LUHO</title>
		<link rel="stylesheet" href="../../web/css/style.css">
  		<!-- Bootstrap core CSS -->
	   	<link href="../../web/css/bootstrap.min.css" rel="stylesheet">
	   	<!-- Material Design Bootstrap -->
	   	<link href="../../web/css/mdb.min.css" rel="stylesheet">
	   	<!-- FONTS -->
      	<link rel="stylesheet" href="../../web/css/fontawesome-all.css">
	</head>
	<body>
		<?php include("../components/menu.php") ?>

		<!--Imagen parallax-->	
		<div class="font-cover tamanoheader" id="f2"></div>
		<div class="container">    
			<!--Grid row-->
			<div class="row">
				<!--Grid column-->
				<div class="col-md-12 text-center mb-3">
					<h2 class="font-up mb-3 mt-1 font-bold wow fadeIn" data-wow-delay="0.4s"><br>Todos tus privilegios</h2>
					<p align="justify">Dentro del dashboard tendras acceso a todos los privilegios en cuanto al mantenimiento de la tienda, podras visualizar cada una de las tablas que contienen la informacion principal de la tienda, podras encontrar informacion de productos, clientes, usuarios, etc. La pagina posee un menu para facilitar la navegacion, otro complemento que posee es la posibilidad de modificar y visualizar tu cuenta.</p>		
				</div>
				<!--Grid column-->		
			</div>
			<!--Grid row-->	
		</div>		
		<!--Imagen parallax-->	
		<div class="font-cover tamanoheader" id="f1"></div>
		<div class="container margen">    
			<!--Grid row-->
			<div class="row">
				<!--Grid column-->
				<div class="col-md-12 text-center mb-3">
				 	<h2 class="font-up mb-3 mt-1 font-bold wow fadeIn" data-wow-delay="0.4s"><br>¡Agrega, modifica y elimina informacion!</h2>
				</div>
				<!--Grid column-->		
			</div>
			<!--Grid row-->	
			<div class="row">
				<!-- Grid column -->
				<div class="col-lg-4 col-md-12">
					<!--Panel-->
					<div class="card card-body text-center">
						<h4 class="card-title">Agregar</h4>
						<div style=" font-size:5em; color:dark">
							<i class="fas fa-plus" aria-hidden="true"></i>
						</div>
						<p class="card-text"> Podras agregar los respectivos datos a la tabla que desees.</p>
					</div>
					<!--/.Panel-->
				</div>
				<!-- Grid column -->
				<!-- Grid column -->
				<div class="col-lg-4 col-md-6">
					<!--Panel-->
					<div class="card card-body text-center">
						<h4 class="card-title">Modificar</h4>
						<div style="font-size:5em; color:dark">
							<i class="fas fa-pencil-alt" aria-hidden="true"></i>
						</div>
						<p class="card-text"> Podras modificar los respectivos datos a la tabla que desees.</p>
					</div>
					<!--/.Panel-->
				</div>
				<!-- Grid column -->
				<!-- Grid column -->
				<div class="col-lg-4 col-md-6">
					<!--Panel-->
					<div class="card card-body text-center">
						<h4 class="card-title">Eliminar</h4>
						<div style="font-size:5em; color:dark">
							<i class="fas fa-trash-alt" aria-hidden="true"></i>
						</div>
						<p class="card-text">Podras eliminar los respectivos datos a la tabla que desees.</p>
					</div>
					<!--/.Panel-->
				</div>
				<!-- Grid column -->
			</div>
			<!-- Grid row -->
		</div>
				
		<!-- FOOTER -->
		<?php include("../components/footer.php") ?>

		<!-- SCRIPTS -->
		<!-- JQuery -->
		<script type="text/javascript" src="../../web/js/jquery-3.2.1.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="../../web/js/popper.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="../../web/js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="../../web/js/mdb.min.js"></script>
	</body>
</html>
