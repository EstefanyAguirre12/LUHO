<!--Section: Productos-->
<div class="container">
			<br>
			<section class="text-center pb-3">
			    <!--Grid row-->
			    <div class="row">
				<?php
				foreach($categorias as $categoria){
					print('
					<!--Grid column-->
			        <div class="col-lg-3 col-md-6 mb-r">
			            <!--Card-->
			            <div class="card card-cascade narrower">
			                <!--Card image-->
			                <div class="view overlay hm-white-slight"  data-toggle="modal" data-target="#modalproductos">
			                    <img src="../../web/img/categorias/$categoria[Img]" class="img-fluid" alt="">
			                    <a>
			                        <div class="mask"></div>
			                    </a>
			                </div>
			                <!--Card image-->
			                <!--Card content-->
			                <div class="card-body text-center">
			                    <!--Category & Title-->
			                    <a href="" class="grey-text">
			                        <h3>$categoria[Nombre]</h3>
			                    </a> 
			                    <h4>Calificanos</h4>
			                    <span class="fa fa-star checked"></span>
			                    <span class="fa fa-star checked"></span>
			                    <span class="fa fa-star checked"></span>
			                    <span class="fa fa-star"></span>
			                    <span class="fa fa-star"></span>
			                    <!--Description-->
			                    <p $categoria[Descripcion]
			                    </p>

			                    <!--Card footer-->
			                    <div class="card-footer">
			                        <span class="left font-bold">
			                            <strong>$categoria[Costo]</strong>
			                        </span>
			                    </div>
			                </div>
			                <!--Card content-->
			            </div>
			            <!--Card-->

			        </div>
			        <!--Grid column-->
			        <!--Grid column-->
					');
				}
				?>
			        

			</section>
			<!--Section: Products v.1-->
		</div>	