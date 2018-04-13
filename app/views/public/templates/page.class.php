<?php
require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/helpers/component.class.php");
class Page extends Component{
	public static function templateHeader($title){
		session_start();
        ini_set("date.timezone","America/El_Salvador");
        print('
        <!DOCTYPE html>
        <html lang="en" class="z">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>Nosotros</title>	
                <!-- BOOTSTRAP-->
                <link rel="stylesheet" href="../../web/css/bootstrap.min.css">
                <!-- Material Design Bootstrap -->
                   <link href="../../web/css/mdb.min.css" rel="stylesheet">
                <!-- FONTS -->
                <link rel="stylesheet" href="../../web/css/fontawesome-all.css">
                <!-- CSS -->
                <link rel="stylesheet" href="../../web/css/style.css"> 
            </head>
            <body class="z">  
        <!-- NAVBAR-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <!-- Deplegable button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown mega-dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LUHO</a>
                <div class="dropdown-menu mega-menu row z-depth-1" aria-labelledby="navbarDropdownMenuLink">
                    <div class="row">
                        <div class="col-md-5 col-xl-3 sub-menu mt-5 mb-5 pl-4">
                            <ol class="list-unstyled mx-4 dark-grey-text">
                                <li class="sub-title font-up"><a class="menu-item" href="">Todos los productos</a></li>
                                <h6 class="font-weight-bold" >HOMBRES</h6>
                                <li class="sub-title font-up"><a class="menu-item" href="../ventas/index.php">Relojes</a></li>
                                <li class="sub-title font-up"><a class="menu-item" href="../ventas/index.php">Anillos</a></li>
                                <h6 class="font-weight-bold" >MUJERES</h6>
                                <li class="sub-title font-up"><a class="menu-item" href="../ventas/index.php">Anillos</a></li>
                                <li class="sub-title font-up"><a class="menu-item" href="../ventas/index.php">Pulseras</a></li>
                                <li class="sub-title font-up"><a class="menu-item" href="../ventas/index.php">Charms</a></li>
                                <li class="sub-title font-up"><a class="menu-item" href="../ventas/index.php">Relojes</a></li>
                            </ol>
                        </div>
                        <div class="col-md-7 col-xl-9">
                            <div class="row">
                                <div class="col-xl-6 mt-5 mb-4 pr-5 clearfix d-none d-md-block">
                                    <h6 class="sub-title p-sm mb-4 font-up font-bold dark-grey-text">Noticias</h6>
                                    <!--Featured image-->
                                    <div class="view overlay hm-white-slight pb-3">
                                        <img src="../../web/img/gold.jpg" class="img-fluid z-depth-1" alt="First sample image">
                                        <div class="mask flex-center">
                                            <p></p>
                                        </div>
                                    </div>
                                    <h4 class="mb-2"><a class="news-title" href="">Me preguntan por calidad. Pero yo les pregunto, Puede pagarlo?</a></h4>
                                    <p class="font-small font-up text-muted">By <a class="m-sm" href="#!">Roland Vanegas</a> - Feb 14, 2018</p>
                                </div>
                                <div class="col-xl-6 mt-5 mb-4 pr-5 clearfix d-none d-xl-block">
                                    <h6 class="sub-title p-sm mb-4 font-up font-bold dark-grey-text">Ofertas</h6>
                                    <div class="news-single">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <!--Image-->
                                                <div class="view overlay hm-white-slight z-depth-1">
                                                    <img src="../../web/img/joya13.jpg" class="img-fluid" alt="Minor sample post image">
                                                    <div class="mask flex-center">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <a class="news-title smaller mb-1" href=""> 15% off en tu segundo articulo de PANDORA.</a>
                                                <p class="font-small font-up text-muted">Feb 14, 2018</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-single">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <!--Image-->
                                                <div class="view overlay hm-white-slight z-depth-1">
                                                    <img src="../../web/img/rg2.jpg" class="img-fluid" alt="Minor sample post image">
                                                    <div class="mask flex-center">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <a class="news-title smaller mb-1" href="">Compra dos Rolex President y compra el tercero tambien!.</a>
                                                <p class="font-small font-up text-muted">Feb 14, 2018</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-single">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <!--Image-->
                                                <div class="view overlay hm-white-slight z-depth-1">
                                                    <img src="../../web/img/joya4.jpg" class="img-fluid" alt="Minor sample post image">
                                                    <div class="mask flex-center">
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <a class="news-title smaller mb-1" href="">10% off en Swarovski.</a>
                                                <p class="font-small font-up text-muted">Feb 14, 2018</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--LINKS-->
                <li class="nav-item active">
                <a class="nav-link" href="../principal/index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Contactanos</a>
                </li>
            </li>
        </ul>
        <!-- Links Imagen -->
        <ul class="navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#carritoModal"><i class="fas fa-shopping-cart" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal"><i class="fas fa-user" aria-hidden="true"></i></a>
            </li>
        </ul>
        <!-- Links -->
    </div>
</nav>
        ');
		require_once("../../app/views/public/sections/modals_view.php");
    }


public static function templateFooter(){
    print('
    <!--Footer-->
<footer class="page-footer center-on-small-only blue-grey lighten-5 pt-0">
    <div style="background-color: black;">
        <div class="container">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">
                <!--Grid column-->
                <div class="col-12 col-md-5 text-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text text-center text-md-left tituliyo"><strong>Encuentranos en nuestras redes sociales!</strong></h6>
                </div>
                <!--Grid column-->
                <div class="col-12 col-md-7 text-center text-md-right">
                    <!--Facebook-->
                    <a class="icons-sm fb-ic ml-0" href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-square fa-2x"> </i></a>
                    <!--Twitter-->
                    <a class="icons-sm tw-ic" href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter fa-2x"> </i></a>
                    <!--Instagram-->
                    <a class="icons-sm ins-ic" href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram fa-2x"> </i></a>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
    </div>
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">
            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-r dark-grey-text">
                <h6 class="title font-bold"><strong>LUHO</strong></h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p> "Hay LUHOS que solo puedes darte una vez en la vida."</p>
                <p>-Roland Vanegas.</p>
            </div>
            <!--/.First column-->
            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-r dark-grey-text">
                <h6 class="title font-bold"><strong>Productos</strong></h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="../ventas/index.php" class="dark-grey-text">ROLEX</a></p>
                <p><a href="../ventas/index.php" class="dark-grey-text">PANDORA</a></p>
                <p><a href="../ventas/index.php" class="dark-grey-text">SWAROVSKI</a></p>
                <!--<p><a href="#!" class="dark-grey-text">Bootstrap Angular</a></p>-->
            </div>
            <!--/.Second column-->
            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-r dark-grey-text">
                <h6 class="title font-bold"><strong>LUHO links</strong></h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="#!" data-toggle="modal" data-target="#ayudamodal" class="dark-grey-text">Ayuda</a></p>
                <p><a href="#!" data-toggle="modal" data-target="#terminosmodal" class="dark-grey-text">Terminos y condiciones</a></p>
                <p><a href="../nosotros/index.php" class="dark-grey-text">Nosotros</a></p>
            </div>
            <!--/.Third column-->
            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3 dark-grey-text">
                <h6 class="title font-bold"><strong>Contact</strong></h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><i class="fas fa-home fa-lg"></i> Sivar, San Salvador 503, SV</p>
                <p><i class="far fa-envelope fa-lg"></i> LuhoLuxury@gmail.com</p>
                <p><i class="fas fa-phone fa-lg"></i> +503 2525-2525</p>
                <p><i class="fas fa-code fa-lg"></i> Hecho con amor</p>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!-- Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2018 Copyright: <a href="https://www.Luho.com"><strong> Luho.com</strong></a>
        </div>
    </div>
    <!--/.Copyright -->
</footer>
<!--/.Footer-->

<!-- SCRIPTS-->
<!-- BOOTSTRAP JS-->
<script src="../../web/js/jquery-3.2.1.slim.min.js"></script>
<script src="../../web/js/bootstrap.min.js"></script>
<script src="../../web/js/popper.min.js"></script>
<!-- SLIDER JS-->
<script src="../../web/js/index.js"></script>
<!-- Galeria JS-->
<script src="../../web/js/index1.js"></script>
    ');
}
}

?>