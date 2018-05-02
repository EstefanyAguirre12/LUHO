
  
                 
<div class="container">

            
<?php
$categoria = $productos[0]['Categoria'];
print("<h1 class='text-center margenventas'>$categoria</h1>");
print("<section class=' pb-3'>");
print("<div class='row'>");
foreach($productos as $producto){
    print("
    <div class='col-lg-3 col-md-6 mb-r'>
			            <!--Card-->
			            <div class='card card-cascade narrower'>
			                <!--Card image-->
			                <div class='view overlay hm-white-slight' >
			                    <img src='../../web/img/an1.jpg' class='img-fluid' alt=''>
			                    <a>
			                        <div class='mask'></div>
			                    </a>
			                </div>
			                <!--Card image-->
			                <!--Card content-->
			                <div class='card-body text-center'>
			                    <!--Category & Title-->
			                    <a  href='detalle.php?id=$producto[IdProducto]' class='grey-text'>
			                        <h3>$producto[Nombre]</h3>
			                    </a> 
			                    <h4>Calificanos</h4>
			                    <span class='fa fa-star checked'></span>
			                    <span class='fa fa-star checked'></span>
			                    <span class='fa fa-star checked'></span>
			                    <span class='fa fa-star'></span>
			                    <span class='fa fa-star'></span>
			                    <!--Description-->
			                    <p class='card-text'>$producto[Descripcion]</p>
			                    <!--Card footer-->
			                    <div class='card-footer'>
			                        <span class='left font-bold'>
			                            <strong>Precio $ $producto[Costo]</strong>
			                        </span>
			                    </div>
			                </div>
			                <!--Card content-->
			            </div>
			            <!--Card-->
			        </div>
			        <!--Grid column-->
        
	");

}
?>

    </div>
    </section>
</div>

                                              
        <!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fullHeightModalRight">
    Launch demo modal
</button>