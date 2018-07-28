<div class="container margent"> 
<!-- Este es el formulario para buscar una talla-->
    <div class="row">	
        <div class="col-md-12">
            <form method='post'>
                <div class="row">	
                    <div class="form-group col-md-4">
                    <label for="buscar">Buscar Talla</label>
                        <input type="text" name ="Buscar" class="form-control validate" id="buscar" placeholder="Buscar" >
                        <label for="buscar" class="col-lg-2 control-label"></label>
                    </div>
                    <div class="text-right">
                        <button type='submit' name='buscar' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'><i class='material-icons'>Buscar</i></button>
                        <a href="create.php" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" >Agregar</a>
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
                        <th>Talla</th>
                        <th>Modificar</th>							
                        <th>Eliminar</th>	
                        <th>Reportes</th>													
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($data as $row){
                        print("
                        <tr>
                            <td>$row[Talla]</td>
                            <td>
                            <a href='update.php?id=$row[IdTalla]' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'><i class='fas fa-pencil-alt'></i></a>
                            </td> <!--look on bootstrap for sizes-->	
                            <td>
                            <a href='delete.php?id=$row[IdTalla]' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'><i class='fas fa-trash-alt'></i></a>
                            </td> <!--look on bootstrap for sizes-->
                            <td>
                            <a href='../reportes/prodxta.php?id=$row[IdTalla]' data-toggle='tooltip' title='Reporte de talla' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'><i class='fas fa-file-alt'></i></a>
                            </td> <!--look on bootstrap for sizes-->	
                        
                        <tr>
                        ");
                        }
                    ?>												
                </tbody>
            </table>
            <!--Table-->
        </div>
    </div>	
    <div class="text-left">
		<a href="../reportes/talla.php" data-toggle='tooltip' title='Reporte de talla' class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" >Reporte</a>
		<a href="../graficos/prodxta.php" data-toggle='tooltip' title='Grafico de talla' class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" >Graficos</a>
	</div>	
</div>