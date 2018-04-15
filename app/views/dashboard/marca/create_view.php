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
				
				</div>
			</div>
		</div>
		<!--/Tabla de Marca/Material -->	               
		<!-- Modal Editar Marca-->
		<div method ="post" class="modal fade" id="editarmarca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
								<input type="text" name="Nombre" class="form-control validate" id="marca" placeholder="Marca" value="<?php print($marca->getNombre()) ?>"/>
								<label for="marca" class="col-lg-2 control-label"></label>
							</div>
						</div>		                    			               
						<div class="row my-3 d-flex justify-content-center">
							<!--Modificar-->
							<button type="button"  class="btn btn-grey btn-rounded mr-md-3 z-depth-1a"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button>
							<!--Eliminar-->
							<button type="button" name = "insertar" class="btn btn-grey btn-rounded z-depth-1a"><i class="fas fa-trash-alt"></i></button>
						</div>
					</div>
				</div>
				<!--/.Content-->
			</div>
		</div>
		<!-- /Modal Editar Marca -->
		