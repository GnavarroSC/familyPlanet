<h2 style="color: #181a4a;text-align: center">CONTÁCTANOS Y CELÉBRALO EN GRANDE</h2>
<div style="width: 100%; text-align: center;display: block;margin-right: auto;margin-left: auto">
    <input type="text" id="nombre" class="formu" style="width: 20%;height: 35px" onkeyup="return lettersOnly(this);return valCaracEsp(this)" placeholder="Nombre">
    <input type="text" id="apellido" class="formu" style="width: 20%;height: 35px" onkeyup="return lettersOnly(this);return valCaracEsp(this)" placeholder="Apellido">
    <input type="email" id="correo" class="formu" style="width: 20%;height: 35px" placeholder="Correo">
    <input type="text" id="telefono" class="formu" style="width: 20%;height: 35px" onkeyup="return ValNumero(this)" placeholder="Teléfono">
    <textarea id="comentarios" class="formu" rows="8" cols="30" style="width: 80%;margin: 2px 2px 2px 2px" placeholder="Comentarios"></textarea>
    <a onclick="enviarMensaje()" style="cursor: pointer"><img src="img/btnEnviar.png" class="btnEnviar" alt=""></a>
    <h3 style="color: #181a4a;width: 100%; text-align: center;display: block;margin-right: auto;margin-left: auto" id="alerta"></h3>
</div>
