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
		<header class="font-cover tamanoheader" id="usuarios">
		</header>
		<!-- Tabla de Usuarios -->
		<div class="container">
			<br>
			<div class="text-right">
				<a href="" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" data-toggle="modal" data-target="#agregarusuarios">Agregar Usuarios</a>
			</div>
			<div class="text-center" >
				<table class="table" ><!-- if using bootstrap this auto creates-->
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Usuario</th>
							<th>Contraseña</th>
							<th>Direccion</th>
							<th>Correo</th>					
							<th>Acción</th>					
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><br>Giggles</td>					
							<td><br>Giggles</td>					
							<td><br>Giggles</td>					
							<td><br>Giggles</td>					
							<td><br>Giggles</td>					
							<td><br>Giggles</td>										
							<td><button class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" data-toggle="modal" data-target="#editarusuarios">Editar</button></td> <!--look on bootstrap for sizes-->						
						</tr>
						<tr>
							<td><br>Giggles</td>					
							<td><br>Giggles</td>					
							<td><br>Giggles</td>					
							<td><br>Giggles</td>
							<td><br>Giggles</td>										
							<td><br>Giggles</td>					
							<td><button class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" data-toggle="modal" data-target="#editarusuarios">Editar</button></td> <!--look on bootstrap for sizes-->						
		 			    </tr>
						<tr>
							<td><br>Giggles</td>					
							<td><br>Giggles</td>					
							<td><br>Giggles</td>
							<td><br>Giggles</td>					
							<td><br>Giggles</td>										
							<td><br>Giggles</td>					
							<td><button class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" data-toggle="modal" data-target="#editarusuarios">Editar</button></td> <!--look on bootstrap for sizes-->						
						</tr>
					
					</tbody>
				</table>
		    </div>
			<!--/Tabla de Usuarios -->	               
			<!-- Modal Editar usuarios-->
			<div class="modal fade" id="editarusuarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<!--Content-->
					<div class="modal-content form-elegant">
						<!--Header-->
						<div class="modal-header text-center">
							<h3 class="modal-title w-100 dark-grey-text font-bold my-3" id="myModalLabel"><strong>Usuarios</strong></h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<!--Body-->
						<div class="modal-body mx-4">
							<!--Grid row-->
		                	<div class="row">
		              			<!--Grid column-->
			                    <div class="col-md-6">
									<div class="md-form">
										<input type="text" class="form-control" id="nombre" placeholder="Nombre">
										<label for="nombre" class="col-lg-2 control-label"></label>  
			                        </div>
			                    </div>
		                    	<!--Grid column-->
			                    <div class="col-md-6">
									<div class="md-form">
										<input type="text" class="form-control" id="apellido" placeholder="Apellido">
										<label for="apellido" class="col-lg-2 control-label"></label>
									</div>
			                    </div>
			                    <!--Grid column-->
			                    <div class="col-md-6">
			                            <div class="md-form">
			                         		<input type="text" class="form-control" id="usuario" placeholder="Nombre de Usuario">
			                        		<label for="usuario" class="col-lg-2 control-label"></label>
			                        </div>
			                    </div>
			                    <!--Grid column-->
			                    <div class="col-md-6">
									<div class="md-form">
										<input type="password" class="form-control" id="contraseña" placeholder="Contraseña">
										<label for="contraseña" class="col-lg-2 control-label"></label>
			                        </div>
			                    </div>		                 
						    </div>
							<div class="md-form">
								<input type="text" class="form-control" id="direccion" placeholder="Dirección">
								<label for="direccion" class="col-lg-2 control-label"></label>
							</div>
							<div class="md-form">
								<input type="email" class="form-control" id="correo" placeholder="ejemplo@hotmail.com">
								<label for="correo" class="col-lg-2 control-label"></label>
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
			<!-- /Modal Editar Usuarios-->
			<!-- Modal Agregar Usuarios-->
			<div class="modal fade" id="agregarusuarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<!--Content-->
					<div class="modal-content form-elegant">
						<!--Header-->
						<div class="modal-header text-center">
							<h3 class="modal-title w-100 dark-grey-text font-bold my-3" id="myModalLabel"><strong>Usuarios</strong></h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<!--Body-->
						<div class="modal-body mx-4">
							<!--Grid row-->
		                	<div class="row">
		              			<!--Grid column-->
			                    <div class="col-md-6">
									<div class="md-form">
										<input type="text" class="form-control" id="nombre" placeholder="Nombre">
										<label for="nombre" class="col-lg-2 control-label"></label>  
			                        </div>
			                    </div>
		                    	<!--Grid column-->
			                    <div class="col-md-6">
									<div class="md-form">
										<input type="text" class="form-control" id="apellido" placeholder="Apellido">
										<label for="apellido" class="col-lg-2 control-label"></label>
									</div>
			                    </div>
			                    <!--Grid column-->
			                    <div class="col-md-6">
			                            <div class="md-form">
			                         		<input type="text" class="form-control" id="usuario" placeholder="Nombre de Usuario">
			                        		<label for="usuario" class="col-lg-2 control-label"></label>
			                        </div>
			                    </div>
			                    <!--Grid column-->
			                    <div class="col-md-6">
									<div class="md-form">
										<input type="password" class="form-control" id="contraseña" placeholder="Contraseña">
										<label for="contraseña" class="col-lg-2 control-label"></label>
			                        </div>
			                    </div>		                 
						    </div>
							<div class="md-form">
								<input type="text" class="form-control" id="direccion" placeholder="Dirección">
								<label for="direccion" class="col-lg-2 control-label"></label>
							</div>
							<div class="md-form">
								<input type="email" class="form-control" id="correo" placeholder="ejemplo@hotmail.com">
								<label for="correo" class="col-lg-2 control-label"></label>
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
			<!-- /Modal Agregar Usaurios-->
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
