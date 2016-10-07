<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta charset="UTF-8">
        <title>Family Kitchen</title>
        <?php include 'head.php'; ?>
        <link rel="stylesheet" href="css/lightbox.min.css">
    </head>
    <body>
        <?php include 'animacion.php'; ?>
        <?php include 'header.php'; ?>
        <div class="contenedor">
            <img src="img/tt-kitchen.png" class="imgFE img-responsive translate" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bordeFE">
                            <div class="rowkitchen">
                                <div class="col-md-8 carusel">
                                    <div id="carousel1" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel1" data-slide-to="1"></li>
                                            <li data-target="#carousel1" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <img src="img/ftKitchen01.jpg" alt="..." class="img-responsive">
                                                <div class="carousel-caption">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="img/ftKitchen02.jpg" alt="..."  class="img-responsive">
                                                <div class="carousel-caption">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="img/ftKitchen03.jpg" alt="..."  class="img-responsive">
                                                <div class="carousel-caption">
                                                </div>
                                            </div>
                                        </div>
                                        <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 botones">
                                    <div class="textotitulok">
                                       <img src="img/logoFamilyKitchen.png" class="img-responsive" alt="" style="margin-left: 18%;">
                                    </div>
                                    <h1 class="textosk top">
                                        <br>
                                        REPOSTERÍA
                                    </h1>
                                </div>
                                <div class="row">
                                    <div id="cumpleaños" class="col-md-12">
                                        <h1 class="titulok" >FAMILY KITCHEN: MENU</h1>
                                    </div>
                                </div>
                                <h3 class="text-center col-md-12 textok">
                                    En la plaza de comidas, se encuentra Family Kitchen,
                                    un restaurante pensado en la familia y su diversidad.
                                </h3>
                                <div class="row menu1">
                                    <div class="col-md-4"><a class="example-image-link" href="img/fkmenu01b.jpg" data-lightbox="example-set"><img src="img/fkmenu01a.jpg" style="cursor: pointer;" alt="..."  class="img-responsive example-image"></a></div>
                                    <div class="col-md-4"><a class="example-image-link" href="img/fkmenu02b.jpg" data-lightbox="example-set"><img src="img/fkmenu02a.jpg" style="cursor: pointer;" alt="..."  class="img-responsive example-image"></a></div>
                                    <div class="col-md-4"><a class="example-image-link" href="img/fkmenu03b.jpg" data-lightbox="example-set"><img src="img/fkmenu03a.jpg" style="cursor: pointer;" alt="..."  class="img-responsive example-image"></a></div>
                                </div>
                                <div class="row" style="margin-top: 5%;">
                                    <div class="col-md-12">
                                        <h3 class="titulok">Sìguenos en nuestras redes</h3>
                                        <img src="img/ln-amarilla.png" alt="" class="img-responsive titulok">
                                    </div>
                                </div>
                                <div class="row " style="margin-bottom: 4%; margin-top: 2%;">
                                    <div class="col-md-6 col-sm-6 col-xs-6"><a href="https://www.facebook.com/familykitchenbq/?fref=ts" target="_blank"><img src="img/fk-facebook.png"align="right" class="img-responsive"></a></div>
                                    <div class="col-md-6 col-sm-6 col-xs-6"><a href="https://www.instagram.com/familykitchenbq/" target="_blank"><img src="img/fk-instagram.png" alt="" class="img-responsive"></a></div>
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
        <?php include 'scripts.php'; ?>
    </body>
</html>