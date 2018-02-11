<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<title>LUHO</title>
	   <!-- Bootstrap core CSS -->
	   <link href="../../web/css/bootstrap.min.css" rel="stylesheet">
	   <!-- Material Design Bootstrap -->
	   <link href="../../web/css/mdb.min.css" rel="stylesheet">
		<!-- Estilo css -->
		<link href="../../web/css/style.css" rel="stylesheet">
		<!-- FONTS -->
      	<link rel="stylesheet" href="../../web/css/fontawesome-all.css">
	</head>
	<body>
		<?php include("../components/menu.php") ?>
		<!-- Header -->
		<header class="font-cover tamanoheader" id="marcymat">
		</header>
		<!--/Tabla de Marca/Material -->	               
		<div class="container"> 
			<div class="row">	
				<div class="col-md-6">
					<br>

					<div class="text-right">
						<a href="" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" data-toggle="modal" data-target="#agregarmarca">Agregar Marca</a>

					</div>
					<br>
					<div class="text-center" >
						<table class="table" ><!-- if using bootstrap this auto creates-->
							<thead>
								<tr>
									<th>Marca</th>
									<th>Editar</th>							
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><br>Giggles</td>
									<td><button class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" data-toggle="modal" data-target="#editarmarca">Editar</button></td> <!--look on bootstrap for sizes-->	
								</tr>
								<tr>
									<td><br>Giggles</td>	
									<td><button class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" data-toggle="modal" data-target="#editarmarca">Editar</button></td> <!--look on bootstrap for sizes-->					
								</tr>	
								<tr>
									<td><br>Giggles</td>					
									<td><button class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" data-toggle="modal" data-target="#editarmarca">Editar</button></td> <!--look on bootstrap for sizes-->					
								</tr>													
							</tbody>
						</table>
					</div>
				</div>
				<div class="col-md-6">
					<br>
					<div class="text-right">
						<a href="" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" data-toggle="modal" data-target="#agregarmaterial">Agregar Material</a>
					</div>
					<br>
					<div class="text-center" >
						<table class="table" ><!-- if using bootstrap this auto creates-->
							<thead>
								<tr>
									<th>Material</th>
									<th>Editar</th>							
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><br>Giggles</td>
									<td><button class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" data-toggle="modal" data-target="#editarmaterial">Editar</button></td> <!--look on bootstrap for sizes-->	
								</tr>
								<tr>
									<td><br>Giggles</td>					
									<td><button class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" data-toggle="modal" data-target="#editarmaterial">Editar</button></td> <!--look on bootstrap for sizes-->						
								</tr>													
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
			<!--/Tabla de Marca/Material -->	               
			<!-- Modal Editar Marca-->
			<div class="modal fade" id="editarmarca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<!--Content-->
					<div class="modal-content form-elegant">
						<!--Header-->
						<div class="modal-header text-center">
							<h3 class="modal-title w-100 dark-grey-text font-bold my-3" id="myModalLabel"><strong>Marca</strong></h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<!--Body-->
						<div class="modal-body mx-4">
	                        <div class="md-form">
	                            <div class="md-form">
		                        	<input type="text" class="form-control" id="marca" placeholder="Marca">
		                        	<label for="marca" class="col-lg-2 control-label"></label>
						      	</div>
	                        </div>		                    			               
							<div class="row my-3 d-flex justify-content-center">
								<!--Modificar-->
								<button type="button" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button>
								<!--Eliminar-->
								<button type="button" class="btn btn-grey btn-rounded z-depth-1a"><i class="fas fa-trash-alt"></i></button>
							</div>
						</div>
					</div>
					<!--/.Content-->
				</div>
			</div>
			<!-- /Modal Editar Marca -->
			<!-- Modal Editar Material -->
			<div class="modal fade" id="editarmaterial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<!--Content-->
					<div class="modal-content form-elegant">
						<!--Header-->
						<div class="modal-header text-center">
							<h3 class="modal-title w-100 dark-grey-text font-bold my-3" id="myModalLabel"><strong>Material</strong></h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<!--Body-->
						<div class="modal-body mx-4">
	                        <div class="md-form">
	                            <div class="md-form">
		                        	<input type="text" class="form-control" id="material" placeholder="Material">
		                        	<label for="material" class="col-lg-2 control-label"></label>
						      	</div>
	                        </div>		                    			               
							<div class="row my-3 d-flex justify-content-center">
								<!--Modificar-->
								<button type="button" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button>
								<!--Eliminar-->
								<button type="button" class="btn btn-grey btn-rounded z-depth-1a"><i class="fas fa-trash-alt"></i></button>
							</div>
						</div>
					</div>
					<!--/.Content-->
				</div>
			</div>
			<!-- /Modal Editar Material-->
			<!-- Modal Agregar Marca -->
			<div class="modal fade" id="agregarmarca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<!--Content-->
					<div class="modal-content form-elegant">
						<!--Header-->
						<div class="modal-header text-center">
							<h3 class="modal-title w-100 dark-grey-text font-bold my-3" id="myModalLabel"><strong>Marca</strong></h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<!--Body-->
						<div class="modal-body mx-4">
	                        <div class="md-form">
	                            <div class="md-form">
		                        	<input type="text" class="form-control" id="marca" placeholder="Marca">
		                        	<label for="marca" class="col-lg-2 control-label"></label>
						      	</div>
	                        </div>		                    			               
							<div class="row my-3 d-flex justify-content-center">
								<!--Agregar-->
								<button type="button" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a"><i class="fas fa-plus" aria-hidden="true"></i></button>
							</div>
						</div>
					</div>
					<!--/.Content-->
				</div>
			</div>
			<!-- /Modal Agregar Marca -->
			<!-- Modal Agregar Material -->
			<div class="modal fade" id="agregarmaterial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<!--Content-->
					<div class="modal-content form-elegant">
						<!--Header-->
						<div class="modal-header text-center">
							<h3 class="modal-title w-100 dark-grey-text font-bold my-3" id="myModalLabel"><strong>Material</strong></h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<!--Body-->
						<div class="modal-body mx-4">
	                        <div class="md-form">
	                            <div class="md-form">
		                        	<input type="text" class="form-control" id="material" placeholder="Material">
		                        	<label for="material" class="col-lg-2 control-label"></label>
						      	</div>
	                        </div>		                    			               
							<div class="row my-3 d-flex justify-content-center">
								<!--Agregar-->
								<button type="button" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a"><i class="fas fa-plus" aria-hidden="true"></i></button>
							</div>
						</div>
					</div>
					<!--/.Content-->
				</div>
			</div>
			<!-- /Modal Agregar ocasion -->
			<!-- SCRIPTS -->
			<script src="../../web/js/jquery.min.js"></script>
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
