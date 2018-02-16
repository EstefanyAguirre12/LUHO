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
		<header class="font-cover tamanoheader" id="productos">
		</header>
		<!-- Tabla de Productos -->
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
							<th>Descripcion</th>
							<th>Costo</th>
							<th>Modelo</th>
							<th>Marca</th>
							<th>Material</th>					
							<th>Ocasion</th>
							<th>Categoria</th>
							<th>Imagen</th>
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
							<td><br>Giggles</td>										
							<td><br>Giggles</td>					
							<td><img src="../../web/img/1.jpg"></td>					
							<td><button class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" data-toggle="modal" data-target="#editarproductos">Editar</button></td> <!--look on bootstrap for sizes-->						
						</tr>
						<tr>
							<td><br>Giggles</td>					
							<td><br>Giggles</td>					
							<td><br>Giggles</td>					
							<td><br>Giggles</td>
							<td><br>Giggles</td>					
							<td><br>Giggles</td>										
							<td><br>Giggles</td>					
							<td><br>Giggles</td>					
							<td><img src="https://sociorocketnewsen.files.wordpress.com/2013/05/nekozusi4.jpg?w=580&h=544"></td>	
							<td><button class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" data-toggle="modal" data-target="#editarproductos">Editar</button></td> <!--look on bootstrap for sizes-->						
		 			    </tr>
						<tr>
							<td><br>Giggles</td>					
							<td><br>Giggles</td>					
							<td><br>Giggles</td>					
							<td><br>Giggles</td>
							<td><br>Giggles</td>					
							<td><br>Giggles</td>										
							<td><br>Giggles</td>					
							<td><br>Moda</td>
							<td><img src="http://i.kinja-img.com/gawker-media/image/upload/s--xdMIpuHP--/190kn1zcknicbjpg.jpg"></td>
							<td><button class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" data-toggle="modal" data-target="#editarproductos">Editar</button></td> <!--look on bootstrap for sizes-->						
						</tr>		
					</tbody>
				</table>
			</div>
			<!--/Tabla de Productos -->	               
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
		</div>
		<!-- FOOTER -->
		<?php include("../components/footer.php") ?>

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
