<form method='post'>
    <div class="container registeer cuenta">   
        <h1 class="text-center" >Mi cuenta</h1>
        <div class="row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control validate" id="nombre" placeholder="Nombre" value='<?php print($usuario->getNombres()) ?>' required/>
                <label for="nombre" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control validate" id="apellido" placeholder="Apellido" value='<?php print($usuario->getNombres()) ?>' required/>
                <label for="apellido" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control validate" id="usuario" placeholder="Usuario" value='<?php print($usuario->getNombres()) ?>' required/>
                <label for="usuario" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="password" class="form-control validate" id="contrasena" placeholder="Contraseña" value='<?php print($usuario->getNombres()) ?>' required/>
                <label for="contrasena" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="email" class="form-control validate" id="email" placeholder="Correo" value='<?php print($usuario->getNombres()) ?>' required/>
                <label for="email" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control validate" id="direccion" placeholder="Direccón" value='<?php print($usuario->getNombres()) ?>' required/>
                <label for="direccion" class="col-lg-2 control-label"></label>
            </div>
            <a href="" class="btn btn-dark btn-rounded mr-md-3 z-depth-1a" >Modificar cuenta</a>
        </div>              
    </div>
</form>