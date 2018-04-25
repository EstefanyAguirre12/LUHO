<div class="container margent"> 
    <div class="row">	
        <div class="col-md-12">
            <form method='post'>
                <div class="row">	
                    <div class="form-group col-md-4">
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
                        <th>Oferta</th>
                        <th>Modificar</th>							
                        <th>Eliminar</th>														
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($data as $row){
                        print("
                        <tr>
                            <td>$row[Descripcion]</td>
                            <td>$row[IdProducto]</td>
                            <td>$row[Descuento]</td>
                            <td>
                            <a href='update.php?id=$row[IdOferta]' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'><i class='fas fa-pencil-alt'></i></a>
                            </td> <!--look on bootstrap for sizes-->	
                            <td>
                            <a href='delete.php?id=$row[IdOferta]' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a'><i class='fas fa-trash-alt'></i></a>
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
</div>