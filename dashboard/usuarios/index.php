<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8">
		<title>LUHO</title>
	   <!-- Font Awesome -->
	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
		<header class="font-cover" id="productos">
			<h1>MANTENIMIENTO <br><br> DE USUARIOS <br> <span>[ LUHO ]</span></h1>
		</header>
		<!-- Tabla de Usuarios -->
		<div class="container">
			<br>
			<div class="text-right">
				<a href="" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" data-toggle="modal" data-target="#agregarproducto">Agregar Producto</a>
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
							<th>Editar</th>					
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
							<td><button class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" data-toggle="modal" data-target="#editarproductos">Editar</button></td> <!--look on bootstrap for sizes-->						
						</tr>
						<tr>
							<td><br>Giggles</td>					
							<td><br>Giggles</td>					
							<td><br>Giggles</td>					
							<td><br>Giggles</td>
							<td><br>Giggles</td>										
							<td><br>Giggles</td>					
							<td><button class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" data-toggle="modal" data-target="#editarproductos">Editar</button></td> <!--look on bootstrap for sizes-->						
		 			    </tr>
						<tr>
							<td><br>Giggles</td>					
							<td><br>Giggles</td>					
							<td><br>Giggles</td>
							<td><br>Giggles</td>					
							<td><br>Giggles</td>										
							<td><br>Giggles</td>					
							<td><button class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" data-toggle="modal" data-target="#editarproductos">Editar</button></td> <!--look on bootstrap for sizes-->						
						</tr>
					
					</tbody>
				</table>
		    </div>
			<!--/Tabla de Usuarios -->	               
			<!-- Modal Editar Productos-->
			<div class="modal fade" id="editarproductos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<!--Content-->
					<div class="modal-content form-elegant">
						<!--Header-->
						<div class="modal-header text-center">
							<h3 class="modal-title w-100 dark-grey-text font-bold my-3" id="myModalLabel"><strong>Productos</strong></h3>
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
			                            <div class="md-form">
				                        	<input type="text" class="form-control" id="nombre" placeholder="Nombre">
				                        	<label for="nombre" class="col-lg-2 control-label"></label>
								      	</div>
			                        </div>
			                    </div>
		                    	<!--Grid column-->
			                    <div class="col-md-6">
			                        <div class="md-form">
			                            <div class="md-form">
			                         		<input type="text" class="form-control" id="descripcion" placeholder="Descripcion">
			                        		<label for="descripcion" class="col-lg-2 control-label"></label>
								      	</div>
			                        </div>
			                    </div>
			                    <!--Grid column-->
			                    <div class="col-md-6">
			                        <div class="md-form">
			                            <div class="md-form">
			                         		<input type="text" class="form-control" id="modelo" placeholder="Modelo">
			                        		<label for="modelo" class="col-lg-2 control-label"></label>
								      	</div>
			                        </div>
			                    </div>
			                    <!--Grid column-->
			                    <div class="col-md-6">
			                        <div class="md-form">
			                            <div class="md-form">
			                         		<input type="text" class="form-control" id="costo" placeholder="Costo">
			                        		<label for="costo" class="col-lg-2 control-label"></label>
								      	</div>
			                        </div>
			                    </div>
				                <div class="col-md-6">
					             	<div class="md-form">
										<div class="btn-group">
											<button type="button" class="btn btn-grey">Marca</button>
											<button type="button" class="btn btn-grey dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="sr-only">Toggle Dropdown</span>
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Rolex</a>
												<a class="dropdown-item" href="#">Pandora</a>
												<a class="dropdown-item" href="#">Swarovski</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
					             	<div class="md-form">
										<div class="btn-group">
											<button type="button" class="btn btn-grey">Material</button>
											<button type="button" class="btn btn-grey dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="sr-only">Toggle Dropdown</span>
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Plata</a>
												<a class="dropdown-item" href="#">Cristales</a>
												<a class="dropdown-item" href="#">Oro</a>
											</div>
										</div>
									</div>
								</div>	
								<div class="col-md-6">
					             	<div class="md-form">
										<div class="btn-group">
											<button type="button" class="btn btn-grey">Occasión</button>
											<button type="button" class="btn btn-grey dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="sr-only">Toggle Dropdown</span>
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Aniversario</a>
												<a class="dropdown-item" href="#">Cumpleaños</a>
												<a class="dropdown-item" href="#">Fiesta</a>
											</div>
										</div>
									</div>
								</div>	
								<div class="col-md-6">
					             	<div class="md-form">
										<div class="btn-group">
											<button type="button" class="btn btn-grey">Categoria</button>
											<button type="button" class="btn btn-grey dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="sr-only">Toggle Dropdown</span>
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Pulsera</a>
												<a class="dropdown-item" href="#">Anillo</a>
												<a class="dropdown-item" href="#">Reloj</a>
											</div>
										</div>
									</div>
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
			<!-- /Modal Editar Productos-->
			<!-- Modal Agregar Productos-->
			<div class="modal fade" id="agregarproducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<!--Content-->
					<div class="modal-content form-elegant">
						<!--Header-->
						<div class="modal-header text-center">
							<h3 class="modal-title w-100 dark-grey-text font-bold my-3" id="myModalLabel"><strong>Productos</strong></h3>
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
			                            <div class="md-form">
				                        	<input type="text" class="form-control" id="nombre" placeholder="Nombre">
				                        	<label for="nombre" class="col-lg-2 control-label"></label>
								      	</div>
			                        </div>
			                    </div>
		                    	<!--Grid column-->
			                    <div class="col-md-6">
			                        <div class="md-form">
			                            <div class="md-form">
			                         		<input type="text" class="form-control" id="descripcion" placeholder="Descripcion">
			                        		<label for="descripcion" class="col-lg-2 control-label"></label>
								      	</div>
			                        </div>
			                    </div>
			                    <!--Grid column-->
			                    <div class="col-md-6">
			                        <div class="md-form">
			                            <div class="md-form">
			                         		<input type="text" class="form-control" id="modelo" placeholder="Modelo">
			                        		<label for="modelo" class="col-lg-2 control-label"></label>
								      	</div>
			                        </div>
			                    </div>
			                    <!--Grid column-->
			                    <div class="col-md-6">
			                        <div class="md-form">
			                            <div class="md-form">
			                         		<input type="text" class="form-control" id="costo" placeholder="Costo">
			                        		<label for="costo" class="col-lg-2 control-label"></label>
								      	</div>
			                        </div>
			                    </div>
				                <div class="col-md-6">
					             	<div class="md-form">
										<div class="btn-group">
											<button type="button" class="btn btn-grey">Marca</button>
											<button type="button" class="btn btn-grey dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="sr-only">Toggle Dropdown</span>
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Rolex</a>
												<a class="dropdown-item" href="#">Pandora</a>
												<a class="dropdown-item" href="#">Swarovski</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
					             	<div class="md-form">
										<div class="btn-group">
											<button type="button" class="btn btn-grey">Material</button>
											<button type="button" class="btn btn-grey dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="sr-only">Toggle Dropdown</span>
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Plata</a>
												<a class="dropdown-item" href="#">Cristales</a>
												<a class="dropdown-item" href="#">Oro</a>
											</div>
										</div>
									</div>
								</div>	
								<div class="col-md-6">
					             	<div class="md-form">
										<div class="btn-group">
											<button type="button" class="btn btn-grey">Occasión</button>
											<button type="button" class="btn btn-grey dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="sr-only">Toggle Dropdown</span>
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Aniversario</a>
												<a class="dropdown-item" href="#">Cumpleaños</a>
												<a class="dropdown-item" href="#">Fiesta</a>
											</div>
										</div>
									</div>
								</div>	
								<div class="col-md-6">
					             	<div class="md-form">
										<div class="btn-group">
											<button type="button" class="btn btn-grey">Categoria</button>
											<button type="button" class="btn btn-grey dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="sr-only">Toggle Dropdown</span>
											</button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Pulsera</a>
												<a class="dropdown-item" href="#">Anillo</a>
												<a class="dropdown-item" href="#">Reloj</a>
											</div>
										</div>
									</div>
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
			<!-- /Modal Agregar Productos-->
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
