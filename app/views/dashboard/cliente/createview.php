<!-- Este es el formulario para crear un cliente-->
<form method='post'>
    <div class="container registeer cuenta">   
        <div class="row">
            <div class="form-group col-md-6">
                <input type="text" name ="Nombre" class="form-control validate" id="nombre" placeholder="Nombre" value="<?php print($usuario->getNombre()) ?>" required/>
                <label for="nombre" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name ="Apellido" class="form-control validate" id="apellido" placeholder="Apellido" value="<?php print($usuario->getApellido()) ?>" required/>
                <label for="apellido" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name ="Usuario" class="form-control validate" autocomplete="off" id="usuario" placeholder="Usuario" value="<?php print($usuario->getUsuario()) ?>" required/>
                <label for="usuario" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="email" name ="Correo" class="form-control validate" autocomplete="off" id="email" placeholder="Correo" value='<?php print($usuario->getCorreo()) ?>' required/>
                <label for="email" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="password" name ="clave1" class="form-control validate" id="contrasena1" placeholder="Contraseña" value="<?php print($usuario->getContrasena()) ?>" required/>
                <label for="contrasena1" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="password" name ="clave2" class="form-control validate" id="contrasena2" placeholder="Contraseña" value="<?php print($usuario->getContrasena()) ?>" required/>
                <label for="contrasena2" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name ="Direccion" class="form-control validate" autocomplete="off" id="direccion" placeholder="Direccón" value='<?php print($usuario->getDireccion()) ?>' required/>
                <label for="direccion" class="col-lg-2 control-label"></label>
            </div> 

        <a href="index.php" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a" >Cancelar</a>
        <button type="submit" name="crear" class="btn btn-grey btn-rounded mr-md-3 z-depth-1a"><i class="material-icons">Agregar</i></button>
    </div>
    <div class="g-recaptcha" data-sitekey="6LcRgWkUAAAAAM3rMy9U1UHlaWipOq1fOqtuoyzP"></div>

    </div>
</form>