<!--Modal: Login / Register Form-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-2 black darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                        <!--Body-->
                        <div class="modal-body mb-1">
                            <div class="form-group">
                                <label for="email" class="col-lg-2 control-label">Email:</label>
                                <div class="col-lg-12">
                                    <input type="email" class="form-control" id="email" placeholder="Ejemplo@tucorreo.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contra" class="col-lg-2 control-label">Contraseña:</label>
                                <div class="col-lg-12">
                                    <input type="password" class="form-control" id="contra" placeholder="Tu contraseña">
                                </div>
                            </div>
                            <div class="text-center mt-2">
                                <button class="btn btn-grey">Iniciar Sesión <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p>Olvidaste tu <a href="#" class="blue-text">contraseña?</a></p>
                            </div>
                        </div>

                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">
                        <!--Body-->
                        <div class="modal-body">
                            <div class="row">
		              			<!--Grid column-->
			                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre" class="col-lg-2 control-label">Nombre:</label>
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                                        </div>
                                    </div>
                                </div>
		                    	<!--Grid column-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="apellido" class="col-lg-2 control-label">Apellido:</label>
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" id="apellido" placeholder="Apellido">
                                        </div>
                                    </div>
                                </div>
			                    <!--Grid column-->
			                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="usuario" class="col-lg-2 control-label">Usuario:</label>
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" id="usuario" placeholder="Usuario">
                                        </div>
                                    </div>
			                    </div>
                                <!--Grid column-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contra" class="col-lg-2 control-label">Contraseña:</label>
                                        <div class="col-lg-12">
                                            <input type="password" class="form-control" id="contra" placeholder="Tu contraseña">
                                        </div>
                                    </div>		                 
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email" class="col-lg-2 control-label">Email:</label>
                                        <div class="col-lg-12">
                                            <input type="email" class="form-control" id="email" placeholder="ejemplo@tucorreo.com">
                                        </div>
                                    </div>		                 
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="direccion" class="col-lg-2 control-label">Direccion:</label>
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" id="direccion" placeholder="Direccion">
                                        </div>
                                    </div>		                 
						        </div>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="checkbox" id="checkbox100" >
                                <label class="form-check-label" for="checkbox100">
                                <a  href="#" class="badge badge-grey" data-toggle="modal" data-target="#terminosmodal">Acepto los terminos y condiciones</a></label>
                            </div>
                            <div class="text-center mt-2">
                                <button class="btn btn-grey">Registrarse <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
                        </div>
                    </div>
                    <!--/.Panel 8--> 
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->