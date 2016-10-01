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
            <img src="img/tt-atracciones.png" class="imgFE img-responsive translate" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bordeFE">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="img/ftAtracciones01.jpg" alt="...">
                                        <div class="carousel-caption">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="img/ftAtracciones02.jpg" alt="...">
                                        <div class="carousel-caption">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="img/ftAtracciones03.jpg" alt="...">
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
                            <?php include 'formularioC.php'; ?>
                        </div>
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
