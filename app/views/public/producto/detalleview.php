<div class="row margendet">
	<?php
        print("
		<div class='col-lg-5'>
			<!--Carousel Wrapper-->
			<div class='carousel-inner'>
				<div class='carousel-item active'>
					<img src='../../web/img/an11.jpg' class='img-fluid' alt='photo'>
				</div>                                  
			</div>
		</div>								
		<div class='col-lg-3'>
			<h2 class='h2-responsive product-name'><strong>".$producto->getNombre()."</strong></h2>
			<h4 class='h4-responsive'><span class='green-text'><strong>".$producto->getCosto()."</strong></span> 
			<span class='grey-text'><small><s>$89</s></small></span></h4>
			<h4 class='h4-responsive'><strong>Descripcion</strong></h4>
			<p>".$producto->getDescripcion()."</p>
			<h4 class='h4-responsive'><strong>Modelo</strong></h4>
			<p>".$producto->getModelo()."</p>
			<h4 class='h4-responsive'><strong>Marca</strong></h4>
            <p>".$producto->getIdmarca()."</p>
            <form method='post'>
            <input id='cantidad' type='number' name='valoracion' min='1' max='5' class='validate'>
            <button type='submit' name='valor' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a' data-toggle='tooltip' title='Califica el poroducto'><i class='material-icons'>Calificar</i></button>
        </form>
		</div>
		<div class='col-lg-3'>
			<h4 class='h4-responsive'><strong>Ocasion</strong></h4>
			<p>".$producto->getIdocasion()."</p>
			<h4 class='h4-responsive'><strong>Material</strong></h4>
			<p>".$producto->getIdmaterial()."</p>
			<h4 class='h4-responsive'><strong>Talla</strong></h4>
            <p>".$producto->getIdtalla()."</p>
			<h4 class='h4-responsive'><strong>Cantidad</strong></h4>
            <form method='post'>
            <input id='cantidad' type='number' name='cantidad' min='1' max='".$producto->getCantidad()."' class='validate'>
            <label for='cantidad'>Compra esta limitada a ".$producto->getCantidad()." piezas</label>
            <button type='submit' name='agregar' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a' data-toggle='tooltip' title='Agregar al carrito'><i class='material-icons'>Agregar</i></button>
        </form>
       
            </div>
                            
        ");
        ?>
		
</div>
<!-- /row -->
                <div class="container">
                    <div class="text-center">
                        <h3>Seccion de Comentarios</h3>
                    </div>
                    <div class="md-form">
                    
                        <input type="text" class="form-control" class="md-textarea" id="categoria" placeholder="Dejanos tu comentario">
                        <label for="categoria" class="col-lg-2 control-label"></label>
                        <button type='submit' name='comentario' class='btn btn-grey btn-rounded mr-md-3 z-depth-1a' data-toggle='tooltip' title='Agregar al carrito'><i class='material-icons'>Agregar</i></button>
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