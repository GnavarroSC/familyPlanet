<h2 style="color: #181a4a;text-align: center">CONTÁCTANOS Y CELÉBRALO EN GRANDE</h2>
<form class="form-horizontal" role="form">
    <div class="row form">
        <div class="col-sm-8 col-lg-3">
            <div class="form-group">
                <label for="inputNombre" class="col-md-4 control-label"></label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                </div>
            </div>
        </div>
        <div class="col-sm-8 col-lg-3">
            <div class="form-group">
                <label for="inputApellido" class="col-md-4 control-label"></label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="apellido" placeholder="Apellido">
                </div>
            </div>
        </div>
        <div class="col-sm-8 col-lg-3">
            <div class="form-group">
                <label for="inputCorreo" class="col-md-4 control-label"></label>
                <div class="col-md-8">
                    <input type="email" class="form-control" id="correo" placeholder="Correo">
                </div>
            </div>
        </div>
        <div class="col-sm-8 col-lg-3">
            <div class="form-group">
                <label for="inputTelefono" class="col-md-4 control-label"></label>
                <div class="col-md-8">
                    <input type="text" class="form-control" id="telefono" placeholder="Telefono">
                </div>
            </div>
        </div>
    </div><!-- /.row this actually does not appear to be needed with the form-horizontal -->
    <div style="width: 100%; text-align: center;display: block;margin-right: auto;margin-left: auto">
        <textarea id="comentarios" class="formu" rows="8" cols="30" style="width: 80%;margin: 17px 2px 2px 2px;" placeholder="Comentarios"></textarea>
        <a onclick="enviarMensaje()" style="cursor: pointer"><img src="img/btnEnviar.png" class="btnEnviar" alt=""></a>
        <h3 style="color: #181a4a;width: 100%; text-align: center;display: block;margin-right: auto;margin-left: auto" id="alerta"></h3>
    </div>
</form>
