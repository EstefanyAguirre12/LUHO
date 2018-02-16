<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>LUHO</title>      
        <!-- Estilo css -->
        <link rel="stylesheet" href="../../web/css/style.css">     
        <!-- Bootstrap core CSS -->
        <link href="../../web/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="../../web/css/mdb.min.css" rel="stylesheet">
        <!-- FONTS -->
        <link rel="stylesheet" href="../../web/css/fontawesome-all.css">     
    </head>
    <body>
        <!-- NAVBAR -->
        <?php include("../components/menu.php") ?>
        <!-- MODAL CONTACTO -->
        <?php include("../components/modalcontacto.php") ?>
        <!-- MODAL CARRITO -->
        <?php include("../components/modalcarrito.php") ?>
        <!-- MODAL LOGIN -->
        <?php include("../components/modalogin.php") ?> 
        <!-- MODAL AYUDA -->
        <?php include("../components/modalayuda.php") ?>
        <!-- MODAL TERMINOS-->
        <?php include("../components/modalterminos.php") ?>
        
        <!-- MY SLIDER-->
        <div class="demo-cont">
            <!-- slider start -->
            <div class="fnc-slider example-slider">
                <div class="fnc-slider__slides">
                    <!-- slide start -->
                    <div class="fnc-slide m--blend-green m--active-slide">
                        <div class="fnc-slide__inner">
                            <div class="fnc-slide__mask">
                                <div class="fnc-slide__mask-inner"></div>
                            </div>
                            <div class="fnc-slide__content">
                                <h2 class="fnc-slide__heading">
                                <div class="fnc-slide__heading-line">
                                    <span>LUHO</span>
                                </div>
                                <div class="fnc-slide__heading-line">
                                    <span>Jewelry.</span>
                                </div>
                                </h2>
                                <button type="button" class="fnc-slide__action-btn">
                                Credits
                                    <span data-text="Credits">Credits</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- slide end -->
                    <!-- slide start -->
                    <div class="fnc-slide m--blend-dark">
                        <div class="fnc-slide__inner">
                            <div class="fnc-slide__mask">
                                <div class="fnc-slide__mask-inner"></div>
                            </div>
                            <div class="fnc-slide__content">
                                <h2 class="fnc-slide__heading">
                                <div class="fnc-slide__heading-line">
                                    <span>ROLEX</span>
                                </div>
                                <div class="fnc-slide__heading-line">
                                    <span></span>
                                </div>
                                </h2>
                                <button type="button" class="fnc-slide__action-btn">
                                Credits
                                    <span data-text="Credits">Credits</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- slide end -->
                    <!-- slide start -->
                    <div class="fnc-slide m--blend-red">
                        <div class="fnc-slide__inner">
                            <div class="fnc-slide__mask">
                                <div class="fnc-slide__mask-inner"></div>
                            </div>
                            <div class="fnc-slide__content">
                                <h2 class="fnc-slide__heading">
                                <div class="fnc-slide__heading-line">
                                    <span>PANDORA</span>
                                </div>
                                <div class="fnc-slide__heading-line">
                                    <span>jewelry</span>
                                </div>
                                </h2>
                                <button type="button" class="fnc-slide__action-btn">
                                Credits
                                    <span data-text="Credits">Credits</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- slide end -->
                    <!-- slide start -->
                    <div class="fnc-slide m--blend-blue">
                        <div class="fnc-slide__inner">
                            <div class="fnc-slide__mask">
                                <div class="fnc-slide__mask-inner"></div>
                            </div>
                            <div class="fnc-slide__content">
                                <h2 class="fnc-slide__heading">
                                <div class="fnc-slide__heading-line">
                                    <span>SWAROVSKI</span>
                                </div>
                                <div class="fnc-slide__heading-line">
                                    <span>jewelry</span>
                                </div>
                                </h2>
                                <button type="button" class="fnc-slide__action-btn">
                                Credits
                                    <span data-text="Credits">Credits</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- slide end -->
                </div>
                <nav class="fnc-nav">
                    <div class="fnc-nav__bgs">
                        <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
                        <div class="fnc-nav__bg m--navbg-dark"></div>
                        <div class="fnc-nav__bg m--navbg-red"></div>
                        <div class="fnc-nav__bg m--navbg-blue"></div>
                    </div>
                    <div class="fnc-nav__controls">
                        <button class="fnc-nav__control">
                            LUHO
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                        <button class="fnc-nav__control">
                            ROLEX
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                        <button class="fnc-nav__control">
                            PANDORA
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                        <button class="fnc-nav__control">
                            SWAROSVSKI
                            <span class="fnc-nav__control-progress"></span>
                        </button>
                    </div>
                </nav>
            </div>
        </div>                     
        <!-- slider end -->
        <!-- GALLERY-->
        <div class="header" id="top">
            <h1>Nuestras marcas.</h1>
            <!--<i class="fa fa-angle-down animated bounce"></i>-->
        </div>
        <div class="section animate">
            <div class="middle">
                <img src="../../web/img/sw2.jpg" />
            </div>
            <div class="left title">
                <div class="content">
                    <h2>LUHO Jwelry.</h2>
                    <p>LUHO Jwelry es una joyeria con piezas de alta calidad y de gran valor en el mercador, distribuidor de grandes marcas con gran prestigio en El Salvador, para los clientes mas exigentes.</p>
                    <a href="../nosotros/index.php" class="btn btn-dark">Leer mas.</a>
                </div>
            </div>
            <div class="right tiles">
                <img src="../../web/img/sw2.jpg" />
                <img src="../../web/img/sw2.jpg" />
                <img src="../../web/img/sw2.jpg" />
                <img src="../../web/img/sw2.jpg" />
            </div>
        </div>
        <div class="section">
            <div class="middle">
                <img src="../../web/img/rg4.jpg" />
            </div>
            <div class="right title">
                <div class="content">
                    <h2>Rolex.</h2>
                    <p>"Mientras miro mi Rolex tengo el tiempo necesario."</p>
                    <p>Rolex, pionero del reloj de pulsera desde 1905, es el precursor de innovaciones emblemáticas en la relojería, entre las que destacan el primer reloj
                         de pulsera hermético, el Oyster.</p>
                </div>
            </div>
            <div class="left tiles">
                <img src="../../web/img/rg4.jpg" />
                <img src="../../web/img/rg4.jpg" />
                <img src="../../web/img/rg4.jpg" />
                <img src="../../web/img/rg4.jpg" />
            </div>
        </div>
        <div class="section">
            <div class="middle">
                <img src="../../web/img/pd1.jpg" />
            </div>
            <div class="left title">
                <div class="content">
                    <h2>Pandora Jewelry.</h2>
                    <p>
                PANDORA diseña, fabrica y comercializa joyas hechas a mano y contemporáneas hechas de materiales de alta calidad a precios asequibles. La joyería PANDORA 
                se vende en más de 100 países en seis continentes a través y alrededor de 7,800 puntos de venta, incluyendo más de 2,400 tiendas conceptuales.</p>
                </div>
            </div>
            <div class="right tiles">
                <img src="../../web/img/pd1.jpg" />
                <img src="../../web/img/pd1.jpg" />
                <img src="../../web/img/pd1.jpg" />
                <img src="../../web/img/pd1.jpg" />
            </div>
        </div>
        <div class="section">
            <div class="middle">
                <img src="../../web/img/sw1.jpg" />
            </div>
            <div class="right title">
                <div class="content">
                    <h2>Swarovski Jewelry.</h2>
                    <p>
                Desde 1895, el dominio del fundador Daniel Swarovski de corte de cristal ha definido la compañía. Su pasión perdurable por la innovación y el diseño lo ha
                 convertido en la marca de bisutería y accesorios más importante del mundo. Hoy en día, la familia continúa con la tradición de ofrecer un estilo diario 
                 extraordinario a las mujeres de todo el mundo.</p>
                </div>
            </div>
            <div class="left tiles">
                <img src="../../web/img/sw1.jpg" />
                <img src="../../web/img/sw1.jpg" />
                <img src="../../web/img/sw1.jpg" />
                <img src="../../web/img/sw1.jpg" />
            </div>
        </div>
        <div class="footer">
            <a href="#top" class="scrollTo"></a>
            <h1>LUHO.</h1>
        </div>
        <!-- /GALLERY-->

        <!-- FOOTER -->
        <?php include("../components/footer.php") ?> 
        
        <!-- SCRIPTS-->
        <!-- BOOTSTRAP JS-->
        <script src="../../web/js/jquery-3.2.1.slim.min.js"></script>
        <script src="../../web/js/bootstrap.min.js"></script>
        <script src="../../web/js/popper.min.js"></script>
        <!-- SLIDER JS-->
        <script src="../../web/js/index.js"></script>
        <!-- Galeria JS-->
        <script src="../../web/js/index1.js"></script>
    </body>
</html>
