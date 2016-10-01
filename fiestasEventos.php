<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta charset="UTF-8">
        <title>Familyplanet</title>
        <?php include 'head.php'; ?>
    </head>
    <body>
        <?php include 'animacion.php'; ?>
        <?php include 'header.php'; ?>
        <div class="contenedor">
            <img src="img/tt-fiestas.png" class="imgFE img-responsive translate" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bordeFE">
                        <div class="rowatraccion">
                        <div class="col-md-8 carusel">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="img/ftEventos01.jpg" alt="..." class="img-responsive">
                                        <div class="carousel-caption">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="img/ftEventos02.jpg" alt="..."  class="img-responsive">
                                        <div class="carousel-caption">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="img/ftEventos03.jpg" alt="..."  class="img-responsive">
                                        <div class="carousel-caption">
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 botones">
                            <a href="#cumpleaños"><img src="img/cumpleaños.png" class="img-responsive ancho " > </a>
                            <a href="#eventos"><img src="img/eventos.png" class="img-responsive  ancho hidden-xs hidden-sm" > </a>
                            <a href="#aventuras"><img src="img/aventura.png" class="img-responsive ancho  hidden-xs hidden-sm" > </a>


                        </div>
                        </div>
                        <div class="row1" id="cumpleaños">
                        <div class="row">
                            <div class="col-md-12">
                                 <h1 class="col-md-offset-4 titulo" >CUMPLEAÑOS</h1>
                            </div>
                        </div>

                            <div class="col-md-4 ">
                                <img src="img/ftAtracciones03.jpg" alt="..."  class="img-responsive"  >

                            </div>
                            <div class="col-md-8 ">
                            <h3 class="texto">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.
                             </h3>
                            </div>
                        </div>
                        <a href="#eventos"><img src="img/eventos.png" class="img-responsive  hidden-md hidden-lg botones   ancho" > </a>
                        <div class="row2"  id="eventos">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="col-md-offset-4 titulo">EVENTOS</h1>
                            </div>
                        </div>
                            <div class="col-md-4">
                                <img src="img/ftAtracciones03.jpg" alt="..."  class="img-responsive"  >

                            </div>
                            <div class="col-md-8">
                            <h3 class="texto">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.
                             </h3>
                            </div>
                        </div>
                        <a href="#aventuras"><img src="img/aventura.png" class="img-responsive hidden-md  hidden-lg botones ancho " > </a>
                        <div class="row3" id="aventuras">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="col-md-offset-4 titulo" >AVENTURAS</h1>
                            </div>
                        </div>
                            <div class="col-md-4">
                                <img src="img/ftAtracciones03.jpg" alt="..."  class="img-responsive"  >

                            </div>
                           <div class="col-md-8">
                            <h3 class="texto">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.
                             </h3>
                            </div>
                        </div>
                            <?php include 'formularioC.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/pieplaneta.png" alt="" class="pieplaneta img-responsive">
            <?php include 'footer.php'; ?>
        </div>
        <script src="js/mensaje.js"></script>
    </body>
</html>
