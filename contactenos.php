<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta charset="UTF-8">
        <title>Familyplanet</title>
        <?php include 'head.php'; ?>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD92Hel6kF2Ng4YdSrrwUJF7pGfboL0biI"></script>
    </head>
    <body>
        <?php include 'animacion.php'; ?>
        <?php include 'header.php'; ?>
        <div class="contenedor">
            <img src="img/tt-contactenos.png" class="imgFE img-responsive translate" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bordeFE">
                            <div id="carousel-example-generic" class="carousel" data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="img/ftContactenos.jpg" alt="...">
                                        <div class="carousel-caption">
                                        </div>
                                    </div>
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
        <img src="img/arriba-01.png" class="ir-arriba img-responsive img-arriba" alt="" />
        <script src="js/mensaje.js"></script>
        <script src="js/animaciones.js"></script>
        <script src="js/lightbox-plus-jquery.min.js"></script>
    </body>
</html>
