
<div class="container margent"> 

	<div class="row">	
		<div class="col-md-12">
			<form method='post'>
				<div class="row">	
					<div class="form-group col-md-4">
						<input type="text" name ="Direccion" class="form-control validate" id="direccion" placeholder="Direccón" value='<?php print($ocasion->getNombre()) ?>' required/>
						<label for="direccion" class="col-lg-2 control-label"></label>
            		</div>
					<div class="text-right">
						<button type='submit' name='buscar' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'><i class='material-icons'>Buscar</i></button>
						<a href="create.php" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" >Agregar Marca</a>
						</div>
				</div>			
			</form>
	
		</div>
	</div>
</div>


<div class="container text-center margenb" >
				<div class="px-4">
					<div class="table-wrapper">
						<!--Table-->
						<table class="table" ><!-- if using bootstrap this auto creates-->
							<thead>
								<tr>
									<th>Id</th>
									<th>Ocasion</th>
									<th>Modificar</th>							
									<th>Eliminar</th>														
								</tr>
							</thead>
							<tbody>
								<?php
									foreach($data as $row){
									print("
									<tr>
										<td>$row[IdOcasion]</td>
										<td>$row[Ocasion]</td>
										<td><button href='update.php?id=$row[IdOcasion]' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a' data-toggle='modal' data-target='#editarocasion'><i class='fas fa-pencil-alt' ></i></button></td> <!--look on bootstrap for sizes-->	
										<td><button href='update.php?id=$row[IdOcasion]' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a' data-toggle='modal'><i class='fas fa-trash-alt'></i></button></td> <!--look on bootstrap for sizes-->	
										</tr>
									<tr>
									");
									}
								?>												
							</tbody>
						</table>
						<!--Table-->
					</div>
				</div>			
			</div>

    
