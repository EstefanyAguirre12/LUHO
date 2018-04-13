<!-- Modal de ayuda -->
<div class="modal fade" id="ayudamodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Necesitas una mano? toma dos!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--Accordion wrapper-->
                <div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingOne">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5 class="mb-0">
                                    Preguntas frecuentes. <i class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-body">
                                <h5>Que pasa si mi producto esta defectuoso?</h5>
                                <p>La empresa se hace responsable siempre y cuando este dentro del margen de 30 dias para devoluciones y reclamos.</p>
                                <h5>En cuanto tiempo recibire mi producto?</h5>
                                <p>Si usted contrato el envio gratis; recibira su producto en un maximo de 7 dias, por otra parte si contrato el servicio
                                    de envio Luxury su producto tardara un maximo de 48H.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->
                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingTwo">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5 class="mb-0">
                                    Como encontrarnos. <i class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body">
                                <p>Visitanos de lunes a viernes de 10AM-8PM y sabados de 10Am - 4PM.
                                    Sucursal San Salvador, calle Maquilishuat, cerca de La Calaca calle La Mascota y Plaza Kalpataru.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->
                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingThree">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h5 class="mb-0">
                                    Envios y entregas. <i class="fa fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body">
                                <p>Las entregas de nuestros productos varian segun el plan de envio que usted
                                    contrato a la hora de realizar y confirmar su compra. 
                                </p>
                                <h5> Envio gratuito.</h5>
                                <p>Todas las compras cuentan con nuestro envio gratuito, que tiene un plazo de 7 dias maximo
                                    para hacer la entrega.
                                </p>
                                <h5>Envio Luxury</h5>
                                <p>El plan de envio Luxury© hace un recargo en el total de tu compra y la entrega se hace en un plazo maximo
                                    de 48H.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->
                </div>
                <!--/.Accordion wrapper-->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Gracias</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal de ayuda -->



<!-- Modal de Carrito-->
<div class="modal fade" id="carritoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Carrito de compras</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-hover table-bordered table-dark">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                        <th scopre="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Rolex President</td>
                            <td>1</td>
                            <td>$11,999</td>
                            <td><button type="button" class="btn btn-white">Eliminar</button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Swarovski Bracelet</td>
                            <td>1</td>
                            <td>$2,999</td>
                            <td><button type="button" class="btn btn-white">Eliminar</button></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Heart charm Pandora</td>
                            <td>2</td>
                            <td>$120.00</td>
                            <td><button type="button" class="btn btn-white">Eliminar</button></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td colspan="2">Sub Total:</td>
                            <td>$15,238</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-grey" data-dismiss="modal">Continuar comrpando</button>
                <button type="button" class="btn btn-dark">Proceder a comprar</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal de Carrito-->




<!-- Modal de Contacto -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulario de contacto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="contact-name" class="col-lg-2 control-label">Nombre:</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="contact-name" placeholder="Nombre Completo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact-email" class="col-lg-2 control-label">Email:</label>
                    <div class="col-lg-10">
                        <input type="email" class="form-control" id="contact-email" placeholder="Ejemplo@tucorreo.com">
                    </div>
                </div>
                <div class="form-group">
                    <label for="contact-msg" class="col-lg-2 control-label">Mensaje:</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" rows="8" cols="80"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-grey" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-dark" type="submit">Enviar</button>
            </div>
        </div>
    </div>
</div>
<!-- Fin Modal de Contacto-->











<!-- Modal productos -->
<div class="modal fade" id="modalproductos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <!--Carousel Wrapper-->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../../web/img/an11.jpg" class="img-fluid" alt="photo">
                                <img src="../../web/img/an11.jpg" class="img-fluid" alt="photo">												
                            </div>                                  
                        </div>
                    </div>							
                    <div class="col-lg-7">
                        <h2 class="h2-responsive product-name"><strong>Producto</strong></h2>
                        <h4 class="h4-responsive"><span class="green-text"><strong>$49</strong></span> <span class="grey-text"><small><s>$89</s></small></span></h4>
                        <!--Accordion wrapper-->
                        <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h5 class="mb-0">
                                            Descripcion <i class="fa fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="card-body">
                                    Anillo Tiara de Mi Princesa PANDORA Rose con circonita cúbica transparente
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h5 class="mb-0">
                                            Detalles <i class="fa fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nesciunt atque nemo neque ut officiis nostrum incidunt
                                        maiores, magni optio et sunt suscipit iusto nisi totam quis, nobis mollitia
                                        necessitatibus.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <h5 class="mb-0">
                                            Envio <i class="fa fa-angle-down rotate-icon"></i>
                                        </h5>
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente nesciunt atque nemo neque ut officiis nostrum incidunt
                                        maiores, magni optio et sunt suscipit iusto nisi totam quis, nobis mollitia
                                        necessitatibus.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/.Accordion wrapper-->
                        <!-- Add to Cart -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-grey">Talla</button>
                                            <button type="button" class="btn btn-grey dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Talla</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Talla1</a>
                                                <a class="dropdown-item" href="#">Talla2</a>
                                                <a class="dropdown-item" href="#">Talla3</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-grey">Material</button>
                                            <button type="button" class="btn btn-grey dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Oro</a>
                                                <a class="dropdown-item" href="#">Plata</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-grey">Añadir al carro<i class="fa fa-cart-plus ml-2" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <!-- /.Add to Cart -->
                    </div>
                </div>
                <!-- /row -->
                <div class="container">
                    <div class="text-center">
                        <h3>Seccion de Comentarios</h3>
                    </div>
                    <div class="md-form">
                        <input type="text" class="form-control" class="md-textarea" id="categoria" placeholder="Dejanos tu comentario">
                        <label for="categoria" class="col-lg-2 control-label"></label>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="scroll-comments">    
                                <!--Main wrapper-->
                                <div class="comments-list text-left">
                                    <!--First row-->
                                    <div class="row">    
                                        <!--Content column-->
                                        <div class="col-sm-10 col-12">
                                            <a><h3 class="user-name">John Doe</h3></a>
                                            <div class="card-data">
                                                <ul>
                                                    <li class="comment-date"><i class="far fa-clock"></i> 08/10/2015</li>
                                                </ul>
                                            </div>
                                            <p class="comment-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                                        </div>
                                        <!--/.Content column-->
                                    </div>
                                    <!--/.First row-->
                                    <!--Second row-->
                                    <div class="row">				 
                                        <!--Content column-->
                                        <div class="col-sm-10 col-12">
                                            <a><h3 class="user-name">Marta Tev</h3></a>
                                            <div class="card-data">
                                                <ul>
                                                    <li class="comment-date"><i class="far fa-clock"></i> 08/10/2015</li>
                                                </ul>
                                            </div>
                                            <p class="comment-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
                                        </div>
                                        <!--/.Content column-->
                                    </div>
                                    <!--/.Second row-->
                                    <!--Third row-->
                                    <div class="row">											 
                                        <!--Content column-->
                                        <div class="col-sm-10 col-12">
                                            <a><h3 class="user-name">Anna Maria</h3></a>
                                            <div class="card-data">
                                                <ul>
                                                    <li class="comment-date"><i class="fa fa-clock-o"></i> 17/10/2015</li>
                                                </ul>
                                            </div>
                                            <p class="comment-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia.
                                            </p>
                                        </div>
                                        <!--/.Content column-->
                                    </div>	
                                    <!--/.Third row-->
                                </div>
                                <!--/.Main wrapper-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal productos -->





<!-- Central Modal Medium Info -->
<div class="modal fade bottom" id="terminosmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-frame modal-bottom" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Terminos & Condiciones</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="black-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <div class="text-left">
                    <p> Al aceptar los terminos y condiciones los compradores son resposables de colocar correctamente sus datos a la hora de registrarse, si hay algun
                        error en sus datos como ejemplo el campo de la direccion que es necesaria para realizar los envios; la empresa no se hace responsable, las devoluciones
                        y cambios seran aceptados dentro de un intervalo de 30 dias, siempre y cuando el articulo se encuentre en el estado en el que se recibio. </p>
                        <button class="btn btn-grey" data-dismiss="modal" aria-label="Close">Aceptar</button>
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Info-->