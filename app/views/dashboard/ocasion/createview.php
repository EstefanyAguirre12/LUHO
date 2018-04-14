<form method="post">
    <div class="container registeer cuenta">   
		<div class="col-sm-11 offset-sm-3 text-center">
			<div class="row">
            	<div class="form-group col-md-6">
					<input type="text" name ="Nombre" class="form-control validate" id="nombre" placeholder="Direccón"  value="<?php print($ocasion->getNombre()) ?>" required/>
					<label for="nombre" class="col-lg-2 control-label"></label>
				</div>
				<div class="text-center">
					<button type='submit' name='crear' class='btn waves-effect blue tooltipped'><i class='material-icons'>save</i></button>
					<button type='submit' name='' class='btn waves-effect blue tooltipped'><i class='material-icons'>save</i></button>
				</div>
			</div>    
		</div>
	</div>
</form>
