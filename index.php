<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta charset="UTF-8">
        <title>Family Planet</title>
        <?php include 'head.php'; ?>
    </head>
    <body>
        <?php include 'animacion.php'; ?>
        <?php include 'header.php'; ?>
        <div class="contenedor">
            <div class="container jumbotron">
                <div class="row">
                    <div class="col-md-11 ">
                        <div id="carousel-example-generic" class="carousel slide carou" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner borde slid" role="listbox">
                                <div class="item active">
                                    <img src="img/manana-abrimos.jpg" alt="...">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/atracciones.jpg" alt="...">
                                    <div class="carousel-caption">
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/visitaspedagogicas.jpg" alt="...">
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
                    <div class="col-md-1 hidden-sm hidden-xs ">
                        <img src="img/globo2.png" alt="" class="floating " style="margin-top: 6%;">
                        <img src="img/globo1.png" alt="" class="floating  " style="margin-top: -16%; width: 200%;">
                    </div>
                    <img src="img/abc.png" alt="" class="abc img-responsive">
                </div>
            </div>
            <div class=" container-fluid  ">
                <div class="row naves ">
                    <div class="col-md-4 col-sm-4 hidden-xs hidden-sm">
                        <img src="img/nave1.png" alt="" class="nave1 translate img-responsive">
                    </div>
                    <div class="col-md-4 col-sm-4 sec  hidden-xs hidden-sm translate">
                        <img src="img/letrabloque.png" alt="" align="center" class="letras2 img-responsive"><br><br>
                    </div>
                    <div class="col-md-4 col-sm-4 ">
                        <img src="img/globo2.png" alt="" class=" translate hidden-md hidden-lg  ">
                        <img src="img/nave2.png" alt="" class="nave2 translate img-responsive hidden-xs hidden-sm">
                    </div>
                </div>
            </div>
            <div class="jumbotron">
                <br/><br/><br/>
                <section id="plans" style="margin-top: -17%;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <br>
                                <section class="lazy-load-box effect-slidefromleft" data-delay="400" data-speed="550" style="-webkit-transition: all 550ms ease; -moz-transition: all 550ms ease; -ms-transition: all 550ms ease; -o-transition: all 550ms ease; transition: all 550ms ease;">
                                    <div class="banner-wrap extrabanner_1">
                                        <figure class="featured-thumbnail">
                                            <a href="nuestraHistoria.php" title="UN VIAJE DE DIVERSIÓN HA LLEGADO"><img src="img/ft-historia01.jpg" title="UN VIAJE DE DIVERSIÓN HA LLEGADO" alt="UN VIAJE DE DIVERSIÓN HA LLEGADO" width="100%" height="100%"></a>
                                        </figure>
                                        <div class="extra-wrap">
                                            <h5 class="letra1">UN VIAJE DE DIVERSIÓN HA LLEGADO</h5>
                                            <div align="center">
                                                <a href="nuestraHistoria.php">
                                                    <img src="img/medio-planeta.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-3 text-center">
                                <br>
                                <section class="lazy-load-box effect-slidefromleft" data-delay="400" data-speed="550" style="-webkit-transition: all 550ms ease; -moz-transition: all 550ms ease; -ms-transition: all 550ms ease; -o-transition: all 550ms ease; transition: all 550ms ease;">
                                    <div class="banner-wrap extrabanner_1">
                                        <figure class="featured-thumbnail">
                                            <a href="fiestasEventos.php" title="VEN Y ARMA LA FIESTA A TU ESTILO"><img src="img/cumpleaños.jpg" title="VEN Y ARMA LA FIESTA A TU ESTILO" alt="VEN Y ARMA LA FIESTA A TU ESTILO" width="100%" height="100%"></a>
                                        </figure>
                                        <div class="extra-wrap">
                                            <h5 class="letra1">VEN Y ARMA LA FIESTA <br>A TU ESTILO.</h5>
                                            <div align="center">
                                                <a href="fiestasEventos.php">
                                                    <img src="img/medio-planeta.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-3 text-center">
                                <br>
                                <section class="lazy-load-box effect-slidefromleft" data-delay="400" data-speed="550" style="-webkit-transition: all 550ms ease; -moz-transition: all 550ms ease; -ms-transition: all 550ms ease; -o-transition: all 550ms ease; transition: all 550ms ease;">
                                    <div class="banner-wrap extrabanner_1">
                                        <figure class="featured-thumbnail">
                                            <a href="promociones.php" title="QUE LA DIVERSIÓN NO SE DETENGA"><img src="img/promocion.jpg" width="100%" height="100%" title="QUE LA DIVERSIÓN NO SE DETENGA" alt="QUE LA DIVERSIÓN NO SE DETENGA"></a>
                                        </figure>
                                        <div class="extra-wrap">
                                            <h5 class="letra1">QUE LA DIVERSIÓN NO SE DETENGA</h5>
                                            <div align="center">
                                                <a href="promociones.php">
                                                    <img src="img/medio-planeta.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-3 text-center">
                                <br>
                                <section class="lazy-load-box effect-slidefromleft" data-delay="400" data-speed="550" style="-webkit-transition: all 550ms ease; -moz-transition: all 550ms ease; -ms-transition: all 550ms ease; -o-transition: all 550ms ease; transition: all 550ms ease;">
                                    <div class="banner-wrap extrabanner_1">
                                        <figure class="featured-thumbnail">
                                            <a href="atracciones.php" title="INTERACTIVAS, MECANICAS ELECTRONICAS Y DE DESTREZA"><img src="img/atraccion.jpg" width="100%" height="100%" title="INTERACTIVAS, MECANICAS ELECTRONICAS Y DE DESTREZA" alt="INTERACTIVAS, MECANICAS ELECTRÓNICAS Y DE DESTREZA"></a>
                                        </figure>
                                        <div class="extra-wrap">
                                            <h5 class="letra1">INTERACTIVAS, MECANICAS ELECTRÓNICAS Y DE DESTREZA</h5>
                                            <div align="center">
                                                <a href="atracciones.php">
                                                    <img src="img/medio-planeta.png" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <img src="img/globo3.png" alt="" width="100%" style="width: 32%;  margin-top: 4%;margin-left: 62%; z-index: -2;" class="hidden-sm hidden-xs scaling">
                        </div>
                    </div>
                </section>
            </div>
            <?php include 'footer.php'; ?>
        </div>
        <?php include 'scripts.php'; ?>
    </body>
</html>
