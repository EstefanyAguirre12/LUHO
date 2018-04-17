<form method='post'>
    <div class="container registeer cuenta">   
        <h1 class="text-center" >Mi cuenta</h1>
        <div class="row">
            <div class="form-group col-md-6">
                <input type="text" name ="Nombre" class="form-control validate" id="nombre" placeholder="Nombre" value="<?php print($usuario->getNombre()) ?>" required/>
                <label for="nombre" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name ="Apellido" class="form-control validate" id="apellido" placeholder="Modelo" value="<?php print($usuario->getApellido()) ?>" required/>
                <label for="apellido" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name ="Usuario" class="form-control validate" id="usuario" placeholder="Img" value="<?php print($usuario->getUsuario()) ?>" required/>
                <label for="usuario" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="email" name ="Correo" class="form-control validate" id="email" placeholder="Id Tipo envio" value='<?php print($usuario->getCorreo()) ?>' required/>
                <label for="email" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="password" name ="Contrasena" class="form-control validate" id="contrasena1" placeholder="Id talla" value="<?php print($usuario->getContrasena()) ?>" required/>
                <label for="contrasena1" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="password" name ="Contrasena2" class="form-control validate" id="contrasena2" placeholder="Id producto" value="<?php print($usuario->getContrasena()) ?>" required/>
                <label for="contrasena2" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name ="Direccion" class="form-control validate" id="direccion" placeholder="Id ocasion" value='<?php print($usuario->getDireccion()) ?>' required/>
                <label for="direccion" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name ="Direccion" class="form-control validate" id="direccion" placeholder="Id material" value='<?php print($usuario->getDireccion()) ?>' required/>
                <label for="direccion" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name ="Direccion" class="form-control validate" id="direccion" placeholder="Id marca" value='<?php print($usuario->getDireccion()) ?>' required/>
                <label for="direccion" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name ="Direccion" class="form-control validate" id="direccion" placeholder="Id categoria" value='<?php print($usuario->getDireccion()) ?>' required/>
                <label for="direccion" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name ="Direccion" class="form-control validate" id="direccion" placeholder="Detalles" value='<?php print($usuario->getDireccion()) ?>' required/>
                <label for="direccion" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name ="Direccion" class="form-control validate" id="direccion" placeholder="Descripcion" value='<?php print($usuario->getDireccion()) ?>' required/>
                <label for="direccion" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name ="Direccion" class="form-control validate" id="direccion" placeholder="Costo" value='<?php print($usuario->getDireccion()) ?>' required/>
                <label for="direccion" class="col-lg-2 control-label"></label>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name ="Direccion" class="form-control validate" id="direccion" placeholder="Cantidad" value='<?php print($usuario->getDireccion()) ?>' required/>
                <label for="direccion" class="col-lg-2 control-label"></label>
            </div>

            <button type='submit' name='crear' class='btn waves-effect blue tooltipped'><i class='material-icons'>save</i></button>
        </div>              
    </div>
</form>