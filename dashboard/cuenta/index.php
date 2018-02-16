<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<!-- Bootstrap core CSS -->
    <link href="../../web/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../../web/css/mdb.min.css" rel="stylesheet">
    <!-- Estilo css -->
    <link href="../../web/css/style.css" rel="stylesheet">
    <!-- FONTS -->
    <link rel="stylesheet" href="../../web/css/fontawesome-all.css">
    <title>LUHO</title>
    </head>
    <body class="fundillo">

        <!-- Menu-->
        <?php include("../components/menu.php") ?>

        <!-- FORMULARIO CUENTA-->
        <div class="container registeer cuenta">   
            <h1 class="text-center" >Mi cuenta</h1>
            <div class="row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                    <label for="nombre" class="col-lg-2 control-label"></label>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="apellido" placeholder="Apellido">
                    <label for="apellido" class="col-lg-2 control-label"></label>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="usuario" placeholder="Usuario">
                    <label for="usuario" class="col-lg-2 control-label"></label>
                </div>
                <div class="form-group col-md-6">
                    <input type="password" class="form-control" id="contrasena" placeholder="Contraseña">
                    <label for="contrasena" class="col-lg-2 control-label"></label>
                </div>
                <div class="form-group col-md-6">
                    <input type="email" class="form-control" id="email" placeholder="Correo">
                    <label for="email" class="col-lg-2 control-label"></label>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="direccion" placeholder="Direccón">
                    <label for="direccion" class="col-lg-2 control-label"></label>
                </div>
                <a href="" class="btn btn-dark btn-rounded mr-md-3 z-depth-1a" >Modificar cuenta</a>
            </div>              
        </div>

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